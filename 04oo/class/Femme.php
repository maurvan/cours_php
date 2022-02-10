<?php 
    require_once("Personne.php"); 
    
    class Femme extends Personne {
        // --- propriétés ---
        private $estEnceinte = false;
        protected $sexe = "F";
        private $nbEnfants = 0;
        private $tabEnfants = [1,1,1,1,1,1,2,2,2,2,2,3,3,3,4,5,6,7,8,9];
        // --- méthodes ---
        public function getEstEnceinte(){
            return $this->estEnceinte;
        }
        public function setEnceinte(){
            $this->estEnceinte = true;
            $this->nbEnfants = rand(1,19);
            $this->nbEnfants = $this->tabEnfants[$this->nbEnfants];
            echo "<p>Je suis enceinte.</p> J'attends: " . $this->nbEnfants . " enfant(s)</p>";
        }
        public function accoucher(){
            if($this->estEnceinte == true) {
                echo "<p>J'accouche</p>";
                $this->estEnceinte = false;
            }
            else{
                echo "<p><b>ERREUR</b>: Je ne peux pas accoucher car je ne suis pas enceinte</p>";
            }
        }
        public function afficheEstEnceinte(){
            if($this->estEnceinte){
                echo "<p>Je suis enceinte</p>";
            }
            else {
                echo "<p>Je ne suis pas enceinte</p>";
            }
        }
        public function enfant(){
            for ($i=0; $i < $this->nbEnfants; $i++) { 
                if (rand(0, 1) == 0) {
                    echo "<p style=\"color:hotpink\">C'est une fille</p>";
                }
                else {
                    echo "<p style=\"color:blue\">C'est un garçon</p>";
                }
            }
        }
        public function sePresenter() {
            echo "<p>Je m'appelle $this->prenom $this->nom et je suis une femme</p>";
        }
    }

?>