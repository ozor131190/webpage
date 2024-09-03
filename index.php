<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>
  <style>
body {
  margin: 0;
    font-family: Georgia, serif;
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

.icon {border: 0px solid red;}
.icon:hover {background-color: #fcfcfc;border: 0px solid red;}
.contact {background-color: #fcfcfc;padding: 15px 15px; }

.contact:hover {background-color: #fcfcfc;}



.activenav {border-bottom: 2px solid black;}

.topnav a {
  float: left;
  display: block;
  color: #2C3E50;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  width: 120px;
  text-shadow: 1px 1px #ABB2B9;
   font-family: Georgia, serif;
  
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

.title-little {border: 0px solid green;width: 100%;}

#title-p-name {font-size: 14px; color:#040720; font-weight: bold; 
				padding: 5px 15px;text-shadow:0px 0px  #040720;
				float: left;border: 0px solid red;
			text-shadow: 1px 1px #ABB2B9;
   font-family: Georgia, serif;}

#title-p-price {text-align: right; font-weight: bold;text-shadow: 1px 1px #ABB2B9;
   font-family: Georgia, serif;padding: 2px 15px;}	



#madeby-p-name{font-size: 13px;padding: 0px 0px; line-height: 0px;}
#shopping-cart2 {z-index: 9;}

  


  .cart-preview-price {border: 0px solid green; height: 50px;
 width: 100%;  padding: 0px 0px;
}

.cart-preview-price button{float: left; background-color: #E5E4E2;
							color: black;font-weight: bold;
						 border:2px inset grey; width: 48%;
						color:#040720;border: 0px solid green;
						padding: 4px 0px; margin:2px;height: 35px;
						text-shadow: 1px 1px #ABB2B9;
  						 font-family: Georgia, serif;
					}
#addItemBtn {}

#preview {}
.checked {
  color: orange;
}
.rates1 {border:1px inset grey;;background-color: #E5E4E2;; padding: 0px 15px;}

#by {font-size: 9px; line-height: 25px;float: left; width: 50%;
		text-align: center;text-shadow: 1px 1px #ABB2B9;
  						 font-family: Georgia, serif;}

.rates {}

.added-numbers {text-align: left; border: 0px solid green;color:white;
				 }
</style>

<style type="text/css" media="screen">
#myVideo {
background-color: #151414;
  height:100%;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  padding: 5px 5px;
  border: 12px inset #151414;
  
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


.footercart-whatsapp {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   border: 0px solid red;
   color: white;
   text-align: center;
   
}

.footercart-whatsapp > div {

	 border: 0px solid black;
	
	font-weight: bold;
	cursor: pointer;
	background-color: #fcfcfc;
 	height: 50px;
 	color: black;
 	line-height: 50px;
 	box-shadow: 2px 2px 2px 2px grey;
}


#whatsapp-bagde-fixed{
float: left; width: 50%;
border: 0px solid red;
line-height: 50px;



}

#whatsapp-click {
	line-height: 50px;
	border: 0px solid red;
	width: 90%;
	background-color: ;

}

#cart-bagde-fixed{
width: 50%; border: 2px solid red;
line-height: 30px;
}
</style>

</head>



<body>
<div id="bridge-marquee-slider"></div>

<div class="topnav" id="myTopnav">
  <a href="#home" class="activenav">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>



  <a  id="barsicon" href="javascript:void(0);" class="icon" onclick="myFunction()">
	

    <i id="barsicon"  class="fa fa-bars"></i>
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


<div class="bridge-background">
	
<div class="hero-text">
    <h1 style="font-size:50px">Welcome To Our World!</h1>
    <p>Sales Up to 50%</p>
    <button>Try Now</button>

  </div>



</div>
<div class="container-fluid">
<div id="bridge-marquee"></div>
</div>

<div class="container">



