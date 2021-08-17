<?php
    require_once 'controllers/ProductController.php';
	require_once 'controllers/CategoryController.php';
	$categories=getAllCategories();
    
?>
<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="" enctype="multipart/form-data">
		<fieldset>
			<table>
			<td>  <center> <b> Add Product </b></center></td>
				<tr>
					<td>Name:</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" > </td>
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
					<td>Image</td>
					<td>: <input type="file" name="p_image" value="<?php echo $img; ?>" > </td>
                  
				</tr>
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="add_product" value="Add Product"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
