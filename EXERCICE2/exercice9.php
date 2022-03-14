<?php

        function ilEstMajeure($age1){

            if ($age1>=18) {

                return true ;
                
            } else {
               
                return false ;
            }
            
        }

            echo ilEstMajeure(25);




?>