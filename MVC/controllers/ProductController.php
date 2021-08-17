
<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$c_id="";
	$err_c_id="";
	$price="";
	$err_price="";
	$qty="";
	$err_qty="";
	$desc="";
	$err_desc="";
	$img="";
	
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["add_product"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Category Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Price Required";
		}
		
		else{
			$price =$_POST["price"];
	
		}
		if(empty($_POST["qty"])){
			$hasError = true;
			$err_qty="Quantity Required";
		}
		
		else{
			$qty =$_POST["qty"];
	
		}
		if(empty($_POST["desc"])){
			$hasError = true;
			$err_desc="Description Required";
		}
		
		else{
			$desc =$_POST["desc"];
	
		}
		
	
		if(!$hasError){
		$fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
		
		$rs = insertProduct($name,$c_id,$price,$qty,$desc,$target);
		if ($rs === true){
			header("Location: allproducts.php");
		}
		$err_db = $rs;
	}
		}
		elseif(isset($_POST["edit_product"])){
	     //name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Category Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Price Required";
		}
		
		else{
			$price =$_POST["price"];
	
		}
		if(empty($_POST["qty"])){
			$hasError = true;
			$err_qty="Quantity Required";
		}
		
		else{
			$qty =$_POST["qty"];
	
		}
		if(empty($_POST["desc"])){
			$hasError = true;
			$err_desc="Description Required";
		}
		
		else{
			$desc =$_POST["desc"];
	
		}
		
		if(!$hasError){
			
		$rs = editProduct($name,$c_id,$price,$qty,$desc,$_POST["id"]);
		if($rs === true){
			header("Location: allproducts.php");
		}
		$err_db = $rs;
		}
		
	}
	
	
   
	
	function insertProduct($name,$c_id,$price,$qty,$desc,$img){
		$query = "insert into products values (NULL,'$name',$c_id,$price,$qty,'$desc','$img')";
		return execute($query);
	}
	function getProducts(){
		$query ="select p.*,c.name as 'c_name' from products p left join categories c on p.c_id = c.id";
		$rs = get($query);
		return $rs;
	}
	function getProduct($id){
		$query = "select * from products where id = $id";
		$rs = get($query);
		return $rs[0];
		
	}
	function editProduct($name,$c_id,$price,$qty,$desc,$id){
		$query ="update products set name='$name',c_id=$c_id,price=$price,qty=$qty,description='$desc' where id = $id";
		return execute($query);
	}
		
	function searchProduct($key){
		$query="select m.*,u.username as 'sender_name' from messages m left join users u on m.sender = u.id  where u.username like '%$key%'";
		$rs=get($query);
		return $rs;
	}
	
?>	
	