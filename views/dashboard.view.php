<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini-BI Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; text-align: center; padding-top: 50px; }
        h1 { color: #333; }
        /* Leçon bonus : un peu de CSS pour faire un joli tableau */
        table { margin: 20px auto; border-collapse: collapse; width: 80%; background: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #007BFF; color: white; }
        .positif { color: green; font-weight: bold; }
        .negatif { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1><?php echo $titre; ?></h1>
        <!-- Le formulaire qui envoie les données en méthode POST -->
    <form method="POST" action="" style="margin-bottom: 30px; background: white; padding: 20px; display: inline-block; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <label>Type :</label>
        <select name="type" required>
            <option value="Revenu">Revenu</option>
            <option value="Depense">Dépense</option>
        </select>
        
        <label>Libellé :</label>
        <input type="text" name="libelle" placeholder="Ex: Achat café" required>
        
        <label>Montant :</label>
        <input type="number" step="0.01" name="montant" placeholder="Ex: 15.50" required>
        
        <!-- Le bouton qui déclenche l'envoi -->
        <button type="submit" style="padding: 10px 15px; background: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer;">Ajouter</button>
    </form>
    <p>Voici vos dernières opérations :</p>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Libellé</th>
                <th>Montant</th>
            </tr>
        </thead>
        <tbody>
            <!-- La Boucle Foreach : Pour chaque transaction dans ma liste $transactions -->
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?php echo $transaction['type']; ?></td>
                    <td><?php echo $transaction['libelle']; ?></td>
                    <!-- Petite logique conditionnelle : si le montant est négatif, on le met en rouge -->
                    <td class="<?php echo $transaction['montant'] < 0 ? 'negatif' : 'positif'; ?>">
                        <?php echo $transaction['montant']; ?> €
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>