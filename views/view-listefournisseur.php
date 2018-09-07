<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fournisseurs</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  </head>
<body>
  <a href="./index.php">Accueil</a>
    <div class="container-fluid">
    <h2>Fournisseurs</h2>
    <table>

          <th>Nom de la société</th>

        <?php foreach ($resultat as $key => $donnees) {
    ?>

          <tr>
            <td> <a href="./?page=detailsociete&id=<?= $donnees['idsocietes']; ?>" ><?= $donnees['nom_societe']; ?></a></td>
          </tr>

      <?php
} ?>


    </table>
  </div>
