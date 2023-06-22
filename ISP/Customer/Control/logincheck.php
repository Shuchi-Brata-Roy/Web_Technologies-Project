<?php
include('../../Model/model.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['customersignin'])) {
if (empty($_POST['customeremail']) || empty($_POST['customerpass'])) {
$error = "Username or Password is invalid";
}
else
{
$customeremail=$_POST['customeremail'];
$customerpass=$_POST['customerpass'];

$connection = new db();
$conobj=$connection->opencon();

$userQuery=$connection->CheckUser($customeremail,$customerpass,"customer",$conobj);

if ($userQuery->num_rows > 0) {
$_SESSION["customeremail"] = $customeremail;
$_SESSION["customerpass"] = $customerpass;

   }
 else {
$error = "Email or Password is invalid";
}
$connection->closecon($conobj);

}
}


?>