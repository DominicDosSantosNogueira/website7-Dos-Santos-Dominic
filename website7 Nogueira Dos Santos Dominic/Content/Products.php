<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" href="myStyle.css">
  <?php include '../navi.php'; ?>
</head>

<body style="font-family:Verdana;color:#0f0d0d;">

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="flex-container">
    <h1><a
        href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img
          src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="../Home.php"> Transformationmarket</a></h1>
      <h1>Products</h1>
    </div>
    <h1><a href="../Content/Produits.php"><img src="../Media/France.png" width="150vw"></a></h1>
    <a href="../LoginRegister.php"><button>Login/Register</button></a>
  </div>




  <div class="main">
    <h2>Transformations</h2>

    <div class="AllProducts">

      <?php
      // Open a file 
      $handle = fopen('product_list.txt', 'r');
      fgets($handle); // Read the header and discard it

      while (!feof($handle)) {
        $line = fgets($handle); // Read one line of text from the csv
        $product = explode(',', $line); // Assuming products are separated by commas in your file

        // Check if the line is not empty
        if (!empty($line)) {
          // Start a new product container with the specified style
          echo '<div class="OneProduct">';
          
          // Output product information inside the container
          foreach ($product as $info) {
            echo '<p>' . $info . '</p>';
          }

          // Close the product container
          echo '</div>';
        }
      }

      // Close the file
      fclose($handle);
      ?>

    </div>
</div>


    
</div>


  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2022</p>
  </footer>



</body>

</html>