<?php
	$pseudo = '';
	if(isset($_COOKIE['pseudo']))
	{
		$pseudo = $_COOKIE['pseudo'];
	}
	
	//connexion à la  BDD
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	$nbMessageParPage = 10;
	
	if(isset($_GET['page']))
	{
		$page = (int) $_GET['page'];
		if($page == 0)
		{
			$page = 1;
		}
	}
	else
	{
		$page = 1;
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP - TP 2</title>
		<link rel="stylesheet" href="minichat.css" />
    </head>

    <body>
        <h2>Mini Chat</h2>
       
        <p>Exercice de manipulation d'une BDD</p>
		
		<form method="post" action="./traitement.php">
			<p>
				<label for="pseudo">Pseudo :</label>
				<input type="text" name="pseudo" id="pseudo" value="<?php echo $pseudo; ?>"/>
				<br />
				<label for="message">Message :</label>
				<input type="text" name="message" id="message" />
				<br />
				<input type="submit" value="Envoyer" />
			</p>
		</form>
		<p><a href="minichat.php">Rafraichir</a></p>
		<br/>
		<p>
			<?php
				$reponse = $bdd->query('SELECT COUNT(*) AS nbMessages FROM minichat');
				$donnees = $reponse->fetch();
				$nbMessages = $donnees['nbMessages'];
				$reponse->closeCursor(); // Termine le traitement de la requête
				
				$nbPages = (int) ($nbMessages / $nbMessageParPage);
				//echo $nbMessages % $nbMessageParPage;
				//echo $nbPages;
				for($i = 1; $i <= $nbPages; $i++)
				{
					echo '<a href="minichat.php?page='.$i.'">'.$i.'</a>';
					if($i < $nbPages)
					{
						echo ' - ';
					}
				}
				if(($nbMessages % $nbMessageParPage) != 0)
				{
					echo ' - ';
					echo '<a href="minichat.php?page='.$i.'">'.$i.'</a>';
				}
			?>
		</p>
		<div id="tabMessage">
			<table class="classeTable">
				<tr>
					<th><span class="affEntete">Date</span></th>
					<th><span class="affEntete">Pseudo</span></th>
					<th><span class="affEntete">Message</span></th>
				</tr>
			<?php
				$debut = $page * $nbMessageParPage - $nbMessageParPage;
				$fin = $page * $nbMessageParPage;
				//echo $debut .'/'.$fin;
				
				//requete de lecture des messages
				$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(dateMessage, \'%d/%m/%Y à %Hh%imin%ss\') AS dateMessage  FROM minichat ORDER BY idMessage DESC LIMIT '.$debut.', '.$nbMessageParPage);

				while ($donnees = $reponse->fetch())
				{
			?>
					<tr>
						<td><span class="affDate"><?php echo htmlspecialchars($donnees['dateMessage']); ?></span></td>
						<td><span class="affPseudo"><?php echo htmlspecialchars($donnees['pseudo']); ?></span></td>
						<td><span class="affMessage"><?php echo htmlspecialchars($donnees['message']); ?></span></td>
					</tr>
			<?php
				}
				$reponse->closeCursor(); // Termine le traitement de la requête
			?>
			</table>
		</div>
    </body>
</html>