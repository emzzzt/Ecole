

<html>
	<body>
		<?php
			require_once("Cours12.php");
			$affiches = 35;
			$prix = prixAffiches($affiches);
			echo "Le prix total pour $affiches affiches est $prix $. <br>";

			$leTableau = [90, 80, 70];
			$moy = MoyenneTableau($leTableau);
			echo "La moyenne des éléments contenus dans le tableau est $moy.<br>";
		?>

	</body>

	</html>