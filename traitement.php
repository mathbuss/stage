<?php 
	if (isset($_POST['name']) AND isset($_POST['firstname']) AND isset($_POST['email']) AND isset($_POST['message']))
	{
		echo 'Merci '.htmlspecialchars ($_POST['firstname']).', votre demande a bien été prise en compte, vous serez recontacté ultérieument.<br />';
		echo "A bientôt !";
	}
	echo "<PRE>";
	echo '<a href="homepage.php">Retour à l\'accueil</a>';
	echo "</PRE>";
?>

