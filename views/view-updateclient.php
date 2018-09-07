<!DOCTYPE html>
<html>
    <head>
      	<meta charset="utf-8">
      	<title>Modifier le client</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    </head>
<body>
    <div class="container-fluid">
  	<a href="./index.php">Accueil</a>
        <?php if (!isset($_POST['button'])) {
    ?>
	  <h2>Modifier</h2>
        <form action="./?page=updateclient" method="post" id="forme">
        		<div>
        		    <label for="nom">Nom</label>
        			  <input type="text" name="nom" value="<?= $donnees['nom']?>">
        		</div>

      			<div>
          			<label for="prenom">Prénom</label>
          			<input type="text" name="prenom" value="<?= $donnees['prenom']; ?>">
      		  </div>

            <div>
          			<label for="telephone">Téléphone</label>
          			<input type="number" name="telephone" value="<?= $donnees['telephone']; ?>">
        		</div>

            <div>
          			<label for="email">E-mail</label>
          			<input type="text" name="email" value="<?= $donnees['email']; ?>">
        		</div>

        		<input type="hidden" name="idannuaire" value="<?= $_GET['id']; ?>">
        		<button type="submit" name="button">Modifier</button>
        </form>
      </div>
<?php
} else {
        echo $donnees;
    } ?>
