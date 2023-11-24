<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main">
    <h2>Transformations</h2>

    <div class="AllProducts">

      <?php
      // Open a file 
      $handle = fopen('Book3.csv', 'r');
      fgets( $handle );

      while (!feof($handle)) {
        $line = fgets($handle); // this will read one line of text from the csv
        ?>
        <?php

          //print($line . "<br>");
        $Columns = explode(";", $line);
        ?>

        <?php
      }
      // read from teh file - line by line 
      // close the file
      fclose($handle);
      ?>

    </div>
</body>
</html>