<a href="./index.php">Accueil</a>
<h1>Détail client</h1>
        <table class="table">
            <tr class="info">
                <th>Nom </th>
                <th>Prénom </th>
                <th>Téléphone </th>
                <th>E-mail </th>
                <th>Nom de la société où travaille la personne </th>
                <th>Adresse de la société </th>
                <th>La liste des factures liées à la personne </th>
            </tr>

            <tr>
                <td><?= $donnees['nom']  ?></td>
                <td><?= $donnees['prenom']  ?></td>
                <td><?= $donnees['telephone']  ?></td>
                <td><?= $donnees['email']  ?></td>
                <td><?= $donnees['nom_societe']  ?></td>
                <td><?= $donnees['adresse']  ?></td>
                <td><?= $donnees['motif_prestation']  ?></td>
            </tr>

        </table>
