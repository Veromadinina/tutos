<?php

    $monTableauSimple = ["jerome" ,"Keita","Nicolas","Véronique"] ;

        //var_dump($monTableauSimple) ;

        function premierElement($monTableauSimple){

            
                if ($monTableauSimple [""]) {

                        return "null" ;
                   
                } else {
                    
                    return $monTableauSimple [0];
                }
                
            
            






        }


            echo premierElement($monTableauSimple) ;


           
?>