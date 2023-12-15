<!DOCTYPE html>
<html>

<head>
  <!-- Head content -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 4;
  include '../navi.txt';
  navBar($activePage, $language);
  
include("content_" . strtolower($language) . ".txt");

  ?>
</head>

<body style="font-family: Verdana; color: #0f0c0c;">

  <div style="background-color: #e5e5e5; padding: 15px; text-align: center;" class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="Home.php"> Transformationmarket</a></h1>
      <h1><?= $members_title ?></h1>
    </div>

    <a href="../LoginRegister.php"><button>Login/Register</button></a>
  </div>

  <div class="table">
    <table>
      <tr>
        <th><?= $members_table_header[0] ?></th>
        <th><?= $members_table_header[1] ?></th>
        <th><?= $members_table_header[2] ?></th>
      </tr>
      <?php foreach ($members_table as $row) : ?>
        <tr>
          <td><?= $row[0] ?></td>
          <td><?= $row[1] ?></td>
          <td><a href="mailto:<?= $row[2] ?>"><?= $row[2] ?></a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2024</p>
  </footer>

</body>

</html>
