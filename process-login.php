<?php 

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'sachith' && $password == 'pass123'){
    echo "Login Successful";
}
else{
    echo "Invalid Username or Password";
}

?>
