<?php
$prixMaison = $_POST['prix'];
$fondsPropres= $_POST['fonds'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice1chapitre3</title>
    </head>
    <body>

        <?php
        if ($fp < ($pv/100)*20) {
            echo "Attention, vos fonds propres ne sont pas suffisants.";
        } else {
            if ($fp >= ($pv/100)*50) {
                $rang1 = 0;
                $rang2 = ($pv-$fp);
            } else {
                $emprunt = ($pv-$fp);
                $rang1 = (($emprunt/100)*20);
                $rang2 = ($emprunt-$rang1);
            }
        }
        if ($fp >= ($pv/100)*20) {
            echo "Prix de vente : " . $prixVente . " CHF <br>";
            echo "Fonds propres : " . $fondPropres . " CHF <br>";
            echo "20% de l'emprunt au taux de " . $taux1 . " : ". $rang1 . "<br>";
            echo "80% de l'emprunt au taux de " . $taux2 . " : ". $rang2 . "<br>";
        }
        ?>
    </body>
</html>
