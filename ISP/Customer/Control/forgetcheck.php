<?php
include ('../../Model/model.php');
$invalid_customeremail="";
$svalid_customeremail="";
$invalidpass="";
$validpass="";
$invalidcf="";
$validcf="";
$x=0;
$patt ="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (isset($_POST["passcng"]))
{
    $email=$_POST["customeremail"];
    $password=$_POST["customerpass"];
    $conpass=$_POST["conpass"];
    
    if(empty($email))
    {
        $invalid_customeremail="Please enter your customer email";
    }
    else 
    {
        if (preg_match($patt,$email))
        {
            $svalid_customeremail="Email is valid";
            $svalid_customeremail=$email;
            $x++;//1
        }
        else
        {
            $invalid_customeremail="Email format should contain @ & .com";
        }
    }   
 if(empty($password))
{
    $invalidpass="Please enter your customer password";
}
else 
{
    if(strlen($password)>=5 && !empty($password)){
    $validpass="Password is correct";
    $validpass=$password;
    $x++;//2
    }
    else{
        $invalidpass="Password is invalid";
    }
}

if (empty($conpass))
{
    $invalidcf="Please re-enter your password";
}
else 
{
    if ($conpass==$password)
    {
        $validcf=$conpass;
        $validcf="Passsword matched";
        $x++;//3
    }
    else
    {
       $invalidcf="Password not matched"; 
    }
}

 $mydb= new DB();
 $conn = $mydb-> opencon();
 //forget password
    if($x==3)
    {
        $mydb->Resetpass($svalid_customeremail,$validpass,$validcf,"customer",$conn);
        echo "Password changed successfully";
    }
    else{
        echo "Password not changed";
    }

}
?>