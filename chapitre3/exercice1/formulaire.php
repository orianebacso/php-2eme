
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>

  <body>
  	<form name="formulaire" method="post" action="traitement_formulaire.php">
      <p>Prix de vente de votre maison :</p>
      <input name="pv" type="number" size="30">
      <br>
      <p>Fonds propres :</p>
      <input name="fp" type="number">
      <br>
      <p>Taux 1er rang :</p>
      <input name="taux1" type="number" value="3.5">
      <br>
      <p>Taux 2eme rand :</p>
      <input name="taux2" type="number" value="2.5">
      <br>
      <input type="submit" value="Envoyer"/>
    </form>
  </body>
</html>