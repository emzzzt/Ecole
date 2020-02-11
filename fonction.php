	<?php
		
        function Calculpret($age, $salaire)
            {
                if ($age <= 18 || $age > 99)
                {
                    return false;
                } 
                elseif ($age >= 25 && $salaire < "3" )
                {
                    return  false;
                }
                elseif ($age >= 35 && $salaire = "2" )
                {
                    return  false;
                }
                elseif ($age >= 50 && $salaire = "1" )
                {
                    return  false;
                }
                else
                {
                return true;
                }
            }
        ?>
