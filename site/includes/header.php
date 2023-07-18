<div class="container">
            <div class="row">

                <div class="col-md-3"><img src="logo\logo.jpg" class="logo">
                </div>
              
                <div class="col-md-3 col-12 text-center site-title">
                    <h2 class="my-md-3 site-title">Nautica Shop</h2>
                </div>
                   <div class="col-md-3 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LEI
                        <img src="monede/ro.png">
                        </button>
                        <div class="dropdown-menu ">
                            <a href="#" class="dropdown-item">

                                EURO
                                <img src="monede/euro.png">
                            </a>
                        </div>
                    </div>
                </div>
                          
                                <div class="col-md-3 col-12 text-right ">
                                    <p class="my-md-4 header-links">
                                  <?php  if(isset($_SESSION['userID']))
                {
                    $nume=$_SESSION['userID'];
                    $url2 = "welcome.php";
                    $url3 = "log_out.php";
                    echo "<a href=".$url2."  class='px-2' >Contul Meu</a>";
                    echo "<a href=".$url3."  class='px-1' >Log Out</a>";


                }
                else
                {
                    $url = "Log.php";
                    echo "<a href=".$url." class='px-2'>Sing In</a>";
                    $url1 = "reg.php";
                    echo "<a href=".$url1." class='px-1'>Create an Account</a>";
                } ?>
                                      </p>
                                  </div>
            </div>
         </div>
        
  
         <div id="navibar">
          
                     
          <nav class="navbar navbar-expand-lg navbar-light bg-white border">
            <div class="main-c">
                          
                        
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <a class="navbar-brand" href="index.php"><img src="logo\logo1.jpg"></a>
                                   <ul class="navbar-nav mr-auto">
                        
                                   </li>
                          <li class="nav-item">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item ">
                          <a class="nav-link " href="insert_product.php?categorie=1">

                        Kite   </a>
                        
                            
                        
                           </a>
                          
                         </li>

                         <li class="nav-item ">
                          <a class="nav-link" href="insert_product.php?categorie=2">
                          Ski-nautic
                          </a>
                          
                           
                          
                         </li>
                         <li class="nav-item">
                          <a class="nav-link"  href="insert_product.php?categorie=4">
                          Accesorii
                          </a>
                         
                          
                         </li>
                         <li class="nav-item ">
                          <a class="nav-link"  href="insert_product.php?categorie=5">Caiac <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="insert_product.php?categorie=3">Wake <span class="sr-only">(current)</span></a>
                        </li>
                          
  
                         <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact</a>
                         </li>
                       </ul>
                       <form class="form-inline my-2 my-lg-0">
               
                         <form method="post" formaction='search.php'>
                         <input class="form-control mr-sm-2" type="search" name='cautat' placeholder="Search..." aria-label="Search">
                   
                         <button type='submit' class="btn btn-outline-info mr-sm-2"   name='fix' formmethod='post' formaction='search.php'><i class="fas fa-search"></i></button>
                        
              </form>
                         
                         <a href="cumparaturi.php">
                      <button type="button" class="btn btn-outline-info basket-icon"><i class="fas fa-shopping-basket "></i></button>
                      </a>
                       </form> 
                     </div>
                    
                    
                   
                   </nav>
                
                 </div>
               
             </div>
     