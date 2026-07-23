<?php
// 1. Je prépare le titre
 $titre = "Tableau de bord - Mini-BI";

// 2. Leçon 2 : Je crée un "Array" (une liste) de fausses transactions financières
 $transactions = [
    ['type' => 'Revenu', 'libelle' => 'Vente site web', 'montant' => 1500.00],
    ['type' => 'Depense', 'libelle' => 'Abonnement Adobe', 'montant' => -50.00],
    ['type' => 'Revenu', 'libelle' => 'Consultation client', 'montant' => 300.00],
    ['type' => 'Depense', 'libelle' => 'Achat nom de domaine', 'montant' => -10.00],
];

// 3. J'envoie tout à la Vue
require_once __DIR__ . '/../views/dashboard.view.php';