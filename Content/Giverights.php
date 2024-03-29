<?php
$activePage = 8; 
include 'navi.txt';
navBar($activePage, $language);

// Check if user is logged in and is an admin
if (!isset($_SESSION['username']) || $_SESSION['UserRole'] == 'admin') {
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change User Role</title>
</head>

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
