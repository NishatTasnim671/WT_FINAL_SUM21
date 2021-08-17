
<?php
    require_once 'models/db_config.php';
	$sender="";
	$err_sender="";
	$receiver="";
	$err_receiver="";
	$msg="";
	$err_msg="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["send"])){
	
		if(empty($_POST["sender"])){
			$hasError = true;
			$err_sender="Sender Name Required";
		}
		
		else{
			$sender =$_POST["sender"];
	
		}
		if(empty($_POST["receiver"])){
			$hasError = true;
			$err_receiver="Receiver Required";
		}
		
		else{
			$receiver=$_POST["receiver"];
	
		}
		if(empty($_POST["msg"])){
			$hasError = true;
			$err_msg="Message Required";
		}
		
		else{
			$msg =$_POST["msg"];
	
		}
	
		if(!$hasError){
		
		$rs = insertInsMsg($sender,$receiver,$msg);
		if ($rs === true){
			header("Location: ins_dashboard.php");
		}
		$err_db = $rs;
	}
	}
	
	if(isset($_POST["send_msg"])){
	
		if(empty($_POST["sender"])){
			$hasError = true;
			$err_sender="Sender Name Required";
		}
		
		else{
			$sender =$_POST["sender"];
	
		}
		if(empty($_POST["receiver"])){
			$hasError = true;
			$err_receiver="Receiver Required";
		}
		
		else{
			$receiver=$_POST["receiver"];
	
		}
		if(empty($_POST["msg"])){
			$hasError = true;
			$err_msg="Message Required";
		}
		
		else{
			$msg =$_POST["msg"];
	
		}
	
		if(!$hasError){
		
		$rs = insertStMsg($sender,$receiver,$msg);
		if ($rs === true){
			header("Location: ins_dashboard.php");
		}
		$err_db = $rs;
	}
	}
		
	
	function insertInsMsg($sender,$receiver,$msg){
		$query = "insert into ins_messages values (NULL,$sender,$receiver,'$msg')";
		return execute($query);
	}
	
	function insertStMsg($sender,$receiver,$msg){
		$query = "insert into st_messages values (NULL,$sender,$receiver,'$msg')";
		return execute($query);
	}
	function getStmsgs(){
		$query ="select m.*,u.username as 'sender' from st_messages m left join users u on m.sender = u.id";
		$rs = get($query);
		return $rs;
	}
	function getInsmsgs(){
		$query ="select m.*,u.username as 'sender' from ins_messages m left join users u on m.sender = u.id";
		$rs = get($query);
		return $rs;
	}
	
	
	
	
	

	
	
?>

	