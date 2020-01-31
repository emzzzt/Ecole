
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>//Exercice pile ou face CORRECTION	</title>
</head>
<body>
	<?php
		$nbFaces =0;
		$nbPiles =0;

			for ($i = 0; $i < 20; $i++) { 
				$PileOuFace = rand(0, 1);
				//con assume que le pile est 0
				if($PileOuFace == 0)
				{
					echo "pile<br>";
					$nbPiles++;
				}
				else
				{
					echo "face<br>";
					$nbFaces++;
				}
			}
				echo "Il y a eu $nbPiles piles et $nbFaces faces sur 20 lancers.<br>";
	?>
	<h1>Exercice2 - 3 fois pile consécutifs</h1>


			<?php
				//

			echo "Voir corrigé sur LEA";



			?>


	<h1> Manipulation des chaines de caratères</h1>
	<?php
		$maChaine = "Bonjour! Je m'appelle Guillaume et je suis votre prof au Collège";
		$maChaineCourte ="élève";
		$maChaineAnglais = "wonderful";
		//ceci donnera le mauvais résultat à cause des caractères accentués en 2 bytes
		$longueur = strlen($maChaineCourte);
		echo "La longueur de $maChaineCourte est $longueur . <br>";
		// en Anglais (ASCII), ca fonctionne toujours
		$longueur = strlen($maChaineAnglais);
		echo "La longueur de $maChaineAnglais est $longueur . <br>";
		// équivalent qui fonctionne pour les deux langues
		$longueur = mb_strlen($maChaineCourte);
		echo "La longueur de $maChaineCourte est $longueur . <br>";


		//Boucler à travers une chaine en Anglais
		echo "<ul>";
		for ($i = 0; $i < strlen($maChaineAnglais); $i++) { 
			echo "<li>" . $maChaineAnglais[$i] . "</li>";
		}
		echo "</ul>";
		//Autres exemples sur LEA

		// Fonction strtoupper

		$maChaineCaps = strtoupper($maChaineAnglais);
		echo "$maChaineAnglais en majuscule donne $maChaineCaps<br>";

		//Fonction pour rechercher un caractère (HAYSTACK & NEEDLE)

		$maChaineHaystack = "body";
		$maChaineNeedle = "o";

		$pos = mb_strpos($maChaineHaystack, $maChaineNeedle);
		//ici, attention, il faut utiliser === ou !== plutot que == ou != lorsques les types
		if ($pos != false) {
			echo "La lettre $maChaineNeedle est bel et bien dans $maChaineHaystack.<br>";
		}
		else{
			echo "La lettre $maChaineNeedle n'est pas dans $maChaineHaystack.<br>";
		}

		$laChaine = "J'aime les chats";
		$chiens = str_replace("chats", "chiens", $laChaine);

		echo "$laChaine a été transformé en $chiens";

		//explode va séparer $maChaine à tout les endroits ou il y a les caractères spécifié dans le paramètre(ici un espace)
		$tabMots = explode(" ", $maChaine);
		var_dump($tabMots);


		//Implose  inverse les mots (les met alenvers)
		//$tabMots = implose(" ", $maChaine);
		//var_dump($tabMots);

		echo "<h1>Exercices en cours</h1>";

		/*Fonction prixAffiches
		* Déjà vu cette fonction en Algorithmie
		Description : Calcule le prix total pour l'impression des afiches selon 
		un nombres d'affiches envoyé en parammètres.
		Les règles sont les suivantes: 
		20 Dollars pour chacune des 5 premières affiches, 
		10 Dollars pour chacune des 20 suivantes et 7 Dollars pour chacune des affiches supplémentaires.
		Paramètre : $nbAffiches : entiers, le nombre d'affiches à imprimer
		*	Valeur de retour : entier, prix total pour le nombre d'affiches envoyé en paramètres
		*	
		*/
		
		function prixAffiches($nbAffiches) // les variables utilsés dans la fonction ne sont pas utilisables à l'extérieur de celle-ci
		{
			if($nbAffiches >25) 
			{
				$prixTotal = 300 + ($nbAffiches - 25) * 7;
			} 
			else if($nbAffiches > 5)
			{
				$prixTotal = 100 + ($nbAffiches -5) * 10;
			}
			else
			{
				$prixTotal = 20 * $nbAffiches;
			}
			return $prixTotal;
		}


		// Fonction MoyenneTableau Description: Calcule la moyenne des entiers compris dans le tableau. 
		//Paramètres: $tab : tableau d'entiers
		//Valeur de retour : float, la moyenne des entiers dans le tableau


		function MoyenneTableau($tabNombres)
		{
			$somme = 0;

			for ($i = 0; $i < count($tabNombres); $i++)
			{ 
				$somme += $tabNombres[$i];
			}

			$moyenne = $somme / count($tabNombres);
			return $moyenne;
		}


		//Sans utiliser str_replace, faites une fonction qui recoit en paramètres une chaine de caractères et qui remplace tous les A par des 4, les E par des 3, les I par des 1 et les O par des 0.
		// Exemple: Bonjour les amis devient B0nj0ur l3s 4m1s
		

		function transformes($chaine)
		{
			for ($i = 0; $i < strlen($chaine) ; $i++) { 
				# code...Switch case 
			}
		}

		//Refaire la meme fonction avec l'utilisation de str_replace(domentatiob str_replace php.net)




	
		// Faire une fonction qui détermine si une phrase est un palindrome. Un palindrome est une phrase qui lorsque renversée, donne la même phrase.
		//Exemple: Esope reste ici et se repose, Laval








	?>













</body>
</html>