<?php include 'main_header.php';
$name="";
$err_name="";
$course="";
$err_course="";
$reason="";
$err_reason="";
$hasError=false;
$err_db="";
	
if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain >3 character";
		}
		else{
			$name = $_POST["name"];
		}

if(empty($_POST["course"])){
			$hasError = true;
			$err_course="Course Required";
}
			else{
			$course = $_POST["course"];
		}
		
		
		if(empty($_POST["reason"])){
			$hasError = true;
			$err_comment = "This field is Required";
		}
		else{
			$comment = $_POST["reason"];
		}
		
		if(!$hasError){
				 echo "<h1> Thank You</h1>";
			 }
}
		

?>


<html>
	<head></head>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			    
		<link rel="stylesheet" href="styles/mystyle.css">
		
		<script src="js/feedback.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" onsubmit="return feedbackvalidate()" method="post">
	<div class="header sticky">
	<h1>Refund</h1>
 </div>
		<fieldset>
		<legend>Refund</legend>
					<td>Enter Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Enter Course</td>
					<td>: <input type="text" name="course" value="<?php echo $course; ?>" placeholder="Your Course ...."> </td>
					<td><span> <?php echo $err_course;?> </span></td>
				</tr>
				
					<tr>
					<td>Reason</td>
					<td>: <textarea name="reason" ><?php echo $reason; ?></textarea>
					<td><span> <?php echo $err_reason;?> </span></td>
					</td>
				</tr>
				<tr>
				<td colspan="2" align="right"> <input type="submit" name="submit" value="Submit"></td>
								</tr>
								</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>