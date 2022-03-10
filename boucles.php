<?php

// faire afficher le nombre à partir de l'uRL boucle.php?nombre=
$nombre = 0 ;

if( isset($_GET["nombre"])) {
    if($_GET["nombre"] !=""){
    $nombre = $_GET["nombre"] ;
}
}

// boucle for
//$nombre = 5 ;
// afficher en sortie d'écran la table de 5 ;  5x1 = 5 ; 5x2 = 10 ; 5x3 =10
// si je veux sellectionner une partie de la table à afficher je modifie ($i = 3; $i < 7)
for ($i=0; $i < 10 ; $i++) { 

        $calcul = $nombre * $i ;
        echo $nombre."x".$i."=" .$calcul ;
        echo "<br>" ;
}

    // autre manière de procéder avec la boucle while
    $a = 0 ;        

    while ($a <= 10) {

    $calcul = $nombre * $a ;
        echo $nombre."x".$a."=" .$calcul ;
        echo "<br>" ;
 
 
    $a++;   # code...
}


?>