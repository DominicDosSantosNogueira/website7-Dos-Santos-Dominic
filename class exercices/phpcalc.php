<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<?php
$showForm = true; 
$userLine = 0;


if(isset($_POST['compute'])) {
    $fileHandle = fopen("cals.txt", "r");
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
        
    } 

    print "<p>Result: $result</p>";


    $ex;
    $showForm = false;

    $fileHandle = fopen("cals.txt" , "a");
    fwrite($fileHandle, " $num1 " . " $operation " . " $num2 "  . " = ". " $result " . "\n");
    fclose($fileHandle);
    $fileHandle = fopen("cals.txt" , "r");
    if ($fileHandle) {
        while (($line = fgets($fileHandle)) !== false) {
            echo "<br>" . $line ; }
        fclose($fileHandle);
    }
    


}
?>

<form action="" method="post" <?php if (!$showForm) print 'class="hidden"'; ?>>
    <label for="num1">Enter number 1:</label>
    <input type="number" name="num1" id="num1" required>

    <label for="operation">Select operation:</label>
    <select name="operation" id="operation" required>
        <option value="add">Addition (+)</option>
        <option value="subtract">Subtraction (-)</option>
        <option value="multiply">Multiplication (*)</option>
        <option value="divide">Division (/)</option>
    </select>

    <label for="num2">Enter number 2:</label>
    <input type="number" name="num2" id="num2" required>

    <button type="submit" name="compute">Compute</button>

</form>

</body>
</html>
