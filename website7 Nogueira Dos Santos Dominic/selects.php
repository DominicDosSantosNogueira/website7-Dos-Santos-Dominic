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
    // HTML Select boxes
    $arrayofcolors = array("red", "green", "yellow", "blue", "pink", "purple");
    ?>
    <form method="GET">
        <select name="color">
            <?php
            for ($i = 0; $i < count($arrayofcolors); $i++) {
                echo '<option value="' . $i . '">' . $arrayofcolors[$i] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="GO">
    </form>
</body>
</html>
