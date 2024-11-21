<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $pages = $_POST['pages'];

    // Check if the book with the same ISBN already exists
    $checkQuery = "SELECT * FROM Books WHERE ISBN = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $isbn);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Error: A book with this ISBN already exists.";
    } else {
        // Insert the book into the database
        $insertQuery = "INSERT INTO Books (ISBN, Title, Author, Publisher, Pages) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssssi", $isbn, $title, $author, $publisher, $pages);

        if ($stmt->execute()) {
            echo "Book added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    $stmt->close();
}
$conn->close();
?>
