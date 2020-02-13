

<?php
	$nas = "";
	$amnt = "";
	$msg_nas = "";
	$msg_amnt = "";
	$valid_nas = false;
	$valid_amnt = false;
	// formulaire
	if(isset($_POST["nas"]) && isset($_POST["amnt"]))
	{ //tout doit etre valide ici avant de rediriger vers answer.php pour echo le message de remerciement
		//echo "ok!"; //echo pour tester si ma page fonctionnait
		$nas = $_POST["nas"]; // valider que la bonne chose est appellée

		$reg_ex_nas = "/^\d{3} ?\d{3} ?\d{3}$/"; // regex pour que les 9 chiffres soient séparés en 3 blocks

		$resultat = preg_match($reg_ex_nas, $nas);
		//preg_match() returns 1 if a match can be found and 0 when the regex cannot match the subject at all
		if($resultat === 1) 
		{
				# code... l'input sera invalide 
			$msg_nas = "Le numéro d'assurance social devrait être sous format XXX XXX XXX";
		}
		else
		{
			$valid_nas = true;
		}

		$amnt = $_POST["amnt"];

		$reg_ex_amnt = "/^[1-9]?\d\.\d\d$/";

		$resultat = preg_match($reg_ex_amnt, $amnt);
		//preg_match() returns 1 if a match can be found and 0 when the regex cannot match the subject at all
		if($resultat === 1) 
		{
			# code... l'input sera invalide
			$msg_amnt = "Le montant n'est pas valide";
		}
		else
		{
			$valid_amnt = true; 
		}
	}

	if ($valid_nas && $valid_amnt) 
	{
		# code...Rediriger
		header("Location: answer.html");
	}


?>

<!--	a) son numéro d'assurance sociale et

b) un montant valide entre 0$ et 99.99$. 

Par exemple, 01.20$ n'est pas valide. 10.1$ non plus. 1.20$ et 10.10$ sont valides.

Valider les infos. Si tout est valide, faire une redirection vers une seconde page qui remercie l'usager pour le don. Si tout n'est pas valide, afficher les messages d'erreur appropriés. -->
<html>
	<head>
		<title>Form RegEx</title>
	</head>
	<body>
		<form method="post">
			Entrez votre Numéro d'assurance social : 
			<input type="text" name="nas" value="<?= $nas ?>"/><span><?= $msg_nas ?></span><br><br>
			Entrez un montant : 
			<input type="text" name="amnt" value="<?= $amnt ?>"/><span><?= $msg_amnt ?></span><br><br>
			<input type="submit" name="myForm" value="Envoyer"/>
		</form>
	</body>
</html>
