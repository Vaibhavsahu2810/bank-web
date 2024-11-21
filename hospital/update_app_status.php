<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
$appointment_id = $_POST['appointment_id'];
$Status = $_POST['Status'];
if ($appointment_id) {
    $stmt = $conn->prepare("UPDATE Appointments SET Status = ? WHERE AppointmentID = ?");
    $stmt->bind_param("si", $Status, $appointment_id);
    if ($stmt->execute()) {
        echo "appointment successfully! Status: $Status";
    } else {
        echo "Error: " . $stmt->error;
    }
}
}
?>
