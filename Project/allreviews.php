<?php
   
    require_once 'controllers/feedbackController.php';
	$reviews=getReviews();
	
    
?>
<html>
<head></head>
<body>
<fieldset>
<legend>All courses</legend>
	<h3>All course reviews</h3>
	
	<table border="1">
	<thead>
	    <th>Sl#</th>
		<th>Course name</th>
		<th>How was the course instructor</th>
		<th>How was the course curriculumn</ </th>
		<th>Comment</th>
		
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($reviews as $r){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$r["course_name"]."</td>";
		   echo "<td>".$r["instructor"]."</td>";
		    echo "<td>".$r["curriculum"]."</td>";
			 echo "<td>".$r["comment"]."</td>";
			  
	    
		  
		  
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
	</fieldset>
	</body>
	
</html>