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

    $usr=$_SESSION['userID'];
    $sql = "UPDATE cart SET stat= 1 where u_id = '".$usr."' ";
    $res5=$con->query($sql);
    echo "DONE!";

header("Location:index.php");
?>