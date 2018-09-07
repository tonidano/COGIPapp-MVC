<a href="./index.php">Accueil</a>
<div class="container-fluid">
  <h2>Sociétés</h2>
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
