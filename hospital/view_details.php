<?php
include 'db_connect.php';


$appointment_id = $_POST['appointment_id'];

if ($appointment_id) {
    $stmt = $conn->prepare("
        SELECT 
            a.AppointmentID, 
            a.AppointmentDateTime, 
            p.PatientID, p.Name AS PatientName, p.DOB, p.Gender, p.Contact AS PatientContact, 
            d.DoctorID, d.Name AS DoctorName, d.Specialization
        FROM 
            Appointments a
        JOIN 
            Patients p ON a.PatientID = p.PatientID
        JOIN 
            Doctors d ON a.DoctorID = d.DoctorID
        WHERE 
            a.AppointmentID = ?
    ");
    $stmt->bind_param("i", $appointment_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $appointment_details = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        .details {
            margin: 20px 0;
        }
        .details h2 {
            color: #0056b3;
        }
        .details p {
            margin: 5px 0;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Appointment Details</h1>

        <?php if ($appointment_details): ?>
            <div class="details">
                <h2>Appointment Information</h2>
                <p><strong>Appointment ID:</strong> <?= $appointment_details['AppointmentID'] ?></p>
                <p><strong>Date & Time:</strong> <?= $appointment_details['AppointmentDateTime'] ?></p>
            </div>

            <div class="details">
                <h2>Patient Details</h2>
                <p><strong>Patient ID:</strong> <?= $appointment_details['PatientID'] ?></p>
                <p><strong>Name:</strong> <?= $appointment_details['PatientName'] ?></p>
                <p><strong>Date of Birth:</strong> <?= $appointment_details['DOB'] ?></p>
                <p><strong>Gender:</strong> <?= $appointment_details['Gender'] ?></p>
                <p><strong>Contact:</strong> <?= $appointment_details['PatientContact'] ?></p>
            </div>

            <div class="details">
                <h2>Doctor Details</h2>
                <p><strong>Doctor ID:</strong> <?= $appointment_details['DoctorID'] ?></p>
                <p><strong>Name:</strong> <?= $appointment_details['DoctorName'] ?></p>
                <p><strong>Specialization:</strong> <?= $appointment_details['Specialization'] ?></p>
            </div>
        <?php else: ?>
            <p class="error">No details found for the given Appointment ID.</p>
        <?php endif; ?>
    </div>
</body>
</html>
