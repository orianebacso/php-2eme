<?php
$login = $_POST["login"]
$password = $_POST["password"]
$majeur = $_POST["majeur"]
$type = $_POST["type"]
$options1 = $_POST["options1"]
$options2 = $_POST["options2"]
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>ajout utilisateur</title>
  </head>
  <body>
    <p>
        Login : <?php echo $login ?> <br>
        Mot de passe : <?php echo $password ?> <br>
        Majeur : <?php echo $majeur ?> <br>
        Type : <?php echo $type ?> <br>
        Lettre de nouvelle : <?php echo $option1 ?> <br>
        Membre de soutient : <?php echo $option2 ?> <br>
    </p>
  </body>
</html>
