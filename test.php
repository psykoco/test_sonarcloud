<title> Exercice 4</title>

<?php $password = "bonjour"; ?>
<?php $username = "coco"; ?>

<?php if ((trim(strtolower($_POST['nom']))==$username) && (trim(strtolower($_POST['mdp']))==$password)){
	echo "<p>Bienvenue</p>";
	
} else { ?>
		
<form action"php2_4.php" method="POST">
	<p> Votre nom </p> <input type="text" name="nom"><br>
	<p> Votre mot de passe </p> <input type="password" name="mdp"><br>
	<button type="submit">Click</button>
</form>
<?php }
?>	
