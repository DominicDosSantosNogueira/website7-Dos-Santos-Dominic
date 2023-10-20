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
    if (isset($_GET["GO"])) {
    } else {
        ?>
        <form method="GET">

<input type="submit" name = "GO" value="Vanish">
</form>
    
        <?php
    }
    /*
 Create one single php form that will initially display an input box and a submit button, 
 when the user clicks on the submit button the page refreshes and 
 you have to use the value of what the user typed in the input box to display a number of colored boxes equal to the user input
*/
?>
    
</body>
</html>