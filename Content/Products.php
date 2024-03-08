<?php
// Include the database connection file
include 'db_connection.php';

// Assuming you have a session variable named 'language' to store the selected language
// You may replace it with your actual session variable storing the selected language


// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>

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
    include 'navi.txt';
    navBar($activePage, $language);
    ?>
</head>

<body style="font-family:Verdana;color:#0f0d0d;">

    <div style="background-color:#e5e5e5;padding:15px;text-align:center;" class="flex-container">
        <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
        <div>
            <h1><a href="Home.php"> Transformationmarket</a></h1>
            <h1><?= $arrayOfStrings['Product_title']?></h1>
        </div>

        <a href="logout.php">Logout</a>
    </div>

    <div class="main">
        <h2><?= $arrayOfStrings['Product_title']?></h2>

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
                    echo "<button onclick='buyProduct'>Buy</button>";
                    echo "</div>";
                }
            } else {
                echo "No products found";
            }
            ?>
        </div>
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
