<?php
$nom = ' ';

if(empty($_GET['nom'])) {
    
    $nom = $_GET['nom'];
    
} else {
    
    if(! empty($_POST['nom'])) {
        
        $nom=_POST['nom'];
        
    }else{
        $nom='non defini, vous devez utiliser get.html';
    }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>traite</title>
  </head>
    <body>
    </body>
</html>
 
