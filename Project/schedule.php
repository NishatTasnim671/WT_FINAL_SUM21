<?php
    require_once 'controllers/CourseController.php';
	require_once 'controllers/scheduleController.php';
	$courses=getCourses();
?>
<html>
	<head>

	    <link rel="stylesheet" href="styles/mystyle.css">
		
		<script src="js/schedule.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" onsubmit="return schedulevalidate()" method="post">
		<div class="header sticky">
	<h1>Schedule</h1>
 </div>
		<fieldset>
		<legend>Schedule for a meeting</legend>
			<table>
			
				<tr>
				    <td>Course:</td>
					<td><select id="c_id" name="c_id" value="<?php echo $c_id; ?>">
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
					<td>Date</td>
					<td>: <input type="text" id="date" name="date" value="<?php echo $date; ?>" > </td>
					<td><span id="err_date"> <?php echo $err_date;?> </span></td>
					
				
				</tr>
				
				<tr>
					<td>Day:</td>
					<td><select id="day" name="day">
						<option disabled selected>---Select---</option>
						<?php
							foreach($da as $d){
								if($d == $day) 
									echo "<option selected>$d</option>";
								else
									echo "<option>$d</option>";
							}
						?>
						</select>
					</td>
					<td><span id="err_day"> <?php echo $err_day;?> </span></td>
				<tr>
					<td>Time:</td>
					<td><input type="text" id="time" name="time"  value="<?php echo $time; ?>"> </td>
					<td><span id="err_time"> <?php echo $err_time;?> </span></td>
				</tr>
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="add_schedule" value="Schedule"> </td>
					
				</tr>
				
				</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
		</form>
	</body>
</html>