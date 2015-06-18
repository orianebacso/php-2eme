<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 1 Chapitre 4</title>
  </head>
  <body>
    <?php
      $go = filter_input(INPUT_POST,'go');
      if ($go) {
        $mail = filter_input(INPUT_POST,'mail',FILTER_SANITIZE_EMAIL);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          echo "Votre adresse est valide.<br>";
        } else {
          die('Cettre adresse n\'est pas valide, <a href="formulaire.php">recomencez</a>');
        }
        $dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'ch04');
        if ($dbh->connect_errno) {
          die("Problème de connexion({$dbh->connect_errno}))" . $dbh->connect_errno);
        }
        $request = "INSERT INTO liste_email (email, date_inscription) VALUES ('$mail', NOW())";
        $result = $dbh->query($request);
        if ($result) {
          echo "Merci, votre e-mail a bien été enregistré";
        }
        $dbh->close();
      } else {
        ?>

          <form name="formulaire" method="post" action="formulaire.php">
            <input type="hidden" name="go" value="1">
            <p>Votre Mail :</p>
            <input name="mail" type="text" size="30">
            <br>
            <br>l
            <input type="submit" value="Envoyer"/>
          </form>

        <?php
      }
    ?>
  </body>
</html>
