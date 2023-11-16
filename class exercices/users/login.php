<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
<?php
    //var_dump($_GET);
    //var_dump($_POST);
    $visibleForm = true;
    $existingUser = false;
 
    if (isset($_POST["UserName"], $_POST["Password"], $_POST["PasswordAgain"])) {
        $visibleForm = false;
        if ($_POST["Password"] == $_POST["Password"]) {
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
                Please type your Username:
                <input type="text" name="UserName">
            </div>
            <div>
                Please type your Password:
                <input type="password" name="Password">
            </div>
            <div>
                Please choose your country of residence:
                <select name="Country">
                    <option>Luxembourg</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>UK</option>
                    <option>Romania</option>
                    <option> Belgium </option>
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