<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('127.0.0.1', 'root', '', 'inventory');
	
	


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "First name is required"); }
                if (empty($lastname)) { array_push($errors, "Last name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (u_first_name, u_last_name, u_email, u_pass) 
					  VALUES('$firstname','$lastname', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE u_email='$email' AND u_pass='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}
		// REGISTER customer
	if (isset($_POST['reg_customer'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$adress = mysqli_real_escape_string($db, $_POST['adress']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "First name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phone)) { array_push($errors, "Phone no is required"); }
		if (empty($adress)) { array_push($errors, "Address is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customer (customer_name, customer_address,customer_email , customer_no, customer_pass) 
					  VALUES('$name', '$adress', '$email', '$phone', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: customer_login.php.php');
		}

	}

	// ... 

	// LOGIN customer
	if (isset($_POST['login_customer'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM customer WHERE customer_email='$email' AND customer_pass='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../customer_login.php');
			}else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}
	//add Product
	if(isset($_POST['add_btn'])){
		//recive product info
		$productid=$_POST['product_id'];
		$productname=$_POST['product_name'];
		$productdesc=$_POST['product_description'];
		$productquan=$_POST['available_quantity'];
		$productprice=$_POST['product_price'];
		$supplierid=$_POST['Supplier_id'];
		$image = $_FILES['image']['name'];
		
		
		$target = "pics/".basename($image);
		
		if (count($errors) == 0) {
			
			$query = "INSERT INTO product (product_id, product_name, product_description, product_quantity,product_price,supplier_id,image) 
					  VALUES('$productid','$productname', '$productdesc', '$productquan', '$productprice', '$supplierid','$image')";
			mysqli_query($db, $query);
			echo "<font color='green'>Data added successfully.";
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
				$msg = "Image uploaded successfully";
			}else{
				$msg = "Failed to upload image";
			}
			echo $msg;
		}
	}
	if(isset($_POST['supply_btn'])){
		//recive product info
		$id=$_POST['supplier_id'];
		$name=$_POST['supplier_name'];
		$phone=$_POST['supplier_no'];
		$adress=$_POST['supplier_adress'];

		if (count($errors) == 0) {
			$query = "INSERT INTO supplier (supplier_id, supplier_name, supplier_no, supplier_adress) 
					  VALUES('$id','$name', '$phone', '$adress')";
			mysqli_query($db, $query);
			echo "<font color='green'>Data added successfully.";
		}
	}
	
?>