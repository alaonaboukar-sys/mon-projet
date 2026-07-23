<?php
// 1. Je prépare le titre
 $titre = "Tableau de bord - Mini-BI";

// 2. Les fausses données de base
 $transactions = [
    ['type' => 'Revenu', 'libelle' => 'Vente site web', 'montant' => 1500.00],
    ['type' => 'Depense', 'libelle' => 'Abonnement Adobe', 'montant' => -50.00],
];

// 3. NOUVEAU : On vérifie si le navigateur a envoyé quelque chose (le formulaire)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On attrape les données du paquet $_POST
    $nouveauType = $_POST['type'];
    $nouveauLibelle = $_POST['libelle'];
    $nouveauMontant = (float) $_POST['montant']; // (float) force le texte en nombre décimal

    // Petite logique pro : si c'est une dépense, on met le chiffre en négatif automatiquement
    if ($nouveauType === 'Depense') {
        $nouveauMontant = -$nouveauMontant;
    }

    // On crée la nouvelle transaction
    $nouvelleTransaction = [
        'type' => $nouveauType,
        'libelle' => $nouveauLibelle,
        'montant' => $nouveauMontant
    ];

    // On l'ajoute à notre liste existante
    $transactions[] = $nouvelleTransaction;
}

// 4. J'envoie tout à la Vue
require_once __DIR__ . '/../views/dashboard.view.php';