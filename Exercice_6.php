<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<title>Exercice 6</title>
	</head>
	<body>
<!-- //a) Soit une chaîne de caractères contenant une date (AAAA/MM/JJ) et une heure (HH:NN) sous la forme AAAAMMJJHHNN. Par exemple, la chaine 201803112040 représente la date du 11 mars 2018 à 20h40.

Faites une fonction ChaineDate qui reçoit la chaine sous format AAAAMMJJHHNN, l'analyse en la traversant avec une boucle ou en utilisant les fonctions de sous-chaines, et retourne une chaine de caractères décrivant la date. Elle retourne false si la chaine n'a pas le bon nombre de caractères ou si la date résultante est invalide (une date valide étant un jour entre 01 et 31, un mois entre 01 et 12 et une année entre 0000 et 3000).

EX : ChaineDate(201803112040) retourne "11 mars 2018 à 20h40". -->
		<h3>Fonction ChaineDate</h3>
		<?php
			//function ChaineDate()
			date_default_timezone_set('EST');
			$ajd = date("YmdHi");
			$ajd2 = date("j F, Y, g:i");
			$jour = 0;
			$mois = 0;
			$annee = 0;

{
			if ($jour >0 || $jour <=31 || $mois >=1 || $mois <=12 || $annee >0 || $annee<=3000); 
			{
				echo "$ajd2";
			}
				//echo "$ajd <br> $ajd2"; 
				         
			
			//return(ChaineDate)			

}
		?>

<!-- //b) Faites une fonction qui calcule le nombre de points qu'un mot ou une phrase
vaut au HarveyScrabble.

Toutes les LETTRES dans une phrase valent un point, sauf le H qui vaut 3 points, le Y
qui vaut 10 points, le V qui vaut 5 points et le R qui vaut 2 points.

Si chacune des lettres H, V, Y et R sont présentes dans le mot, le mot vaut 20 points de plus.

Les points sont attribués que les lettres soient en minuscule ou en majuscule. -->
		<h3>Harvey Scrabble</h3>
		<?php




		?>



	</body>
</html>
date_default_timezone_set('EST')
			$ajd = date("YmdHi");
			$ajd2 = date("j F, Y, g:i");
			$jour = 40;
			$mois = 0;
			$annee = 0;

{
			if ($jour >0 || $jour <=31 || $mois >=1 || $mois <=12 || $annee >0 || $annee <= 3000); 
			{
				echo "$ajd2";
			}
			echo "$ajd <br> $ajd2"; 
