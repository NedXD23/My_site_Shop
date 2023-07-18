<?php
session_start();
// Change this to your connection info.
include ('helper.php');
require ('mysqli_connect.php');
// Try and connect using the info above.

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


                         echo  $email=$_POST['email'];
                         echo  $nr_t=$_POST['nr_t'];
                         echo  $adresa=$_POST['adresa'];
                         echo $usr=$_SESSION['userID']; 
                               
                                  
                            
                              
                                  $sql = "UPDATE users SET email= '".$email."', u_adresa='".$adresa." ', u_tlf='".$nr_t."' WHERE  userID = '".$usr."' ";
                                  $res5=$con->query($sql);
                                 
                                  $_POST=array();
                                 
                                
                           
header("Location:welcome.php");
                                ?>