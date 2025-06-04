<?php
header('Content-Type: application/json');

// Get the raw POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!$data || !isset($data['date'])) {
    echo json_encode(['error' => 'Missing required fields']);
    exit;
}

$date = $data['date'];
$checkTimeSlots = isset($data['checkTimeSlots']) ? $data['checkTimeSlots'] : false;

// Get all booking files
$bookings = glob('bookings/*.txt');
$bookedSlots = [];
$maxSlotsPerDay = 4; // Maximum number of bookings allowed per day
$bookingsForDate = 0;

// Check each booking file
foreach ($bookings as $booking) {
    $content = json_decode(file_get_contents($booking), true);
    if ($content && isset($content['date']) && $content['date'] === $date) {
        $bookingsForDate++;
        if ($checkTimeSlots && isset($content['time'])) {
            $bookedSlots[] = $content['time'];
        }
    }
}

// Check if the date is fully booked
$fullyBooked = $bookingsForDate >= $maxSlotsPerDay;

if ($checkTimeSlots) {
    echo json_encode([
        'fullyBooked' => $fullyBooked,
        'bookedSlots' => $bookedSlots
    ]);
} else {
    echo json_encode([
        'fullyBooked' => $fullyBooked
    ]);
}
