<?php
// ProduitAlimentaire.php
require_once 'Produit.php';

class ProduitAlimentaire extends Produit {
    private $dateExpiration;

    public function __construct($libelle, $prix, $qtestock, $dateExpiration) {
        parent::__construct($libelle, $prix, $qtestock);
        $this->dateExpiration = $dateExpiration;
    }

    public function afficher() {
        parent::afficher();
        echo "Date d'expiration : " . $this->dateExpiration . "<br>";
    }

    public function afficherDateExpiration() {
        echo "Date d'expiration : " . $this->dateExpiration . "<br>";
    }
}
?>
