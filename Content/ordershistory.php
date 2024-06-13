<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Media/Homecss.css">
    <link rel = "stylesheet" type = "text/css" href = "myStyle.css?val=<?= time(); ?>" />
    <?php
  $activePage = 10; 
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
if(!isset($_SESSION["username"])){
    header("location: loginregister.php");
    exit;
}

$userId = $_SESSION['UserId'];
$userRole = $_SESSION['UserRole'];


$sql = ($userRole == 'admin') ? "SELECT * FROM `orderview`" : "SELECT * FROM `orderview` WHERE UserId = $userId";
$result = $conn->query($sql);

$totalPrice = 0;

if ($result->num_rows > 0) {
    echo "<table>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach($row as $column => $value) {
            echo "<td>";
            if ($column == 'Image') {
                echo $column . ": <img src='../Media/uploads/" . $value . "' alt='Image' style='width:200px; height:200px;'>";
            } else {
                echo $column . ": " . $value;
            }
            echo "</td>";
            if ($column == 'Price' && $row['status'] == 'Processed') {
                $totalPrice += $value;
            }
        }
        if ($userRole == 'admin' && $row['status'] == 'Pending') {
            echo "<td>";
            echo "<a href='confirmOrder.php?orderId=" . $row["OrderId"] . "'>Confirm Order</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "Total Price: " . $totalPrice;
} else {
    echo "No orders found.";
}
?>

</body>
</html>

</body>
</html>

</body>
</html>