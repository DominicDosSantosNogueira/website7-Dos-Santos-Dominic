<?php
include 'navi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display the form with the current product details pre-filled
        echo "<form method='post'>";
        echo "<input type='hidden' name='id' value='" . $row["ID"] . "'>";
        echo "<label for='name'>Name:</label><br>";
        echo "<input type='text' id='name' name='name' value='" . $row["Name"] . "'><br>";
        echo "<label for='description_fr'>Description FR:</label><br>";
        echo "<input type='text' id='description_fr' name='description_fr' value='" . $row["French_Description"] . "'><br>";
        echo "<label for='description_en'>Description EN:</label><br>";
        echo "<input type='text' id='description_en' name='description_en' value='" . $row["English_Description"] . "'><br>";
        echo "<label for='price'>Price:</label><br>";
        echo "<input type='text' id='price' name='price' value='" . $row["Price"] . "'><br>";
        echo "<input type='submit' name='edit_product' value='Update'>";
        echo "</form>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_product'])) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $description_fr = $_POST['description_fr'] ?? '';
    $description_en = $_POST['description_en'] ?? '';
    $price = $_POST['price'] ?? '';

    if ($id && $name && $description_fr && $description_en && $price) {
        $query = "UPDATE products SET Name='$name', French_Description='$description_fr', English_Description='$description_en', Price=$price WHERE ID=$id";
        $conn->query($query);

        // Redirect to the products page
        header("Location: products.php");
        exit;
    } else {
        echo "Please fill in all fields";
    }
}
?>
