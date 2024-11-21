<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="create_book.php" method="POST">
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required><br><br>
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br><br>
        
        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" required><br><br>
        
        <label for="pages">Pages:</label>
        <input type="number" id="pages" name="pages" required><br><br>
        
        <button type="submit">Add Book</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
