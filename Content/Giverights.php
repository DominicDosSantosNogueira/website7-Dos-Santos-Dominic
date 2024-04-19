<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
    <title>Change User Role</title>
<?php
    $activePage = 8; 
include 'navi.php';
navBar($activePage, $language);
?>

<div style="overflow:auto">

</head>

<body style="font-family:Verdana;color:#0c0b0b;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">
  <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
  <h1><a href="Home.php"></a> Transformationmarket</h1>
  <div2>
  <a href="logout.php">Logout</a>
  
</div2>

  
</div>

<?php

// Check if user is logged in and is an admin
if (!isset($_SESSION['username']) || $_SESSION['UserRole'] != 'admin') {
    header("Location: Loginregister.php"); // Redirect to login page if not logged in or not admin
    exit();
}

// Include database connection file


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user ID and new role from form
    $userId = $_POST["userId"];
    $newRole = $_POST["newRole"];

    // Update user's role in the database
    $sql = "UPDATE users SET UserRole = ? WHERE UserId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newRole, $userId);
    if ($stmt->execute()) {
        echo "User role updated successfully.";
    } else {
        echo "Error updating user role.";
    }
    $stmt->close();
}

// Retrieve list of users from the database
$sql = "SELECT UserId, username, UserRole FROM users";
$result = $conn->query($sql);
?>



<body>
    <h2>Change User Role</h2>
    <form method="post">
        <label for="userId">Select User:</label>
        <select name="userId" id="userId">
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['UserId'] . "'>" . $row['username'] . " - " . $row['UserRole'] . "</option>";
            }
            ?>
        </select>
        <br>
        <label for="newRole">New Role:</label>
        <select name="newRole" id="newRole">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        <br>
        <input type="submit" value="Update Role">
    </form>
</body>

</html>
