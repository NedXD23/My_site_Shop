<?php
session_start();
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

if( isset( $_POST['password']) && isset( $_POST['confirm_pwd'])){
    if( strcmp( $_POST['password'], $_POST['confirm_pwd'])==0){
$new_pass=  $_POST['password'];
        echo $new_pass;
        echo" ";
        $hashed_pass = password_hash($new_pass, PASSWORD_DEFAULT);
    $qu="UPDATE users SET password='".$hashed_pass."' where userID='".$_SESSION['userID'] ."'  ";
 
    $h = mysqli_stmt_init($con);
    mysqli_stmt_prepare($h, $qu);
    mysqli_stmt_execute($h);
    echo "DOne!";

}
else{
    echo "<script> alert('PAROLELE NU CORESPUND')</script>";
 }

}else{
    header("Location:change_p.php");

}
header("Location:welcome.php");
?>