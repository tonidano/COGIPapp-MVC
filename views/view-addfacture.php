<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ajout</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  </head>
<body>
    <div class="container-fluid">
  	<a href="./index.php">Accueil</a>

  <?php if (!isset($_POST['ajouter'])) {
    ?>
  <h2>Ajouter</h2>
  <div class="col-lg-6 col-lg-offset-3">
  <form action="./?page=addfacture" method="post">
    <div>
 			<label for="numero">Numéro</label>
 			<input type="number" name="numero" value="">
 		</div>

 			<div>
 			<label for="date_facture">Date</label>
 			<input type="date" name="date_facture" value="">
 		</div>
 		<div>
 			<label for="motif_prestation">Prestation</label>
 			<input type="text" name="motif_prestation" value="">
 		</div>
    <div>
      <label>Nom de la société</label>
      <select name="idsocietes">
      <?php foreach ($resultat as $key => $donnees) {
        ?>
          <option value="<?= $donnees['idsocietes']; ?>"><?= $donnees['nom_societe']; ?></option>
      <?php
    } ?>
      </select>
    </div>
    <div>
      <label>Nom client</label>
      <select name="idannuaire">
      <?php foreach ($resultat as $key => $donnees) {
        ?>
        <option value="<?= $donnees['idannuaire']; ?>"><?= $donnees['nom']; ?></option>

      <?php
    } ?>

      </select>
    </div>
    <button type="submit" name="ajouter">Ajouter</button>
  </form>
</div>
</div>
  <?php
} else {
        echo $resultat;
        // echo $donnees;
    } ?>
