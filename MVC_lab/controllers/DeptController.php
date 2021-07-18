<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$hasError=false;
	$err_db="";
		

		
		function getAllDepartments(){
			$query="select * from departments";
			$rs=get($query);
			return $rs;
		}
		
		/*function getCategory($id){
			$query="select * from categories where id=$id";
			$rs=get($query);
			return $rs[0];
		}*/
		
	
	
?>