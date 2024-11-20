
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Website</title>
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

/* Tabs */
.tabc {
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 20px;
    background-color: #fafafa;
}

.tabl,
.tabr {
    flex: 1;
}

.tabl a,
.tabr a {
    display: block;
    margin-bottom: 15px;
    font-size: 1.1rem;
    color: var(--primary-color);
    text-decoration: none;
    transition: color var(--transition-speed) ease;
}

.tabl a:hover,
.tabr a:hover {
    color: var(--secondary-color);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th,
td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: var(--primary-color);
    color: #fff;
    font-size: 1rem;
}

tr:hover {
    background-color: #f1f1f1;
}

a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color var(--transition-speed) ease;
}

a:hover,
a:focus {
    color: var(--secondary-color);
    text-decoration: underline;
    outline: none;
}

/* Forms */
input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

input[type="submit"],
input[type="reset"] {
    background-color: var(--primary-color);
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color var(--transition-speed) ease;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: var(--secondary-color);
}

/* Buttons Container */
.buttons {
    text-align: center;
    margin-top: 20px;
}

/* Paragraph Centering */
.p {
    text-align: center;
    margin: 20px 0;
}

/* Responsive Design */
@media (max-width: 992px) {
    .services {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }

    .tabc {
        flex-direction: column;
        align-items: center;
    }

    .tabl,
    .tabr {
        width: 100%;
        max-width: 500px;
    }
}

@media (max-width: 600px) {
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
<div class="content">
        <h2>Customer Details</h2>

            <?php
            include('conn.php');

            $cust_name = isset($_GET['uname']) ? $_GET['uname'] : '';
            $account_number = isset($_GET['ac']) ? $_GET['ac'] : '';

            $stmt = $conn->prepare("SELECT customer_name, customer_street, customer_city FROM customer WHERE customer_name = ?");
            $stmt->bind_param("s", $cust_name);
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                $row = $res->fetch_assoc();
                $cust_name = htmlspecialchars($row['customer_name']);
                $addr = htmlspecialchars($row['customer_street']);
                $city = htmlspecialchars($row['customer_city']);
                $state = htmlspecialchars($row['state']);
            } else {
                echo "No customer found with this account number.";
            }

            $stmt->close();
            ?>

            <!-- Display customer details -->
            <table border="1">
                <tr>
                    <td>Customer Name:</td>
                    <td><?php echo $cust_name; ?></td>
                </tr>
                <tr>
                    <td>Street:</td>
                    <td><?php echo $addr; ?></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><?php echo $city; ?></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td>UP</td>
                </tr>
            </table>

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