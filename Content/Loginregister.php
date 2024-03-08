<?php
session_start();

// Function to validate user credentials
function validateUser($username, $password, $userData) {
    foreach ($userData as $user) {
        $userInfo = explode(";", $user);
        if ($userInfo[0] === $username && password_verify($password, $userInfo[1])) {
            return true;
        }
    }
    return false;
}

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: Home.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Read user data from file
    $userData = file("user.txt", FILE_IGNORE_NEW_LINES);
    
    // Validate login credentials
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (validateUser($username, $password, $userData)) {
        // Authentication successful, set session variables
        $_SESSION['username'] = $username;
        header("Location: Home.php");
        exit;
    } else {
        $loginError = "Invalid username or password. Please try again.";
    }
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['newUsername'];
    $password = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
    
    // Append new user data to the file
    file_put_contents("user.txt", "$username;$password;Luxembourg\n", FILE_APPEND);
    $_SESSION['username'] = $username;
    header("Location: Home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
</head>
<body>

<h2>Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php if (isset($loginError)) echo "<p>$loginError</p>"; ?>

<h2>Register</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="newUsername">New Username:</label><br>
    <input type="text" id="newUsername" name="newUsername" required><br>
    <label for="newPassword">New Password:</label><br>
    <input type="password" id="newPassword" name="newPassword" required><br><br>
    <input type="submit" name="register" value="Register">
</form>

</body>
</html>
