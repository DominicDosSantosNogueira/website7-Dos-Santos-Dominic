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
    $activePage = 6;
    include 'navi.php';
    navBar($activePage, $language);
   
    ?>
</head>
<?php
// Check if user is logged in and is an admin
if (!isset($_SESSION['username']) || $_SESSION['UserRole'] != 'admin') {
    header("Location: Loginregister.php"); // Redirect to login page if not logged in or not admin
    exit();
}



// Function to generate a new product ID
function generateProductId($conn)
{
    $sql = "SELECT MAX(id) AS max_id FROM products";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['max_id'] + 1;
}

// Function to handle file upload
function handleFileUpload($uploadDir)
{
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

    if ($imageFileType == 'png') {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            return basename($_FILES['image']['name']);
        } else {
            return 'Error uploading image.';
        }
    } else {
        return 'Only PNG images are allowed.';
    }
}

// Function to check if the user has admin role
function isAdmin($conn, $username)
{
    $sql = "SELECT UserRole FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user['UserRole'] === 'admin';
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username']) && isAdmin($conn, $_SESSION['username'])) {
    $productName = $_POST["productName"];
    $description = $_POST["description"];
    $description_fr = $_POST["description_fr"];
    $price = $_POST["price"];

    // Upload PNG image
    $uploadDir = '../Media/uploads/';

    $uploadResult = handleFileUpload($uploadDir);
    if (strpos($uploadResult, 'Error') === 0) {
        echo '<p>' . $uploadResult . '</p>';
    } else {
        $productId = generateProductId($conn);
        $sql = "INSERT INTO products (ID, Name, English_Description, French_Description, Price, Image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('isssds', $productId, $productName, $description, $description_fr, $price, $uploadResult);
        if ($stmt->execute()) {
            echo '<p>Product added successfully.</p>';
        } else {
            echo '<p>Error adding product.</p>';
        }
        
    }
}
?>





<body style="font-family: Verdana; color: #0f0d0d;">

    <div style="background-color: #e5e5e5; padding: 15px; text-align: center;" class="flex-container">
        <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
        <div>
            <h1><a href="Home.php"> Transformationmarket</a></h1>
            <h1><?= t('Product_title') ?></h1>
            
        </div>
        <a href="logout.php">Logout</a>

    </div>

    <div class="main">
        <h2><?= t('Add_product') ?></h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="productName"><p><?= t('Product_Name') ?></p></label>
            <input type="text" name="productName" required><br>

            <label for="description">Description (English):</label>
            <textarea name="description" rows="4" required></textarea><br>

            <label for="description_fr">Description (French):</label>
            <textarea name="description_fr" rows="5" required></textarea><br>

            <label for="price"><p><?= t('Add_product_price') ?></p></label>
            <input type="text" name="price" id="priceInput" value="$0.00" required pattern="\$\d+(\.\d{2})?"><br>

            <label for="image">Image (PNG only):</label>
            <input type="file" name="image" accept=".png" required><br>

            <input type="submit" value="<?= t('Add_product') ?>">
        </form>

    </div>

    <footer>
        <p>HTML Nogueira Dos Santos Dominic 2024</p>
    </footer>
</body>

</html>
