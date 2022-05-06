<?php

$dbConnection = null;

function getConnection(){


/* fonction pour ce connecter a la base de donné */
    try{
        $dbConnection = new PDO('mysql:host=localhost;dbname=connexiontodo', 'root', '');
        echo "Connexion à la base de données réussie";
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbConnection;
}

$dbConnection=getConnection();




// fonction pour supprimer de la base de donné
// Je recupere l'identifiant de la tache et je la supprime
$id = $_GET["id"];
$dbConnection->exec('DELETE FROM todo WHERE id = '.$id);
header('Location:principale.php');
?>