<?php

        function plusPetit($arg1,$arg2,$arg3){

                $petit = $arg1 ;

            if ($arg1>$arg2) {
                
               $petit = $arg2 ;
            }

            if ($petit>$arg3) {

                 $petit = $arg3 ;
            }

            return $petit ;

    }


             echo plusPetit(2,34,70) ;



?>