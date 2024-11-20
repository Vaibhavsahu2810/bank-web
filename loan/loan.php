<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Website - Loan Application</title>
    <style>
        /* CSS Variables for easy theming */
        :root {
            --primary-color: #003366;
            --secondary-color: #ffcc00;
            --background-color: #f8f8f8;
            --text-color: #333;
            --header-height: 70px;
            --transition-speed: 0.3s;
            --font-family: 'Arial', sans-serif;
            --button-color: var(--primary-color);
            --button-hover-color: var(--secondary-color);
            --input-border-color: #ccc;
            --input-focus-border-color: var(--primary-color);
        }

        /* Global Styles */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-family);
            background-color: #fff;
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            height: var(--header-height);
            background-color: var(--primary-color);
            color: #fff;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header img {
            width: 50px;
            height: 50px;
        }

        .header h1 {
            font-size: 1.8rem;
            margin-left: 10px;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 1rem;
            transition: color var(--transition-speed) ease;
        }

        .menu a:hover,
        .menu a:focus {
            color: var(--secondary-color);
            outline: none;
        }

        /* Banner */
        .banner {
            position: relative;
            width: 100%;
            height: 300px;
            background-color: #ccc;
            margin: 20px 0;
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform var(--transition-speed) ease;
        }

        .banner img:hover {
            transform: scale(1.05);
        }

        /* Content */
        .content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content p {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        /* Forms */
        .container {
            background-color: #fff;
            padding: 30px;
            max-width: 600px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-bottom: 30px;
            text-align: center;
            color: var(--primary-color);
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1rem;
            color: var(--primary-color);
            margin-bottom: 5px;
            display: block;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid var(--input-border-color);
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color var(--transition-speed) ease;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        button {
            background-color: var(--button-color);
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color var(--transition-speed) ease;
        }

        button:hover,
        button:focus {
            background-color: var(--button-hover-color);
            outline: none;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="bank copy.jpeg" alt="Bank Logo">
        <h1>SafeIt</h1>
        <div class="menu">
            <a href="http://localhost/bank-web/homePage/home.php">Home</a>
            <a href="http://localhost/bank-web/dashboard/submit1.php?tab1">Dashboard</a>
            <a href="http://localhost/bank-web/login/login.php">Login</a>
        </div>
    </div>

    <div class="banner">
        <img src="image copy 3.png" alt="Banner Image">
    </div>

    <?php
    include('conn.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $loan_number = htmlspecialchars(trim($_POST['loan_number']));
        $branch_name = htmlspecialchars(trim($_POST['branch_name']));
        $amount = htmlspecialchars(trim($_POST['amount']));

        $sql = "INSERT INTO loan (loan_number, branch_name, amount) VALUES (?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssi", $loan_number, $branch_name, $amount);

            if ($stmt->execute()) {
                echo "<p style='color: green; text-align: center;'>Loan application submitted successfully!</p>";
            } else {
                echo "<p style='color: red; text-align: center;'>Error: " . $stmt->error . "</p>";
            }

            $stmt->close();
        } else {
            echo "<p style='color: red; text-align: center;'>Error preparing query: " . $conn->error . "</p>";
        }
    }
    ?>

    <div class="container">
        <h2>Loan Application</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="loan_number">Loan Number</label>
                <input type="text" id="loan_number" name="loan_number" required />
            </div>

            <div class="form-group">
                <label for="branch_name">Branch Name</label>
                <input type="text" id="branch_name" name="branch_name" required />
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" required />
            </div>

            <div class="buttons">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>

    <footer style="background-color: var(--primary-color); color: #fff; text-align: center; padding: 20px; margin-top: 40px;">
        &copy; 2024 SafeIt Bank. All rights reserved.
    </footer>

</body>

</html>
