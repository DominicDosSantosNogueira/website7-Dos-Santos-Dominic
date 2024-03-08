<?php
session_start();

// Check if the user is logged in or not
if (!isset($_SESSION["UserLoggedIn"])) {
    $_SESSION["UserLoggedIn"] = false; // Initialize the session variable to false
}

// Log in the user if a username is provided via GET request
if (isset($_GET["UserName"]) && !empty($_GET["UserName"])) {
    $_SESSION["UserLoggedIn"] = true;
    $_SESSION["UserName"] = $_GET["UserName"];
}

// Log out the user if the "Logout" parameter is provided via GET request
if (isset($_GET["Logout"])) {
    $_SESSION["UserLoggedIn"] = false;
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: Home.php"); // Redirect the user to the welcome page after logout
    exit(); // Stop executing the script
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>

<body>

    <?php
    if (!$_SESSION["UserLoggedIn"]) {
        ?>
        <h1>You are not recognized. Please Login:</h1>
        <form method="GET">
            Please type your name:
            <input name="UserName">
            <input type="submit" value="Login">
        </form>
    <?php
    } else {
        ?>
        <h1>Welcome back, <?= $_SESSION["UserName"] ?> </h1>
        <form method="GET">
            <input type="submit" name="Logout" value="Logout">
        </form>
    <?php
    }
    ?>

</body>

</html>
