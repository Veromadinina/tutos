<?php

    $monTableauSimple = ["jerome" ,"Keita","Nicolas","Véronique"] ;

        function dernierElementTableau($monTableauSimple){

                if (count($monTableauSimple) == 0) {

                    return null;
                    
                } else {
                 $monDernierIndex = count($monTableauSimple)-1;  
                   
                 return $monTableauSimple[$monDernierIndex]; 


                }


        }

         echo dernierElementTableau($monTableauSimple) ;      




?>