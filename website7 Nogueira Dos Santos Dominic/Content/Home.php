<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Media/Homecss.css">
    <link rel = "stylesheet" type = "text/css" href = "myStyle.css?val=<?= time(); ?>" />
    <?php
  $activePage = 1; 
  include '../navi.txt';
  navBar($activePage, $language);
  include("content_" . strtolower($language) . ".txt");
  ?>
    
    <div style="overflow:auto">
  

</head>

<body style="font-family:Verdana;color:#0c0b0b;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">
  <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
  <h1><a href="Home.php"></a> Transformationmarket</h1>
  <div2>
  <a href="../LoginRegister.php"><button>Login/Register</button></a>
  
</div2>

  
</div>




  
  
  <div class="main">
    <p><?= $home_description ?></p>
    <h3><?= $home_explanation ?></h3>
    
  </div>
    <h3>Bankais</h3>
    <img src="../Media/Bankai examples.jpg" width="700vw"> 

  </div>

 
    
    
  
</div>


<footer>
  <p>HTML Nogueira Dos Santos Dominic 2024</p>
</footer>

</body>

</html>