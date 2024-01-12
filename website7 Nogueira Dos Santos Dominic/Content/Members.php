<!DOCTYPE html>
<html>

<head>
  <!-- Head content -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Media/Homecss.css">
  <link rel="stylesheet" type="text/css" href="myStyle.css?val=<?= time(); ?>" />
  <?php
  $activePage = 4;
  include 'navi.txt';
  navBar($activePage, $language);
  


  ?>
</head>

<body style="font-family: Verdana; color: #0f0c0c;">

  <div style="background-color: #e5e5e5; padding: 15px; text-align: center;" class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
      <h1><a href="Home.php"> Transformationmarket</a></h1>
      <h1><?= $arrayOfStrings["members_title"] ?></h1>
    </div>

    <a href="LoginRegister.php"><button><?= $arrayOfStrings["Login/Register"]   ?></button></a>
  </div>

  <div class="table">
    <table>
        <tr>
            <th><?= $arrayOfStrings["members_name"]   ?></th>
            <th><?= $arrayOfStrings["members_position"]   ?></th>
            <th><?= $arrayOfStrings["members_Email"]   ?></th>
        </tr>
        <?php
        $members = [
            ['Son-Goku', 'Leader', 'kakarott@gmail.ve'],
            ['Ichigo Kurosaki', 'Big Three', 'Ichigo@gmail.ka'],
            ['Naruto Uzumaki', 'Big Three', 'Hogake@gmail.ko'],
            ['Mokey D. Ruffy', 'Big Three', 'Pirateking@gmail.gl'],
            ['Gon', 'New Gen', 'father@gmail.com']
        ];

        foreach ($members as $row) :
        ?>
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
