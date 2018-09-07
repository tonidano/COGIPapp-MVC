<a href="./index.php">Accueil</a>
<h1>Clients</h1>
        <table class="table">
            <tr class="info">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>E-mail</th>
            </tr>
<?php foreach ($resultat as $key => $donnees) {
    ?>
            <tr>
                <td> <a href="./?page=detailclient&id=<?= $donnees['idannuaire']; ?>" ><?= $donnees['nom']; ?></a></td>
                <td><?= $donnees['prenom']  ?></td>
                <td><?= $donnees['telephone']  ?></td>
                <td><?= $donnees['email']  ?></td>
            </tr>
<?php
}
?>
        </table>
