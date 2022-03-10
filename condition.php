<?php

    //  test de valeur et : &&
    $vraiEtFaux = true && false ;
    var_dump($vraiEtFaux) ;
        // false

    $vraiEtVrai = true && true ;
    var_dump($vraiEtVrai) ;
        // vrai

    $fauxEtFaux = false && false ;
    var_dump($fauxEtFaux) ;
        // false


        //  test de valeur ou : || alt gr 6
    $vraiEtFaux = true || false ;
    var_dump($vraiEtFaux) ;
        // true

    $vraiEtVrai = true || true ;
    var_dump($vraiEtVrai) ;
        // true

    $fauxEtFaux = false || false ;
    var_dump($fauxEtFaux) ;
        // false

        //caractères de comparaison

        $age = 12 ;
        // ==
        if($age == 12) {
            echo "age = 12" ;
        }
        echo "</br>" ;
        // != différent ou <>
        if($age != 30){
            echo "age est different de 30" ;
        }

        // superieur : > ; inferieur <

        if($age < 30){
            echo "age est inférieur à 30" ;
        }

        echo "</br>" ;
        if($age > 10){
            echo "age est superieur à 10" ;
        }
        echo "</br>" ;

        if(($age >10) && ($age < 30)){

            echo "10 < $age <30" ;
        }

        

?>