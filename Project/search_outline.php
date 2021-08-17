<?php
   require_once 'controllers/OutlineController.php';
   $key=$_GET["key"];
   $outlines=searchOutline($key);
   if(count($outlines)>0){
	   foreach ($outlines as $o){
		    echo "<a href='edit_outline.php?id=".$o["id"]."'>".$o["name"]."</a><br>";
		  
		}
		   
   }
   
?>     
