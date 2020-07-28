
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
  <style>
body  {
    background-image: url("pics/service.png");
    background-color: #cccccc;
}
</style>

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
              <a class="nav-link" href="customer.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
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

        
          <div class="row">
		  
		  
            

			<div class="col-lg-4 col-md-6 mb-4">
				<?php
					//echo "serlsdhfjkhdsjkfgksdfksdjg";
				
				?>

            </div>
          </div>
		  
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

   
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="home/vendor/jquery/jquery.min.js"></script>
    <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
    
       
</html>
