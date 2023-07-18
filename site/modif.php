<?php
session_start();
// Change this to your connection info.
include ('helper.php');
require ('mysqli_connect.php');
// Try and connect using the info above.
$url='insert_product.php';
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


                           
                                if(isset($_POST['canti']))
                                {$id=$_POST['P'];
                                  $new_c= $_POST['canti'];
                               
                                  
                            
                                  $usr=$_SESSION['userID'];
                                  $sql = "UPDATE cart SET p_quantity= $new_c where p_title = '".$id."' AND u_id = '".$usr."' ";
                                  $res5=$con->query($sql);
                                 
                                  $_POST=array();
                                 
                                }
                           
 header("Location:cumparaturi.php");
                                ?>