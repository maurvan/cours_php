<?php 
    class Poisson {
        // --- propriétés ---
        private $nom;
        private $couleur;
        private $poids;

        // --- constructeur ---
        public function __construct($_nom, $_couleur, $_poids) {
            $this->nom = $_nom;
            $this->couleur = $_couleur;
            $this->poids = $_poids;
        }

        // --- méthodes ---
        public function afficherPoids() {
            echo "<p>Le poids de $this->nom (poisson $this->couleur) est $this->poids kg</p>";
        }
        public function manger($_poisson) {
            echo "<p>$this->nom mange $_poisson->nom</p>";
            // mettre à jour les poids
            $this->poids = ($this->poids + $_poisson->poids);
            $_poisson->poids = 0;
        }

    }
?>