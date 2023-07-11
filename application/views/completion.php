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
        <?php
          // Connexion à la base de données
          $conn = mysqli_connect("localhost", "root", "", "Projet_S4");

          // Vérification de la connexion
          if (!$conn) {
            die("Erreur de connexion à la base de données : " . mysqli_connect_error());
          }

          // Récupérer les options de la table 'genres' dans la base de données
          $query = "SELECT * FROM genre";
          $result = mysqli_query($conn, $query);

          // Générer les options du select
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['genre'] . '">' . $row['nom_genre'] . '</option>';
            // echo $genre;
          }

          // Fermer la connexion à la base de données
          mysqli_close($conn);
        ?>
      </select>

      <label for="taille">Taille (en cm) :</label>
      <input type="number" id="taille" name="taille">

      <label for="poids">Poids (en kg) :</label>
      <input type="number" id="poids" name="poids">

      <label for="objectif">Objectif :</label>
      <select id="objectif" name="objectif">
      <?php
          // Connexion à la base de données
          $conn = mysqli_connect("localhost", "root", "", "Projet_S4");

          // Vérification de la connexion
          if (!$conn) {
            die("Erreur de connexion à la base de données : " . mysqli_connect_error());
          }

          // Récupérer les options de la table 'genres' dans la base de données
          $query1 = "SELECT * FROM objectif";
          $result1 = mysqli_query($conn, $query1);

          // Générer les options du select
          while ($row1 = mysqli_fetch_assoc($result1)) {
            echo '<option value="' . $row1['objectif'] . '">' . $row1['objectif'] . '</option>';
            // echo $genre;
          }

          // Fermer la connexion à la base de données
          mysqli_close($conn);
        ?>
      </select>
<!-- utilisateur -->
<label for="utilisateur">utilisateur :</label>
      <select id="utilisateur" name="utilisateur">
      <?php
          // Connexion à la base de données
          $conn = mysqli_connect("localhost", "root", "", "Projet_S4");

          // Vérification de la connexion
          if (!$conn) {
            die("Erreur de connexion à la base de données : " . mysqli_connect_error());
          }

          // Récupérer les options de la table 'genres' dans la base de données
          $utilisateur = "SELECT * FROM utilisateur";
          $result_utilisateur = mysqli_query($conn, $utilisateur);

          // Générer les options du select
          while ($row1 = mysqli_fetch_assoc($result_utilisateur)) {
            echo '<option value="' . $row1['utilisateur'] . '">' . $row1['nom'] . '</option>';
            // echo $genre;
          }

          // Fermer la connexion à la base de données
          mysqli_close($conn);
        ?>
      </select>



      <button type="submit">Enregistrer</button>
    </form>
  </div>

  <script src="completion.js"></script>
</body>
</html>
