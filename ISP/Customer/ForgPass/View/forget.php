<?php
include "../../Control/forgetcheck.php";
?>
<html>
    <head>
        <title>Forget Password </title>
        <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->

<!-- font awesome cdn link  -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

<!-- custom css file link  -->
<link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    <header class="header">
        <div class="header-1">
            <a href="../../../index.php" class="logo"> <i><align="center"img src="../../../Logo/logo.png"></i> </a>
        </div>
</header>
<div class="forms">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="head"><h3> Forget Password</h3></div>
         <span>E-mail</span>
         <div class="Box"><input type="email" name="customeremail" class="box" placeholder="Enter your email" id=""></div>
        <br>
         <span>New Password</span>
         <div class="Box"><input type="password" name="customerpass" class="box" placeholder="Create new password" id=""></div>
        <br>
        <span>Confirm Password</span>
        <div class="Box"><input type="password" name="conpass" class="box" placeholder="Confirm your password" id=""></div>
         <div class="sub">
            <div class="center"><input type="submit" name = "passcng" value="Change password" class="button button1"></div>
        </div>
        <p>Back to <a href="../../Login/View/customerlogin.php">Login page</a></p>
        </form>

    </body>
</html>
