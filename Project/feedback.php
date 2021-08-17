<?php
    require_once 'controllers/UserController.php';
	require_once 'controllers/feedbackController.php';
	$students=getStudents();
	
?>

<html>
	<head>

	    
		<link rel="stylesheet" href="styles/mystyle.css">
		
		<script src="js/feedback.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" onsubmit="return feedbackvalidate()" method="post">
	<div class="header sticky">
	<h1>Feedback</h1>
 </div>
		<fieldset>
		<legend>Feedback</legend>
		
			<table>
		
				<tr>
					<td>Enter Student Name:</td>
					<td><select id="u_id" name="u_id" value="<?php echo $u_id; ?>">
					<option selected disabled>name</option>
					<?php
					  foreach($students as $s){
						echo "<option value='".$s["id"]."'>".$s["username"]."</option>";
					}
					?>
					</select>
					<td><span id="err_u_id"> <?php echo $err_u_id;?> </span></td>
				</tr>
				
				<tr>
					<td>How was the performance:</td>
					<td><input type="radio" value="Not good" <?php if($per=="Not good") echo "checked"; ?> name="per"> Not Good <input name="per" <?php if($per=="Moderate") echo "checked"; ?> value="Moderate" type="radio"> Moderate 
					<input name="per" <?php if($per=="Good") echo "checked"; ?> value="Good" type="radio"> Good </td>
					<td><span id="err_per"> <?php echo $err_per;?> </span></td>
				</td>
				<tr>
					<td>How was the effort:</td>
					<td><input type="radio" value="Not good" <?php if($effort=="Not good") echo "checked"; ?> name="effort"> Not Good <input name="effort" <?php if($effort=="Moderate") echo "checked"; ?> value="Moderate" type="radio"> Moderate 
					<input name="effort" <?php if($effort=="Good") echo "checked"; ?> value="Good" type="radio"> Good </td>
					<td><span id="err_effort"> <?php echo $err_effort;?> </span></td>
					
				</td>
				</tr>
				<br>
					<tr>
					<td> <b> Tell something</td>
					<tr>
					<td>comment:</td>
					<td><textarea id="tell" name="tell" ><?php echo $tell; ?></textarea>
					<td><span id="err_tell"> <?php echo $err_tell;?> </span></td>
					</td>
				</tr>
				<tr>
				<td colspan="2" align="right"> <input type="submit" name="submit" value="Submit"></td>
								</tr>
								</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
		</form>
	</body>
</html>