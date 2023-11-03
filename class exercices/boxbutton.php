<!DOCTYPE html>
<html>
<head>
    <style>
        .colored-box {
            width: 50px;
            height: 50px;
            margin: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>

<?php
if (isset($_GET['submit'])) {
    $inputValue = isset($_GET['input_value']) ? intval($_GET['input_value']) : 0;

    
    for ($i = 0; $i < $inputValue; $i++) {
        $randomColor = sprintf("#ff0000"); 
        echo "<div class='colored-box' style='background-color: $randomColor;'></div>";
    }
}
?>

<form method="GET">
    <label for="input_value">Enter a number:</label>
    <input type="text" name="input_value" id="input_value">
    <input type="submit" name="submit" value="Generate Boxes">
</form>

</body>
</html>
