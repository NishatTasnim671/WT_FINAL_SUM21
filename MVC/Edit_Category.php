<?php
    
    require_once 'controllers/CategoryController.php';
	$id=$_GET["id"];
	$c=getCategory($id);
    
?>
<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <b>Edit Catagory </b></td>
				<tr>
					<td>Name</td>
					<td><input type="hidden" name="id" value="<?php echo $c["id"]; ?>" > </td>
					<td>: <input type="text" name="name" value="<?php echo $c["name"]; ?>" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="edit_category" value="Edit Catagory"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
