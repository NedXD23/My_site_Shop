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
if(isset($_POST['Pro']))
{

    $id=$_POST['Pro'];
    $usr=$_SESSION['userID'];
    $sql = "DELETE from cart where p_title = '".$id."' AND u_id = '".$usr."' ";
    $res5=$con->query($sql);
    echo "delete done";
}
header("Location:cumparaturi.php");
?>