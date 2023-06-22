<?php 
include "../../Control/logincheck.php";
if(isset($_SESSION['customeremail'])){
    header("location: ../../Home/View/home.php");
    }

    $msg="";
    
    setcookie("user_detect","visited",time()+86400*7, "/");
    
    setcookie("location","some location",time()+86400*7, "/");
    
    if(isset($_COOKIE["user_detect"]))
    
    {
    
        $msg= "You have visited this site before.";
    
    }
    
    else{$msg= "Hi! This is the first time you visiting this site.";}
    
    
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
    <a href="../../../index.php" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
    <div class="icons">
        <p><?php echo $msg; ?></p>
    </div>
</div>
</header>
<hr class="line">
        <div class="split-screen">
            <div class="left">
                <section class ="copy">
                    <h1> Log In </h1>
                    <p>Please log in as a Customer</p>
                </section>
            </div>
            <div class="right">
            <section class ="copy">
                <div class="Customerlogin-form-container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>E-mail</span>
                        <input type="email" name="customeremail" class="box" placeholder="enter your email" id="">
                        <span>Password</span>
                        <input type="password" name="customerpass" class="box" placeholder="enter your password" id="">
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> remember me</label>
                        </div>
                        <p style="color:red"><?php echo $error; ?></p>
                        <input type="submit" name = "customersignin" value="sign in" class="btn">
                        <p>forget password ? <a href="../../ForgPass/View/forget.php">click here</a></p>
                        <p>don't have an account ? <a href="../../Signup/View/customersignup.php">create one</a></p>
                    </form>
                    <div class="share">
                <a href="https://www.facebook.com/NondonRoy.Shuchi" class="fab fa-facebook-f"></a>
                <a href="https://github.com/Shuchi-Brata-Roy" class="fab fa-github"></a>
                <a href="https://www.instagram.com/nondon_roy/?hl=en" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/shuchi-brata-roy-6926a5224/" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>Shuchi Brata Roy</span> | © 2021-2022 24-7isp.com </div>
                </div>
            </section>
            </div>
        </div>
</hr><hr class="line2"></hr>
    </body>
</html>