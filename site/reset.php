<?php   require ('mysqli_connect.php');
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if(isset($_POST['email']) && isset($_POST['nr_tlf'])){

    // sql query
    $query = "SELECT email,u_tlf FROM users WHERE email='".$_POST['email']."' and u_tlf= '".$_POST['nr_tlf']."' ";
    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q, $query);
    
    // bind parameter
    
    //execute query
    mysqli_stmt_execute($q);
    
    $result = mysqli_stmt_get_result($q);
    if($result->num_rows>0)
    {
        $new_pass=generateRandomString();
        echo $new_pass;
        echo" ";
        $hashed_pass = password_hash($new_pass, PASSWORD_DEFAULT);
    $qu="UPDATE users SET password='".$hashed_pass."' where email='".$_POST['email']."' and u_tlf= '".$_POST['nr_tlf']."' ";
 
    $h = mysqli_stmt_init($con);
    mysqli_stmt_prepare($h, $qu);
    mysqli_stmt_execute($h);
    echo "DOne!";
 $n="RESET PASSWORD NAUTICA SHOP";
  if(  mail($_POST['email'],$n,$new_pass))
  {
      echo"Mail ok";
  }
  else{
      echo "wrong!";
  }
    }
}
else{
    echo "<script> alert('COMPLETEAZAA TOATE CAMPURILE')</script>";
}
header("Location:index.php");
    ?>