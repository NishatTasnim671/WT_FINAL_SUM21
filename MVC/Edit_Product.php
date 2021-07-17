<?php
    
    require_once 'controllers/ProductController.php';
	require_once 'controllers/CategoryController.php';
	$categories=getAllCategories();
	$id=$_GET["id"];
	$p=getProduct($id);
    
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
					<td><input type="hidden" name="id" value="<?php echo $p["id"]; ?>" > </td>
					<td>: <input type="text" name="name" value="<?php echo $p["name"]; ?>" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
					
				
				</tr>
				<tr>
				    <td>Catagory:</td>
					<td><select name="c_id" value="<?php echo $c_id; ?>">
					<option selected disabled>Choose Catagory</option>
					<?php
					  foreach($categories as $c){
						echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span> <?php echo $err_c_id;?> </span></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td>: <input type="text" name="price"  value="<?php echo $price; ?>"> </td>
					<td><span> <?php echo $err_price;?> </span></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td>: <input type="text" name="qty" value="<?php echo $qty; ?>" > </td>
					<td><span> <?php echo $err_qty;?> </span></td>
				</tr>
				<tr>
					<td>Description</td>
					<td>: <input type="text" name="desc" value="<?php echo $desc; ?>" > </td>
					<td><span> <?php echo $err_desc;?> </span></td>
				</tr>
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="edit_product" value="Edit Product"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
