<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Page</title>
</head>
<body>

<?php
$visibleLoginForm = true;
$visibleRegistrationForm = true;

if (isset($_POST["UserName"], $_POST["Password"])) {
    $visibleLoginForm = false;
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
        print("Login successful! Welcome, " . $_POST["UserName"] . ".");
        // Redirect to Home.php after successful login
        header("Location: Home.php");
        exit();
    } else {
        print("Invalid username or password. Please try again.");
        $visibleLoginForm = true;
    }
}

if (isset($_POST["UserName"], $_POST["Password"], $_POST["PasswordAgain"])) {
    $visibleRegistrationForm = false;
    if ($_POST["Password"] == $_POST["PasswordAgain"]) {
        $userIsValid = true;
        if ($_POST["Password"] == "") {
            $userIsValid = false;
        }

        if ($userIsValid) {
            // Check if the username is already taken
            $fileHandle = fopen("User.txt", "r");
            while (!feof($fileHandle) && $userIsValid) {
                $userLine = fgets($fileHandle);
                $userData = explode(";", $userLine);
                if ($userData[0] == $_POST["UserName"]) {
                    $userIsValid = false;
                }
            }
            fclose($fileHandle);

            if ($userIsValid) {
                print("You will be registered to our system");
                print("Passwords match! :).");
                
                // Redirect to Home.php after successful registration
                header("Location: Home.php");
                exit();
            } else {
                print("Invalid User data");
            }
        } else {
            print("Invalid User data");
        }
    } else {
        $visibleRegistrationForm = true;
        ?>
        <script>
            alert("Your passwords do not match.");
        </script>
        <?php
    }
}

if ($visibleLoginForm) {
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

if ($visibleRegistrationForm) {
    ?>
    <form method="POST">
        <div>
            Please type a Username:
            <input type="text" name="UserName">
        </div>
        <div>
            Please type a Password:
            <input type="password" name="Password">
        </div>
        <div>
            Please type the same Password:
            <input type="password" name="PasswordAgain">
        </div>
        <div>
            Please choose your country of residence:
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
