<?php
    
    require_once 'controllers/StudentController.php';
	$students=getStudents();
	
    
?>
<html>
	<head></head>
	<h3>All students</h3>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th>Date of Birth </th>
		<th> Credit</th>
		<th> CGPA</th>
		<th> Department</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($students as $s){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$s["name"]."</td>";
		   echo "<td>".$s["dob"]."</td>";
		    echo "<td>".$s["credit"]."</td>";
	     echo "<td>".$s["cgpa"]."</td>";
		  echo "<td>".$s["d_name"]."</td>";
		  
		  echo '<td><a href="edit_student.php?id='.$s["id"].'">Edit</a></td>';
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
	</body>
</html>