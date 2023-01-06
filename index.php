<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2
        {
            color:blue;
            text-align:center;
        }
        form
        {
            text-align:center;
        }
        body
        {
            background-image:url("1.jpg");
        }
        
        </style>

</head>
<body>
    
    <h2>Customer Registration</h2>
    <form action="code.php" method="post">
       Enter Name:
       <input type="text" name="name" required="true"/><br/><br/>
       Email Address:
       <input type="email" name="emailaddress" required="true"/><br/><br/>
        Enter Password:
       <input type="password" name="password" required="true"/><br/><br/>
       <input type="submit" value="Register"/><br/><br/>

    </form>
    
    <a href="login.php"><h3>Click Here to Complete Registration</h3></a>
    <br/><br/>
    <a href="view.php">View All Registration</a>
</body>
</html>