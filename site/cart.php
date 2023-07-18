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


if(!isset($_SESSION['userID']))
{
	header( "refresh:1; url=insert_product.php" ); 
	echo '<script type="text/javascript">';
	echo ' alert("You have to log in first!")';  //not showing an alert box.
	echo '</script>';


}
else{

echo $id=$_POST['ProductName'];


$usr=$_SESSION['userID'];

$sq1="SELECT product_price from produtcs WHERE product_title='".$id."'";
$result1=$con->query($sq1);
$row= $result1->fetch_assoc();
$p=$row['product_price'];
$sql4 = "SELECT * FROM cart WHERE p_title = '".$id."' AND u_id = '".$usr."' ";
$result4=$con->query($sql4);
if($result4->num_rows==0)
			{ if( isset($_POST['product_qty'])){
				$q=$_POST['product_qty'];
				$sql = "INSERT INTO cart (p_title,p_quantity, u_id,p_price)
				VALUES ('$id', $q, '$usr','$p')";
				echo "adugat!";
			}
			else
			{
				$sql = "INSERT INTO cart (p_title,p_quantity, u_id,p_price)
								VALUES ('$id', '1', '$usr','$p')";
								
			}

								
			$res=$con->query($sql);
			var_dump($sql);

}	
else{
	if( isset($_POST['product_qty'])){
		$q=$_POST['product_qty'];
		$sql5 = "UPDATE cart SET p_quantity=p_quantity+".$q." where p_title = '".$id."' AND u_id = '".$usr."' ";
		echo "adugat!";
	}else{
		
$sql5 = "UPDATE cart SET p_quantity=p_quantity+1 where p_title = '".$id."' AND u_id = '".$usr."' ";
	}
$res5=$con->query($sql5);
var_dump($sql5);

}
header("Location:insert_product.php");
	}

?>