<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Loop Exercise</title>
</head>
<body>
    <?php 
    
    for ($i=2; $i<=12 ; $i++) { 
        echo "<b>Number: {$i}</b><br>";
        
        for ($j=1; $j <=12 ; $j++) { 
            echo "{$i} x {$j} = " .$i*$j. "<br>"; 
        }
    }
    
    ?>
</body>
</html>