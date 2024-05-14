<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../Media/Homecss.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
    <?php
    $activePage = 5;
    include 'navi.php';
    navBar($activePage, $language);
    ?>
</head>
<?php
// Include the database connection file


// Assuming you have a session variable named 'language' to store the selected language
// You may replace it with your actual session variable storing the selected language


// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>



<body style="font-family:Verdana;color:#0f0d0d;">

    <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="flex-container">
        <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
        <div>
            <h1><a href="Home.php"> Transformation Market</a></h1>
            <h1><?= t('Product_title') ?></h1>
        </div>

        <a href="logout.php">Logout</a>
    </div>

    <div class="main">
        <h2><?= t('Product_title') ?></h2>

<?php
        if(isset($_GET["action"])) {
    if($_GET["action"] == "add") {
        $product_id = $_GET["id"];
        if(isset($_SESSION["shopping_cart"])) {
            $is_available = false;
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                if ($values['product_id'] == $product_id) {
                    $is_available = true;
                    $_SESSION["shopping_cart"][$keys]['product_quantity']++;
                    break;
                }
            }
            if (!$is_available) {
                $item_array = array(
                    'product_id' => $product_id,
                    'product_quantity' => 1
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
        } else {
            $item_array = array(
                'product_id' => $product_id,
                'product_quantity' => 1
            );
            $_SESSION["shopping_cart"][] = $item_array;
        }
    }
}
?>
        <div class="AllProducts">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='OneProduct'>";
                    echo "<h3>" . $row["Name"] . "</h3>";
                    
                    // Determine which description to display based on the selected language
                    $description = ($language == 'FR') ? $row["French_Description"] : $row["English_Description"];
                    echo "<p>" . $description . "</p>";
                    
                    echo "<p>" . $row["Price"] . "</p>";
                    echo "<img src='../Media/uploads/" . $row["Image"] . "' alt='" . $row["Name"] . "'>";
                    
                    
                    echo "<a class='buy-button' href='Products.php?action=add&id=" . $row["ID"] . "'>Buy</a>";
                                                              

                    echo "</div>";
            
                    

                    
                    /*foreach ($products as $product) {
                        // Get the appropriate description based on the language
                        $description = ($language == 'FR') ? $product['description_fr'] : $product['description_en'];
                    
                        // Output product information with translations
                        echo "<div class='OneProduct'>";
                        echo "<h3>" . $product["name"] . "</h3>";
                        echo "<p>" . $description . "</p>";
                        echo "<p>" . $product["price"] . "</p>";
                        echo "<img src='../Media/uploads/" . $product["image"] . "' alt='" . $product["name"] . "'>";
                        echo "<button onclick='buyProduct()'>Buy</button>"; // Assuming buyProduct() is a JavaScript function
                        echo "</div>";*/
                }
            } else {
                echo "No products found";
            }
                     ?>
        </div>
    </div>

   

    <footer>
        <p>HTML Nogueira Dos Santos Dominic 2024</p>
    </footer>
</body>

</html>
