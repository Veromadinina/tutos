<?php 

class Simple{

         private $nomPrive = "toto" ;
         public $nomPublique = "Véronique" ; 


        public function getNomPrive(){

            return $this->nomPrive ;
        }

        public function setNomPrive($nom){

            return $this->nomPrive = $nom ;
        }
}


?>