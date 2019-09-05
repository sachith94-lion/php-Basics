<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Define Functions</title>
</head>
<body>
    <?php 
    
    function get_month_name($monthval=0, $yearval=2019){

     
     
     switch ($monthval) {
         case 1: $month_name ="Duruthu"; break;
         case 2: $month_name ="Navam";break;
         case 3: $month_name ="Maedin";break;
         case 4: $month_name ="Bak";break;
         case 5: $month_name ="Vesak";break;
         case 6: $month_name ="Poson";break;
         case 7: $month_name ="Asala";break;
         case 8: $month_name ="Nikini";break;
         case 9: $month_name ="Binara";break;
         case 10: $month_name ="Vap";break;
         case 11: $month_name ="Il";break;
         case 12: $month_name ="Unduvap";break;
         default: $month_name ="Invalid Month";break;
        }

        return $month_name ." ". $yearval;
    }

    echo get_month_name(8);
    echo"<br>";
    echo get_month_name(1,2020);

    echo"<br>";
    

    $domain_name = "sinhalion.com";
    echo "Outside Function: {$domain_name}<br>";

    myfunc();

    echo "Outside Function again: {$domain_name}<br>";

    function myfunc(){

        global $domain_name;
        echo "Inside Function: {$domain_name}<br>";

        $domain_name="www.sinhatec.com";

    }

    ?>
</body>
</html>