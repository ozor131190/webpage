<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>wwww</title>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
  
 </script>

   


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



#message {}

#shopping-cart2 {padding: 8px; left: 0;}
</style>


<body>


 <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">WEB STORE</a>
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

         
         
        <a  class="nav-link" href="cart.php">
          <i id="shopping-cart" class="bi bi-cart4 position-relative ">

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


      

}); // function


</script>

<script>



</script>


</body>
</html>