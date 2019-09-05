<?php 

if(isset($_POST['submit'])){
    //the user has pressed submit button
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == 'sachith' && $password == 'pass123'){
        echo "Login Successful";
    }
    else{
        echo "Invalid Username or Password";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
    Username: <input type="text" name="username" id=""> <br><br>
    Password: <input type="password" name="password" id=""><br>
    <input type="submit" value="Log in" name="submit"><br>
    
    </form>
</body>
</html>