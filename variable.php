<?php

      include("poo.php") ;
       //include("fonction.php") ;
        
      $majeur = new Majeur() ;
      
      $prenom = "Véronique";
      $nom = "LIPAN";
      $age = 16 ;
      $affAge = true ;

       
        
      // affiche ma fonction
     
        echo $majeur->majeurOrNot($nom,$prenom,$age) ;

?>