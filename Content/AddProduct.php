<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 6; // Adjust the activePage based on your navigation structure
  include 'navi.txt';
  navBar($activePage, $language);

  
  ?>
</head>

<body style="font-family: Verdana; color: #0f0d0d;">

  <div style="background-color: #e5e5e5; padding: 15px; text-align: center;" class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="Home.php"> Transformationmarket</a></h1>
      <h1><?= $arrayOfStrings['Product_title']?></h1>
    </div>
    <a href="LoginRegister.php"><button><?= $arrayOfStrings["Login/Register"]   ?></button></a>
  </div>

  <div class="main">
    <h2><?= $arrayOfStrings['Add_product']?></h2>
    <?php


$productId = generateProductId('product_list.txt');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $productName = $_POST["productName"];
  $description = $_POST["description"];
  $description_fr = $_POST["description_fr"]; // Added line for French description
  $price = $_POST["price"];

  // Rest of your code...
  echo "English Description: $description<br>";
  echo "French Description: $description_fr<br>";
  
// Generate a new product ID


// Rest of your code...

$newProduct = "$productId,$productName,$description,$description_fr,$price," . basename($_FILES['image']['name']) . PHP_EOL;

// Rest of your code...




    // Generate a new product ID
    $productId = generateProductId('product_list.txt');

    // Upload PNG image
    $uploadDir = '../Media/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

    if ($imageFileType == 'png') {
      if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
          
          $newProduct = "$productId,$productName,$description,$description_fr,$price," . basename($_FILES['image']['name']) . PHP_EOL;
          file_put_contents('product_list.txt', $newProduct, FILE_APPEND | LOCK_EX);
  
          echo '<p>' . $arrayOfStrings['Add_Product_Success'] .'</p>';
      } else {
          echo '<p>' . $arrayOfStrings['Add_product_error'] .' </p>';
      }
  } else {
    echo '<p>' . $arrayOfStrings['Add_product_png'] . '</p>';  }
}  

// Function to generate a new product ID
function generateProductId($filename)
{
    $handle = fopen($filename, 'r');

    // Skip the header line
    fgets($handle);

    $maxId = 0;

    // Loop through existing products to find the maximum product ID
    while (!feof($handle)) {
        $line = fgets($handle);
        $product = explode(',', $line);

        if (!empty($line) && $product[0] > $maxId) {
            $maxId = $product[0];
        }
    }

    fclose($handle);

    // Increment the maximum product ID to generate a new one
    return $maxId + 1;
}
?>



  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
  <label for="productName"><?= $arrayOfStrings['Product_Name']?></label>
  <input type="text" name="productName" required><br>

  <label for="description">Description (English):</label>
  <textarea name="description" rows="4" required></textarea><br>

  <label for="description_fr">Description (French):</label>
  <textarea name="description_fr" rows="5" required></textarea><br>

  <label for="price"><?= $arrayOfStrings['Add_product_price']?></label>
  <input type="text" name="price" id="priceInput" value="$0.00" required pattern="\$\d+(\.\d{2})?"><br>

  <label for="image">Image (PNG only):</label>
  <input type="file" name="image" accept=".png" required><br>

  <input type="submit" value="<?= $arrayOfStrings['Add_product']?>">
</form>



  </div>

  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2024</p>
  </footer>
</body>

</html>