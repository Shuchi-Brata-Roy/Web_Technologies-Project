<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Login/View/customerlogin.php"); // Redirecting To Home Page
}
?>