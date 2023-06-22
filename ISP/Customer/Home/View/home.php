<?php
session_start(); 
include('../../Model/model.php');
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
        <a class="active" href="#profile">Profile</a>
        <a href="updateprofile.php">Update Profile</a>
        <a href="product.php">View Product</a>
        <a href="complain.php">Add complain</a>
        <!-- <a href="delete.php"name="del">Delete Profile</a> -->
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="isp";
       $tablename="customer";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

if(isset($_POST['customerdelete'])){
    $email=$_POST['cussrch'];
    $sql="DELETE FROM $tablename WHERE mail='$email'";
    if($conn->query($sql)){
        echo "Record deleted successfully";
        session_destroy();
        header("Location: ../../Login/View/customerlogin.php");
    }

}
  ?>
    <div class="panel">
        <h2>Profile Dashboard</h2>
        
        <?php

        $name=$email=$gender=$address="";
        $connection = new db();
        $conobj=$connection->opencon();
        $userQuery=$connection->CheckUser($_SESSION["customeremail"],$_SESSION["customerpass"],"customer",$conobj);
        
        if ($userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $name=$row["fname"];
                $email=$row["mail"];
                $gender=$row["gender"];
                $address=$row["adres"];
            }
        }else 
        {
            echo "0 results";
        }
        

        ?>
        <h5> Hi <p class ="font"><?php echo $name." !";?></p></h5><br><br><br>
        <h7 class ="font1">E-mail: <?php echo $email;?></h7><br>
        <h7 class ="font1">Gender: <?php echo $gender;?></h7><br>
        <h7 class ="font1">Location: <?php echo $address;?></h7><br>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <center>
    <table>
            <tr> 
                <td>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div>
    <input type= "text" name = "cussrch" placeholder="enter your email">
    <input type="submit" name = "customerdelete" value="Delete Your Profile" class="btn">

    </td>
    </tr>
    </table>         
    </center>
    </form>
</body>
</html>