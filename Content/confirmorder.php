<?php
  include 'navi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    $query = "UPDATE orders SET status='Processed' WHERE OrderId=$orderId";
    $conn->query($query);

    // Redirect back to the orders history page
    header("Location: ordershistory.php");
    exit;
}
?>