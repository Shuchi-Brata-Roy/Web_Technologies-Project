<?php 
include "../../Control/signupcheck.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>24/7 Internet Service Provider</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
    <header class="header">


    
</div>
</header>
<hr class="line">
        <div class="split-screen">
            <div class="left">
                <section class ="copy">
                    <h1> Sign In </h1>
                    <p>Please Register Your Account Here</p>
                </section>
            </div>
            <div class="right">
            <section class ="copy">
                <div class="Customerlogin-form-container">
                    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>Fullname</span>
                        <input type="text" name="customername" class="box" placeholder="enter your fullname" id="customername">
                        <p style="color:red" id="errname"></p>
                        <table><tr><td><span>Gender</span></td></tr>
                        <tr><td><input type="radio" name="customergender"  value="Male" id="customergender1"><span>Male</span></td>
                        <td><input type="radio" name="customergender"  value="Female" id="customergender2"><span>Female</span></td></tr></table>
                        <p style="color:red" id="errgender"></p>
                        <span>E-mail</span>
                        <input type="email" name="customeremail" class="box" placeholder="enter your email" id="customeremail">
                        <p style="color:red" id="erremail"></p>
                        
                        <span>Address</span>
                        <input type="text" name="customeraddress" class="box" placeholder="enter your address" id="customeraddress">
                        <p style="color:red" id="erradd"></p>


                        <span>Password</span>
                        <input type="password" name="customerpass" class="box" placeholder="enter your password" id="customerpass">
                        <p style="color:red" id="errpass"></p>
                        <span>Confirm Password</span>
                        <input type="password" name="conpass" class="box" placeholder="enter your password" id="customerpass">
                        <p style="color:red" id="errpass"></p>
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> Agreed to terms and conditions</label>
                        </div>
                        <input type="submit" name = "customersignup"value="sign up" class="btn">
                        <p>want to go back ? <a href="../../Login/View/customerlogin.php">click here</a></p>
                    </form>
                    <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>Shuchi Brata Roy</span> | © 2021-2022 24-7isp.com </div>
                </div>
            </section>
            </div>
        </div>
       </hr><hr class="line2"></hr>
       
      <script src="../JS/script.js"></script>
    </body>
</html>