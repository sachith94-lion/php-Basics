<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
    <h1>News Page</h1>


    <?php 
    
    

    $news_item = $_GET['news_item'];
    $category = $_GET['category'];

    
    ?>
<h2>Category: <?php echo $category; ?></h2>
<h2>News Item: <?php echo $news_item;?></h2>
</body>
</html>