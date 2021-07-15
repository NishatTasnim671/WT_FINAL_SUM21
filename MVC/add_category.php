<?php
   include 'header.php';
    include 'controllers/CategoryController.php';
	
    
?>
<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <center> <b> Add Catagory </td>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="add_category" value="Add Catagory"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
<?php include 'footer.php'; ?>