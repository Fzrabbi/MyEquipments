<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body  {
    background-image: url("register.jpg");
    background-color: #cccccc;
}
</style>
<body>
	<div class="header">
		<h2>Register Customer</h2>
	</div>
	
	<form method="post" action="register_customer.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Phone no.</label>
			<input type="text" name="phone">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="adress">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_customer">Register</button>
		</div>
		<p>
			Already a member? <a href="login_customer.php">Sign in</a>
		</p>
	</form>
</body>
</html>