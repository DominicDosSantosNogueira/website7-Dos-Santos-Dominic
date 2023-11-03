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
    $num1 = 0;
    $num2 = 1;
    $num3 = 0;

    while( $num3 < 10000){
        $num3 = $num1 + $num2 ;
        $num1 = $num2;
        $num2 = $num3; 
        print $num1;
        print "<br>";



    }

    
    ?>


</body>

</html>