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
                    
                <?php include("login.php")?>

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