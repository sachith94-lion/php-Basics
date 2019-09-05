<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <?php 
    
    $mycars = array("Toyota", "Nissan", "Kia", "Mazda");
    
    echo $mycars[0];
    
    ?>
<br>
<h3>Brfore</h3>
<pre>

<?php  print_r($mycars);?>
 </pre>
    <?php $mycars[4] ="Suzuki"; ?>
    <?php $mycars[]="Mitsubishi"; ?>
    <?php $mycars[3] ="Honda"; ?>
    
    <h3>After</h3>

    <pre>

<?php  print_r($mycars);?>
 </pre>
</body>
</html>