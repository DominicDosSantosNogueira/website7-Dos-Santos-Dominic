

<!DOCTYPE html>
<html>

<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 2;
  include '../navi.php';
  navBar($activePage, $language);
include("content_" . strtolower($language) . ".php");

  ?>
</head>

<body style="font-family: Verdana; color: #0c0b0b;">

  <div style="background-color: #e5e5e5; padding: 15px; text-align: center;" class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="../Home.php"> Transformationmarket</a></h1>
      <h1><?= $about_title ?></h1>
    </div>

    <a href="../LoginRegister.php"><button>Login/Register</button></a>
  </div>

  <div class="main">
    <h2>Transformation Market</h2>
    <p><?= $about_description ?></p>
    <h3><?= $updates_title ?></h3>
    <p><?= $updates_description ?></p>
  </div>

  <div class="right">
    <h2><?= $ui_title ?></h2>
    <img src="../Media/UI.png" width="500vw">
  </div>

  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2022</p>
  </footer>

</body>

</html>