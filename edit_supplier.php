<!DOCTYPE html>

<?php
// including the database connection file
include('Registration/server.php');
 
if(isset($_POST['update_supplier']))
{    
    $Id = $_POST['id'];
    
    $Name=$_POST['supplier_name'];
	$Phone=$_POST['supplier_no'];
    $Adress=$_POST['supplier_adress'];    

	echo $Id;
    // checking empty fields
    if(empty($Name) || empty($Phone) || empty($Adress)) {            
        if(empty($Name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($Phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }
        
        if(empty($Adress)) {
            echo "<font color='red'>Adress field is empty.</font><br/>";
        }       
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE supplier SET supplier_name='$Name',supplier_no='$Phone',supplier_adress='$Adress' WHERE supplier_id='$Id'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: addproduct.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM supplier where supplier_id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $Name=$res['supplier_name'];
	$Phone=$res['supplier_no'];
	$Adress=$res['supplier_adress'];   
}
?>
<html>
<head>    
    <title>Edit Data</title>
	
	<link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
			
			<form  method="post" action="edit_supplier.php">
				<table border="0">
					<tr> 
						<td>Name</td>
						<td><input type="text" size=40 name="supplier_name" value="<?php echo $Name;?>"></td>
					</tr>
					<tr> 
						<td>Phone</td>
						<td><input type="text" size=40 name="supplier_no" value="<?php echo $Phone;?>"></td>
					</tr>
					<tr> 
						<td>Address</td>
						<td><input type="text" size=40 name="supplier_adress" value="<?php echo $Adress;?>"></td>
					</tr>

					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="update_supplier" value="Update"></td>
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