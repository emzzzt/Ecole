//fonction pour le form
<!DOCTYPE html>
<html>
<head>
	<title>Calcul prêt</title>
</head>
<meta charset="utf-8">
<body>
		<?php
		
        function Calculpret($age, $salaire){
            $pret = true;
            if ($age < 18){
                if ($age >= 25 && $salaire < 25000 ){
                    $pret = false;
                }
                elseif ($age >= 35 && $salaire < 35000 ){
                    $pret = false;
                }
                elseif ($age >= 50 && $salaire < 50000){
                    $pret = false;
                }
                else{
                  $pret = false;
                }
                return $pret
    
        ?>
</body>
</html>
