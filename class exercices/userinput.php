<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_GET["number1a"], $_GET["number2a"])) {
    if (is_numeric($_GET["number1a"]) && is_numeric(($_GET["number2a"]))){

    
print ($_GET["number1a"]);
print ("+");
print ($_GET["number2a"]);
print ("=");
$sum = $_GET["number1a"] + $_GET["number2a"];
print ("$sum");
    }
} 
    if (isset($_GET["number1b"], $_GET["number2b"])) {
        if (is_numeric($_GET["number1b"]) && is_numeric(($_GET["number2b"]))){
        print ($_GET["number1b"]);
        print ("-");
        print ($_GET["number2b"]);
        print ("=");
        $diff = $_GET["number1b"] - $_GET["number2b"];
        print ("$diff");
        }

    }

?>
<br>
Add:
    <form method="GET" >
        enter 2 numbers
        <input type="number" name="number1a">
        <input type="number" name="number2a">
        <input type="submit" value="Submit">






</form>
Subtract :
<form method="GET" >
        
        enter 2 numbers
        <input type="number" name="number1b">
        <input type="number" name="number2b">
        <input type="submit" value="Subtract">


    
</body>
</html>