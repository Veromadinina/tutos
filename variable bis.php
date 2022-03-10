<?php
// variable chaine
    $virgule = "," ;
    $maVariable = "Bonjour" ;

    // concaténer deux chaines symbole : le point . ou .=
    $maVariable = $maVariable . " le monde " ;
    $maVariable .= " ! " ;
    
    $monNombre1 = 17 ;
    $monNombre2 = 20 ;
    $somme = $monNombre1 + $monNombre2 ;

    echo "Somme de".$monNombre1."+".$monNombre2."=".$somme ;

    echo "</br>" ;

    echo $maVariable ."</br>" ;

        // booleen
    $myBoolean = true ;

    var_dump($myBoolean) ;
    echo "</br>" ;

    // tableau simple

    $monTableauSimple = [ "jerome" ,"yannis", "Nicolas"] ;

    var_dump($monTableauSimple) ;
       // array("chaine 1" , "chaine 2" ,"chaine 3") ; ecriture possible

    // tableau multidimmenssionnelle (tableau de tableau)

    $monTableauMulti = [["nom" => "Zamant", "prenom" => "Jerome"] ,
                        ["nom" => "Dubois", "prenom" => "Yannis"], 
                        ["nom" => "Emmanuel", "prenom" => "Nicolas"]
    ] ;

    var_dump($monTableauMulti) ;




?>