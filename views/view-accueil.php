<div class="container-fluid">
    <!-- <?php include "./partials/check_login.php" ?> -->
    <div class="liens">
      <p><a href="./?page=listefournisseur">Liste des fournisseurs</a>
      <a href="./?page=listeclient">Liste des clients</a></p>
    </div>
     <h1>Gestion des données de la COGIP</h1>
<div class="facture col-lg-8 col-lg-offset-2">
     <h2>Factures</h2>
      <table class="table">
         <th>Numéro</th>
         <th>Date</th>
         <th>Société</th>
         <?php foreach ($resultat1 as $key => $donnees1) {
    ?>
       <tr>
        <td><a href="./?page=updatefacture&id=<?= $donnees1['idfacture']; ?>"><?= $donnees1['numero']; ?></a></td>
        <td><?= $donnees1['date_facture']; ?></td>
        <td><a href="./?page=updatesociete&id=<?= $donnees1['idsocietes']; ?>"><?= $donnees1['nom_societe']; ?></a></td>
        <td> <button type="submit" name="supprimer" onclick="deletefacture(<?= $donnees1['idfacture']; ?>)" ><i class="fas fa-trash-alt"></i></button> </td>
       </tr>
   <?php
} ?>
      </table>
      <input type="submit" name="ajouter" value="Ajouter" onclick="ajouterfacture()">
</div>
</div>
<div class="annuaire col-lg-8 col-lg-offset-2">
     <h2>Annuaire</h2>
            <table class="table">
               <th>Nom</th>
               <th>Prénom</th>
               <th>Téléphone</th>
               <th>Email</th>
               <th>Société</th>
             <?php foreach ($resultat2 as $key => $donnees2) {
        ?>
             <tr>
               <td><a href="./?page=updateclient&id=<?= $donnees2['idannuaire']; ?>"><?= $donnees2['nom']; ?></a></td>
               <td><?= $donnees2['prenom']; ?></td>
               <td><?= $donnees2['telephone']; ?></td>
               <td><?= $donnees2['email']; ?></td>
               <td><a href="./?page=updatesociete&id=<?= $donnees2['idsocietes']; ?>"><?= $donnees2['nom_societe']; ?></a> <a href="partials/annuaire.php">  </a> </td>
               <td> <button type="submit" name="supprimer" onclick="deleteclient(<?= $donnees2['idannuaire']; ?>)" ><i class="fas fa-trash-alt"></i></button> </td>
             </tr>
         <?php
    } ?>
            </table>
            <input type="submit" name="ajouter" value="Ajouter" onclick="ajouterclient()">
        </div>
</div>
<div class="societe col-lg-8 col-lg-offset-2">
     <h2>Sociétés</h2>
        <table class="table">
           <th>Nom</th>
           <th>Téléphone</th>
           <th>Type</th>
         <?php foreach ($resultat3 as $key => $donnees3) {
        ?>
           <tr>
             <td><a href="./?page=updatesociete&id=<?= $donnees3['idsocietes']; ?>"><?= $donnees3['nom_societe']; ?></a></td>
             <td><?= $donnees3['telephone_societe']; ?></td>
             <td><?= $donnees3['type']; ?></td>
             <td> <button type="submit" name="supprimer" onclick="deletesociete(<?= $donnees3['idsocietes']; ?>)" ><i class="fas fa-trash-alt"></i></button> </td>
           </tr>
       <?php
    } ?>
     </table>
     <input type="submit" name="ajouter" value="Ajouter" onclick="ajoutersociete()">
   </div>
 </div>
</div>
<script>
     function deletefacture(id){
     document.location.href = "./?page=deletefacture&id=" + id;
     }
     function ajouterfacture(id){
     document.location.href = "./?page=addfacture&id=" + id;
     }
     function deleteclient(id){
     document.location.href = "./?page=deleteclient&id=" + id;
     }
     function ajouterclient(id){
     document.location.href = "./?page=addclient&id=" + id;
     }

     function deletesociete(id){

     document.location.href = "./?page=deletesociete&id=" + id;
     }

     function ajoutersociete(id){

     document.location.href = "./?page=addsociete&id=" + id;
     }
</script>
