<?php
header('Content-Type: application/json');


// Load Midtrans config
$config = require 'config.php';

$serverKey = $config['server_key'];
$clientKey = $config['client_key'];
$isProduction = $config['is_production'];

// Set Midtrans API URL
$midtransUrl = $isProduction ? 'https://api.midtrans.com/v2/charge' : 'https://api.sandbox.midtrans.com/v2/charge';
$snapUrl = $isProduction ? 'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

// Get the raw POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validate required fields
if (!$data || !isset($data['service']) || !isset($data['customer']) || !isset($data['amount'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Generate unique order ID
$orderId = 'ORDER-' . date('YmdHis') . '-' . uniqid();

// Prepare transaction details
$transactionDetails = [
    'order_id' => $orderId,
    'gross_amount' => $data['amount']
];

// Prepare customer details
$customerDetails = [
    'first_name' => $data['customer']['fullName'],
    'email' => $data['customer']['email'],
    'phone' => '+62' . $data['customer']['phone'],
    'billing_address' => [
        'country_code' => 'IDN'
    ]
];

// Prepare item details
$itemDetails = [
    [
        'id' => 'service-1',
        'price' => $data['amount'],
        'quantity' => 1,
        'name' => $data['service'],
        'category' => 'Beauty Service'
    ]
];

// Prepare Snap transaction data
$snapData = [
    'transaction_details' => $transactionDetails,
    'customer_details' => $customerDetails,
    'item_details' => $itemDetails,
    'callbacks' => [
        'finish' => 'https://yourwebsite.com/payment-finish'
    ]
];

// Check if Midtrans credentials are set
if ($serverKey === 'YOUR_SERVER_KEY_HERE' || $clientKey === 'YOUR_CLIENT_KEY_HERE') {
    // For demo purposes, simulate successful payment processing
    // In production, remove this block and use actual Midtrans integration
    
    // Save booking data
    $bookingData = [
        'order_id' => $orderId,
        'service' => $data['service'],
        'description' => $data['description'],
        'duration' => $data['duration'],
        'price' => $data['price'],
        'date' => $data['date'],
        'time' => $data['time'],
        'customer' => $data['customer'],
        'payment_status' => 'pending',
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    // Create bookings directory if it doesn't exist
    if (!file_exists('bookings')) {
        mkdir('bookings', 0777, true);
    }
    
    // Save booking
    $filename = 'bookings/' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
    file_put_contents($filename, json_encode($bookingData, JSON_PRETTY_PRINT));
    
    // Return demo snap token
    echo json_encode([
        'success' => true,
        'snapToken' => 'demo-snap-token-' . $orderId,
        'message' => 'Demo mode: Midtrans credentials not configured. Booking saved successfully.'
    ]);
    exit;
}

// Make request to Midtrans Snap API
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $snapUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($snapData),
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: Basic ' . base64_encode($serverKey . ':')
    ],
]);

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

if ($httpCode === 201) {
    $responseData = json_decode($response, true);
    
    if (isset($responseData['token'])) {
        // Save booking data with pending payment status
        $bookingData = [
            'order_id' => $orderId,
            'service' => $data['service'],
            'description' => $data['description'],
            'duration' => $data['duration'],
            'price' => $data['price'],
            'date' => $data['date'],
            'time' => $data['time'],
            'customer' => $data['customer'],
            'payment_status' => 'pending',
            'snap_token' => $responseData['token'],
            'timestamp' => date('Y-m-d H:i:s')
        ];
        
        // Create bookings directory if it doesn't exist
        if (!file_exists('bookings')) {
            mkdir('bookings', 0777, true);
        }
        
        // Save booking
        $filename = 'bookings/' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
        file_put_contents($filename, json_encode($bookingData, JSON_PRETTY_PRINT));
        
        echo json_encode([
            'success' => true,
            'snapToken' => $responseData['token'],
            'orderId' => $orderId
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Failed to get snap token from Midtrans'
        ]);
    }
} else {
    $errorData = json_decode($response, true);
    echo json_encode([
        'success' => false,
        'message' => 'Midtrans API error: ' . ($errorData['error_messages'][0] ?? 'Unknown error'),
        'http_code' => $httpCode
    ]);
}
