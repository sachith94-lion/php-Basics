<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>

<?php 


$news_item=312;
$category=urlencode("sports & hobbies");
$url = "news.php?news_item={$news_item}&category={$category}";

?>

    <a href="<?php echo $url; ?>">Read News Item 1</a>
</body>
</html>