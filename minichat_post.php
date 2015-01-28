<?php
// Connexion à la base de données
include("bdd.php");
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date_input) VALUES (:pseudo, :message, NOW())');
$req->execute(array('pseudo' => $_POST['pseudo'],
					'message' => $_POST['message']));

header('Location: minichat.php');

?>
