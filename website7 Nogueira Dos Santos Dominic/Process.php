<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> welcome
        <?php
        print($_GET['Usersname']);
        print('<br>');
        $number = ($_GET["number1"]);
        $number2 = ($_GET["number2"]);
        print("The result is " . $number + $number2)


        


?>
    </h1>
    
</body>
</html>