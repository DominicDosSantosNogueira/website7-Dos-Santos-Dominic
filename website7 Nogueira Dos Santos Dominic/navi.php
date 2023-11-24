<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        else  print "Accueil"; ?>  </a>
        <a class=" <?php
      if ($activePage == 1) print("active");
      else  print("inactive");
      ?> " href="About.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Home";
        else  print "Sur"; ?>  </a>
        <a class=" <?php
      if ($activePage == 1) print("active");
      else  print("inactive");
      ?> " href="Contact.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Home";
        else  print "Contact"; ?>  </a>
        <a class=" <?php
      if ($activePage == 1) print("active");
      else  print("inactive");
      ?> " href="Members.php?lang=<?= $language ?>"> <?php if ($language == "EN")  print "Home";
        else  print "Membres"; ?>  </a>
      

      

<?php 
if ($language ==  "EN") {

?>
      <a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang = FR ">Francais</a>
      <?php
  } else {
    ?>
          <a class="inactive" href="<?= $_SERVER["PHP_SELF"] ?>?lang = EN ">English</a>
<?php
  }

  ?>
  
    <div style="overflow:auto">
      <ul>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="Members.php">Members</a></li>
      </ul>


</body>

</html>