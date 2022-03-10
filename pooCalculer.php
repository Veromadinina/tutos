<?php

       // programmation orientée objet : class ; nom de la classe : Calculer
    // opération 2($nombre) + ($operateur) 4($operande)
    class Calculer {

        public $nombre = 0 ;
        public $operateur = "+";
        public $operande = 0 ;
        
        // par IF pour mon calcul
        /*private function monCalcul(){

            if ($this->operateur == "+") {
               return $this->nombre + $this->operande ; # code...
            }

            if ($this->operateur == "-") {
                return $this->nombre - $this->operande ; # code...
             }

             if ($this->operateur == "*") {
                return $this->nombre * $this->operande ; # code...
             }
             return $this->nombre + $this->operande ; # code...
        }*/
        // 2ème
        private function monCalcul(){
               
                switch ($this->operateur) {
                    case '+':
                        return $this->nombre + $this->operande ; # code...
                        break;
                    case '-':
                            return $this->nombre - $this->operande ; # code...
                            break;
                    case '*':
                                return $this->nombre * $this->operande ; # code...
                                break;
                    
                    default:
                        return $this->nombre + $this->operande ; # code...  
                        break;
                }
           
                
        }

        public function affResultat(){
                echo    $this->nombre." "
                        .$this->operateur." "
                        .$this->operande." = "
                        .$this->monCalcul() ;

        }




    }




?>