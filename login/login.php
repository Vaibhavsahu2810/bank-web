<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #003366;
            color: white;
        }

        .header img {
            width: 50px;
            height: 50px;
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: auto;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .menu a:hover {
            color: #ffcc00;
        }

        .banner {
            position: relative;
            width: 100%;
            height: 300px;
            background-color: #ccc;
            margin-top: 20px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .scrolling-news {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 200px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .scrolling-news div {
            display: block;
            height: 100%;
            animation: scrollUp 5s linear infinite;
        }

        @keyframes scrollUp {
            0% {
                transform: translateY(100%);
            }

            100% {
                transform: translateY(-100%);
            }
        }

        .scrolling-news p {
            font-size: 16px;
            color: #333;
            margin: 0;
        }

        .content {
            padding: 20px;
        }

        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        .services {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: #f8f8f8;
        }

        .services .service-item {
            text-align: center;
            max-width: 200px;
        }

        .services .service-item img {
            width: 130px;
            height: 100px;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .services .service-item img:hover {
            transform: scale(1.1);
        }

        .services .service-item p {
            font-size: 16px;
            color: #003366;
        }

        h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        form {
            background-color: #f8f8f8;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form label {
            font-size: 18px;
            color: #003366;
            margin-bottom: 10px;
            align-self: flex-start;
        }

        form input[type="text"], form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        form button {
            background-color: #003366;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #ffcc00;
            color: #003366;
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
        <div class="scrolling-news">
            <div>
                <p>Latest news about the bank...</p>
                <p>Check out our new offers!</p>
                <p>Security updates released!</p>
            </div>
        </div>
    </div>

    <h2>Login</h2>
    <div class="container">
        <form action="http://localhost/bank-web/login/login_check.php" method="post">
            <label for="userid">User Name</label>
            <input type="text" id="userid" name="userid" required />

            <label for="pass">Password</label>
            <input type="text" id="pass" name="pass" required />

            <button type="submit">Login Now</button>
        </form>
    </div>

    <h2>Services</h2>
    <div class="services">
        <div class="service-item">
            <img src="image copy 4.png" alt="Saving A/C">
            <p>Saving A/C</p>
        </div>
        <div class="service-item">
            <img src="image copy 5.png" alt="Fixed Deposit">
            <p>Fixed Deposit</p>
        </div>
        <div class="service-item">
            <img src="image copy 6.png" alt="Credit Cards">
            <p>Credit Cards</p>
        </div>
        <div class="service-item">
            <img src="image copy 7.png" alt="Loan">
            <p>Loan</p>
        </div>
    </div>
    <footer style="background-color: var(--primary-color); color: #fff; text-align: center; padding: 20px; margin-top: 40px;">
        &copy; 2024 SafeIt Bank. All rights reserved.
    </footer>

</body>

</html>
