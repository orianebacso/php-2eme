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
            <input type="text" name="devine" id="devine" />
        </div>
        <input type="submit" value="tester" name="tester">
    </form>
    <?php 
        $nombre  = ' ';
        $nbr_max = 5;
        $nbr_min = 0;
        
        echo rand(0, 5);
    ?>
</body>
</html>
 
