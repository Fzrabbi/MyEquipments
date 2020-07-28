<?php 
	session_start(); 
    if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
                
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>


	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../home/css/shop-homepage.css" rel="stylesheet">
</head>
<style>
body  {
    background-image: url("login.jpg");
    background-color: #cccccc;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> Tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../addproduct.php"> <?php  if (isset($_SESSION['email'])) : ?>
			<li>Welcome <strong><?php echo $_SESSION['email']; ?> </strong></li>
			<a href="../home.php?logout='1'"style="color:red;">logout</a> 
		<?php endif ?> </a>
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
          </div>

                    <div class="row">
		  
            
				 <?php
				$host    = "127.0.0.1";
				$user    = "root";
				$pass    = "";
				$db_name = "inventory";
        
				$querry="select * from product";//querry
				//create connection
				$connection = mysqli_connect($host, $user, $pass, $db_name);
        
				//test if connection failed
				if(mysqli_connect_errno()){
						die("connection failed: ".mysqli_connect_error(). " (" 
							. mysqli_connect_errno(). ")");
				}
				$result = mysqli_query($connection,$querry);
				while ($row = mysqli_fetch_array($result))
				{
				//echo $row['product_price'];
				$name=$row['product_name'];
				$description=$row['product_description'];
				$price=$row['product_price'];
				
				?>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
				<a href="#"><img class="card-img-top" <?php echo " src='../pics/".$row['image']."'"?> alt=""></a>
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
              </div> 
            </div>
						 <?php
			};
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
    <script src="../home/vendor/jquery/jquery.min.js"></script>
    <script src="../home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>







	
		
</body>
</html>