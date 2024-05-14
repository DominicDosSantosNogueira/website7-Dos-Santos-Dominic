<?php
$activePage = 7; 

include 'navi.php';
navBar($activePage, $language);

// Function to validate user credentials
function validateUser($loginUsername, $loginPassword, $conn) {
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $loginUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($loginPassword, $user['password_hash'])) {
            return $user['UserId']; // Return the user's ID
        }
    }
    return false;
}
function getuserrole($username, $conn) {

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user['UserRole'];
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
    // Validate login credentials
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];
    $userId = validateUser($loginUsername, $loginPassword, $conn);
    if ($userId !== false) {
        // Authentication successful, set session variables
        $_SESSION['username'] = $loginUsername;
        $_SESSION['UserId'] = $userId; // Set the user's ID
        $_SESSION['UserRole'] = getuserrole($loginUsername, $conn);
        header("Location: Home.php");
        exit;
    } else {
        $loginError = "Invalid username or password. Please try again.";
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $registerUsername = $_POST['newUsername'];
    $registerPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
    
    // Insert new user data into the database
    $sql = "INSERT INTO users (username, password_hash) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $registerUsername, $registerPassword);
    $stmt->execute();

    // Get the ID of the newly inserted user
    $userId = $conn->insert_id;

    $_SESSION['username'] = $registerUsername;
    $_SESSION['UserId'] = $userId; // Set the user's ID
    header("Location: Home.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Media/Homecss.css">

    <title>Login/Register</title>
    <div style="overflow:auto">
</head>
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
<body>

<h2><?= t('Login_button') ?></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username"><?= t('Login_type_username') ?></label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password"><?= t('Login_type_password') ?></label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" name="login" value="<?= t('Login_button') ?>">
</form>


<?php if (isset($loginError)) echo "<p>$loginError</p>"; ?>

<h2><?= t('Register_button') ?></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="newUsername"><?= t('Login_type_username') ?></label><br>
    <input type="text" id="newUsername" name="newUsername" required><br>
    <label for="newPassword"><?= t('Login_type_password') ?></label><br>
    <input type="password" id="newPassword" name="newPassword" required><br><br>
    <input type="submit" name="register" value="<?= t('Register_button') ?>">
</form>

</body>
</html>
