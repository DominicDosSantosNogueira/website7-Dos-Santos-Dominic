<!DOCTYPE html>
<html>

<head>
  <!-- Head content -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 5;
  include '../navi.php';
  navBar($activePage, $language);
  
include("content_" . strtolower($language) . ".php");
?>
</head>

<body style="font-family:Verdana;color:#0f0d0d;">

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="flex-container">
    <h1><a
        href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img
          src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="../Home.php"> Transformationmarket</a></h1>
      <h1><?= $products_title ?></h1>
    </div>

    <a href="../LoginRegister.php"><button>Login/Register</button></a>
  </div>

  <div class="main">
  <h2><?= $products_title ?></h2>

  <div class="AllProducts">
  <?php
  $handle = fopen('product_list.txt', 'r');
  fgets($handle);

  while (!feof($handle)) {
    $line = fgets($handle);
    $product = explode(',', $line);

    if (!empty($line)) {
      print '<div class="OneProduct">';
      
      // Assuming the product name is at index 1
      print '<h3>' . $product[1] . '</h3>';

      // Determine the index for the description based on the language
      $description_index = ($language == 'FR') ? 3 : 2;
      $price_index = 4;
      $image_index = 5;

      // Output product information inside the container
      for ($i = 1; $i < count($product); $i++) {
        if ($i == $description_index || $i == $price_index) {
          print '<p>' . $product[$i] . '</p>';
        } elseif ($i == $image_index) {
          print '<img src="../Media/uploads/' . $product[$i] . '" alt="' . $product[1] . '">';
        }
        // Add an else condition to avoid printing English description and price when language is French
      }

      print '<button onclick="buyProduct(' . $product[0] . ')">' . $buy_button_text . '</button>';
      print '</div>';
    }
  }

  // Close the file
  fclose($handle);
  ?>
</div>




  <script>
    function buyProduct(productId) {
      alert('Product ' + productId + ' added to the cart. ');
    }
  </script>

  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2024</p>
  </footer>
</body>

</html>
