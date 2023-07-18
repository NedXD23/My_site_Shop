<?php 

if(isset ($_POST['foo']))
{
  $query = "SELECT product_id,product_title, produtc_img1, product_price FROM produtcs WHERE cat_id=".$categ." and( p_nivel='".$_POST['foo']."'
   or p_marime='".$_POST['foo']."'   or p_sex='".$_POST['foo']."'  or p_stil='".$_POST['foo']."'  or p_producator='".$_POST['foo']."') ";
 
   $_POST=array();
}
else{
$query = "SELECT product_id,product_title, produtc_img1, product_price FROM produtcs WHERE cat_id=".$categ." ";
}
$q = mysqli_stmt_init($con);
mysqli_stmt_prepare($q, $query);

// bind parameter

//execute query
mysqli_stmt_execute($q);

$result = mysqli_stmt_get_result($q);


$nume=new SplFixedArray($result->num_rows);
$pret=new SplFixedArray($result->num_rows);

             
$len=0;
if ($result->num_rows>0){
    // 
    while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      $nume[$len]=$row['product_title'];
      $pret[$len]=$row['product_price'];
      $img[$len]=$row['produtc_img1'];
      $p_id=$row['product_id'];
    
    
  
   
                    echo "<div class='col-sm-4'>
                  <div class='produs'>
              
                    <a href='details.php?p=".$nume[$len]."'>
              
                      <img class='img-respopnsive' src= '".$img[$len]. "' alt='Produse Noi'>
                    </a>
                        <div class='descriere'>
                        <a href='details.php?p=".$nume[$len]."' >
                                  <p>
                                  ".$nume[$len]."
                                  <input type='hidden' name='ProductName' value='".$nume[$len]."'>
                                  </p>
                              </a>
                            <h3 class='pret'>
                       
                            ".$pret[$len]." lei
                              
                             
                            </h3>
                        
                        
                        <form  method='post'>
                            <span class='Border site-btn btn-span'>
                                <i class='fas fa-shopping-cart'>
                                <input type='hidden' name='ProductName' value='".$nume[$len]."'>
                              <input type='hidden' name='pret' value='".$pret[$len]."'>
                                <button class='btn' type='submit'  name='fix' formmethod='post' formaction='cart.php' style='background:transparent;border:none;' >Add to Cart</button>
                                </i>
                                </span>
                                </form>
                            
              
                          
                        </div>
                  </div>
              
                </div> 

              ";
              if ($len+1 % 3==0 )
                {
                  echo "
                    </div>
                    <div class='row'>
                    ";
                    
                }$len++;

}
}

?>

