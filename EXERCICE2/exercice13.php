<?php
        $monTableauSimple = ["jerome" ,"Keita","Nicolas","Véronique"] ;
        
        
        function premierElementTableau($monTableauSimple){

               if (count($monTableauSimple) == 0) {
                   
                    return null;

               } else {
                
                    return $monTableauSimple[0];

               }
               

        }



                echo premierElementTableau($monTableauSimple);



?>