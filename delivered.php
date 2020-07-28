<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		include("Registration/server.php");
 
		//getting id of the data from url
		$id = $_GET['id'];
		
		
		$result = mysqli_query($db,"select * from orders where order_id='$id'");
		while($row = mysqli_fetch_array($result))
		{
			$customer_name=$row['customer_name'];
			$customer_email=$row['customer_email'];
			$customer_no=$row['customer_no']; 
			$product_id=$row['product_id']; 

		}
		mysqli_query($db,"INSERT INTO delivered (customer_name, customer_email, customer_no ,product_id, delivery_date) 
						VALUES('$customer_name', '$customer_email', '$customer_no', '$product_id',NOW())");
		
 
		//deleting the row from table
		mysqli_query($db, "DELETE FROM orders WHERE order_id='$id'");
 
		//redirecting to the display page (index.php in our case)
		header("Location:addproduct.php");
        // put your code here
        ?>
    </body>
</html>
