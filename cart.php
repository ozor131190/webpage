<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>cart </title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

#cart-button {color:white;}	


#message {}


.table {line-height: 50px; cursor: pointer;}
</style>


<body>


 <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">On Sale!</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mobiles</a></li>
            <li><a class="dropdown-item" href="#">Cameras</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">else</a></li>
          </ul>
        </li>
        
      </ul>
      <div class="d-flex">

          <a class="nav-link" href="cart.php">CheckOut</a>
    		<a  class="nav-link active" href="cart.php">
      		<i id="shopping-cart" class=" position-relative ">
      		
      		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  				<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
				</svg>	
      		</i>
      		<i id="cart_item" class=" position-absolute translate-middle badge rounded-pill bg-danger"></i>

      		
      	</a>
      	
      </div>
        
    </div>
  </div>
</nav>
	



	<div class="container">
	
	<div class="row">
		
		
	<?php

		if (isset($_SESSION['message'])) {
			unset($_SESSION['showAlert']);
			echo '

			<div id="myalert"
			 class="alert alert-primary alert-dismissible fade show" 
	 		role="alert" >
	 		<strong>Item bas been Deleted
	 		</strong> 
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>


			';
		}

unset($_SESSION['message']);

	 ?>


<?php

		if (isset($_SESSION['DeleteAllCart'])) {
			
			echo '

			<div id="myalert"
			 class="alert alert-primary alert-dismissible fade show" 
	 		role="alert" >
	 		<strong>Cart Has been Cleared!
	 		</strong> 
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>


			';
		}

unset($_SESSION['DeleteAllCart']);
	 ?>
	<div class="col-lg-10" >
	<div class="table-responsive">		
	<table class="table table-hover text-center">
  <thead>

  	<tr>
  		<td colspan="7">
  			
  			<h4 class="text-center text-info m-0">Products Of Your Cart :</h4>
  		</td>
  	</tr>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th>
      	<a href="action.php?clear=all" class="btn btn-danger"
      	onclick="return confirm('Are You Sure To Clear Cart ?')">
      	<i class="bi bi-trash3"></i>&nbsp; Clear Cart</a>

      </th>
    </tr>
  </thead>

  <tbody class="tbody">
    
  		<?php 

  		include 'config.php';

  		$stmt = $link->prepare('SELECT * FROM cart ');
  		$stmt->execute();
  		$result = $stmt->get_result();
  		$grand_total = 0;


  		

  		while ($row = $result->fetch_assoc()) {
  		?>

  		
  		<tr>

  			<td><?php echo $row['id']; ?></td>
  			<input type="hidden" class="pid" value="<?php echo $row['id'] ?>">
  			<td><img src="<?php echo $row['product_image']; ?>" width="70" height="50"> </td>
  			<td><?php echo $row['product_name']; ?></td>
  			<td><i class="bi bi-currency-dollar"></i><?php echo number_format($row['product_price'] ,2); ?></td>
  			<input type="hidden" class="pprice" value="<?php echo $row['product_price'] ?>">
  			<td><input type="number" class="form-control itemQty" 
      		value="<?php echo $row['quantity'] ?>" style="width:75px;"></td>

      		<td><i class="bi bi-currency-dollar"></i><?php echo number_format($row['total_price'] ,2); ?></td>

      		<td><a href="action.php?remove=<?php echo $row['id'] ?>"
      			class="text-danger" 
      			onclick="return confirm('Remove Item From Cart ?');">
      				<i class="bi bi-trash3" style='font-size: larger;'></i>
      			</a></td>
  		</tr>

  		<?php 
  		$grand_total += $row['total_price'];

  		?>

  		<?php

  		};

  		?>
  		<tr>

  		<td colspan="3"> <a href="javascript:history.back()" class="btn btn-success">
  		Continue Shopping</a></td>

  		<td colspan="2"><b>Grand Total</b> </td>

  		<td><b><i class="bi bi-currency-dollar"></i>
  			<?php echo number_format($grand_total,2); ?></b></td>

  		<td>
  		<a  href="checkout.php" 
  		class="btn btn-info <?php if($grand_total < 1){ echo 'disabled';} ?>">
  			<i class="bi bi-credit-card-2-front" style='font-size: larger;'>
  				Check Out
  		</a></td>	
  	
  	</tr>

  </tbody>
</table>


		</div>
		</div>

	</div><!-- end of row 1 -->
	</div><!-- end of container 1 -->

	




<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>

<script  type="text/javascript">
		
		$(document).ready(function(){

			$(".itemQty").change( function(){

				var $el = $(this).closest('tr'); //finding variables in the tr tag

				var pid11 = $el.find(".pid").val();
				var pprice11 = $el.find(".pprice").val();
				var quantity11 = $el.find(".itemQty").val();
				
				$.ajax ({

					url : 'action.php',
					type : 'POST',
					cache : false,
					data: {quantity11:quantity11,pid11:pid11,pprice11:pprice11},
					success:function(response){
					console.log(response);
					location.reload();
					}

				});
				});
		
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