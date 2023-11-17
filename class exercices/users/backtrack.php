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

    $arrOfPossibles = ["a", "b", "c"];
    for ($i = 0; $i < count($arrOfPossibles); $i++) {
        for ($j = 0; $j < count($arrOfPossibles); $j++) {
            for ($k = 0; $k < count($arrOfPossibles); $k++) {
       print($arrOfPossibles[$i] . $arrOfPossibles[$j] . $arrOfPossibles[$k] . "<br>");
        }
    }
}
    ?>
</body>
</html>