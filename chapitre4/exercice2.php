<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ex 1 Chap 4</title>
  </head>
  <body>
    <?php
        $dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'ch04');
        if ($dbh->connect_errno) {
          die("Problème de connexion({$dbh->connect_errno}))" . $dbh->connect_errno);
        }
        $request = "SELECT email, date_inscription FROM liste_email;";
        $result = $dbh->query($request);
        foreach ($result as $email) {
          echo "{$email['email']} {$email['date_inscription']}<br>";
        }
        $dbh->close();
    ?>
  </body>
</html>
