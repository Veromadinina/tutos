<?php

    function plusPetit($num1,$num2,$num3){

            $petit = $num1 ;


        if ($num1>$num2) {

            $petit = $num2 ;
            
            
        }

        if ($petit>$num3) {

            $num3 = $petit ; 
            
        }

                return $petit ;
    }

            echo plusPetit(25,6,7);





?>