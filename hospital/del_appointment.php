<?php
include 'db_connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['appointment_id'])) {
    $appointment_id = intval($_POST['appointment_id']);

    $stmt = $conn->prepare("DELETE FROM Appointments WHERE AppointmentID = ?");
    $stmt->bind_param("i", $appointment_id);

    if ($stmt->execute()) {
        echo "Appointment with ID $appointment_id has been deleted successfully.";
    } else {
        echo "Failed to delete appointment. Please try again.";
    }

    $stmt->close();
} else {
    echo "Invalid request. Please provide a valid Appointment ID.";
}

$conn->close();
?>
