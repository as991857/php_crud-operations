<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body
        {
            text-align:center;
        }
        
    </style>
</head>
<body>
   <h2>Login Here</h2> 
   <form action="logcode.php" method="post">
    Enter Email Address:
    <input type="email" name="emailaddress" required="true"/><br/><br/>
    Enter Password:
    <input type="password" name="password" required="true"/><br/><br/>
    <input type="submit" value="Login"/>
   </form>
</body>
</html>