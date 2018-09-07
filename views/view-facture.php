<a href="./index.php">Accueil</a>
    <h1>Factures</h1>
    <table>

          <th>Numéro</th>
          <th>Date</th>
          <th>Prestation</th>


        <?php foreach ($resultat as $key => $donnees) {
    ?>
          <tr>
            <td> <a href="./?page=detailfacture&id=<?= $donnees['idfacture']; ?>" ><?= $donnees['numero']; ?></a></td>
            <td><?= $donnees['date_facture']; ?></td>
            <td><?= $donnees['motif_prestation']; ?></td>
          </tr>

      <?php
} ?>
    </table>
