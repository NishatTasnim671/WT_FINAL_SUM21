<?php
require_once 'models/db_config.php';
$name = "";
$err_name = "";
$email = "";
$err_email = "";


$hasError = false;
$err_db = "";
if (isset($_POST["add_instructor"])) {

    if (empty($_POST["name"])) {
        $hasError = true;
        $err_name = "Instructor Name Required";
    } else {
        $name = $_POST["name"];
    }
    
    if (empty($_POST["email"])) {
        $hasError = true;
        $err_email = "Email Required";
    } else {
        $email = $_POST["email"];
    }

    


    if (!$hasError) {

        $rs = insertInstructor($name,  $email);
        if ($rs === true) {
            header("Location: allinstructor.php");
        }
        $err_db = $rs;
    }
} elseif (isset($_POST["edit_instructor"])) {
    //name

    if (empty($_POST["name"])) {
        $hasError = true;
        $err_name = "Instructor Name Required";
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST["ca_id"])) {
        $hasError = true;
        $err_ca_id = "Course category Required";
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
        $err_price = "Course price Required";
    } else {
        $price = $_POST["price"];
    }


    if (!$hasError) {

        $rs = editInstructor($name, $email);
        if ($rs === true) {
            header("Location: allinstructors.php");
        }
        $err_db = $rs;
}
}
   elseif (isset($_POST["delete_instructor"])) {

    if (!$hasError) {

        $rs = deleteInstructor($_POST["id"]);
        if ($rs === true) {
            header("Location: allinstructors.php");
        }
        $err_db = $rs;
    }
}




function insertInstructor($name,  $email)
{
    $query = "insert into instructors values (NULL,'$name','$email')";
    return execute($query);
}
function getInstructors()
{
    $query = "select * from instructors";
    $rs = get($query);
    return $rs;
}
function getInstructor($id)
{
    $query = "select * from instructors where id = $id";
    $rs = get($query);
    return $rs[0];
}
function editInstructor($name, $ca_id, $email, $price, $id)
{
    $query = "update instructors set name='$name',ca_id=$ca_id,email=$email,price=$price where id = $id";
    return execute($query);
}
function deleteInstructor($id)
{
    $query = "delete from instructors where id = $id";
    return execute($query);
}
function searchInstructor($key)
{
    $query = "select c.id,c.name from instructors c left join categories ca on c.ca_id = ca.id where c.name like '%$key%' or ca.name like '%$key%'";

    $rs = get($query);
    return $rs;
}
