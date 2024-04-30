<!DOCTYPE html>
<html lang="en">




<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mystyle.css">
  <title>Document</title>
</head>

<body>
  <?php
  include 'db_connection.php';

// Function to check if the user has admin role
if (!function_exists('isAdmin')) {
    // Function to check if the user has admin role
    function isAdmin($conn, $username)
    {
        $sql = "SELECT UserRole FROM users WHERE username = ? AND UserRole = 'admin'";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows === 1;
    }
}

  
  $language = "EN";
  //print($_server["PHP_SELF"]);
  if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
  }
  $_SESSION['language'] = $language; // Set the session variable

  ?>
  <?php

  
  // Check if the language is set in the session
  
  
  // Switch language if the switch button was clicked
 
  
  // Fetch translations from the database
  $sqlQuery = $conn->prepare("SELECT * FROM translations");
  $sqlQuery->execute();
  $result = $sqlQuery->get_result();
  
  // Store translations in an array
  $translations = [];
  while ($row = $result->fetch_assoc()) {
      $translations[$row['Identifier']] = $row;
  }
  
  // Function to get the translation
  function t($identifier) {
    global $translations;
    $language = $_SESSION['language'] == 'EN' ? 'English' : 'French';
    return $translations[$identifier][$language];
}
  ?>
  
 
  
  <!-- Display some text -->
  
  <?php
  function navBar($activePage, $language)
  {

    ?>
    <div class="navbar">
    <a class=" <?php
      if ($activePage == 1) print("active");
      else  print("inactive");
      ?> " href="Home.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Home";
        else  print "Maison"; ?>  </a>
        <a class=" <?php
      if ($activePage == 2) print("active");
      else  print("inactive");
      ?> " href="About.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "About";
        else  print "Sur"; ?>  </a>
        <a class=" <?php
      if ($activePage == 3) print("active");
      else  print("inactive");
      ?> " href="Contact.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Contact";
        else  print "Contact"; ?>  </a>
        <a class=" <?php
      if ($activePage == 4) print("active");
      else  print("inactive");
      ?> " href="Members.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Members";
        else  print "Membres"; ?>  </a>
        
        
        <!-- ... -->
<a class="<?php
if ($activePage == 5) print("active");
else  print("inactive");
?>" href="Products.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Products";
else  print "Produits"; ?>  </a>

<?php
if (isset($_SESSION['UserRole']) && $_SESSION['UserRole'] == 'admin') {
?>
    <a class="<?php
    if ($activePage == 6) print("active");
    else  print("inactive");
    ?>" href="AddProduct.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Add Products";
    else  print "Ajouter des produits"; ?></a>

<a class="<?php
if ($activePage == 8) print("active");
else  print("inactive");
?>" href="Giverights.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Giverights";
else  print "Donner droits"; ?>  </a>
<?php
}
?>

<a class="<?php
if ($activePage == 7) print("active");
else  print("inactive");
?>" href="Loginregister.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Login/Register";
else  print "Connecter/Enregistrer"; ?>  </a>
<a class="<?php
if ($activePage == 9) print("active");
else  print("inactive");
?>" href="Shopping cart.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Shopping cart";
else  print "Carte de shopping"; ?>  </a>



        

        
      
      
  
      

      <?php 
if ($language ==  "EN") {
?>
<a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang=FR">Francais</a>
<?php
} else {
?>
<a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang=EN">English</a>
<?php
}
  }
?>

  
   


</body>

</html>