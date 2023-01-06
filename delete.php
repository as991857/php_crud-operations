<?php
$emailaddress=$_GET["emailaddress"];
$con=mysqli_connect("localhost","root","","custdb");   //connect database
$query="delete from custinfo where emailaddress='$emailaddress'";
mysqli_query($con,$query);   //execute query
// echo "<script>alert('Record is Deleted');</script>";
header("location:view.php");    //view page show krane k liye

?>