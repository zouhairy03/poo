<?php
// index.php
require_once 'ProduitAlimentaire.php';

$produit = new Produit("Produit générique", 10.99, 100);
$produit->afficher();

$produitAlimentaire = new ProduitAlimentaire("Produit alimentaire", 5.99, 50, "2024-12-31");
$produitAlimentaire->afficher();
$produitAlimentaire->afficherDateExpiration();
?>
