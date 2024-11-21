<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        h1 {
            background-color: #4caf50;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
        }
        li {
            margin: 15px 0;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #4caf50;
            padding: 15px 30px;
            border-radius: 8px;
            display: block;
            text-align: center;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        a:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        @media (max-width: 768px) {
            a {
                font-size: 1rem;
                padding: 12px 20px;
            }
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Library Management System</h1>
    <ul>
        <li><a href="issue_form.php">Issue a Book</a></li>
        <li><a href="return_form.php">Return a Book</a></li>
        <li><a href="create_book_form.php">Return a Book</a></li>
        <li><a href="list_issued_books.php">View Issued Books</a></li>
    </ul>
    <footer>
        &copy; 2024 Library Management System. All rights reserved.
    </footer>
</body>
</html>
