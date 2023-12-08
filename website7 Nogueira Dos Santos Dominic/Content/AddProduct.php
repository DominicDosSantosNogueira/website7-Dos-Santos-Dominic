<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form submission

    // Get form data
    $productName = $_POST["productName"];
    $descriptionEN = $_POST["descriptionEN"];
    $descriptionFR = $_POST["descriptionFR"];
    $price = $_POST["price"];

    // Image handling
    $imageFileName = "";
    if ($_FILES["productImage"]["error"] == UPLOAD_ERR_OK) {
        $imageFileName = $_FILES["productImage"]["name"];
        move_uploaded_file($_FILES["productImage"]["tmp_name"], "../Media/" . $imageFileName);
    }

    // Get the last product number from the text file
    $lastProductNumber = 1; // Default starting number
    $lines = file('product_list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (!empty($lines)) {
        $lastLine = end($lines);
        $lastProductData = explode(',', $lastLine);
        $lastProductNumber = intval($lastProductData[0]) + 1;
    }

    // Append the new product to the text file
    // Append the new product to the text file
$newProductLine = "\n" . implode(',', [$lastProductNumber, $productName, $descriptionEN, $descriptionFR, '$' . number_format($price, 2), $imageFileName]);
file_put_contents('product_list.txt', $newProductLine, FILE_APPEND);


    // Redirect to the product list page or any other page
    header("Location: Products.php");
    exit();
}
?>
