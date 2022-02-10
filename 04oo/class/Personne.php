<?php 
    class Personne {

        // --- propriétés ---
        // NE JAMAIS UTILISER 'PUBLIC' POUR LES PROPRIÉTÉS
        private $nom;
        private $prenom;
        private $dateNaissance;
        private $estFiance = false;
        protected $sexe;

        // --- constructeur ---
        public function __construct($_nom, $_prenom, $_dateNaissance) {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->dateNaissance = $_dateNaissance;
        }

        // --- méthodes ---
        public function sePresenter() {
            echo "<p>Je m'appelle $this->prenom $this->nom</p>";
        }
        public function parler($phrase) {
            echo $phrase;
        }
        public function donnerAge() {
            $age = date_diff(date_create(date("Y-m-d")), 
            date_create($this->dateNaissance));
            echo $age->format('%y');
        }
        public function demanderEnMariage(Personne $_personne) {
            if ($_personne == $this) {
                echo "<p style=\"color:red\">Vous ne pouvez pas vous demander en mariage !</p>";
            }
            else {
                echo "<p>Veux-tu m'épouser " . $_personne->prenom . " ?</p>";
            }
            
        }
        public function reponseMariage($_reponse, Personne $_personne) {
            echo "<p>La réponse est: " . (($_reponse) ? "oui</p>" : "non</p>");
            // si réponse == true alors
            if($_reponse)
            // propriété fiancé des 2 = true
            {
                // SI P2 EST DéJà FIANCé
                if($this->estFiance){
                    echo "<p>La réponse vérifiée : Désolé, je suis déjà fiancé</p>";
                }
                else{
                    $this->estFiance = true;
                    $_personne->estFiance = true;
                    echo "<p>La réponse vérifiée : Je te dis oui</p>";
                }
                
            }
            else {
                // réponse non
                if($this->estFiance){
                    echo "<p>La réponse vérifiée : Désolé, je suis déjà fiancé</p>";
                }
                else{
                    echo "<p>La réponse vérifiée : C'est non</p>";
                }
            }
        }
        public function afficherFiance() {
            if($this->estFiance){
                echo "<p>$this->prenom est fiancé".(($this->sexe=="F"?"e":"")) ."</p>";
            }
            else {
                echo "<p>$this->prenom n'est pas fiancé".(($this->sexe=="F"?"e":"")) ."</p>";
            }
        }

        // --- getter & setter ---
        public function getNom(){
            return $this->nom;
        }
        public function setNom($_nom){
            $this->nom = $_nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function setPrenom($_prenom){
            $this->prenom = $_prenom;
        }
        public function getDateNaissance(){
            return $this->dateNaissance;
        }
        public function setDateNaissance($_dateNaissance){
            $this->dateNaissance = $_dateNaissance;
        }
        public function setEstFiance($_estFiance){
            $this->estFiance = $_estFiance;
        }
    }

?>