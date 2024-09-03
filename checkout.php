<?php
include 'config.php';

$grand_total = 0;
$allItems = '';
$items = array();

$query = "SELECT CONCAT(product_name , product_price ,  '(',quantity,')') AS ItemQty, total_price FROM cart";

$stmt = $link->prepare($query);
$stmt->execute();

$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {

	
	$grand_total +=$row['total_price'];
	$items[] = $row['ItemQty'];

}
	
	$allItems = implode(' , ' , $items);


if ($allItems == null) {
header('location:index.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>CheckOut Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
  <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  text-transform: capitalize;
}

.bridge-background {
  /* The image used */
  background-image: url("bridge-image/bridge.jpg");

  /* Full height */
  height: 300px; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  box-shadow: 0px 2px 0px 2px grey;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

.topnav {
  overflow: hidden;
 background-color: #fcfcfc;
 opacity: 1;
 color: black;
 line-height: 30px;
 box-shadow: 2px 2px 2px 2px grey;

 padding:;>
}
.activenav {border-bottom: 2px solid black;}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight: bold;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  border-bottom: 2px solid black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.topnav-right {
  float: right;
}



.product-image-div {
	border:0px inset black;
	text-align: left;
	box-shadow: 2px 2px 2px 2px grey;
	margin:4px;

}

.product-image-div:hover #product-image{
	padding: 5px 0px;
}

#product-image {
	border:0px solid black;
	width: 100%;
	height: 220px;
	border-radius:1px;

}

#title-p-name {font-size: 14px; color:#040720; font-weight: bold; 
				padding: 0px 15px;text-shadow:0px 0px  #040720;}

#madeby-p-name{font-size: 13px;padding: 0px 0px; line-height: 0px;}
#shopping-cart2 {z-index: 9;}


#price-p-name{font-size: 13px;padding: 0px 5px;}

.cart-preview-price {border: 0px solid green; height: 50px;
line-height: 30px; }

.cart-preview-price p{float: left; line-height: 40px;font-weight: bold;
						color: #040720;}

.cart-preview-price button{float: left; background-color: #E5E4E2;
							color: black;font-weight: bold;margin:2px;
						width: 33.33%; border:1px inset grey;
						color:#040720;}


#preview {}
.checked {
  color: orange;
}
.rates1 {border:1px inset grey;;background-color: #E5E4E2;; padding: 0px 15px;}

#by {font-size: 9px; line-height: 25px;float: left; width: 40%;}

.rates {}

</style>

<style type="text/css" media="screen">
#myVideo {
  
  right: 0;
  bottom: 0;
  min-width: 100%; 
  max-height: 50%;
}

.content {
  
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}	

#products-span {font-weight: bold; background-color: #ffff80;}
</style>

</head>



<body>
<div id="bridge-marquee-slider"></div>

<div class="topnav" id="myTopnav">
  <a href="#home" class="activenav">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>



  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	

    <i class="fa fa-bars"></i>
  </a>

  <div class="topnav-right">
    
   <a  class="nav-link" href="cart.php">
     <i id="shopping-cart" class="fa fa-shopping-cart position-relative" 
     style="font-size:30px;color:grey;">
      </i>
      <span id="cart_item" class="badge badge-pill badge-danger "
       style="font-size:10px;color:white;font-weight: bold;"></span>
      	
      		
      	</a>
  </div>
</div>






</div>
<div class="container-fluid">
<div id="bridge-marquee"></div>
</div>
<a href=" https://wa.me/+96171566937?text=I'm%20interested%20in%20your%20WebSite" >WhatsApp Chat</a>
<br>
<a href="whatsapp://send?abid=+9613325469&text=Hello%2C%20World!">Send Message</a>
 <div class="container">
    <div class="row justify-content-center">
    	<div id="mail-advanced"></div>
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><br><span id="products-span"><?= $allItems; ?> </span></h6>
          <h6 class="lead"><b>Delivery Charge : </b><span id="products-span">Free</span></h6>
          <h5><b>Total Amount Payable :  </b><span id="products-span">$ <?= number_format($grand_total,2) ?></span></h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>



<script type="text/javascript" >
	
 $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
       type: 'POST',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

});


</script>

<script type="text/javascript" >
	
 $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'phpmail-advanced/mail-action.php',
       type: 'POST',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#mail-advanced").html(response);
        }
      });
    });

});


</script>


<script  type="text/javascript">
		
		$(document).ready(function(){


		
			load_cart_item_number();

			function load_cart_item_number(){

				$.ajax ({
					url : 'action.php',
					method : 'get',

					data : {cartItem:"cart_item"},
					success:function(response){
						$("#cart_item").html(response);
						$("#cart2_item").html(response);
					}

				

				});//end of ajax-2

			}


			
	

});	// function


</script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>





	








</body>
</html>

