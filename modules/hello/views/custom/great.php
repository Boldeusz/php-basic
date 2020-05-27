<?php
use app\assets\AppAsset;

$connect = mysqli_connect("localhost", "root", "", "testing1");
$tab_query = "SELECT * FROM category ORDER BY category_id ASC";
$tab_result = mysqli_query($connect, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["category_id"].'" data-toggle="tab">'.$row["category_name"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["category_id"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["category_id"].'" data-toggle="tab">'.$row["category_name"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["category_id"].'" class="tab-pane fade">
  ';
 }
 $product_query = "SELECT * FROM product WHERE category_id = '".$row["category_id"]."'";
 $product_result = mysqli_query($connect, $product_query);
 while($sub_row = mysqli_fetch_array($product_result))
 {
  $tab_content .= '
  <div class="col-md-3 " style="margin-bottom:36px;">
   <img src="uploads/'.$sub_row["product_image"].'" class="img-responsive img-thumbnail" />
   <h4>'.$sub_row["product_name"].'</h4>
  </div>
  ';
 }
 $tab_content .= '<div style="clear:both"></div></div>';
 $i++;
}
AppAsset::register($this);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Our guns</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 
 </head>
 <body>
  <div class="container">
      
      <div class="col-sm-8">
          
            <div >
		<ul class="nav navbar-nav">
			<li><a href=""><i class="fa fa-user"></i> Account</a></li>
				<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
				<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
				<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
				<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
		</ul>
            </div>
	</div>
      <h2 align="center">Our guns</h2>
   <br />
   <ul class="nav nav-tabs">
   <?php
   echo $tab_menu;
   ?>
   </ul>
   <div class="tab-content">
   <br />
   <?php
   echo $tab_content;
   ?>
   </div>
  </div>
 
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <img class="card-img-top img-responsive" src="images/handGun/beretta-m9.png"  alt="beretta-m9">
                <div class="card-body text-center">
                    <h5 class="card-title">Beretta-m9</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
         </div>
         <div class="col-md-4">
             <div class="card shadow" style="width: 20rem;">
                 <div class="inner">
                     <img class="card-img-top img-responsive " src="images/handGun/beretta-m9.png"  alt="beretta-m9">
                 </div>
                <div class="card-body text-center">
                    <h5 class="card-title" style="font-weight: 900;">Beretta-m9</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
         </div>
         <div class="col-md-4">
             <div class="card shadow" style="width: 20rem;">
                <img class="card-img-top img-responsive" src="/images/handGun/beretta-m9.png"  alt="beretta-m9">
                <div class="card-body text-center">
                    <h5 class="card-title">Beretta-m9</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
         </div>
     </div>

 </div>
<h1>Hello world from custom module!</h1>
</body>
</html>
