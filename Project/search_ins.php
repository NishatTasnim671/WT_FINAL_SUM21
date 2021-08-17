<?php
   require_once 'controllers/UserController.php';
   $key=$_GET["key"];
   $instructors=searchInstructor($key);
   if(count($instructors)>0){
	   foreach ($instructors as $i){
		   echo "<a href='msg.php?id=".$s["id"]."'>".$s["name"]."</a><br>";
		}
		   
   }
   
		   
   
   
?>   