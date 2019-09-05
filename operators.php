<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
</head>
<body>
    <?php 
    
    $subj1 =42;
    $subj2 =42;

    echo "Subject 1: " .$subj1. "<br>" ;
    echo "Subject 2: " .$subj2. "<br>" ;
    
    if(($subj1 >50) || ($subj2 >50)){
        echo "You have passed the exam";

    }
    else{
        echo "You need to pass both subjects";
    }
    ?>

    <br>
<h2>Not Operator (!) </h2>
    <?php 
    
$username = "Sachith";

    if(!isset($username)){
        echo "Please enter the username";
    }



    ?>
</body>
</html>