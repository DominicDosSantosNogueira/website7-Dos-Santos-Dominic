

<!DOCTYPE html>
<html>

<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 2;
  include 'navi.php';
  navBar($activePage, $language);
  

  ?>
</head>

<body style="font-family: Verdana; color: #141212;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">
  <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
  <h1><a href="Home.php"></a> Transformation Market</h1>
  <div2>
  <?php
  if (isset($_SESSION['UserId'])) {
    echo '<a href="logout.php">Logout</a>';
  }
  ?>
</div2>

  
    

  </div>

  <div class="main">
    <h2>Transformation Market</h2>
    <p><?= t('about_description') ?></p>
    <p><?= t('Aboutupdates') ?></p>
    <p><?= t('Aboutupdates2') ?></p>
  </div>

  <div class="right">
  <p><?= t('ui_title') ?></p>
    <img src="../Media/uploads/UI.png" width="500vw">
  </div>

  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2024</p>
  </footer>

</body>

</html>