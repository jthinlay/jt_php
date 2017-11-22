<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Funcion PHP</title>
    </head>
    <body>
        <?php
            $x = 100;
            function newNum($x){
                $sum = $x * 0.75;
                echo "Here is 75% of ".$x." is ".$sum;
            }
           newNum($x);
           echo '<br/>';
           
           $a = 200;
           newNum($a);
           
           echo '<br/>';
           $e = 300;
           newNum($e);
        ?>
    </body>
</html>