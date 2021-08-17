<?php
    require_once 'models/db_config.php';
	$c_id="";
	$err_c_id="";
	$date="";
	$err_date="";
	$day="";
	$err_day="";
	$time="";
	$err_time="";
	$da= array("Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday");
	
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["add_schedule"])){
	
		if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Course Name Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		
		if(empty($_POST["date"])){
			$hasError = true;
			$err_date="Date Required";
		}
		
		else{
			$date =$_POST["date"];
	
		}
		
		if(empty($_POST["day"])){
			$hasError = true;
			$err_day="Day price Required";
		}
		
		else{
			$day=$_POST["day"];
	
		}
		if(empty($_POST["time"])){
			$hasError = true;
			$err_time="Time Required";
		}
		
		else{
			$time=$_POST["time"];
	
		}
		
		
		if(!$hasError){
		
		$rs = insertSchedule($c_id,$date,$day,$time);
		if ($rs === true){
			header("Location: ins_dashboard.php");
		}
		$err_db = $rs;
	}
		}
		
	
	function insertSchedule($c_id,$date,$day,$time){
		$query = "insert into schedules values (NULL,$c_id,'$date','$day','$time')";
		return execute($query);
	}
	function getSchedules(){
		$query ="select s.*,c.name as 'c_name' from schedules s left join courses c on s.c_id = c.id";
		$rs = get($query);
		return $rs;
	}
	
	
	
	
		
	

	
	
?>

	