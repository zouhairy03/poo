<?php
// Produit.php
class Produit {
    protected $libelle;
    protected $prix;
    protected $qtestock;

    public function __construct($libelle, $prix, $qtestock) {
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qtestock = $qtestock;
    }

    public function afficher() {
        echo "Libellé : " . $this->libelle . "<br>";
        echo "Prix : " . $this->prix . "<br>";
        echo "Quantité en stock : " . $this->qtestock . "<br>";
    }

    public function augmenterQte($qte) {
        $this->qtestock += $qte;
    }
}
?>
