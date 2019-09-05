<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
    <?php  
    
    $student = array("first_name"=>"Sachith", "last_name"=>"Weerasinghe", "age"=>25);
    
    ?>

    <pre>
    
    <?php print_r($student); ?>
    </pre>
    <?php echo $student["first_name"]; ?><br>
    <?php echo $student["first_name"] . " " . $student["last_name"];?>
    <?php $student["age"]= 26; ?><br>
    <?php echo $student["age"]; ?><br>
</body>
</html>