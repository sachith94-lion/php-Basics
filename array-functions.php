<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Function</title>
</head>
<body>
    <?php 
    
    $mynumbers = array(13, 17, 19, 23, 29, 11, 26);    
    ?>
    Maximum Value: <?php echo max($mynumbers); ?><br>
    Minimum Value: <?php echo min($mynumbers); ?><br>
    Count: <?php echo count($mynumbers); ?><br>
    Sort: <pre><?php  sort($mynumbers); print_r($mynumbers) ?></pre><br>
    Reverse Sort: <pre><?php  rsort($mynumbers); print_r($mynumbers) ?></pre><br>
    Implode:
    <?php 
    
    $string = implode(" | ", $mynumbers);
    
    ?>
    <?php echo $string; ?>

    <br>

    Explode:
    <pre>
    <?php 
    
    $newarray = explode(" | ", $string);
    print_r($newarray);
    
    ?>
    <?php echo $string; ?></pre>

    Search: <?php echo in_array(15,$mynumbers); ?>
    
</body>
</html>