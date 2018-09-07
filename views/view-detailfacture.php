<a href="./index.php">Accueil</a>
<h1>Factures</h1>
<table>

      <th>Numéro</th>
      <th>Date</th>
      <th>Société</th>
      <th>Type société</th>
      <th>Personne de contact</th>




      <tr>
        <td><?= $donnees['numero']; ?></td>
        <td><?= $donnees['date_facture']; ?></td>
        <td><?= $donnees['nom_societe']; ?></td>
        <td><?= $donnees['type']; ?></td>
        <td><?= $donnees['nom']; ?></td>



      </tr>



</table>
