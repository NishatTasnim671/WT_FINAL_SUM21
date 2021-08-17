<?php
    
    require_once 'controllers/CourseController.php';
	require_once 'controllers/OutlineController.php';
	$courses=getCourses();
	$id=$_GET["id"];
	$o=getOutline($id);
	
	
	
	
    
?>
<html>
	<head>

	       <link rel="stylesheet" href="styles/mystyle.css">
		
		<script src="js/outline.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" onsubmit="return outlinevalidate()" method="post">
		<div class="header sticky">
<h1>Outline Editing</h1>
 </div>
		<fieldset>
		<legend>Outline Edit</legend>
			<table>
			<tr>
				    <td>Course name:</td>
					
					<td><select id="c_id" name="c_id" value="<?php echo $c_id; ?>">
					<option selected disabled >Choose Course</option>
					<?php
					  foreach($courses as $c){
						
						echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span id="err_ca_id"> <?php echo $err_ca_id;?> </span></td>
				</tr>
			
				
				<tr>
					<td>Description:</td>
					<input type="hidden" name="id" value="<?php echo $o["id"]; ?>" >
					<td><input type="text" id="desc" name="desc" value="<?php echo $o["description"]; ?>" > </td>
					<td><span id="err_desc"> <?php echo $err_desc;?> </span></td>
				</tr>
				<tr>
					<td>Goal:</td>
					<input type="hidden" name="id" value="<?php echo $o["id"]; ?>" >
					<td>: <input type="text" id="goal" name="goal" value="<?php echo $o["goal"]; ?>" > </td>
					<td><span id="err_goal"> <?php echo $err_goal;?> </span></td>
				</tr>
				
				
					<td>Assessment Overview:</td>
					<input type="hidden" name="id" value="<?php echo $o["id"]; ?>" >
					<td><input type="text" id="assess" name="assess" value="<?php echo $o["assessment"]; ?>" > </td>
					
					<td><span id="err_assess"> <?php echo $err_assess?> </span></td>
				</tr>
				
				
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="edit_outline" value="Edit Outline"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
		</form>
	</body>
</html>
