<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rollNumber = $_POST['rollNumber'];
    $isbn = $_POST['isbn'];
    $issueDate = $_POST['issueDate'];
    
    $query = "SELECT COUNT(*) AS issuedCount FROM Transactions WHERE RollNumber = ? AND ReturnDate IS NULL";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $rollNumber);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if ($row['issuedCount'] >= 2) {
        echo "Error: A student cannot issue more than 2 books at a time.";
        exit;
    }

    $dueDate = date('Y-m-d', strtotime($issueDate . ' + 7 days'));
    $query = "INSERT INTO Transactions (RollNumber, ISBN, IssueDate, DueDate) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $rollNumber, $isbn, $issueDate, $dueDate);

    if ($stmt->execute()) {
        echo "Book issued successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
