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
	<h1>Course Content</h1>
 </div>
		<fieldset>
			<ul>
			  <li>Overview</li>
			   <ol>
			      <li>Week 1</li>
				    
				  <li>Week 2</li>
				    
				  <li>Week 3</li>
				     
				  <li>Week 4</li>
				  
			   </ol>
			  <li><a  href="quiz.php"> Quiz</a> </li>
			  <li><a  href="storage/course_material/Week09_Theory.pdf"> Notes</a></li>
			  <li><a  href="msg.php"> Message</a> </li>
			  <li><a  href="reviw.php"> Review</a> </li>
			  <li><a  href="images/certificate.pdf">Certificate </a> </li>
			  
			</ul>
			
		</fieldset>
		</form>
</body>
</html>