<!DOCTYPE html>
<html>
<head>
  <title>Complétion du Profil Utilisateur</title>

  <link rel="stylesheet" href="<?php echo base_url('Projet-Mr-Rojo/assets/Login.css')?>">

</head>
<body>
  <div class="container">
    <h1>Complétion du Profil Utilisateur</h1>
    <form id="profileForm" action="controlleurCompletion/index" method="POST">
      <label for="genre">Genre :</label>
      <select id="genre" name="genre">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
      </select>

      <label for="taille">Taille (en cm) :</label>
      <input type="number" id="taille" name="taille">

      <label for="poids">Poids (en kg) :</label>
      <input type="number" id="poids" name="poids">

      <label for="objectif">Objectif :</label>
      <select id="objectif" name="objectif">
        <option value="perdre">Augmentez son poids</option>
        <option value="maintenir">Reduire son poids</option>
        <option value="IMC">Atteindre son IMC idéals</option>
      </select>

      <button type="submit">Enregistrer</button>
    </form>
  </div>

  <script src="completion.js"></script>
</body>
</html>
