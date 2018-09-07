

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ajout</title>
  </head>
<body>
  	<a href="./index.php">Accueil</a>
  <?php if (!isset($_POST['ajouter'])) {
    ?>
  <h1>Ajouter</h1>
  <form action="./?page=addsociete" method="post">
    <div>
 			<label for="nom_societe">Nom de la société</label>
 			<input type="text" name="nom_societe" value="">
 		</div>

 			<div>
 			<label for="adresse">Adresse</label>
 			<input type="text" name="adresse" value="">
 		</div>
 		<div>
 			<label for="pays">pays</label>
 			<input type="text" name="pays" value="">
 		</div>

    <div>
 			<label for="telephone_societe">Téléphone</label>
 			<input type="number" name="telephone_societe" value="">
 		</div>
    <div>
 			<label for="num_tva">Numéro de TVA</label>
 			<input type="number" name="num_tva" value="">
 		</div>
    <div>
      <label>Type</label>
      <select name="type_idtype">
      <?php foreach ($resultat as $key => $donnees) {
        ?>
        <option value="<?= $donnees['type_idtype']; ?>"><?= $donnees['type']; ?></option>
      <?php
    } ?>
      </select>
    </div>

    <button type="submit" name="ajouter">Ajouter</button>
  </form>
  <?php
} else {
        echo $resultat;
    } ?>
