<title>Liste fournisseurs</title>
    <div class="container-fluid">
    <h2>Liste des fournisseurs</h2>
    <div class="table-responsive">
     <table class="table table-bordered table-hover">
       <thead class="table-primary">
  <tr>
          <th>Nom de la société</th>
</tr>
</thead>
<tbody>
        <?php foreach ($resultat as $key => $donnees) {
    ?>

          <tr>
            <td> <a href="./?page=detailsociete&id=<?= $donnees['idsocietes']; ?>" ><?= $donnees['nom_societe']; ?></a></td>
          </tr>

      <?php
} ?>

</tbody>
    </table>
  </div>
</div>
