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
                         echo  $fname=$_POST['firstname'];
                         echo  $lname=$_POST['lastname'];
                         echo $subject=$_POST['subject']; 
                          $mesaj="multumim ca ati contactat magazinul nostru. In cele mai scurt timp un reprezentat o sa ia legatura cu dumneavoastra!";
                          $subiect="NauticaShop";     
                            mail($_POST['email'],$subiect,$mesaj);      
                           
                              
                                  $sql = "INSERT into contact  (LName,FName,c_email,c_sub)  values  ('" .$lname."', '" .$lname."','".$email."','" .$subject."')";
                                  $res5=$con->query($sql);
                                 
                                  $_POST=array();
                                 
                                
                           
header("Location:contact.php");
                                ?>