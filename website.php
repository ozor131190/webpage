<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
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
	text-align: center;

}

#product-image {
	border:0px solid black;
	width: 100%;
	height: 220px;
	border-radius:10px;

}

#shopping-cart {position: relative;}
</style>

</head>



<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>



  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	

    <i class="fa fa-bars"></i>
  </a>

  <div class="topnav-right">
    
   <a  class="nav-link" href="cart.php">
     <i id="shopping-cart" class="fa fa-shopping-cart" style="font-size:48px;color:red">
      </i>
      <span id="cart_item" class="badge badge-pill badge-danger"></span>
      		
      		
      	</a>
  </div>
</div>


<div class="container">
	


	<div class="">

         
         
    		<a id="shopping-cart2"  class="nav-link" href="cart.php">
      		<i  class="bi bi-cart4 position-fixed ">

      			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  				<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
				</svg>
      		</i>
      		<i id="cart2_item" class=" position-fixed translate-middle badge rounded-pill bg-danger"></i>
      		
      	</a>
      	
      </div>


	<div class="row">
		
		<?php

				include 'config.php';
				$getproducts = "SELECT * FROM product";
				$getproductsresult = mysqli_query($link , $getproducts);

				while ($row = $getproductsresult -> fetch_assoc()) {
					# code...
					?>	

				<div  class="col-sm-3 col-lg-4">

				<div class="product-image-div">
				<img src="<?php echo $row['product_image'] ?>" id="product-image">
				
				<h4><?php echo $row['product_name'] ?></h4>
				<h4>$ <?php echo number_format($row['product_price'] ,2) ?></h4>

				<form action="" class="form-submit" enctype="multi/data-form"> 
					
				<input type="hidden" name="pid" class="pid"  value="<?php echo $row['id'] ?>">


				<input type="hidden" class="pname" name="" value="<?php echo $row['product_name'] ?>">

				<input type="hidden" class="pprice" name="" value="<?php echo $row['product_price'] ?>">

				<input type="hidden" class="pimage" name="" value="<?php echo $row['product_image'] ?>">

				<input type="hidden" class="pcode" name="" value="<?php echo $row['product_code'] ?>">


				<button name="addItemBtn" class="btn btn-warning addItemBtn">
				<i id="cart-button" class="bi bi-cart4"></i>
				Add To Cart</button>


				</form>

				
				</div>

				</div> <!-- end of col -->
				<?php }?><h4 id="message"></h4>
	</div><!-- end of row 1 -->
	</div><!-- end of container 1 -->
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
}
</script>







</body>
</html>