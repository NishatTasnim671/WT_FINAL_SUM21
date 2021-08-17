<?php
   require_once 'controllers/CourseController.php';
   $key=$_GET["key"];
   $courses=searchCourse($key);
   if(count($courses)>0){
	   foreach ($courses as $c){
		   echo "<a href='edit_course.php?id=".$c["id"]."'>".$c["name"]."</a><br>";
		}
		   
   }
   
?>     
