<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier la société</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
  <div class="container-fluid">
	<a href="./index.php">Accueil</a>
  <?php if (!isset($_POST['button'])) {
    ?>
	<h2>Modifier</h2>
	<form action="./?page=updatesociete" method="post" id="forme">
		<div>
			<label for="nom_societe">Nom</label>
			<input type="text" name="nom_societe" value="<?= $donnees['nom_societe']?>">
		</div>

			<div>
			<label for="adresse">Adresse</label>
			<input type="text" name="adresse" value="<?= $donnees['adresse']; ?>">
		</div>
		<div>
			<label for="pays">Pays</label>
			<input type="text" name="pays" value="<?= $donnees['pays']; ?>">
		</div>
    <div>
      <label for="telephone_societe">Téléphone</label>
      <input type="number" name="telephone_societe" value="<?= $donnees['telephone_societe']; ?>">
    </div>
    <div>
      <label for="num_tva">Numéro TVA</label>
      <input type="number" name="num_tva" value="<?= $donnees['num_tva']; ?>">
    </div>

		<input type="hidden" name="idsocietes" value="<?= $_GET['id']; ?>">
		<button type="submit" name="button">Modifier</button>
	</form>
</div>
<?php
} else {
        echo $donnees;
    } ?>
