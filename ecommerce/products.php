<?php
include 'db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div>
        <h3>{$row['name']}</h3>
        <p>Price: ₹{$row['price']}</p>
        <p>Stock: {$row['stock']}</p>
        <form action='order.php' method='POST'>
            <input type='hidden' name='product_id' value='{$row['id']}'>
            <input type='number' name='quantity' min='1' max='{$row['stock']}' required>
            <button type='submit'>Buy Now</button>
        </form>
    </div><hr>";
}
?>
