<a href="./index.php">Accueil</a>
<h1>Détail sociétés</h1>
        <table>
            <tr>
                <th>Nom de société </th>
                <th>Adresse </th>
                <th>Pays </th>
                <th>N° de téléphone </th>
                <th>Numéro de TVA </th>
                <th>Type de clients </th>
            </tr>
            <tr>
                <td><?= $donnees['nom_societe']  ?></td>
                <td><?= $donnees['adresse']  ?></td>
                <td><?= $donnees['pays']  ?></td>
                <td><?= $donnees['telephone_societe']  ?></td>
                <td><?= $donnees['num_tva']  ?></td>
                <td><?= $donnees['type']  ?></td>



            </tr>
        </table>
