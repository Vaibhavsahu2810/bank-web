<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO customers (name, email, password) VALUES ('$name', '$email',
'$password')";
    if ($conn->query($sql)) {
        echo "Registration successful!";
        header('Location: order.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>