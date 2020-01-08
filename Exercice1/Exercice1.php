<html>
<head>
	<title>Premier fichier PHP</title>
</head>
	<body>
		<h1>Ceci est mon premier fichier PHP</h1>

	<p> ici un peu de HTML statique...</p>
	<?php
		// on recommence a faire du dynamique en PHP
		$prenom = "Emilie";
		$nom = 'Tassé';
		// concaténation explicite
		echo "Je m'appelle " . $prenom . " " . $nom . "<br>";

		// concatenation implicite
		echo "Je m'appelle $prenom $nom"."<br>";

		// autre exemple
		$monMessage = "Je m'appelle " . $prenom . " " . $nom . "<br>";
		echo $monMessage;

		// Exemples de type de variables le reste est sur Lea

		$laVariable ="11";
		$typeVariable = gettype($laVariable);
		echo "La variable contient : " . $typeVariable . "<br>";
		echo "Le type de la variable contient : " . $typeVariable . "<br>";

		// Exercice 1 a faire (c'est seulement pour nous familiariser avec melanger le PHP et le HTML )

		$prenom = "Emilie";
		$nom = 'Tassé';
		$noteSurdix = 7;
		$noteProjetee = 8.5;

		echo "Auto-Evaluation d'Emilie Tasse";


	?>

	<!-- introduire les table ici et y introduire les variable -->

	<?php
	$prenom = "Emilie";
		$nom = 'Tassé';
		$noteSurdix = 7;
		$noteProjetee = 8.5;

		echo "Auto-Evaluation d'Emilie Tasse";
	?>
	</body>

</html>