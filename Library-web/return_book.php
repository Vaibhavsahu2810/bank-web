<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transactionId = $_POST['transactionId'];
    $returnDate = $_POST['returnDate'];

    // Fetch transaction details
    $query = "SELECT DueDate FROM Transactions WHERE TransactionID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $transactionId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if (!$row) {
        echo "Error: Transaction not found.";
        exit;
    }

    // Calculate fine if applicable
    $dueDate = $row['DueDate'];
    $fine = 0;
    if (strtotime($returnDate) > strtotime($dueDate)) {
        $fine = (strtotime($returnDate) - strtotime($dueDate)) / (60 * 60 * 24) * 10; // Rs. 10 per day
    }

    // Update transaction
    $query = "UPDATE Transactions SET ReturnDate = ?, FineAmount = ? WHERE TransactionID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sdi", $returnDate, $fine, $transactionId);

    if ($stmt->execute()) {
        echo "Book returned successfully! Fine: Rs. $fine";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
