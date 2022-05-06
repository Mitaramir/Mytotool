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





$title = $_POST["title"];
$desc = $_POST["desc"];
$nm = $_POST["nm"];
$id = $_POST["id"];
// fonction pour metre a jour dasn la base de donné
$sql = "UPDATE todo SET titre=?, description=?, nom=? WHERE id=?";
$stmt= $dbConnection->prepare($sql);
$stmt->execute([$title, $desc, $nm, $id]);
header('Location:principale.php');


?>