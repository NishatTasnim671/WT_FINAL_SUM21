<?php
    require_once 'controllers/CourseController.php';
	require_once 'controllers/feedbackController.php';
	$courses=getCourses();
	
?>


<html>
	<head>

	    
		<link rel="stylesheet" href="styles/mystyle.css">
		<script src="js/feedback.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<div class="header sticky">
<h1>Review</h1>
 </div>
	<body>
		<form  action="" onsubmit="return reviewvalidate()" method="post">
		<fieldset>
			<table>
			<td>  <center> <b> Review  </td>
				
				<tr>
					<td>Enter Course</td>
					<td><select id="c_id" name="c_id" value="<?php echo $c_id; ?>">
					<option selected disabled>Course name</option>
					<?php
					  foreach($courses as $c){
						echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
					}
					?>
					</select>
					<td><span id="err_c_id"> <?php echo $err_c_id;?> </span></td>
				</tr>
				<td> <b> Please rate our programs  </td>
				
				<tr>
					<td>How was the course instructor</td>
					<td>: <input type="radio" value="Not good" <?php if($ins=="Not good") echo "checked"; ?> name="ins"> Not Good <input name="ins" <?php if($ins=="Moderate") echo "checked"; ?> value="Moderate" type="radio"> Moderate 
					<input name="ins" <?php if($ins=="Good") echo "checked"; ?> value="Good" type="radio"> Good </td>
					<td><span id="err_ins"> <?php echo $err_ins;?> </span></td>
				</td>
				<tr>
					<td>How was the course curriculumn</td>
					<td>: <input type="radio" value="Not good" <?php if($curr=="Not good") echo "checked"; ?> name="curr"> Not Good <input name="curr" <?php if($curr=="Moderate") echo "checked"; ?> value="Moderate" type="radio"> Moderate 
					<input name="curr" <?php if($curr=="Good") echo "checked"; ?> value="Good" type="radio"> Good </td>
					<td><span id="err_curr"> <?php echo $err_curr;?> </span></td>
				</td>
				</tr>
				<br>
					<tr>
					<td> <b> what should be changed during course</td>
					<tr>
					<td>comment</td>
					<td>: <textarea id="com" name="comment" ><?php echo $comment; ?></textarea>
					<td><span id="err_comment"> <?php echo $err_comment;?> </span></td>
					</td>
				</tr>
				<tr>
				<td colspan="2" align="right"> <input type="submit" name="review" value="review"></td>
								</tr>
								</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Learn Panda</h1>
 </div>
		</form>
	</body>
</html>