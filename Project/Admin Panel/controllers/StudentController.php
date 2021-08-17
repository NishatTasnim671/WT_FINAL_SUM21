<?php
require_once 'models/db_config.php';
$name = "";
$err_name = "";
$email = "";
$err_email = "";
$detail = "";
$err_detail = "";
$ca_id = "";
$err_ca_id = "";
$c_id = "";
$price = "";
$err_price = "";

$hasError = false;
$err_db = "";
if (isset($_POST["add_student"])) {

	if (empty($_POST["name"])) {
		$hasError = true;
		$err_name = "Student Name Required";
	} else {
		$name = $_POST["name"];
	}
	
	if (empty($_POST["email"])) {
		$hasError = true;
		$err_email = "Email Required";
	} else {
		$email = $_POST["email"];
	}
	if (empty($_POST["ca_id"])) {
		$hasError = true;
		$err_ca_id = "Student category Required";
	} else {
		$ca_id = $_POST["ca_id"];
	}

	if (empty($_POST["price"])) {
		$hasError = true;
		$err_price = "Student price Required";
	} else {
		$price = $_POST["price"];
	}


	if (!$hasError) {

		$rs = insertStudent($name, $email,$ca_id, $price);
		if ($rs === true) {
			header("Location: allstudents.php");
		}
		$err_db = $rs;
	}
} elseif (isset($_POST["edit_Student"])) {
	//name

	if (empty($_POST["name"])) {
		$hasError = true;
		$err_name = "Student Name Required";
	} else {
		$name = $_POST["name"];
	}
	if (empty($_POST["ca_id"])) {
		$hasError = true;
		$err_ca_id = "Student category Required";
	} else {
		$ca_id = $_POST["ca_id"];
	}
	if (empty($_POST["email"])) {
		$hasError = true;
		$err_email = "Email Required";
	} else {
		$email = $_POST["email"];
	}
	if (empty($_POST["price"])) {
		$hasError = true;
		$err_price = "Student price Required";
	} else {
		$price = $_POST["price"];
	}


	if (!$hasError) {

		$rs = editStudent($name, $email, $price,$ca_id, $_POST["id"]);
		if ($rs === true) {
			header("Location: allstudents.php");
		}
		$err_db = $rs;
	}
} elseif (isset($_POST["delete_student"])) {

	if (!$hasError) {

		$rs = deleteStudent($_POST["id"]);
		if ($rs === true) {
			header("Location: allstudents.php");
		}
		$err_db = $rs;
	}
}




function insertStudent($name, $email, $ca_id,$price)
{
	$query = "insert into students values (NULL,'$name','$email',$ca_id,$price)";
	return execute($query);
}
function getStudents()
{
	$query = "select c.*,ca.name as 'ca_name' from students c left join categories ca on c.ca_id = ca.id";
	$rs = get($query);
	return $rs;
}
function getStudent($id)
{
	$query = "select * from students where id = $id";
	$rs = get($query);
	return $rs[0];
}
function editStudent($name, $email,$ca_id, $price, $id)
{
	$query = "update students set name='$name',email='$email',ca_id=$ca_id,price=$price where id = $id";
	return execute($query);
}
function deleteStudent($id)
{
	$query = "delete from students where id = $id";
	return execute($query);
}
function searchStudent($key)
{
	$query = "select c.id,c.name from students c left join categories ca on c.ca_id = ca.id where c.name like '%$key%' or ca.name like '%$key%'";

	$rs = get($query);
	return $rs;
}
