<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form RegEx</title>
	<!--Faire un formulaire de don qui demande à un usager :

a) son numéro d'assurance sociale et

b) un montant valide entre 0$ et 99.99$. 

Par exemple, 01.20$ n'est pas valide. 10.1$ non plus. 1.20$ et 10.10$ sont valides.

Valider les infos. Si tout est valide, faire une redirection vers une seconde page qui remercie l'usager pour le don. Si tout n'est pas valide, afficher les messages d'erreur appropriés. -->
</head>
<?php
	if (isset($_POST['myForm'])) { //tout doit etre valide ici avant de rediriger vers answer.php pour echo le message de remerciement
		echo "ok!";
	}
?>
<body>
		<form action="answer.php" method="post">
			Entrez votre Numéro d'assurance social : 
			<input type="password" name="nas" ><br><br>
			Entrez un montant : 
			<input type="text" name="amnt"><br><br>
			<input type="submit" name="myForm" value="Envoyer">
		</form>
</body>
</html>