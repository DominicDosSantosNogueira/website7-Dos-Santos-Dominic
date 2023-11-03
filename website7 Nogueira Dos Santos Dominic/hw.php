<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
            display: inline-block;
        }

        .RedBox {
            width: 10px;
            height: 10px;
            background-color: red;
        }

        .GreenBox {
            width: 10px;
            height: 10px;
            background-color: green;
        }
    </style>
</head>
<body>
<?php
for ($line = 1; $line <= 10; $line++) {
    echo '<div class="line">';
    for ($box = 1; $box <= $line; $box++) {
        $boxClass = $box % 2 == 0 ? 'GreenBox' : 'RedBox';
        echo '<div class="box ' . $boxClass . '"></div>';
    }
    echo '</div>';
}
?>
</body>
</html>
