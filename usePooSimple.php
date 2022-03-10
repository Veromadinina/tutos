<?php 
            include "pooSimple.php";


            $simpleTest = new Simple() ;

            //echo $simpleTest->nomPrive ; impossible car nomPrive est en Private

            echo $simpleTest->nomPublique ."<br>" ;

            $simpleTest->nomPublique = "Gulliana" ;

            echo $simpleTest->nomPublique ."<br>" ;

            echo $simpleTest->getNomPrive() ."<br>" ;

            $simpleTest->setNomPrive("tati") ;
            echo $simpleTest->getNomPrive() ."<br>" ;

            




?>