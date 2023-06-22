<?php
session_start(); 
include('../../Control/updatecheck.php');
if(empty($_SESSION["customeremail"]))
{
header("Location: ../../Login/View/customerlogin.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>24/7 Inernet Service Provider</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
    <header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
        </div>
    </header>
    <hr class="line"></hr>
    <div class="sidebar">
        <a href="home.php">Profile</a>
        <a href="updateprofile.php">Update Profile</a>        
        <a class="active" href="offer.php">Buy Internet Offer</a>
        <a href="">View Product</a>
        <a href="#complainntact">Add complain</a>
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <div class="panel">
        <h2>Offer</h2>
        
    

        
    </div>
    </body>
</html>