<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
</head>
<body>
    <h2 style="color:blue;">Update User Information</h2>
    <form action="updatecode.php" method="post">
<?php
$emailaddress=$_GET["emailaddress"];
$con=mysqli_connect("localhost","root","","custdb");
$query="select * from custinfo where emailaddress='$emailaddress'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
    if($row=mysqli_fetch_assoc($res))
    {
?>
Name :
<input type="text" name="name" value="<?php echo $row["name"]?>"/><br/><br/>

    
    Email Address :
    <input type="email" name="emailaddress" value="<?php echo $row["emailaddress"]?>"/><br/><br/>
    Address :
    <textarea name="address" cols="30" rows="3"><?php echo $row["address"]?></textarea><br/><br/>
    Contact No :
    <input type="number" name="contactno" value="<?php echo $row["contactno"]?>"/><br/><br/>
   

    
    
    <input type="submit" value="update"/>
<?php
    }
    }
?>
    </form>
</body>
</html>