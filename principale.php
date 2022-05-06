<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>


  <div class="header">
    <h1>MyTotool</h1>
  </div>
  <!-- boutton pour ce déconnecter -->
  <div class="btn_deco"><a href="connexion.html">Déconnexion</a></div>

  <!-- Formulaire pour remplire les taches -->

  <div class="center">
    <!-- Le formulaire envoie vers la page "ddbase_todolist" pour enregistrer les nouvelles taches -->
    <form class="form1" action="ddbase_todolist.php" method="post">
      <select required class='case1 input' name="nom" id="nom">
        <option value="">Assigner à ?</option>
        <option value="simon">Simon</option>
        <option value="camille">Camille</option>
        <option value="ange">Ange</option>
      </select>
      </br>
      <div class="case2">
        <label for="tache">Titre </label>
        <input required type="first name" name="title" id="titre" class="input">
      </div>
      </br>
      <div class="case3">
        <label for="contenu">Description </label>
        <textarea name="description" id="description" class="input"></textarea>
      </div>
      </br>
      <div class="center">
        <button class="formsend btn_modif" type="submit" value="Ok" name='Envoyer'>Crée</button>
      </div>
    </form>
  </div>

  <!-- php pour recuperer les taches enregistrer au dessus -->

  <?php
  $host = 'localhost';
  $dbname = 'connexiontodo';
  $username = 'root';
  $password = '';

  $dsn = "mysql:host=$host;dbname=$dbname";
  $sql = "SELECT * FROM todo";

  try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
      die("Erreur");
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  ?>

  <!-- j'affiche la liste des taches enregistrer dans la BDD -->

  <h2 class="liste_titre">Liste des taches</h2>
  <div class="center scroller pad">

    <table class="liste">
      <thead>
        <tr>
          <th>
            <h3>Nom</h3>
          </th>
          <th>
            <h3>Titre</h3>
          </th>
          <th>
            <h3>Description</h3>
          </th>
        </tr>
      </thead>
      <tbody>
        <!-- while est une bouvle en PHP -->
        <!-- PDO FETCH_ASSOC retourne un tableau indexé par le nom de la colonne -->
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
          <!-- le formulaire renvoie vers "update.php" pour mettre à jour les taches -->
          <form action="update.php" method="POST">
            <!-- htmlspecialchars empeche l'injection de HTML -->
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <tr>
              <!-- j'affiche les titre, description et nom trouver dasn la BDD -->
              <td>
                <select required class="input" name="nm" id="nom">
                  <option value=""><?php echo htmlspecialchars($row['nom']); ?></option>
                  <option value="simon">Simon</option>
                  <option value="camille">Camille</option>
                  <option value="ange">Ange</option>
                </select>
              </td>
              <td> <input class="input" type="text" name="title" value="<?php echo htmlspecialchars($row['titre']); ?>"></td>
              <td> <textarea class="input" name="desc" value="<?php echo htmlspecialchars($row['description']); ?>"><?php echo htmlspecialchars($row['description']); ?></textarea></td>
              <!-- boutton pour modiffier les taches -->
              <td><button type="submit" class="btn_modif">Modifier</button></td>
              <!-- boutton pour supprimer la tache qui renvoie vers "suppr.php" -->
              <td>
                <div class="btn"><a href="suppr.php?id=<?php echo $row['id']; ?>"></a></div>
              </td>
            </tr>
          </form>
        <?php endwhile; ?>

      </tbody>
    </table>
  </div>
  <div class="space"></div>

</body>

</html>