<?php 

//setcookie(name, value, expiration);
//setcookie('language', 'Sinhala', time()+60*60*24*7);
//print_r($_COOKIE);
/*
if(isset($_COOKIE['language'])){
    $language = $_COOKIE['language'];
    echo "Selected language:{$language}";
}
else{
    setcookie('language', 'Sinhala', time()+60*60*24*7);
}
*/

// how to remove cookie
setcookie('language', Null,-time()+60*60*24*7);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    
</body>
</html>