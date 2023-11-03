<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            width: 100px;
            height: 100px;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <form method="GET">
        <select name="colorChoice">
            <option value='red'>red</option>
            <option value='blue'>blue</option>
            <option value='green'>green</option>
            <option value='yellow' selected>yellow</option>
            <option value='orange'>orange</option>
            <option value='purple'>purple</option>
            <option value='pink'>pink</option>
            <option value='brown'>brown</option>
            <option value='black'>black</option>
            <option value='white'>white</option>
            
        </select>
        <input type="submit" value="Change color">
    </form>
    <?php
    $color = isset($_GET["color"]) ? $_GET["color"] :"colorChoice";
    echo "<div style='background-color: $color;'></div>";
    



?>


    

    </div>

</body>

</html>