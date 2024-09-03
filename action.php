


<?php 
session_start();
include 'config.php';
error_reporting(0);
if (isset($_POST['pid'])) {
	# code...


$pid = $_POST['pid'];
$pname = $_POST['pname'];
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pimage = $_POST['pimage'];
$pcode = $_POST['pcode'];
$pqty = 1;

$stmt = $link->prepare("SELECT product_code FROM cart WHERE product_code=?");
$stmt->bind_param("s" , $pcode);
$stmt->execute();
$res = $stmt->get_result();
$r = $res->fetch_assoc();

$code = $r['product_code'];

if (!$code) {

$query = $link->prepare("INSERT INTO cart (product_name,product_price,product_image,quantity,total_price,product_code) values(?,?,?,?,?,?)");
$query->bind_param("sssiss" , $pname,$pprice,$pimage,$pqty,$pprice,$pcode);


$query->execute();
echo '
<div id="myalert" class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Item Has Been Added </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>



';
}

else {

echo '

<div id="myalert" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Item Has Been Added Already !</strong> Check Your Cart 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


';
}

 }


if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item' ) {
	
		$stmt1 = $link->prepare("SELECT * FROM cart");
		$stmt1->execute();
		$stmt1->store_result();

		$rows = $stmt1->num_rows;
		echo $rows;
}









if (isset($_GET['remove'])) {
	$id = $_GET['remove'];

	$stmt = $link->prepare("DELETE FROM cart WHERE ID=?");
	$stmt->bind_param("i" , $id);
	$stmt->execute();

	if ($stmt->execute()) { 
		
		$_SESSION['message'] = 'Item has been removed';
	header('location:cart.php');}
	else {
	$_SESSION['showAlert'] = 'block';
	header('location:cart.php');
	}



}


	if (isset($_GET['clear'])) {
	

	$stmt = $link->prepare("DELETE FROM cart");
	$stmt->execute();
	

	if ($stmt->execute()) { 
		
		$_SESSION['DeleteAllCart'] = 'Cart Has been Cleared';
	header('location:cart.php');}
	

}



if (isset($_POST['quantity11'])) {
	
	
	$quantity11 = $_POST['quantity11'];
	$pid11 = $_POST['pid11'];
	$pprice11 = $_POST['pprice11'];

	$tprice11 = $quantity11 * $pprice11;

	
	$update = $link->prepare("UPDATE cart SET quantity=? , total_price=? WHERE id=?");

	$update->bind_param("isi" , $quantity11 , $tprice11 , $pid11);
	$update->execute();

	}



	//check out ajax request 

	
	// Checkout and save customer info in the orders table
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
		echo "OKKKK";
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];

	  $data = '';

	  $stmt = $link->prepare('INSERT INTO orders (name,email,phone,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?,?)');

	  
	  $stmt->bind_param('sssssss',$name,$email,$phone,$address,$pmode,$products,$grand_total);
	  
	  $stmt->execute();

	  
	  $stmt2 = $link->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								<h4>Your Phone : ' . $phone . '</h4>
								<h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}

	
?>





<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>


<script>
$("#myalert").fadeTo(1000, 500).slideUp(500, function(){
    $("#myalert").slideUp(100);
});


</script>



