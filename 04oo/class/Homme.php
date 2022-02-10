<?php 
    require_once("Personne.php"); // permet d'inclure une fois la classe
    
    class Homme extends Personne { // l'homme HERITE de personne
        // --- propriétés ---
        private $longueurBarbe = 3;
        protected $sexe = "M";
        // --- méthodes ---
        public function seRaser(){
            $this->longueurBarbe = 0;
        }
        public function getLongueurBarbe(){
            return $this->longueurBarbe;
        }
        public function sePresenter() {
            echo "<p>Je m'appelle $this->prenom $this->nom et je suis un homme</p>";
        }
    }

?>