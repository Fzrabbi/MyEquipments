<!DOCTYPE html>
<?php
// including the database connection file
include('Registration/server.php');
 
if(isset($_POST['update']))
{    
    $Id = $_POST['id'];
    
    $Name=$_POST['product_name'];
	$Description=$_POST['product_description'];
    $Price=$_POST['product_price'];    
    $Quantity=$_POST['product_quantity'];
    $Supplier_id=$_POST['supplier_id'];
	echo "lol";
    // checking empty fields
    if(empty($Name) || empty($Description) || empty($Price)|| empty($Quantity)|| empty($Supplier_id)) {            
        if(empty($Name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($Description)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }
        
        if(empty($Price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
        if(empty($Quantity)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
        
        if(empty($Supplier_id)) {
            echo "<font color='red'>Suplier Id field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE product SET product_name='$Name',product_description='$Description',product_price='$Price',product_quantity='$Quantity',supplier_id='$Supplier_id' WHERE product_id='$Id'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: addproduct.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM product where product_id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $Name=$res['product_name'];
	$Description=$res['product_description'];
    $Price=$res['product_price'];    
    $Quantity=$res['product_quantity'];
    $Supplier_id=$res['supplier_id'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
	<link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="home/css/shop-homepage.css" rel="stylesheet">
</head>
	<style>
		body  {
			background-image: url("pics/3ds_websitebackgroundwood_187.jpg");
			background-color: #cccccc;
		}
	</style>
 
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="addproduct.php"> Back</a>
	</nav>
    <div class="container">

		<div class="row">

        <div class="col-lg-2">

          

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		
		
			
			<br/><br/>
			
			<form  method="post" action="edit.php">
				<table border="0">
					<tr> 
						<td>Name</td>
						<td><input type="text" size=40 name="product_name" value="<?php echo $Name;?>"></td>
					</tr>
					<tr> 
						<td>Description</td>
						<td><input type="text" size=40 name="product_description" value="<?php echo $Description;?>"></td>
					</tr>
					<tr> 
						<td>Price</td>
						<td><input type="text" size=40 name="product_price" value="<?php echo $Price;?>"></td>
					</tr>
								<tr> 
						<td>Quantity</td>
						<td><input type="text" size=40 name="product_quantity" value="<?php echo $Quantity;?>"></td>
					</tr>
					<tr> 
						<td>Supplier_id</td>
						<td><input type="text" size=40 name="supplier_id" value="<?php echo $Supplier_id;?>"></td>
					</tr>
					
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
		</div>
        <!-- /.col-lg-9 -->

		</div>
      <!-- /.row -->

    </div>
</body>
</html>