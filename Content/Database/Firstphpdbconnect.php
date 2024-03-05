<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Goal 1 Connect to the Database
    
    

    $connection = new mysqli("localhost", "root", "", "website");   // connect to the database
  // Goal 2 Select data from my table of clients and display it

  
    $sqlQuery = $connection->prepare("SELECT * FROM clients");  // create a query
    $sqlQuery->execute();  // execute  a query

    $result = $sqlQuery->get_result();  // get result from the database

    while($row = $result->fetch_assoc()){   // we get each line from the result

        ?>
<div>Client id: <?= $row["ClientId"] ?> Client Name: <?= $row["ClientName"] ?> </div>
        <?php

    }
  
    ?>
</body>
</html>