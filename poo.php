<?php 
        //programmation orientée objet
class Majeur {

        function majeurOrNot($nom,$prenom , $age){

                $affSortie = "Bonjour, " ;
        
                if($age>21){
                    $affSortie = $affSortie  . "". $nom . " " .$prenom. " vous êtes majeur ";
        
             }
             
                else { $affSortie = $affSortie   . "". $nom . " " .$prenom. " vous n'êtes pas majeur. ";
                 
             }
        
                return $affSortie ;
            }
        


}


?>