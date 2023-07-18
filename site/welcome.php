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

            <link rel="stylesheet" type="text/css" href="css/log.css">
            <link rel="stylesheet" href="stylle.css">

</head>
<body>



    <header>
      
        <?php
        include("includes/header.php");
      
        ?>
             
    </header>
<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="py-3">
                            <?php
                            if(isset($user['firstName'])){
                                printf('%s %s', $user['firstName'], $user['lastName'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                    <form action="change_info.php" method="post">
                        <li class="nav-link"> <b>First Name: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>
                        <br>
                        <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        <br>
                       <li> <b>Email : </b>
                        <input type="email" required name="email" style="" class="form-control nav-link" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>"></li>
                        <br>
                        <li> <b>Numar Telefon : </b>
                        <input type="nr_t" required name="nr_t" style="" class="form-control nav-link" value="<?php echo isset($user['u_tlf']) ? $user['u_tlf'] : ''; ?>"></li>
                        <br>
                        <li> <b>Adresa : </b>
                        <input type="adresa" required name="adresa" style="" class="form-control nav-link" value="<?php echo isset($user['u_adresa']) ? $user['u_adresa'] : ''; ?>"></li>
                        <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Update INFO</button>
                        
                  </form>
                  <br> <br>
                  <form action="change_p.php" method="post">
                  <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Change Password</button>
                        
                  </form>
                  <br> <br>
                  <form action="istoric.php" method="post">
                  <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Istoric</button>
                        
                  </form>
                    </div>
                        
                    </ul>
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