<h4 id="message"></h4>

	


	<div class="row">
						
		<?php

				include 'config.php';
				$getproducts = "SELECT * FROM product";
				$getproductsresult = mysqli_query($link , $getproducts);

				while ($row = $getproductsresult -> fetch_assoc()) {
					$product_name = $row['product_name'];
					$product_name = substr($product_name,0, 10);
					?>	

				<div  class="col-sm-1 col-lg-3">

				<div class="product-image-div">
				<img src="<?php echo $row['product_image'] ?>" id="product-image">


				<div class="col title-little">
				<p id="title-p-name"><?php echo $product_name; ?> </p>
					<p id="title-p-price">
				$ <?php echo number_format($row['product_price'] ,2) ?></p>
				</p></div>
				
				<div class="rates1">
				<p id="by">by <span id="madeby-p-name">Our Client</span></p>
				<div class="rates">
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
				</div>
				</div>
					
				
				

				<form action="" class="form-submit" enctype="multi/data-form"> 
					
				<input type="hidden" name="pid" class="pid"  value="<?php echo $row['id'] ?>">


				<input  type="hidden" class="pname" name="" value="<?php echo $row['product_name'] ?>">

				<input type="hidden" class="pprice" name="" value="<?php echo $row['product_price'] ?>">

				<input type="hidden" class="pimage" name="" value="<?php echo $row['product_image'] ?>">

				<input type="hidden" class="pcode" name="" value="<?php echo $row['product_code'] ?>">

				
						<div class="added-numbers" id="added-numbers" >Item Added

						</div>


				<div class="col cart-preview-price">
				<button name="addItemBtn" id="addItemBtn" class="btn btn-warning addItemBtn">
				<i id="cart-button" class="fa fa-cart-plus"></i>
				</button>
				<button id="preview" href="#" class="btn btn-primary">Preview</button>
				</div>


				
					
				



				</form>
				
				
				</div>

				</div> <!-- end of col -->



				<?php }?>





	</div><!-- end of row 1 -->
	</div><!-- end of container 1 -->
<br>

<div id="myvideo1">
	

<video autoplay muted loop id="myVideo">
  <source src="video-bg/basic.mp4" type="video/mp4" >
  Your browser does not support HTML5 video.
</video>


</div>


<div id="footer-content">dd</div>

<div class="container">
<div  class="footercart-whatsapp">

 <div id="whatsapp-bagde-fixed"> 

 <a  href="https://wa.me/+9613325469?text=I'm%20interested%20in%20your%20WebSite">
<i id="whatsapp-click" class="fa fa-whatsapp" style="color: green;font-size:40px;">
	
</i>
</a>
</div>

 <div id="cart-badge-fixed">
 	
<a  href="cart.php">
  <i  class="fa fa-cart-plus " style="font-size:30px;color:red;">

</i>
  <i id="cart2_item" style="font-size:10px;color:white;"
   class=" translate-middle badge rounded-pill bg-danger"></i>
      		
</a>


</div>
 </div>




</div>


<script  type="text/javascript">
		
		$(document).ready(function(){

		$(".addItemBtn").click(function(e){
			e.preventDefault(); // prevent page from reloading
		
		var $form = $(this).closest(".form-submit"); // getting form by class

		var pid  = $form.find(".pid").val();
		
		var pname = $form.find(".pname").val();
		

		var pprice = $form.find(".pprice").val();

		

		var pimage = $form.find(".pimage").val();

		

		var pcode = $form.find(".pcode").val();

		
		

		 $.ajax({
			url :'action.php',
			type :'POST',
			
			data : {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
			success:function(response){
				$("#message").html(response);
				load_cart_item_number();
			}
		}); //ajax 

		}); // click button function

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
  


   $('#barsicon')
 .removeClass('contactexpand')
 .addClass('contact');


}
</script>




<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("bridge-marquee").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "ajax-scrollable-images/scrollable1.php", true);
  xhttp.send();
}
window.onload = loadDoc;
</script>


	

<script>
function gogo() {
 
 window.location.href = "scrollable-story/scrollable.html";
}

</script>

<script>
function gogo1() {
 
 window.location.href = "images-story-2/examples/basic.html";
}

</script>


<script>
$(document).ready(function(){
  
    $.ajax({url: "footer/footer.php", success: function(result){
      $("#footer-content").html(result);
    }});
  
});
</script>

 
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction1212() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


<script type="text/javascript">
$(document).ready(function () {

    if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
        $(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
    }

    $(window).on("scroll", function() {
        localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
    });

  });
</script>




</body>
</html>

