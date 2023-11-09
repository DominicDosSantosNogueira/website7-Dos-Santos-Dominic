<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../Media/Homecss.css">
<?php include '../navi.php';?>
</head>
<body style="font-family:Verdana;color:#0f0d0d;">

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;"class="flex-container">
    <h1><a href="https://maison-orientation.public.lu/de/etudes/portes-ouvertes-des-lycees-luxembourg/ecoles-privees-luxembourg/lpem.html"><img src="../Media/Emile metz icon.png" width="150vw"></a></h1>
    <div>
    <h1><a href="../Home.php"> Transformationmarket</a></h1>
    <h1>Products</h1>
  </div>
  <h1><a href="../Content/Produits.php"><img src="../Media/France.png" width="150vw"></a></h1>
  
  </div>




  <div class="main">
    <h2>Transformations</h2>

    <div class = "AllProducts">

    <?php
    // Open a file 
    $handle = fopen('Book3.csv','r');
    while (!feof($handle))  {
      $line = fgets($handle);  // this will read one line of text from the csv
      print($line . "<br>");
    }
    // read from teh file - line by line 
    // close the file
fclose($handle);
    ?>
      <div class = "OneProduct">
        <div> Garlic</div>
        <div> Price: 4 Euro / piece </div>
        <div> description: it kills vampires </div>
        <img src="">
    </div>
<ul2>
  <li>Ultra Instinct</li><p>Gives you a white Aura and allows you to dodge everything 10000$</p>
  <li>Full Power</li><p>Lets you go beyond you maximal strenght 5000$</p>
  <li>Super Sayian 1</li><p>Makes your hair glow yellow and increases your strenght 6000$</p>
  <li>Super Sayian 4</li><p>Makes you go into a super sayian with Ozaru power and red monkeyfur 8000$</p>
  <li>Ozaru</li><p>Lets you transform into a giant monkey with massive power 3000$</p>
  <li>Gohan Blanco</li><p>Makes your hair white and absurdly long 30000$</p>
  
</ul2> 

<h3>Weapon Transformations</h3>

<ul3>
  <li>Bankai</li><p>Awakens your sword to a stronger force with secret abilities 1000$</p>
  <li>Shikai</li><p>Basis Power for any sword 500$</p>
  <li>Fire Breathing</li><p>Embedes your sword with a flamming aura 600$</p>
  <li>Water Breathing</li><p>Embedes your sword with cutting flowing water 800$</p>
  <li>Beyond Bankai</li><p>Evolves your Bankai beyond its initial power 2000$</p>
  
</ul3>



   
  </div>
  
  <footer>
    <p>HTML Nogueira Dos Santos Dominic 2022</p>
  </footer>



</body>

</html>