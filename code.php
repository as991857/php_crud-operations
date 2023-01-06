<?php
$name=$_POST["name"];
$emailaddress=$_POST["emailaddress"];
$password=$_POST["password"];
//now connect database.
$con=mysqli_connect("localhost","root","","custdb");
$query="insert into custinfo(name,emailaddress,password) values ('$name','$emailaddress','$password')";
mysqli_query($con,$query);
echo "<script>alert('Registration is Done');
window.location.href='index.php';</script>";

?>