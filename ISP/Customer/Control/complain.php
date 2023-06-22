<?php
include("../../Model/model.php");

if(isset($_REQUEST['comment'])){
    $email=$_REQUEST['Email'];
    $comments=$_REQUEST['Your_Comments'];
    $mydb=new DB();
    $conn=$mydb->opencon();
    $mydb->postcomplain($email,$comments,"comments",$conn);

}
?>