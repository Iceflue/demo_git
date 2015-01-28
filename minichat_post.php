<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date_input) VALUES (:pseudo, :message, NOW())');
$req->execute(array('pseudo' => $_POST['pseudo'],
					'message' => $_POST['message']));

header('Location: minichat.php');

?>
