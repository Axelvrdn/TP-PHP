<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre de jours par mois</title>
    <style>
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="3">Calendrier - Nombre de jours par mois</th>
            </tr>
            <tr>
                <th>Mois</th>
                <th>Numéro</th>
                <th>Nombre de jours</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "fonction.php";
                

                $months = exercice6();

                foreach ($months as $name => $days) :
            ?>
            <tr>
                <td><?= ucfirst($name); ?></td>
                <td><?= date('n', strtotime("01-$name")); ?></td> <!-- Obtenir le numéro du mois -->
                <td><?= $days; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>