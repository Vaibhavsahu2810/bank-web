<?php
include 'db_connect.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$action = $_POST['action'] ?? '';

if ($action === 'add_doctor') {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];

    $stmt = $conn->prepare("INSERT INTO Doctors (Name, Specialization) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $specialization);
    $stmt->execute();
    echo "Doctor added successfully.";
}

if ($action === 'add_patient') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];

    $stmt = $conn->prepare("INSERT INTO Patients (Name, DOB, Gender, Contact) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $dob, $gender, $contact);
    $stmt->execute();
    echo "Patient added successfully.";
}

if ($action === 'add_appointment') {
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_datetime = $_POST['appointment_datetime'];

    $stmt = $conn->prepare("INSERT INTO Appointments (PatientID, DoctorID, AppointmentDateTime) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $patient_id, $doctor_id, $appointment_datetime);
    $stmt->execute();
    echo "Appointment added successfully.";
}

// Close the database connection
$conn->close();
?>
