<?php
      
      $name=$_POST["name"];
      $emailaddress=$_POST["emailaddress"];
      $address=$_POST["address"];
      $contactno=$_POST["contactno"];
      
      $con=mysqli_connect("localhost","root","","custdb");
      $query="update custinfo set name='$name',emailaddress='$emailaddress',address='$address',contactno='$contactno' where emailaddress='$emailaddress'";
      mysqli_query($con,$query);
      header("Location:view.php");
?>



