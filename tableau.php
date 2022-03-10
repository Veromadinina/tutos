<?php 

    $monTableauSimple = [ "jerome" ,
                        "yannis",
                        "Nicolas",
                        "Véronique"] ;
// one item
        echo $monTableauSimple[2] ;
        echo "</br>"  ;               

    
// print all item in my array

    for ($i=0; $i < count($monTableauSimple); $i++) { 
        
        echo $monTableauSimple[$i] ;
        echo "</br>"  ;             # code...
    }

    $monTableauSimple = [ "jerome" ,
                        "yannis",
                        "Nicolas",
                        "Véronique"] ;
// one item
        echo $monTableauSimple[2] ;
        echo "</br>"  ;               

    
// print inverse all item in my array

    for ($i=count($monTableauSimple)-1 ; $i >=0 ; $i--) { 
        
        echo $monTableauSimple[$i] ;
        echo "</br>"  ;             # code...
    }

    foreach ($monTableauSimple as $key => $row) {

        echo $key."-".$row ;
        echo "</br>";
        # code...
    }

    // Multidimensionnelle

    $monTableauMulti = [["nom" => "Zamant", "prenom" => "Jerome"] ,
    ["nom" => "Dubois", "prenom" => "Yannis"], 
    ["nom" => "Emmanuel", "prenom" => "Nicolas"]
] ;

        // 1ère possibilité
        foreach ($monTableauMulti as $rowMulti){

        echo $rowMulti["nom"] ."".$rowMulti["prenom"] ; 
        echo "</br>" ; 

             }
             // 2ème possibilité
        foreach ($monTableauMulti as $rowMulti) {

                foreach($rowMulti as $key => $row){

                    echo $key .":".$row ; 
                    echo "<br>" ;


                }
                echo "*************  </br></br>" ; # code...
        }
               
   


?>