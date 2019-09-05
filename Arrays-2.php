<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays 2</title>
</head>
<body>
    <?php 
    
    $mycars = array(10, 20, 30, "Toyota", "Nissan",array("black", "white", "blue"), "Kia", "Mazda");
    
    
    
    ?>
<br>
<h3>Brfore</h3>
<pre>
<?php  print_r($mycars);?>
</pre>
    
    <?php $mycars[5][1] ="red"; ?>

    <h4>After</h4>
<pre>
<?php  print_r($mycars);?>
</pre>    
    
 </pre>
</body>
</html>