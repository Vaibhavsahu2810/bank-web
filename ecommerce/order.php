<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = 1; // Example customer (change for a real app)
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Fetch product details
    $sql = "SELECT price, stock FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    if ($product['stock'] >= $quantity) {
        $total_price = $product['price'] * $quantity;

        // Insert order
        $sql = "INSERT INTO orders (customer_id, product_id, quantity, total_price) VALUES ($customer_id, $product_id, $quantity, $total_price)";
        if ($conn->query($sql)) {
            // Update stock
            $new_stock = $product['stock'] - $quantity;
            $conn->query("UPDATE products SET stock = $new_stock WHERE id = $product_id");
            echo "Order placed successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Insufficient stock!";
    }
}
?>
