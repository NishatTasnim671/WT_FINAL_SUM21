<?php
    require_once 'controllers/OutlineController.php';
	require_once 'controllers/CourseController.php';
	$courses=getCourses();
    
?>
<html>
	<head>
<link rel="stylesheet" href="styles/mystyle.css">
	    
		
		<script src="js/outline.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<div class="header sticky">
<h1>Upload Notes</h1>
 </div>
	<body>
		<form  action="" onsubmit="return uploadvalidate()" method="post" enctype="multipart/form-data">
		<fieldset>
		<legend>Upload</legend>
			<table>
			
				<tr>
				    <td>Course Name:</td>
					<td><select id="c_id"name="c_id" value="<?php echo $c_id; ?>">
					<option selected disabled>Choose Course</option>
					<?php
					  foreach($courses as $c){
						echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span id="err_c_id"> <?php echo $err_c_id;?> </span></td>
				</tr>
				
				<tr>
				    <td>Note:</td>
					<td>: <input type="file" id="mat" name="mat" value="<?php echo $mat; ?>" > </td>
					<td><span id="err_mat"> <?php echo $err_mat;?> </span></td>
				</tr>
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="upload_mat" value="Add Note"> </td>
					
				</tr>
				
				</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
		</form>
	</body>
</html>