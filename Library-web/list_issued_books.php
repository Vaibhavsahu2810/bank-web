<?php
include 'db_connect.php';

$query = "SELECT t.TransactionID, s.Name AS StudentName, b.Title AS BookTitle, t.IssueDate, t.DueDate, t.ReturnDate, t.FineAmount 
          FROM Transactions t
          JOIN Students s ON t.RollNumber = s.RollNumber
          JOIN Books b ON t.ISBN = b.ISBN";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issued Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Issued Books</h1>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Student Name</th>
                    <th>Book Title</th>
                    <th>Issue Date</th>
                    <th>Due Date</th>
                    <th>Return Date</th>
                    <th>Fine Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['TransactionID']; ?></td>
                        <td><?php echo $row['StudentName']; ?></td>
                        <td><?php echo $row['BookTitle']; ?></td>
                        <td><?php echo $row['IssueDate']; ?></td>
                        <td><?php echo $row['DueDate']; ?></td>
                        <td><?php echo $row['ReturnDate'] ?? 'Not Returned'; ?></td>
                        <td><?php echo $row['FineAmount']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No books have been issued yet.</p>
    <?php endif; ?>
    <a href="index.php">Back to Home</a>
</body>
</html>
