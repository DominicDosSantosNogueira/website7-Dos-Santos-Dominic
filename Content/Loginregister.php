<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Media/Homecss.css">
    <?php
  $activePage = 7;
  include 'navi.txt';
  navBar($activePage, $language);
  ?>
   
</head>

<body style="font-family:Verdana;color:#0c0b0b;">
<div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">

  <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
  <div>
  <h1><a href="Home.php"></a> Transformationmarket</h1>
  <h1><?= $arrayOfStrings["Login"] ?></h1>
  </div>
  <a href="LoginRegister.php"><button><?= $arrayOfStrings["Login/Register"]   ?></button></a>

  </div>
    <?php
    $visibleForm = true;

    if (isset($_POST["UserName"], $_POST["Password"])) {
        $visibleForm = false;
        $userExists = false;
    
        // Check if the entered username and password match any user in the file
        $fileHandle = fopen("User.txt", "r");
        while (!feof($fileHandle) && !$userExists) {
            $userLine = fgets($fileHandle);
            $userData = explode(";", $userLine);
            if ($userData[0] == $_POST["UserName"] && password_verify($_POST["Password"], trim($userData[1]))) {
                $userExists = true;
            }
        }
        fclose($fileHandle);
    
        if ($userExists) {
            print("Login successful! Welcome, " . htmlspecialchars($_POST["UserName"]) . ".");
        } else {
            print("Invalid username or password. Please try again.");
            $visibleForm = true;
        }
    }
    

    if ($visibleForm) {
    ?>
        <form method="POST">
            <div>
            <?= $arrayOfStrings["Login_type_username"] ?>
                <input type="text" name="UserName">
            </div>
            <div>
            <?= $arrayOfStrings["Login_type_password"] ?>
                <input type="password" name="Password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    <?php
    }
    ?>
    <?php
    
    $visibleForm = true;
 
    if (isset($_POST["UserName"], $_POST["Password"], $_POST["PasswordAgain"])) {
        $visibleForm = false;
        if ($_POST["Password"] == $_POST["PasswordAgain"]) {
            $userIsValid = true;
            if ($_POST["Password"] == "") {
                $userIsValid = false;
            }
 
            if ($userIsValid){
 
                // before writing the new user, we need to make sure that this username is NOT already taken/used.
                $fileHandle = fopen("User.txt", "r");
               
                while (!feof($fileHandle) && $userIsValid) {
                    $userLine = fgets($fileHandle);
                    $userData = explode(";", $userLine);
                    if ($userData[0] == $_POST["UserName"]) {
                        $userIsValid = false;
                    }
                }
                fclose($fileHandle);
            }
 
            if ($userIsValid) {
                print("You will be registered to our system");
                print("Passwords match! :).");
 
                $fileHandle = fopen("User.txt", "a");
                $hashedPassword = password_hash($_POST["Password"], PASSWORD_DEFAULT);
$newLineForUser = $_POST["UserName"] . ";" . $hashedPassword . ";" . $_POST["Country"] . "\n";

                fputs($fileHandle, $newLineForUser);
                fclose($fileHandle);
            } else {
                print("Invalid User data");
            }
        } else {
            $visibleForm = true;
            ?>
           
            <script>
                alert("Your passwords do not match.");
            </script>
            <?php
        }
    }
 
   
    if ($visibleForm){
?>
        <form method="POST">
            <div>
            <?= $arrayOfStrings["Login_type_username"] ?>
                <input type="text" name="UserName">
            </div>
            <div>
            <?= $arrayOfStrings["Login_type_password"] ?>
                <input type="password" name="Password">
            </div>
            <div>
                Please type the same Password:
                <input type="password" name="PasswordAgain">
            </div>
            <div>
            <?= $arrayOfStrings["Country_residence"] ?>
                <select name="Country">
                    <option>Luxembourg</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>UK</option>
                    <option>Romania</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Register">
            </div>
        </form>
<?php
    }
?>
</body>

</html>
