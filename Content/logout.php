
<?php
$activePage = 8;
include 'navi.txt';
// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();
navBar($activePage, $language);
// Redirect to the login page or any other page as needed
header("Location: Loginregister.php");
exit;
?>

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