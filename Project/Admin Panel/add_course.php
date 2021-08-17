<?php
include 'admin_header.php';
    require_once 'controllers/CourseController.php';
	require_once 'controllers/CategoryController.php';
	$categories=getAllCategories();
?>
<html>
	<head>

	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" method="post">
		
<h1>Course Adding</h1>

		<fieldset>
	
			<table>
			
				<tr>
					<td>Name:</td>
					<td><input type="text" id="name" name="name" value="<?php echo $name; ?>" > </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
					
				
				</tr>
				<tr>
				    <td>Category:</td>
					<td><select id="ca_id" name="ca_id" value="<?php echo $ca_id; ?>">
					<option selected disabled>Choose Category</option>
					<?php
					  foreach($categories as $ca){
						echo "<option value='".$ca["id"]."'>".$ca["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span id="err_ca_id"> <?php echo $err_ca_id;?> </span></td>
				</tr>
				<tr>
				    <td>Duration:</td>
					<td><input type="text" id="duration" name="duration" value="<?php echo $duration; ?>" > </td>
					<td><span id="err_duration"> <?php echo $err_duration;?> </span></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td> <input type="text" id="price" name="price"  value="<?php echo $price; ?>"> </td>
					<td><span id="err_price"> <?php echo $err_price;?> </span></td>
				</tr>
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="add_course" value="Add Course"> </td>
					
				</tr>
				
				</table>
			
			
			
		</fieldset>
		
		</form>
	</body>
</html>