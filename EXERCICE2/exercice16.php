<?php

        $monTableauNum = [20,60,10] ;

        
        function plusGrand($monTableau){

                $grand = $monTableau[0] ;
                // $x = 0;
              foreach ($monTableau as $nombre) {
                    echo "$nombre>$grand <br>" ; 
                    var_dump($nombre>$grand ) ;
                if ($nombre<$grand) {
                                //$x
                    $grand = $nombre ;
                    //$x = $nombre
                }


                  
            

  

        }

                return $grand;              
    }

                        echo plusGrand($monTableauNum);




?>