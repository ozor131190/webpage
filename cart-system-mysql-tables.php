


CREATE TABLE product (
id int(11) Not Null AUTO_INCREMENT,
 product_name varchar(100),
 product_price varchar(50),
 product_image varchar(255),
 product_code varchar(255),	
  PRIMARY KEY (id)


);

<?php 

//INSERT INTO product(id , product_name , product_price , product_image , product_code  )values(' ', 'p1camera' , '2000' , 'product/p1.jpg' , 'rc2500'  );


//INSERT INTO product(id , product_name , product_price , product_image , product_code  )values(' ', 'p2makeup' , '600' , 'product/p2.jpg' , 'rc255555'  );

//INSERT INTO product(id , product_name , product_price , product_image , product_code  )values(' ', 'p3watch' , '1200' , 'product/p3.jpg' , 'rc274747'  );
?>

//INSERT INTO product(id , product_name , product_price , product_image , product_code  )values(' ', 'p3watch' , '1200' , 'product/p4.jpg' , 'rc274ffgf747'  );
?>


CREATE TABLE cart (
id int(11) Not Null AUTO_INCREMENT,
 product_name varchar(100),
 product_price varchar(50) ,
 product_image varchar(255),
 quantity int(10),
 total_price varchar(100),
 product_code varchar(25),	
  PRIMARY KEY (id)


);


CREATE TABLE orders (
id int(11) Not Null AUTO_INCREMENT,
 name varchar(100),
 email varchar(100) ,
 phone varchar(30),
 address varchar(500),
  pmode varchar(50),
 products varchar(255),
 amount_paid varchar(100),	
  PRIMARY KEY (id)


);