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
  <a href="logout.php">Logout</a>
  
</div2>

</div>

<?php

                    if(isset($_SESSION["shopping_cart"])) {
                      foreach ($_SESSION["shopping_cart"] as $product) {
                          echo "Product ID: " . $product["product_id"] . "<br>";
                          echo "Quantity: " . $product["product_quantity"] . "<br><br>";
                      }
                  } else {
                      echo "Your shopping cart is empty.";
                  }
                    
                    ?>
                    



</body>
</html>