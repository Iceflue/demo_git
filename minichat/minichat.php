<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
	<body>
    
    <form action="minichat_post.php" method="post">
        <p>
		<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value=<?php echo $_COOKIE['pseudo']; ?> /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>
	

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());	
}

$rep = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_input, \'%d/%m/%Y - %H:%i:%s\') AS date FROM minichat ORDER BY ID DESC LIMIT 0, 10');

while($donnees = $rep->fetch())
{
	echo '<p>' . $donnees['date'] . '<strong> ' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
		
	$rep -> closeCursor();

?>

	</body>
</html>
