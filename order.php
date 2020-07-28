
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
     <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory</title>

    <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="home/css/shop-homepage.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="style2.css">

  </head>

  <body>
   <?php
	if(isset($_POST['search_btn'])) {
					$keyword = $_POST['search_word'];
					
	}

	?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> Tech </a>
		
		
		
		<!--search box-->
		<div class="input-group">
		
			<form action="search.php" method="post">
			<input type="text" name="search_word" placeholder="Search Product" />
			<input type="submit" class="btn" name="search_btn" value="Search" />
			</form>
			
		</div>
		
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="customer_login.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
	

      <div class="row">

        <div class="col-lg-9">
		<form method="post" action="order.php" enctype="multipart/form-data" >
		  <fieldset>
			<!-- Form Name -->
			<legend>Order Product </legend>
				<?php
				$host    = "127.0.0.1";
				$user    = "root";
				$pass    = "";
				$db_name = "inventory";
				$product_id=$_GET['pro_id'];
				$customer_email=$_GET['customer_email'];
				
				//echo $id;
				//$querry="select * from product where product_id=".$id;//querry
				//create connection
				$connection = mysqli_connect($host, $user, $pass, $db_name);
				
				//test if connection failed
				if(mysqli_connect_errno()){
						die("connection failed: ".mysqli_connect_error(). " (" 
							. mysqli_connect_errno(). ")");
				}
				//getting product info	

				if(isset($_POST['submit_btn'])){
					$Name=$_POST['customer_name'];
					$Adress=$_POST['customer_address'];
					$Phone=$_POST['customer_no'];    
					$Email=$_POST['customer_email'];
					$order_id=$_POST['order_id'];
					$pro_id=$_POST['product_id'];
					echo "lol";
					//Insert customer the table
					
					//mysqli_query($connection,"INSERT INTO customer (customer_name, customer_address, customer_no,customer_email,product_id) 
						//VALUES('$Name', '$Adress', '$Phone', '$Email','$pro_id')");
	
					
					//insert into order table

							
					mysqli_query($connection,"INSERT INTO orders (order_id, customer_name, order_date, customer_email, customer_no ,product_id) 
						VALUES('$order_id','$Name', NOW(), '$Email', '$Phone', '$pro_id')");
						
	
					header("Location: customer_login.php");
					
					
				}
				?>
				<?php
				//getting customer data
				$result = mysqli_query($connection,"select * from customer where customer_email='$customer_email'");
				while($row = mysqli_fetch_array($result))
				{
					$customer_name=$row['customer_name'];
					$customer_address=$row['customer_address'];
					$customer_no=$row['customer_no'];    

				}
				?>
								<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="product_id">Your Product ID</label>  
					<div class="col-md-4">
						<input id="product_id" value="<?php echo $product_id;?>"  name="product_id"  class="form-control input-md" required="" type="number"/>
    
					</div>
				</div>
				
				<!-- 
				<div class="form-group">
					<label class="col-md-4 control-label" for="customer_id">Your ID</label>  
					<div class="col-md-4">
						<input id="customer_id"   name="customer_id" placeholder="Unique ID 0-9999999999999" class="form-control input-md" required="" type="number"/>
    
					</div>
				</div>
				-->
			    <!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="customer_name">FULL NAME</label>  
					<div class="col-md-4">
						<input id="customer_name" value="<?php echo $customer_name;?>" name="customer_name" placeholder="Your NAME" class="form-control input-md" required="" type="text">
    
					</div>
				</div>

							    <!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="customer_address">Your Address</label>  
					<div class="col-md-4">
						<input id="customer_address" value="<?php echo $customer_address;?>" name="customer_address" placeholder="Address" class="form-control input-md" required="" type="text">
    
					</div>
				</div>
								<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="customer_no">Phone no.</label>  
					<div class="col-md-4">
						<input id="customer_no" value="<?php echo $customer_no;?>" name="customer_no" placeholder="+88***********" class="form-control input-md" required="" type="text">
    
					</div>
				</div>
									<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="customer_email">Email</label>  
					<div class="col-md-4">
						<input id="customer_email" name="customer_email" value="<?php echo $customer_email;?>" placeholder="Email Address" class="form-control input-md" required="" type="text">
    
					</div>
				</div>

				
				<!-- Button -->
				<div class="form-group">
				 
				  <div class="col-md-4">
					<button type="submit" name="submit_btn" class="btn">Order</button>
				  </div>
				</div>

			</fieldset>
			</form>
		
        </div>
        <!-- /.col-lg-3 -->

          <div class="row">
		  

          </div>
		  
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="home/vendor/jquery/jquery.min.js"></script>
    <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
    
       
</html>
