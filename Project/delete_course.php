<?php
    
    require_once 'controllers/CourseController.php';
	require_once 'controllers/CategoryController.php';
	$categories=getAllCategories();
	$id=$_GET["id"];
	$c=getCourse($id);
	
	
	
    
?>
<html>
	<head>
	<link rel="stylesheet" href="styles/mystyle.css">
          <script src="js/courses.js"></script>
	</head>
		
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" onsubmit="return coursevalidate()" method="post">
		<div class="header sticky">
<h1>Course Deleting</h1>
 </div>
		<fieldset>
		<legend>Course Delete</legend>
			<table>
				<tr>
					<td>Name</td>
					<input type="hidden" name="id" value="<?php echo $c["id"]; ?>" >
					<td>: <input type="text" id="name" name="name" value="<?php echo $c["name"]; ?>" > </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
             	</tr>
		       
				<tr>
				    <td>Duration</td>
					<input type="hidden" name="id" value="<?php echo $c["id"]; ?>" >
					<td>: <input type="text" id="duration" name="duration" value="<?php echo $c["duration"]; ?>" > </td>
					<td><span id="err_duration"> <?php echo $err_duration;?> </span></td>
				</tr>
				<tr>
					<td>Price</td>
					<input type="hidden" name="id" value="<?php echo $c["id"]; ?>" >
					<td>: <input type="text" id="price" name="price"  value="<?php echo $c["price"]; ?>"> </td>
					<td><span id="err_price"> <?php echo $err_price;?> </span></td>
				</tr>
				
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="delete_course" value="Delete Course"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
				<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
		</form>
	</body>
</html>
