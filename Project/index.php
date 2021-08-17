<?php
   
    require_once 'controllers/CourseController.php';
	$courses=getCourses();
	
    
?>
<html>
<head>
	    <link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
<div class="header sticky">
<h1>All Courses</h1>
</div>
<div>
<fieldset>
<legend>All courses</legend>
	<input type="text"  placeholder="Search..." onkeyup="searchCourse(this)">
	<div id="course"></div>
	<table border="1">
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th>Category</th>
		<th>Duration </th>
		<th>Price</th>
		
		
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($courses as $c){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$c["name"]."</td>";
		  echo "<td>".$c["ca_name"]."</td>";
		   echo "<td>".$c["duration"]."</td>";
		    echo "<td>".$c["price"]."</td>";
			  
	    
		  
		 
		 
		  echo "</tr>";
		  $i++;
	}

	
	?>
	
	</tbody>
	
	</fieldset>
	</table>
	</div>
	   <div>
  
   <a href="allreviews.php">
   <input type="button" class="btn" name="all_reviews" value="All Reviews"> 
   </a>
   <a href="request.php">
   <input type="button" class="btn" name="req_course" value="Request course"> 
   </a>
   <a href="welcome.php">
   <input type="button" class="btn" name="welcome" value="Back"> 
   </a>
   <a href="registration.php">
   <input type="button" class="btn" name="registration" value="Sign up"> 
   </a>
  </div>
	<script src="js/courses.js"></script>
	</body>
	<div class="footer">
<h1>Credit goes to Learn Panda</h1>
 </div>
	
</html>