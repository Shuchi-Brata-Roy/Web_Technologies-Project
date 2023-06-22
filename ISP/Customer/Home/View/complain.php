<?php 
include "../../Control/complain.php";
?>
<!DOCTYPE html>
<head>
    <title>Comments</title>
    <!-- <link rel="stylesheet" href="../Style/style.css"> -->
</head>
<body>
<header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
        <hr class="line"></hr>
        <div><h1>Suggetion/Complain Section</h1></div>
    <div class="forms">
        <form action="" method="post">
         
                <tr>
                  <div class="com"> <td>Email:</td></div>
                    <td>
                        <input type="email" name="Email">
                    </td>
                    <br><br>
                    <td><textarea name="Your_Comments" id="nnotice" cols="50" rows="10" placeholder="Write comments here"
                            ></textarea></td>
                    <br><br>
</div>
                    <td><input type="submit" name="comment" value="Add Your Comments"></td>
                    <td><input type="submit" name="show" value="View my Comments"></td>
                    
                </tr>
                <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="isp";
       $tablename="comments";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}
if(isset($_REQUEST["show"])){
    $sql="SELECT * FROM $tablename";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo "<table border='2'>";
        echo "<tr><th>email</th><th>comments</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr>
            <td>".$row["email"]."</td>
            <td>".$row["complain"]."</td>
            </tr>";
        }
        echo "</table>";     
    }  
    else{
        echo "No record founds";
    
    }
}
    ?>
                <br>
                <a href="../View/home.php">Go to Home Page</a>
                
             </div>
        </header>
    <body>
</html>