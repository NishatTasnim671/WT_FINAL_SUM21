<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$bank="";
	$err_bank="";
	$amount="";
	$err_amount="";
	$tid="";
	$err_tid="";
	$key="";
	
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["payment"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		
		if(empty($_POST["bank"])){
			$hasError = true;
			$err_bank="Bank Name Required";
		}
		
		else{
			$bank =$_POST["bank"];
	
		}
		if(empty($_POST["amount"])){
			$hasError = true;
			$err_amount="Amount Required";
		}
		
		else{
			$amount =$_POST["amount"];
	
		}
		if(empty($_POST["tid"])){
			$hasError = true;
			$err_tid="Transation Id Required";
		}
		
		else{
			$tid =$_POST["tid"];
	
		}
		
		
		
	
		if(!$hasError){
		
		$rs = insertPay($name,$bank,$amount,$tid);
		if ($rs === true){
			header("Location: st_outline.php");
		}
		$err_db = $rs;
	}
		}
		
	
	function insertPay($name,$bank,$amount,$tid){
		$query = "insert into payments values (NULL,'$name','$bank',$amount,'$tid')";
		return execute($query);
	}
	function getPays(){
		$query ="select * from payments";
		$rs = get($query);
		return $rs;
	}
	function getPay($id){
		$query = "select * from payments where id = $id";
		$rs = get($query);
		return $rs[0];
		
	}
	
	
	
?>	
	