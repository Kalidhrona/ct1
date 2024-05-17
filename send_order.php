<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $to = "dhrona1421@gmail.com";
    $subject = "New Order from Fashion Hub";
    $message = "
    Product: $product\n
    Price: ₹$price\n
    Name: $name\n
    Email: $email\n
    Address: $address\n
    ";
    $headers = "From: no-reply@fashionhub.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Order successfully submitted.";
    } else {
        echo "Failed to send order. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
