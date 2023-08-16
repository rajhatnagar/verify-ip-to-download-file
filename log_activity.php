<?php
// Read the incoming JSON data
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    // Log user activity to a file
    $logFilePath = 'user.log'; // Change to your desired log file path

    $logData = "[" . date('Y-m-d H:i:s') . "] "
        . "IP: " . $data['ip']
        . ", Browser: " . $data['browser']
        . ", Device: " . $data['device']
        . ", GeoLocation: " . $data['geoLocation'] . "\n";

    file_put_contents($logFilePath, $logData, FILE_APPEND);

    echo 'User activity logged successfully';
} else {
    echo 'Invalid data';
}
?>
