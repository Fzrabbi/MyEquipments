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
 
		//deleting the row from table
		$result = mysqli_query($db, "DELETE FROM supplier WHERE supplier_id=$id");
 
		//redirecting to the display page (index.php in our case)
		header("Location:addproduct.php");
        // put your code here
        ?>
    </body>
</html>
