<?php
session_start();
if(isset($_SESSION["valid"]))
{
    $emailaddress=$_SESSION["valid"];
    $address=$_POST["address"];
    $contactno=$_POST["contactno"];
    $connectdate=date('m/d/y');

}
$con=mysqli_connect("localhost","root","","custdb");
$query="update custinfo set address='$address',contactno='$contactno',connectdate='$connectdate' where emailaddress='$emailaddress'";
mysqli_query($con,$query);
session_destroy();
echo "<script>alert('Final Registration is Done');
window.location.href='index.php';
</script>";

?>