<?php
$nom = 'Gaston Lagaffe';
$var1 = 10;
$var2 = 3.3;
$operation = 0;
?>

  <!DOCTYPE html>
 <html lang=""fr">
     <head>
        <meta charset="utf-8">
        <title>1-004</title>
     </head>
     <body>
         
        <?php
            echo "Bonjour <b>$nom</b>! <br>";
            
            echo 'var1 + var2 = ' . ($var1 + $var2) . '<br>';
            
            $operation =$var1 % $var2;
            echo "var1 % var2 = $operation<br>";
            
            $operation = round($var1/$var2);
            echo "Division entière de var1 par var2 = $operation<br>"
            
            $var1 += 20;
            echo "Incrémentation de 20 pour var1: $var1<br>";
            
            $var1++;
            echo "Incrémentation de 1 pour var 1<br>";
            
            $var1 = (int) $var2;
            echo "var1 vaut la valeur entière de var2: $var1<br>";
        ?> 
    </body>
</html>
