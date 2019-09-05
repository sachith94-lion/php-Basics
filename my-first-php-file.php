<?php
//This is a one line comment
echo "This is my first PHP file.";
echo "<br>";
echo "This is my first PHP file.";

$a=2; $b=$a++;
echo '<br>';
echo $a;
echo '<br>';
$a=2; $b=++$a;
echo $a;
echo '<br>';
/*

This is multiline comment
This is the second line
*/
echo "<br>";
echo "First Name" . " Second Name";

#This is another single line comment
echo "<br>";
//echo 6*10;"<br>";

$password = "waru987";
        $hashed_password = sha1($password);
        $hashed_password2 = hash('sha512',$hashed_password);
        $hashed_password3 = MD5($hashed_password2);
        "<br>";
        echo $hashed_password3;

?>