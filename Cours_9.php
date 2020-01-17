<html>
    <head>
    	<meta charset="utf-8">
    </head>
    <body>
    	<?php
    	echo "<p>Exercice a) </p><br>";
    	$Compteur = 1;
    	// a) Exercice déterminer si le nombre est pair ou impair
    	while ( $Compteur <= 20)
    {
    		if ($Compteur %2 == 0)
    	{
    		echo "Le nombre $Compteur est pair.<br>";
    	}
    	else{
    		echo "Le nombre $Compteur est impair.<br>";
    	}
    	$Compteur++;
    }

    	echo "<p>Exercice b) </p><br>";
    	//b) Faire une boucle while qui calcule et affiche a somme des entiers entre 1 et 25

    	$Compteur2 = 1;
    	$Somme = 0;

    	while ($Compteur2 <= 25 ) {

    		$Somme += $Compteur2;
    		$Compteur2++;
    	}
    		echo "La somme des etiers entre 1 et 25 est $Somme. <br>";

		//c) Calculer la factorielle d'une variable nommée $nombre
    		echo "<p>Exercice c) </p><br>";
 
			$nombre = 5;
			$factorial = 1;

			for ($i=$nombre; $i>=1; $i--)
			{
			$factorial = $factorial * $i;
			}
			echo "La Factorielle de $nombre is $factorial";

			// Reponse du prof:

			/*$nombre = 5;
			$factorial = 1;
			// initialiser le compteur a 2

			$compteur3 = 2;
			while ($compteur3 <= $nombre)
			{
			$factorial = $factorial * $compteur3;
			}
			echo "La Factorielle de $nombre is $factorial";
			*/
			echo "<p>Boucle DO WHILE </p><br>";

			/*do
 				{
 				//on va répéter 10 fois ce qui est ici
 			compteur ++;
 			}
				while($compteur < 10);
			*/

			$Compteur4 = 101;

			do {
				echo " $Compteur4 <br>";
			} while ($Compteur4 <= 100);

			// exemple
			$test = false;
			do {
				echo "Je suis dans la boucle.<br>";
			} while ($test == true);
				echo "Je suis sortie de la boucle.<br>";

			echo "<p>Exercie d)</p><br>";

			//Exercice d) Avec une boucle DO WHILE, trouver jusqu'a quel entier il faut se rendre dans la suite 1 + 2 + 3 + 4 + 5 ... + n pour atteindre une somme maximale de 1000

			/*$somme = 0;
			$sommeMax = 1000;
			$compteur5 = 0;

			do {
				$compteur5++;
				$somme += $compteur5
			} while ($somme < $sommeMax);

			echo "Pour se rendre a la somme de $sommeMax";


*/

		?>
    </body>
</html>
