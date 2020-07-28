<?php include('Registration/server.php') ?>
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

    <title>Shop Homepage - Start Bootstrap Template</title>

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
        <a class="navbar-brand" href="#"> Tech</a>
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
              <a class="nav-link" href="customer.php">Home
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

        <div class="col-lg-2">

          

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            
          </div>

          <div class="row">
		  
            
				 <?php
				$host    = "127.0.0.1";
				$user    = "root";
				$pass    = "";
				$db_name = "inventory";
				
				$querry="select * from product where product_name LIKE '%$keyword%' ";//querry
				//create connection
				$connection = mysqli_connect($host, $user, $pass, $db_name);
        
				//test if connection failed
				if(mysqli_connect_errno()){
						die("connection failed: ".mysqli_connect_error(). " (" 
							. mysqli_connect_errno(). ")");
				}
				$result = mysqli_query($connection,$querry);
				$count=0;
				//echo $keyword;
				
				
				
				while ($row = mysqli_fetch_array($result))
				{
				//echo  $keyword ;
				$name=$row['product_name'];
				$description=$row['product_description'];
				$price=$row['product_price'];
				$count=$count+1;
				?>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" <?php echo " src='pics/".$row['image']."'"?> alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $name ?></a>
                  </h4>
                  <h5> $<?php echo $price ?> </h5>
                  <p class="card-text"> <?php echo $description ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
				<?php
				//$url='?'.'id='.$id;
				 // echo '<a href="order.php';
				 // echo $url;
				 // echo '">order</a>';
				  
				 echo "<td><a href=\"order.php?id=$row[product_id]\">Order</a></td>"; 
				?>
              </div> 
            </div>
						 <?php
			};
			if ($count == 0) {

				echo "Sorry, No Item Matched...!!!";

				}
			?>
          </div>
		  
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Fz.inc 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="home/vendor/jquery/jquery.min.js"></script>
    <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
    
       
</html>
