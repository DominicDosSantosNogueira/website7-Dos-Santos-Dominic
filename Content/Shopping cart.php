<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Media/Homecss.css">
    <link rel = "stylesheet" type = "text/css" href = "myStyle.css?val=<?= time(); ?>" />
    <?php
  $activePage = 9; 
  include 'navi.php';
  navBar($activePage, $language);
  
  
  ?>
    
    <div style="overflow:auto">
  

</head>

<body style="font-family:Verdana;color:#0c0b0b;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">
  <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
  <h1><a href="Home.php"></a> Transformation Market</h1>
  <div2>
  <?php
  if (isset($_SESSION['UserId'])) {
    echo '<a href="logout.php">Logout</a>';
  }
  ?>
</div2>

  
    

  </div>


<form method="post">

<?php
// Display the items in the shopping cart
if(isset($_SESSION["shopping_cart"])) {
    foreach ($_SESSION["shopping_cart"] as $product) {
        echo "Product ID: " . $product["product_id"] . "<br>";
        echo "Quantity: " . $product["product_quantity"] . "<br><br>";
    }
} else {
    echo "Your shopping cart is empty.";
}

if (isset($_POST['place_order']) && isset($_SESSION["shopping_cart"])) {
    // Insert a new order for the current user
    $userId = $_SESSION['UserId']; // Replace this with the actual user ID
    $sql = "INSERT INTO Orders (UserId) VALUES ($userId)";
    $conn->query($sql);

    // Get the ID of the newly inserted order
    $orderId = $conn->insert_id;

    // Insert each item in the shopping cart into the list table
    foreach ($_SESSION["shopping_cart"] as $product) {
        $productId = $product["product_id"];
        $quantity = $product["product_quantity"];
        $sql = "INSERT INTO list (OrderId, ID, CountOfItemsBought) VALUES ($orderId, $productId, $quantity)";
        $conn->query($sql);
    }

    // Clear the shopping cart
    unset($_SESSION["shopping_cart"]);
}
?>

<input type="submit" name="place_order" value="Place Order">
</form>
</body>
</html>