<?php include 'main_header.php';
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
	<h1>Request for course</h1>
 </div>
		<fieldset>
		<legend>Request for course</legend>
		
			<table>
		
				<tr>
					<td>Enter Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				<tr>
					<td>Enter New requested course Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				
				</tr>
				<br>
				
				
				<tr>
				<td colspan="2" align="right"> <input type="submit" name="submit" value="Request"></td>
								</tr>
								</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Learn Panda</h1>
 </div>
		</form>
	</body>
</html>