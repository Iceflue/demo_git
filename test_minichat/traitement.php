<?php
	//connexion à la  BDD
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	//si valeur existe
	if (isset($_POST['pseudo']) and isset($_POST['message']))
	{
		//preparation requete
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$message = htmlspecialchars($_POST['message']);
		
		if($pseudo != '' and $message != '')
		{
			$req = $bdd->prepare('INSERT INTO minichat(pseudo, message, dateMessage) VALUES(:posteur, :msg, NOW())');
			$req->execute(array(
				'posteur' => $pseudo,
				'msg' => $message
				));
		}
		
		setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
	}
	
	//redirection vers le minichat
	header('Location: minichat.php');
?>
