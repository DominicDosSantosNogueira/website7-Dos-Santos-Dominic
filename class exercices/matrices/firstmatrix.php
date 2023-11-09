<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            display: inline-block;
            width: 10px;
            height: 10px;
            padding: 10px;

        }
        .red{
            background-color: red;
            
        }
        .green{
            background-color: green;
        }
    </style>
</head>

<body>
    <?php

    /*
    $matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12],
];

    */

    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];


    $n = 10;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $i ; $j++) {
            if (($i + $j )% 2== 0){
                print("<div class= 'box red'> </div>");
            } else {
                print("<div class= 'box green'> </div>");
            }

           print("<div class= 'box'> </div>");
            print(" ");



    }
    print "<br>";
}








for ($i = 0; $i < count($matrix); $i++) {
    for ($j = $i; $j < count($matrix[$i]); $j++) {
        print( $matrix[$i][$j]);
        print(" ");



}
print "<br>";
}
    ?>
</body>

</html>