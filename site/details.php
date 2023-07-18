<?php

session_start();
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>
<!
DOCTYPE html> 
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

<link rel="stylesheet" type="text/css" href="css/det.css">

</head>
<body>
 
    <header>
      
    <?php
      include("includes/header.php");
    
      ?>
             
    </header>
   <section>
<?php

  $sql = "SELECT product_id,product_desc,product_title, produtc_img1,produtc_img2,produtc_img3, product_price FROM produtcs WHERE product_title='".$_GET['p']."' ";
$result = $con->query($sql);
$row=$result->fetch_assoc();
  
if ($result->num_rows>0){
  
    ?>
<div class="main-c">
 <div class="col-md-12">
    <div id="productMain" class="row">
        <div class="col-sm-6">
            <div id="mainImage">
  
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo isset($row['produtc_img1']) ? $row['produtc_img1'] : ''; ?>" alt="First slide">
                        </div>
                        <?php if(isset($row['produtc_img2'])){ echo"
                        <div class='carousel-item'>
                        <img class='d-block w-100' src='".$row['produtc_img2']."' alt='Second slide'>
                        </div>";}?>
                        <?php
                         if(isset($row['produtc_img3'])){ echo"
                        <div class='carousel-item'>
                        <img class='d-block w-100' src='".$row['produtc_img3']."'alt='Third slide'>
                        </div>";
                         }?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>
            </div>
            
        <div class="col-sm-6">
            <div class="row">
            <div class="boxa">
                <h1 class="text-center"><?php echo $row['product_title'];?></h1>
            
                <br>    <form action="cart.php" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                    <div class="col-md-7">
                        <select name="product_qty" id="" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    </div>
                <br>
              
                    <br>
                    <h3 class="pret"><?php echo $row['product_price'];?> lei</h3>
                    <br>
                  
                    <span class="Border site-btn btn-span">
                        <i class="fas fa-shopping-cart">
                           <input type='hidden' name='ProductName' value='<?php echo $row['product_title'];?>'>
                       
                                <button class='btn' type='submit'  name='fix' formmethod='post' formaction='cart.php' style='background:transparent;border:none;' >Add to Cart</button>
                        </i>
                        </span>
                    

            </form>
                </div>

                
            <div class="row">
                <div class="col-sm-12">
                <div id="advantage">

                        <div class="cointainer">

                        <div class="row">

                            <div class="col-sm-12">

                            <div class="boxi same-height">

                                <div class="icon">

                                <i class="fas fa-truck">



                                </i>

                                <h3><a href="#">LIVRARE GRATUITĂ</a></h3>
                                <p> Livrare gratuită oriunde în țară
                                    pentru comenzile mai mari de 500 lei.</p>

                                </div>

                            </div>

                            </div>
                            
                        
                                </div>
                            </div>
                    </div>

                        </div>
        
                    </div>
                    </div>

            </div>
    </div>
    <br>
    <div class="row caract">
            <div>
                <h1>Caracteristici</h1>
                <div class="row cc">
                <?php echo $row['product_desc'];?>
                </div>
            </div>
    </div>
</div>
</div>
</div>
<?php }
?>

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
<script src="js/main.js"></script>

</body>
</html>