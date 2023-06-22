<?php

include "../../Model/model.php";
?>
<?php

if(isset($_POST["customersignup"]))
{
    
    if(!empty($_POST["customername"]) || isset($_post["customergender"]) || !empty($_POST["customeremail"]) || 
    preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["customeremail"]) 
    || !empty($_POST["customeraddress"]) || !strlen($_POST["customerpass"])<6)
    {
        $name=$_POST["customername"];
        $gender=$_POST["customergender"];
        $email=$_POST["customeremail"];
        $address=$_POST["customeraddress"];
        $pass=$_POST["customerpass"];
        $conpass=$_POST["conpass"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($name, $gender,$email, $address, $pass, $conpass, "customer", $conobj);
        $mydb->closecon($conobj);
    }
}

?>