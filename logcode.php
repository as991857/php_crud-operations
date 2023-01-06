<?php
session_start();
$emailaddress=$_POST["emailaddress"];
$password=$_POST["password"];
//now connect database.
$con=mysqli_connect("localhost","root","","custdb");
$query="select password from custinfo where emailaddress='$emailaddress'";
$res=mysqli_query($con,$query);

if (mysqli_num_rows($res)>0)
{
    if($row=mysqli_fetch_assoc($res))
    {
        $respassword=$row["password"];
        if($password==$respassword)
        {
            $_SESSION["valid"]=$emailaddress;    
            header("location:finalreg.php");
        }
        else
        {
            echo "<script>alert('Invalid user');   
            window.location.href='login.php';</script>";   //email is correct but password is not correct then msg show Invalid user
        }
    }

}
else
{
    echo "<script>alert('User does not exist');
    window.location.href='login.php';</script>";    //if user not register then msg show user does not exist.
}
?>