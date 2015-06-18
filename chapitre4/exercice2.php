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
        $request = "SELECT id, email, date_inscription FROM liste_email";
        $result = $dbh->query($request);
    ?>
        <h1>Voici la liste des E-mails</h1>
        
        <p>
            Il y a <?= $result->num_rows ?>
            email<?=
                $result->num_rows > 1 ? 's' : ''
                ?>
        </p>
        
        <a href="exercice1.php">ajouter un email</a>
        
        <table>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>date</th>
                <th>option</th>
            </tr>
            
        <?php
        foreach ($result as $email) {
        ?>
            
            <tr>
                <td><?= $email['id']?></td>
                <td><?= $email['email']?></td>
                <td><?= $email['date_inscription']?></td>
                <td>
                    <a href="update.php?email_id=<?= ?>">Mettre à jour</a>
                    <a href="delete.php?email_id=<?= ?>">Effacer</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </table>
            
  </body>
</html>
