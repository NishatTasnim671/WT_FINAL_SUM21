<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$hasError=false;
	$err_db="";
		
if(isset($_POST["add_category"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(!$hasError){
			$rs=insertCategory($name);
			if($rs===true){
				header("Location: allcategories.php");
			}
			$err_db=$rs;
		}
		}
		elseif(isset($_POST["edit_category"])){
	      if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(!$hasError){
		$rs = editCategory($name,$_POST["id"]);
		if($rs === true){
			header("Location: allcategories.php");
		}
		$err_db = $rs;
		}
		
	}
	
		
		
		function insertCategory($name){
			$query="insert into categories values(NULL,'$name')";
			return execute($query);
		}
		function getAllCategories(){
			$query="select * from categories";
			$rs=get($query);
			return $rs;
		}
		
		function getCategory($id){
			$query="select * from categories where id=$id";
			$rs=get($query);
			return $rs[0];
		}
		function editCategory($name, $id){
		$query = "update categories set name='$name' where id=$id";
		return execute($query);
		
	}
	
?>