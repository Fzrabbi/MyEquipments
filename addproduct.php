<!DOCTYPE html>
<?php include('Registration/server.php') ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		
		
		<!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="home/css/shop-homepage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style2.css">
	
    </head>
	<style>
		body  {
			background-image: url("pics/1920x1200.jpg");
			background-color: #cccccc;
		}
	</style>
    <body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> Tech </a>
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Registration/index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
			
			<li class="nav-item"> 
				<form action="addproduct.php" method="post">             
					<input type="submit" class="btn" name="deliveries_btn" value="Deliveries" />
				</form>
            </li>
			&nbsp;
			<li class="nav-item"> 
				<form action="addproduct.php" method="post">             
					<input type="submit" class="btn" name="orderlist_btn" value="Orderings" />
				</form>
            </li>
			&nbsp;
            <li class="nav-item"> 
				<form action="addproduct.php" method="post">             
					<input type="submit" class="btn" name="addproduct_btn" value="Add Product" />
				</form>
            </li>
			&nbsp;
            <li class="nav-item">
				<form action="addproduct.php" method="post">
					<input type="submit" class="btn" name="editproduct_btn" value="Edit Product" />
				</form>
            </li>
			&nbsp;
			<li class="nav-item">
				<form action="addproduct.php" method="post">
					<input type="submit" class="btn" name="addsupplier_btn" value="Add Supplier" />
				</form>
            </li>
			&nbsp;
			<li class="nav-item">
				<form action="addproduct.php" method="post">
					<input type="submit" class="btn" name="editsupplier_btn" value="Edit Supplier" />
				</form>
            </li>
			&nbsp;
            <li class="nav-item">
              <a href="home.php?logout='1'"style="color:red;">logout</a> 
			
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
	    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-2">

          

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <!--<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="..\pics\slide1.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="..\pics\slide2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="..\pics\slide3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> -->

         <form method="post" action="addproduct.php" enctype="multipart/form-data" >
		 <p style=" padding: 0 7em 5em 0;">
			<?php 
			if(isset($_POST['addproduct_btn'])) {
					
			?>
			<fieldset>
			<!-- Form Name -->
			<legend>ADD PRODUCTS</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
					<div class="col-md-4">
						<input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="number"/>
    
					</div>
				</div>

			    <!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
					<div class="col-md-4">
						<input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
					</div>
				</div>

				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
				  <div class="col-md-4">
					<select id="product_categorie" name="product_categorie" class="form-control">
					</select>
				  </div>
				</div>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="available_quantity">Product price</label>  
				  <div class="col-md-4">
				  <input id="available_quantity" name="product_price" placeholder="price" class="form-control input-md" required="" type="number" step="0.01">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
				  <div class="col-md-4">
				  <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="number">
					
				  </div>
				</div>

				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
				  <div class="col-md-4">                     
					<textarea class="form-control" id="product_description" name="product_description"></textarea>
				  </div>
				</div>

				

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="stock_alert">Supplier id</label>  
				  <div class="col-md-4">
				  <input id="stock_alert" name="Supplier_id" placeholder="Supplier id" class="form-control input-md" required="" type="number">
					
				  </div>
				</div>

				
	
				 <!-- File Button --> 
				<div class="form-group">
				  <label class="col-md-4 control-label" for="filebutton">main_image</label>
				  <div class="col-md-4">
					<input  name="image"  type="file">
				  </div>
				</div>
				

				<!-- Button -->
				<div class="form-group">
				 
				  <div class="col-md-4">
					<button type="submit" name="add_btn" class="btn">Add</button>
				  </div>
				</div>

			</fieldset>
			</p>
		<?php
				};	
		?>
		<?php
		if(isset($_POST['addsupplier_btn'])){//add supplier
		?>
			<fieldset>
			<!-- Form Name -->
			<legend>ADD Supplier</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="supplier_id">Supplier ID</label>  
					<div class="col-md-4">
						<input id="supplier_id" name="supplier_id" placeholder="Supplier ID" class="form-control input-md" required="" type="number"/>
    
					</div>
				</div>

			    <!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="supplier_name">Supplier NAME</label>  
					<div class="col-md-4">
						<input id="supplier_name" name="supplier_name" placeholder="Supplier NAME" class="form-control input-md" required="" type="text">
    
					</div>
				</div>
							    <!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="supplier_no">Phone no.</label>  
					<div class="col-md-4">
						<input id="supplier_no" name="supplier_no" placeholder="+88***********" class="form-control input-md" required="" type="text">
    
					</div>
				</div>
							    <!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="supplier_adress">Address</label>  
					<div class="col-md-4">
						<input id="supplier_adress" name="supplier_adress" placeholder="Address" class="form-control input-md" required="" type="text">
    
					</div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				 
				  <div class="col-md-4">
					<button type="submit" name="supply_btn" class="btn">Add Supplier</button>
				  </div>
				</div>

			</fieldset>
		<?php
		};
		?>
		</form>
		<?php
		if(isset($_POST['editsupplier_btn'])){//edit product
		$result = mysqli_query($db, "SELECT * FROM supplier");
		?>
			<table width='80%' border=3>
			<tr bgcolor='#CCCCCC'>
				<td>Id</td>
				<td>Name</td>
				<td>Phone No.</td>
				<td>Address</td>
				<td>Operation</td>
			</tr>
			<?php 
			//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
			while($res = mysqli_fetch_array($result)) {         
				echo "<tr>";
				echo "<td>".$res['supplier_id']."</td>";
				echo "<td>".$res['supplier_name']."</td>";
				echo "<td>".$res['supplier_no']."</td>";
				echo "<td>".$res['supplier_adress']."</td>";				
				echo "<td><a href=\"edit_supplier.php?id=$res[supplier_id]\">Edit</a> <a href=\"delete_supplier.php?id=$res[supplier_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
			}
			?>
			</table>
		<?php
		};
		?>
		<?php
		if(isset($_POST['editproduct_btn'])){//edit product
			$result = mysqli_query($db, "SELECT * FROM product");
			?>
			<table width='80%' border=3>
			<tr bgcolor='#CCCCCC'>
				<td>Id</td>
				<td>Name</td>
				<td>Description</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Supplier_id</td>
				<td>Operation</td>
			</tr>
			<?php 
			//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
			while($res = mysqli_fetch_array($result)) {         
				echo "<tr>";
				echo "<td>".$res['product_id']."</td>";
				echo "<td>".$res['product_name']."</td>";
				echo "<td>".$res['product_description']."</td>";
				echo "<td>".$res['product_price']."</td>"; 
				echo "<td>".$res['product_quantity']."</td>";
				echo "<td>".$res['supplier_id']."</td>";				
				echo "<td><a href=\"edit.php?id=$res[product_id]\">Edit</a> <a href=\"delete.php?id=$res[product_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
			}
			?>
			</table>
		<?php
		};
		?>
		<?php
		if(isset($_POST['orderlist_btn'])){//Orders product
			$result = mysqli_query($db, "SELECT * FROM orders");
			?>
			<table width='80%' border=3>
			<tr bgcolor='#CCCCCC'>
				<td>Order Id</td>
				<td>Customer Name</td>
				<td>Order Date</td>
				<td>Customer Email</td>
				<td>Customer no</td>
				<td>Product Id</td>
				<td>Make deliver</td>
			</tr>
			<?php 
			//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
			while($res = mysqli_fetch_array($result)) {         
				echo "<tr>";
				echo "<td>".$res['order_id']."</td>";
				echo "<td>".$res['customer_name']."</td>";
				echo "<td>".$res['order_date']."</td>"; 
				echo "<td>".$res['customer_email']."</td>";
				echo "<td>".$res['customer_no']."</td>";
				echo "<td>".$res['product_id']."</td>";				
				echo "<td><a href=\"delivered.php?id=$res[order_id]\" onClick=\"return confirm('You are going to make this order as delivered...!')\">Delivered</a></td>";        
			}
			?>
			</table>
		<?php
		};
		?>
		<?php
		if(isset($_POST['deliveries_btn'])){//delivered product
			$result = mysqli_query($db, "SELECT * FROM delivered");
			?>
			<table width='80%' border=3>
			<tr bgcolor='#CCCCCC'>
				<td>Customer Name</td>
				<td>Customer Email</td>
				<td>Customer no</td>
				<td>Product Id</td>
				<td>Delivery Date</td>
			</tr>
			<?php 
			//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
			while($res = mysqli_fetch_array($result)) {         
				echo "<tr>";
				echo "<td>".$res['customer_name']."</td>";
				echo "<td>".$res['customer_email']."</td>";
				echo "<td>".$res['customer_no']."</td>";
				echo "<td>".$res['product_id']."</td>";	
				echo "<td>".$res['delivery_date']."</td>";
				//echo "<td><a href=\"delivered.php?id=$res[order_id]\" onClick=\"return confirm('You are going to make this order as delivered...!')\">Delivered</a></td>";        
			}
			?>
			</table>
		<?php
		};
		?>

          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
