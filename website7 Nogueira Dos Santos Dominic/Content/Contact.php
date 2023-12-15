<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 3;
  include '../navi.txt';
  navBar($activePage, $language);
  include("content_" . strtolower($language) . ".txt");
  ?>
</head>

<body style="font-family: Verdana; color: #141212;">

  <div style="background-color: #e5e5e5; padding: 15px; text-align: center;" class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="Home.php"> Transformationmarket</a></h1>
      <h1><?= $contact_title ?></h1>
    </div>

    <a href="../LoginRegister.php"><button>Login/Register</button></a>
  </div>

  <div class="main">
    <h1><?= $location_title ?></h1>
    <p><?= $location_description ?></p>
    <p><a href="mailto:<?= $support_email ?>"><?php if ($language == "EN") echo "Send email for support"; else echo "Envoyer un email pour le support"; ?></a></p>
    <p>Phone Number: <?= $phone_number ?></p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.0818350815193!2d-5.860862685353478!3d35.77336608017295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c787f895494a7%3A0xcc477e79633915!2sJojo%20Land!5e0!3m2!1sen!2slu!4v1651656815743!5m2!1sen!2slu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2024</p>
  </footer>

</body>

</html>
