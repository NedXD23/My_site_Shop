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

<link rel="stylesheet" type="text/css" href="css/contact.css">

</head>
<body>
 
    <header>
  
        
      
      
      
          
    <?php
      include("includes/header.php")
      ?>
         
             
    </header>
   <section>


<div class="main-c">
  <div class="details">
    <div class="container">
      <form method="post" action="contact_.php">
    
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="Your Email..">

       
    
        <label for="lsubject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">SUBMIT</button>
    
      </form>
    </div>
    <br>
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <hr class="light">
        <h5>CONTACT</h5>
          <hr class="light">
          <i class="fas fa-phone-square"></i>
         <p> Numar de telefon: 999-999-9999</p>
         <i class="fas fa-envelope-square"></i>
          <p >Email: Nautica@shop.ro</p>
          <i class="fas fa-map-marker-alt"></i>
          <p>Adresa: Strada Cu Soare,Nr.42,Bucuresti,Sector 3</p>
     
      </div>
      <div class="col-md-4">
        <hr class="light">
        <h5>Program</h5>
        
        <hr class="light">
        <br>
        <p>Luni-Vineri: 10-18</p>
        <br>
        <p>Sambata: 12-17</p>
        <br>
        <p>Duminica: Inchis</p>
      </div>

      <div class="col-md-4">
        <hr class="light">
        <h5>Zona De Livrari</h5>
        
        <hr class="light">
        <br>
        <p>Oriunde Pe Glob</p>
        
      </div>
   </div>
  </div>

  <img src="css/m1.jpg" alt="Nautica SHop">
  <img src="css/m2.jpg" alt="Nautica SHop">
  <img src="css/m3.jpg" alt="Nautica SHop">
  <img src="css/m4.jpg" alt="Nautica SHop">  
 
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
  
  </body>
  </html>