<?php

    function factorielle($nombre){

            if ($nombre==0) {

               return 1;

            } else {

               return $nombre*factorielle($nombre-1);
            }
            

    }

                    echo factorielle(8);

                    // debutant

    function laFactorielle($nombre){

        $fac = 1;

        for ($i=1; $i < $nombre; $i++) { 
           
            $fac = $fac*$i ;
        }

            return $fac;

    }

            echo laFactorielle(8);