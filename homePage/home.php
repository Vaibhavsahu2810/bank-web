<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeIt Bank - Home</title>
    <style>
        /* CSS Variables for Easy Theming */
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

        /* Scrolling News */
        .scrolling-news {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 250px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .scrolling-news div {
            display: flex;
            flex-direction: column;
            animation: scrollUp 10s linear infinite;
        }

        .scrolling-news p {
            font-size: 0.9rem;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        @keyframes scrollUp {
            0% {
                transform: translateY(100%);
            }

            100% {
                transform: translateY(-100%);
            }
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

        /* Services */
        h2 {
            text-align: center;
            color: var(--primary-color);
            margin: 40px 0 20px;
            font-size: 2rem;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 0 20px 40px;
            background-color: var(--background-color);
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 220px;
            transition: transform var(--transition-speed) ease, box-shadow var(--transition-speed) ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .service-item img {
            width: 100%;
            height: auto;
            max-width: 150px;
            margin-bottom: 15px;
            transition: transform var(--transition-speed) ease;
        }

        .service-item img:hover {
            transform: scale(1.05);
        }

        .service-item p {
            font-size: 1rem;
            color: var(--primary-color);
            font-weight: bold;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .header h1 {
                font-size: 1.5rem;
            }

            .menu a {
                margin-left: 10px;
                font-size: 0.9rem;
            }

            .banner {
                height: 200px;
            }

            .scrolling-news {
                width: 180px;
                padding: 10px;
            }

            .services {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }

            .service-item {
                max-width: 200px;
            }
        }

        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
                padding: 10px;
            }

            .menu {
                flex-wrap: wrap;
                margin-top: 10px;
            }

            .menu a {
                margin-left: 10px;
                font-size: 0.9rem;
            }

            .banner {
                height: 150px;
            }

            .scrolling-news {
                width: 150px;
                padding: 8px;
            }

            .services {
                flex-direction: column;
                align-items: center;
            }

            .service-item {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <img src="bank copy.jpeg" alt="Bank Logo">
        <h1>SafeIt</h1>
        <nav class="menu">
            <a href="http://localhost/bank-web/homePage/home.php">Home</a>
            <a href="http://localhost/bank-web/dashboard/submit1.php?tab1">Dashboard</a>
            <a href="http://localhost/bank-web/login/login.php">Login</a>
        </nav>
    </header>

    <section class="banner">
        <img src="image copy 3.png" alt="Banner Image">
        <div class="scrolling-news">
            <div>
                <p>Latest news about the bank...</p>
                <p>Check out our new offers!</p>
                <p>Security updates released!</p>
            </div>
        </div>
    </section>

    <main class="content">
        <p>Welcome to SafeIt Bank. We offer a variety of services to cater to your financial needs, ensuring security, reliability, and exceptional customer service. Whether you're looking to open a savings account, invest in fixed deposits, apply for a loan, or use our credit card services, we've got you covered.</p>
    </main>

    <h2>Our Services</h2>
    <section class="services">
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
    </section>

    <footer>
        &copy; 2024 SafeIt Bank. All rights reserved.
    </footer>

</body>

</html>
