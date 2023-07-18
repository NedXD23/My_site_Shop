<?php

session_start();
// header.php

include "helper.php";
?>
<?php
    $user = array();
    require ('mysqli_connect.php');

    if(isset($_SESSION['userID'])){
        $user = get_user_info($con, $_SESSION['userID']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('login-process.php');
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

            <link rel="stylesheet" href="stylle.css">

</head>
<body>



    <header>
      
        <?php
        include("includes/header.php");
      
        ?>
             
    </header>
  
   <section >

  
                <div class="main-c " >
                
                    
                <div class="row m-0">
        <div class="col-lg-4 offset-lg-2 boxLog">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Miss Password</h1>
                <p class="p-1 m-0 font-ubuntu text-white-50">Insert Your email</p>
                <span class="font-ubuntu text-white-50">Create a new <a href="reg.php">account</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png' ; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <P > Daca adresa ta de email este corecta impreuna cu numarul de telefon, ai sa primesti un email pentru resetarea parolei</p>
            <div class="d-flex justify-content-center">
                <form action="reset.php" method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                       
                    </div>
                    <div class="form-row my-4">
                            <div class="col">
                                                        <input type="nr_tlf" required name="nr_tlf" id="email" class="form-control" placeholder="Numar de telefon*">
                                                    </div>
                                        </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Reset Password</button>
                    </div>
                    <span class="font-ubuntu text-white-50">Miss  <a href="miss_p.php">Password</a></span>
                </form>
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
  
<script src="jslr/mains.js"></script>
  
  </body>
  </html>