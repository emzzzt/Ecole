<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form RegEx</title>
	<!--Faire un formulaire de don qui demande à un usager :
	php  '%[$"\'\n\d/\\\\]%'  '/regex/'  [1-9] [0-9] preg function
	whenever you want to do something with a regular expression, you have to pass it as a string
	to one of the preg functions
	preg_match() returns 1 if a match can be found and 0 when the regex cannot match the subject at all
	there is also preg_match_all() it will find all matche in the string iterate over the array with the
	match result.
	left to right
	Limit input to alphanumeric charcaters
	application requires thats users limit their responses to one or more alphanumeric English 
	charaters
	Strip leading zeros you want to match an integer number, and either return the number
	without any leading zeros or delete the leading zeros
	$result = preg_replace('/\b0*([1-9][0-9]*|0)\b/', '$1', $subject); 
	
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
