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

</head>
<body>
 
    <header>
  
        
  <?php include ("includes/header.php");?>
</header>
<section> 
  
 
      
<div class="main-c">
  <!--- Bannere -->
    <div class="banner container-fluid  p-0">
        <div class="site-slider">
            <div class="slider-one">
                <div>
                    <img src="Bannere/b1.jpg" alt="Banner1" class="img-fluid">
                </div>
                <div>
                    <img src="Bannere/b2.jpg" alt="Banner2"class="img-fluid">
                </div>
                <div>
                    <img src="Bannere/b3.jpg" alt="Banner3"class="img-fluid">
                </div>
                
            </div>
               <div class="slider-btn">
                  <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
                  <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
                </div>
        </div>
    </div>
  <!--- Scurta prezentare-->
  <div class="container-fluid">
    <div class="site-slider-two px-md-4">
      <div class="row slider-two text-center">
        <div class="col-md-2 productb pt-md-5 pt-4">
          <img src="Produse/Sporturi pe apa/caiac/c0.jpg" alt="caiac">
          <br>
          <span class="Border site-btn btn-span font-robot">CAIAC RIGID TOBAGO BIC 3 LOCURI</span>
        </div>
        <div class="col-md-2 productb pt-md-5 pt-4">
          <img src="Produse/Sporturi pe apa/PAGAIE, POMPE SI ACCESORII CAIAC CANOE/p0.jpg" alt="Pagaie">
          <br>
          <span class="Border site-btn btn-span font-robot">PAGAIE CAIAC 4 SEGMENTE</span>
        </div>
        <div class="col-md-2 productb pt-md-5 pt-4">
          <img src="Produse/Sporturi pe apa/ski nautic/2skis.jpg" alt="ski nautic">
          <br>
          <span class="Border site-btn btn-span font-robot">2 SKI-uri</span>
        </div>
        <div class="col-md-2 productb pt-md-5 pt-4">
          <img src="Produse/Sporturi pe apa/ski nautic/manere_categ.jpg" alt="Manere">
          <br>
          <span class="Border site-btn btn-span font-robot">Manere</span>
        </div>
        <div class="col-md-2 productb pt-md-5 pt-4">
          <img src="Produse/Sporturi pe apa/ski nautic/manusi.jpg" alt="Manusi">
          <br>
          <span class="Border site-btn btn-span font-robot">Manusi</span>
        </div>
        <div class="col-md-2 productb pt-md-5 pt-4">
          <img src="Produse/Sporturi pe apa/wakeboard/w2.jpg" alt="w1">
          <br>
          <span class="Border site-btn btn-span font-robot font-robot">Wakeboard</span>
        </div>
      </div>
   
    <div class="slider-btn">
       <span class="prev position-top"><i class="fas fa-chevron-left fa-2x text-secondary"></i></span>
       <span class="next position-top right-0"><i class="fas fa-chevron-right fa-2x text-secondary"></i></span>
     </div> 
    </div>
</div>
 

   <div id="hot">

   <div class="box">

     <div class="container-fluid">

        <div class="col-md-12">

          <h2>
            PRODUSE NOI
          </h2>

        </div>

     </div>


   </div>

   


   </div>

   <div id="content" class="container-fluid">

    <div class="row">

  <?php  $min=1;
       $max=3;
   $number=rand ( $min ,  $max );
  $query = "SELECT product_id,product_title, produtc_img1, product_price FROM produtcs WHERE cat_id=".$number." or cat_id=".$number."+1 or cat_id=".$number."+2 ";

$q = mysqli_stmt_init($con);
mysqli_stmt_prepare($q, $query);

// bind parameter

//execute query
mysqli_stmt_execute($q);

$result = mysqli_stmt_get_result($q);


$nume=new SplFixedArray($result->num_rows);
$pret=new SplFixedArray($result->num_rows);

             
$len=0;
if ($result->num_rows>0){
    // 
    while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) and $len<6)
    {
      $nume[$len]=$row['product_title'];
      $pret[$len]=$row['product_price'];
      $img[$len]=$row['produtc_img1'];
      $p_id=$row['product_id'];
    
    
  
   
                    echo "<div class='col-sm-4'>
                  <div class='produs'>
              
                    <a href='details.php?p=".$nume[$len]."'>
              
                      <img class='img-respopnsive' src= '".$img[$len]. "' alt='Produse Noi'>
                    </a>
                        <div class='descriere'>
                        <a href='details.php?p=".$nume[$len]."' >
                                  <p>
                                  ".$nume[$len]."
                                  <input type='hidden' name='ProductName' value='".$nume[$len]."'>
                                  </p>
                              </a>
                            <h3 class='pret'>
                       
                            ".$pret[$len]." lei
                              
                             
                            </h3>
                        
                        
                        <form  method='post'>
                            <span class='Border site-btn btn-span'>
                                <i class='fas fa-shopping-cart'>
                                <input type='hidden' name='ProductName' value='".$nume[$len]."'>
                              <input type='hidden' name='pret' value='".$pret[$len]."'>
                                <button class='btn' type='submit'  name='fix' formmethod='post' formaction='cart.php' style='background:transparent;border:none;' >Add to Cart</button>
                                </i>
                                </span>
                                </form>
                            
              
                          
                        </div>
                  </div>
              
                </div> 

              ";
              if ($len+1 % 3==0 )
                {
                  echo "
                    </div>
                    <div class='row'>
                    ";
                    
                }$len++;
                

}
}
?>

   </div>



 <!-- avantaje-->
   <div id="advantage">

      <div class="cointainer">

          <div class="row">

            <div class="col-sm-4">

              <div class="box same-height">

                <div class="icon">

                  <i class="fas fa-truck">



                  </i>

                  <h3><a href="#">LIVRARE GRATUITĂ</a></h3>
                  <p> Livrare gratuită oriunde în țară
                    pentru comenzile mai mari de 500 lei.</p>

                </div>

              </div>

            </div>
            <div class="col-sm-4">

              <div class="box same-height">

                <div class="icon">

                  <i class="fas fa-search-dollar">



                  </i>

                  <h3><a href="#">Best Price</a></h3>
                  <p> Compara-ne cu alte magazine online, care au cel mai bun pret</p>
                  
                </div>

              </div>

            </div>
            <div class="col-sm-4">

              <div class="box same-height">

                <div class="icon">

                  <i class="fa fa-thumbs-up">



                  </i>

                  <h3><a href="#">100% Produse Originale</a></h3>
                  <p> Oferim cele mai avantajoase preturi pentru produse originale</p>
                  
                </div>

              </div>

            </div>

          </div>

      </div>


  </div>


  <!-- retele sociale-->
<div class="social-media">
  <div class="container-fluid padding">
      <div class="row text-center padding">
        <div class="col-12">
          <h2>Ne Găsiți Online Și Aici</h2>
          <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>



        </div>



      </div>
    



  </div>
</div>
    </div>
 
  





</section>

<footer>
  <?php include ("includes/footer.php");?>
</footer>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="slick.min.js"></script>
<script src="js/help.js"></script>

</body>
</html>