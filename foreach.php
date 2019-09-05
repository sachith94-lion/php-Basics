<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach Loop</title>
</head>
<body>
    <?php 
    
    $job_categories = array("Accounting", "Finance", "IT", "Marketing", "Sales");

    foreach ($job_categories as $job_category) {
        echo $job_category . "<br>";
    }
    
    ?>
    <br>

    <?php 
    
    $student = array("first_name"=>"Sachith", "surname"=>"Weerasinghe", "age"=>25, "grade"=>18);

    foreach ($student as $label=> $mystudent) {
        echo $label . " : " . $mystudent . "<br>";
    }
    
    ?>
</body>
</html>