<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier la facture</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
  <div class="container-fluid">
	<a href="./index.php">Accueil</a>
    <?php if (!isset($_POST['button'])) {
    ?>
	<h2>Modifier</h2>
	<form action="./?page=updatefacture" method="post" id="forme">
		<div>
			<label for="numero">Numéro</label>
			<input type="number" name="numero" value="<?= $donnees['numero']?>">
		</div>

			<div>
			<label for="date_facture">Date</label>
			<input type="date" name="date_facture" value="<?= $donnees['date_facture']; ?>">
		</div>
		<div>
			<label for="motif_prestation">Prestation</label>
			<input type="text" name="motif_prestation" value="<?= $donnees['motif_prestation']; ?>">

		</div>

		<input type="hidden" name="idfacture" value="<?= $_GET['id']; ?>">
		<button type="submit" name="button">Modifier</button>
	</form>
	</div>
<?php
} else {
        echo $donnees;
        // var_dump($confirm);
    } ?>
