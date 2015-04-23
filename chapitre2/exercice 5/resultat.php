<?php 

$valeurADeviner = $_POST['valeurADeviner'];
$valeurEntree = (int) $_POST['nbr'];

$gagne = $valeurADeviner == $valeurEntree;
?> 


<?php
    if ($gagne) {
        $titre = "You win";
    } else {
        $titre = "You loose";
    }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    </head>
<body>
<?php

    if ($gagne) {
        
        echo "<h1>Vous avez gagné</h1>";
    } else {
 ?>
            <h1>Vous avez perdu</h1>
            <a href="Javascript:history.back()">Réessayez</a>
 <?php
    }

?>
</body>
</html>
