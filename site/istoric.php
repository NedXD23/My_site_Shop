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
            <link rel="stylesheet" href="css/cos.css">
            <link rel="stylesheet" href="stylle.css">

</head>
<body>



    <header>
      
        <?php
        include("includes/header.php");
      
        ?>
             
    </header>
  
   <section class="main-c " >

  
              
   <div style="clear:both"></div>  
                <br />  
                <h3>Istoric Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                            
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["userID"]))  
                          {  $h=1;
                            $sq1="SELECT p_title,p_quantity,p_price from cart WHERE u_id='".$_SESSION['userID']."' and stat=1 ";
                            $result1=$con->query($sq1);
                           
                               $total = 0;  
                               while($row = $result1->fetch_assoc())
                               {  
                          ?>  
                          <tr>  
                               <td><form method='POST'><?php echo $row["p_title"]; ?> 
                               <input type='hidden' class='btn' name='P' value='<?php echo $row["p_title"];  ?>' >
                               
                               </td>  
                               <td for='canti'>
                              
                                                  <p name="canti" id="canti">
                                    <?php echo $row["p_quantity"]; ?>
                               </form>
                                <?php 
                                $id=$row['p_title'];
                              $new_c=$row["p_quantity"] ;
                                if(isset($_POST['canti']))
                                {
                                  
                                  
                                  $new_c= $_POST['canti'];
                            
                                 
                                }
                            
                              
                                ?>
                                </td> 
                               <td><?php echo $row["p_price"] ?> lei </td>  
                               <td> <?php echo number_format($new_c * $row["p_price"], 2); ?> lei </td>  
                            
                          </tr>  
                          <?php  
                                    $total = $total + ($row["p_quantity"] * $row["p_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"> <?php echo number_format($total, 2); ?> lei</td>  
                               
                          <?php  
                          }  
                          ?>  
                     </table>  
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