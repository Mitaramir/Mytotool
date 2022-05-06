<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    


<?php

$dbConnection = null;
/* fonction pour ce connecter a la base de donné */
function getConnection(){
    try{
        $dbConnection = new PDO('mysql:host=localhost;dbname=connexiontodo', 'root');
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbConnection;
}

$dbConnection=getConnection();


// je recupere le login et password du formulaire
$login=$_POST['login'];
$password=$_POST['password'];
/* fonction pour verifier que le user et le password sont deja dans la BDD */
function select($dbConnection, $login, $password){
    $requete_string = "SELECT * FROM usertodo WHERE user_name = '$login' AND password = '$password'";
    $requete = $dbConnection->prepare($requete_string);
    $requete->execute();
    $result = $requete->fetchAll();
    return $result;
}

$result = select($dbConnection, $login, $password);



/* Si on ne trouve rien dans la BDD on envoie un message d'erreur */
if (empty($result)) {
    echo "Identifiant ou mot de pass incorrect. Veuillez réessayer ou créer votre espace.";
}

else{
// si non je renvoie vers la page "principale.php"
header ('location: principale.php');

}



?>

<div class="btn_redirection"><a href="connexion.html">test</a></div>

</body>