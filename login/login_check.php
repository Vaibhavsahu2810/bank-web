<?php
session_start(); 
include('conn.php');

$userid = $_POST['userid'];
$pass = $_POST['pass'];

$stmt = $conn->prepare("SELECT * FROM LOGIN WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $userid, $pass);
$stmt->execute();
$res = $stmt->get_result();

if($result = $res->fetch_assoc()) {
    $_SESSION['userid'] = $result['userid']; 
    header('Location:http://localhost/bank-web/dashboard/submit1.php');
} else {
    header('Location:http://localhost/bank-web/login/login.php');
}
$stmt->close();
$conn->close();
?>
