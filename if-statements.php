<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statements</title>
</head>
<body>
    <?php 
    
    $avg_score = 80;


    echo "Score: ".$avg_score;
    echo"<br>";
    
    if($avg_score >= 70){
        echo "Your are qualified.  Grade: A";
    }
    elseif($avg_score>=40){
        echo "Your are qualified.  Grade: B";
    }
    else{
        echo "please try again";
    }
    
    ?>
</body>
</html>