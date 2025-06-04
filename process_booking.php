<?php
header('Content-Type: application/json');

// Get the raw POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Validate required fields
if (!$data || !isset($data['service']) || !isset($data['date']) || !isset($data['time'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Format the booking data
$booking = [
    'service' => $data['service'],
    'description' => $data['description'],
    'duration' => $data['duration'],
    'price' => $data['price'],
    'date' => $data['date'],
    'time' => $data['time'],
    'timestamp' => $data['timestamp']
];

// Create bookings directory if it doesn't exist
if (!file_exists('bookings')) {
    mkdir('bookings', 0777, true);
}

// Save to a text file
$filename = 'bookings/' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
$success = file_put_contents($filename, json_encode($booking, JSON_PRETTY_PRINT));

if ($success !== false) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to save booking']);
}
