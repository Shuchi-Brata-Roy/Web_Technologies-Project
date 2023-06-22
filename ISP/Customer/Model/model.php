<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="ISP";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function InsertData($fname, $gender, $email, $address, $pass, $conpass, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename (fname, gender, mail, adres, pass , conpass) 
        VALUES ('$fname','$gender','$email','$address','$pass','$conpass')";
        if($conn->query($sqlstr)===TRUE)
        {
            header("location: ../../Login/View/customerlogin.php");
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }

    function CheckUser($email,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE mail='$email' AND pass='$pass'");
        return $result;
    }

    function UpdateUser($fname, $gender, $email, $address, $tablename, $conn)
    {
        $sql = "UPDATE $tablename SET fname='$fname', gender='$gender', adres='$address' WHERE mail='$email'";

    if ($conn->query($sql) === TRUE) {
        header("location: ../../Home/View/home.php");
        $result= TRUE;
    } else {
        $result= FALSE ;
        echo failed;
    }
    return  $result;
    }
     
    function Resetpass($email,$password,$conpass,$tablename,$conn)
    {
        $sql = "UPDATE $tablename SET mail='$email' , pass = '$password' , conpass='$conpass ' WHERE mail = '$email'";
        return $conn ->query($sql);
    }

    function Search($search,$tablename,$conn){
        $result = $conn->query("SELECT * FROM  $tablename WHERE router LIKE '{$search}%' OR price LIKE '{$search}%'");
        return $result;
    }

    function closecon($conn)
    {
        $conn->close();
    }

    // function opencon(){

    function postcomplain($email,$comments,$table,$conn){
        $sqlstr="INSERT into $table(email,complain) VALUES ('$email','$comments')";
        if($conn->query($sqlstr)){
           
            echo "Record inserted successfully";
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }

            function show($conn,$tablename,$email,$comments){
                $sqlstr="SELECT * FROM $tablename";
                return $conn->query($sqlstr);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                      echo "<tr><td>".$row["Email"]."</td><td>".$row["Your_Comments"]."</td></tr>";
                    }
                    echo "</table>";
                   
                   
                }  
                else{
                    echo "No record founds";
                
            }
        }         
    }
?>
