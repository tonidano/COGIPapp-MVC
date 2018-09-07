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

  <form action="./?page=addclient" method="post">
    <div>
 			<label for="nom">Nom</label>
 			<input type="text" name="nom" value="">
 		</div>

 			<div>
 			<label for="prenom">Prénom</label>
 			<input type="text" name="prenom" value="">
 		</div>
 		<div>
 			<label for="telephone">Téléphone</label>
 			<input type="number" name="telephone" value="">
 		</div>

    <div>
 			<label for="email">E-mail</label>
 			<input type="text" name="email" value="">
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

    <button type="submit" name="ajouter">Ajouter</button>
  </form>

</div>

  <?php
} else {
        echo $resultat;
    } ?>
