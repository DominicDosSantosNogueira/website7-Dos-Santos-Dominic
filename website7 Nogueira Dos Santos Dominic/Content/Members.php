<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../Media/Homecss.css">
<link rel = "stylesheet" type = "text/css" href = "myStyle.css?val=<?= time(); ?>" />
<?php
  $activePage = 4; 
  include '../navi.php';
  navBar($activePage, $language);?>
</head>
<body style="font-family:Verdana;color:#0f0c0c;">

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
    <h1><a href="../Home.php"> Transformationmarket</a></h1>
    <h1>Members</h1>
  </div>
  <h1><a href="../Content/Membres.php"><img src="../Media/France.png" width="150vw"></a></h1>
  <a href="../LoginRegister.php"><button>Login/Register</button></a>
  </div>




  <div class="table">
    
    <table>
        <tr>
          <th>Members</th>
          <th>Position</th>
          <th>E-mail</th>
        </tr>
        <tr>
          <td>Son-Goku</td>
          <td>Leader</td>
          <td><a href="mailto:kakarott@gmail.ve">kakarott@gmail.ve</a></td>
        </tr>
        <tr>
          <td>Ichigo Kurosaki</td>
          <td>Big Three</td>
          <td><a href="mailto:Ichigo@gmail.ka">Ichigo@gmail.ka</a></td>
        </tr>
        <tr>
          <td>Naruto Uzumaki</td>
          <td>Big Three</td>
          <td><a href="mailto:Hogake@gmail.ko">Hogake@gmail.ko</a></td>
        </tr>
        <tr>
          <td>Mokey D. Ruffy</td>
          <td>Big Three</td>
          <td><a href="mailto:Pirateking@gmail.gl">Pirateking@gmail.gl</a></td>
        </tr>
        <tr>
          <td>Gon</td>
          <td>New Gen</td>
          <td><a href="mailto:father@gmail.com">father@gmail.com</a></td>
        </tr>
        
      </table>




    
   
  </div>
  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2022</p>
  </footer>



</body>

</html>