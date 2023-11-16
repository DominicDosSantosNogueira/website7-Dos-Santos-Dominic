<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
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
            if ($userData[0] == $_POST["UserName"] && ($userData[1]) == $_POST["Password"]) {
                $userExists = true;
            }
        }
        fclose($fileHandle);

        if ($userExists) {
            print ("Login successful! Welcome, ") . ($_POST["UserName"]) . ".";
        } else {
            print( "Invalid username or password. Please try again.");
            $visibleForm = true;
        }
    }

    if ($visibleForm) {
    ?>
        <form method="POST">
            <div>
                Type your Username:
                <input type="text" name="UserName">
            </div>
            <div>
                Type your Password
                <input type="password" name="Password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    <?php
    }
    ?>
</body>

</html>
