<?php

session_start();
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>
<!DOCTYPE html> 
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nautica Shop</title>

<!--CSS FILE custom-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
<!--BOOSTRAP-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- FOnt awesome CDN (iconite)-->
<script src="https://kit.fontawesome.com/44b5d1b3d8.js" crossorigin="anonymous"></script>
<!-- Google FOnts-->
<link href="https://fonts.googleapis.com/css?family=Gotu|Gugi|Lobster|Open+Sans|Roboto&display=swap" rel="stylesheet">
<!-- Slick-->
<link rel="stylesheet" type="text/css" href="slick.css">

<link rel="stylesheet" type="text/css" href="css/shops.css">
</head>
<body>
 
    <header>
      <?php
      include("includes/header.php")
      ?>
    </header>

<section> 
  
  
<div class="main-c">
<div id="content" class="container-fluid">
  <div class="row">
      <div class="col-sm-3">
          <?php include("includes/sidebar.php")?>
      </div>
      <div class="col-sm-9">
          <div class="row">
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Kite/Placi/1.png" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                            Cască sporturi de apă Mystic Predator Helmets
                
                       </p>
                  </a>
                <h3 class="pret">300 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/2.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Costum neopren bărbați Mystic Star Fullsuit 5/4 Bzip Men
                       </p>
                  </a>
                <h3 class="pret">890 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/3.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Costum neopren femei Mystic Diva 3/2 Bzip Women
                
                       </p>
                  </a>
                <h3 class="pret">950 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/4.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Vestă wake bărbați Mystic Shred Impact Vest Fzip Wake
                
                       </p>
                  </a>
                <h3 class="pret">650 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/5.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Prosop poncho adulţi Mystic Poncho Allover Black/Lime
                
                       </p>
                  </a>
                <h3 class="pret">360 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/6.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Placă de kiteboarding NOBILE NHP Split Foil 2020
                       </p>
                  </a>
                <h3 class="pret">5.111 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/7.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Șnur securizare șapcă Magic Marine Cap Leash
                
                       </p>
                  </a>
                <h3 class="pret">15 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
  
    </div>
  
    <div class="col-sm-4">
  
      <div class="produs">
  
        <a href="details.php">
  
          <img class="img-respopnsive" src="Produse/Produse_Noi/8.jpg" alt="Produse Noi">
        </a>
            <div class="descriere">
                   <a href="details.php" >
                       <p>
                        Prosop poncho adulţi Mystic Poncho Allover Mint
                
                       </p>
                  </a>
                <h3 class="pret">360 lei</h3>
            
             
                  <a href="details.php" >
                 <span class="Border site-btn btn-span">
                    <i class="fas fa-shopping-cart">
                      Adauga In Cos
                    </i>
                    </span>
                  </a>
  
              
            </div>
      </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>


</section>

<footer>
     
<?php
      include("includes/footer.php")
      ?>
</footer>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="slick.min.js"></script>
<script src="js/help.js"></script>
<script type="text/javascript" src="js/regi.js"></script>
</body>
</html>