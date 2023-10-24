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
$arrayofnumbers = array("one","two","three","four","five","six",);
if (isset ($_GET["cars"])) {
    if (is_numeric ($_GET["cars"])) {
        print("you selected:" . $arrayofnumbers[$_GET["cars"]] );
    }
}
?>
    <form  method="GET">
        <select name="cars" >
            <?php
            for ($i = 0; $i < count($arrayofnumbers); $i++) {
                ?>
                <option <?php
                if (isset($_GET["cars"])){
                    if ($_GET["cars"] == $i ) {
                        print("selected");
                    }
                }
                ?> value = " <?= $i ?>" > <?= $arrayofnumbers[$i]?> </option>;
                <?php
            }
            ?>


        </select>
    </form>
    

    
</body>
</html>