<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
            line-height: 1.6;
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            margin: 0;
            text-align: center;
            font-size: 2rem;
        }

        h2 {
            color: #0056b3;
        }

        /* Form Container */
        form {
            background-color: white;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Layout */
        .container {
            padding: 20px;
        }

        form h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1>Hospital Management</h1>
    <div class="container">
        <h2>Add Doctor</h2>
        <form action="backend.php" method="POST">
            <input type="hidden" name="action" value="add_doctor">
            <label>Name: <input type="text" name="name" required></label>
            <label>Specialization: <input type="text" name="specialization" required></label>
            <button type="submit">Add Doctor</button>
        </form>

        <h2>Add Patient</h2>
        <form action="backend.php" method="POST">
            <input type="hidden" name="action" value="add_patient">
            <label>Name: <input type="text" name="name" required></label>
            <label>DOB: <input type="date" name="dob" required></label>
            <label>Gender: 
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </label>
            <label>Contact: <input type="text" name="contact" required></label>
            <button type="submit">Add Patient</button>
        </form>

        <h2>Add Appointment</h2>
        <form action="backend.php" method="POST">
            <input type="hidden" name="action" value="add_appointment">
            <label>Patient ID: <input type="number" name="patient_id" required></label>
            <label>Doctor ID: <input type="number" name="doctor_id" required></label>
            <label>Date and Time: <input type="datetime-local" name="appointment_datetime" required></label>
            <button type="submit">Add Appointment</button>
        </form>
    </div>
</body>
</html>
