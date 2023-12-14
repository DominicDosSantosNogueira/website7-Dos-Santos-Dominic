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
  $language = "EN";
  //print($_server["PHP_SELF"]);
  if (isset($_GET["lang"])) {
    $language = $_GET["lang"];
  }

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
        <a class=" <?php
      if ($activePage == 5) print("active");
      else  print("inactive");
      ?> " href="Products.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Products";
        else  print "Produits"; ?>  </a>
        <a class=" <?php
      if ($activePage == 6) print("active");
      else  print("inactive");
      ?> " href="AddProduct.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Add Products";
        else  print "Ajouter produits"; ?>  </a>
      
      
  
      

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