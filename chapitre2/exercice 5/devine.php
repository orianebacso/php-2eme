<?php
const NBR_MIN = '1';
const NBR_MAX = '5';

$nombre = rand(NBR_MIN, MBR_MAX);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Jeu de devinettes</title>
  </head>
<body>
    <h1>Jeu de devinettes</h1>
    <form name="resultat" action="resultat.php" method="post">
        <div>
            <label for="devine">Deviner le nombre entre 0 et 5 <br> </label>
            <input type="text" name="nbr" id="devine" />
        </div>
        <input type="submit" value="tester" name="tester">
        <input type="hidden" name="valeurADeviner" value="<?= $nombre ?>">
    </form>
</body>
</html>
 
