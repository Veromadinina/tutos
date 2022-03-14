<?php

    include("poo2.php") ;

    //  creation d'une nouvelle instance de la classe

    $infoFamille = new Famille() ;


    echo $infoFamille->getNom() ;


        $infoEmmanuel = new Famille() ;
        $infoEmmanuel->prenom = "Nicolas";
        
        echo "<br> infoEmmanuel->prenom : ". $infoEmmanuel->prenom ;
        // pour les infos en private
        $infoEmmanuel->setNom("Emmanuel") ;//  getteur pour editer
        echo "<br>". $infoEmmanuel->getNom();//  setteur pour lire

        


?>