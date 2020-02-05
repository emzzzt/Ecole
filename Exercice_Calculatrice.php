
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>La Calculatrice en PHP</title>
</head>
<body>

	<form name="calculatrice" method="GET">
            <input type="number" name="nombre1"/>
            	<select name="operateur">
            		<!-- dans l'option de l'operateur tag php pour qu'il reste selected -->
                	<option>+</option>
                	<option>-</option>
                	<option>*</option>
                	<option>/</option>
            	</select>
            	 <input type="number" name="nombre2"/>
          <!--   <input type="number" name="nombre2"/> -->
            <input type="submit" name="calcul" value="Calculer">
        </form>
        <h2>Résultat: </h2>
        <?php

            //traitement de la calculatrice, différente version du prof mais 
        	// l'étape que les valeurs restent dans les inputs et l'operateur reste
        	// avec isset. Guillaume vérifie entre autre que les valeurs dans les inputs soient numériques avec ISNUMERIC
        	 if (isset($_GET['calcul'])) {
        	 	$resultat1 = $_GET['nombre1'];
        	 	$resultat2 = $_GET['nombre2'];
        	 	$operateur = $_GET['operateur'];
        	 	// verifier si les valeurs sont numériques
        	 	if (is_numeric($_GET["nombre1"]) && is_numeric($_GET["nombre2"])) 
        	 	{
        	 		# code...
        	 	}
        	 	switch ($operateur) {
        	 		case '+':
        	 			echo $resultat1 + $resultat2;
        	 			break;
        	 		case '-':
        	 			echo $resultat1 - $resultat2;
        	 			break;
        	 		case '*':
        	 			echo $resultat1 * $resultat2;
        	 			break;
        	 		case '/':
        	 			echo $resultat1 / $resultat2  ;
        	 			break;
        	 		default:
        	 			echo "Vous devez entreer deux nombres pour les calculer!";
        	 			break;
        	 	}
        	 }
        ?>
</body>
</html>
