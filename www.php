<div  style="display:<?php if (isset($_SESSION['showAlert'])) {
		echo $_SESSION['showAlert'];


	} 
	else {
		echo 'none';
		unset($_SESSION['showAlert']);
	}
	?>"
	 id="myalert" class="alert alert-primary alert-dismissible fade show" 
	 role="alert" >
  <strong><?php if (isset($_SESSION['message'])) {
  		
		echo $_SESSION['message'];
		unset($_SESSION['showAlert']);
		unset($_SESSION['message']);
		
	}?>
	</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>




	<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>wwww</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>


<style>
	
body {background-color: #fed434;}	
.navbar a{background-color:;
color:#010101;
font-weight: bold;
}

.bi-cart4 {
	color:#010101;
	font-weight: bold;
	font-size: larger;

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


.btn-warning{
	background-color: #010101;
	color: white;
	font-size: 16px;
	font-weight: bold;
}

#cart-button {color:black;}	

#shopping-cart {border:2px solid red; margin:0;}

#message {}
</style>


<body>


 <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">On Sale!</a>
        </li>


        
        
      </ul>
      <div class="d-flex">

          <a class="nav-link" href="checkout.php">CheckOut</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		<a  class="nav-link" href="cart.php">cart
      		<i id="shopping-cart" class="bi bi-cart4 position-relative "></i>
      		<i id="cart_item" class=" position-absolute translate-middle badge rounded-pill bg-danger"></i>
      		
      	</a>
      	
      </div>
        
    </div>
  </div>
</nav>
	


	<div class="container">
	
	<div class="row">
		
		<?php

				include 'config.php';
				$getproducts = "SELECT * FROM product";
				$getproductsresult = mysqli_query($link , $getproducts);

				while ($row = $getproductsresult -> fetch_assoc()) {
					# code...
					?>	

				<div  class="col-lg-4">

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

	





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>

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
					}

				

				});//end of ajax-2

			}



});	// function


</script>





</body>
</html>