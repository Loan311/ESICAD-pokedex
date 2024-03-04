
    <?php 
    require_once("head.php");
    require_once("database-connection.php");
    $query = $databaseConnection->query("SELECT nomPokemon, urlPhoto, T.libelleType as 'Type 1', T2.libelleType as 'Type 2'
    From pokemon P
    JOIN typePokemon T ON P.IdTypePokemon = T.IdType
    LEFT JOIN typePokemon T2 ON P.IdSecondTypePokemon = T2.IdType");
    $result = $query->fetch_all(MYSQLI_ASSOC);
    
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pokémon</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom Pokémon</th>
                <th>Photo</th>
                <th>Type 1</th>
                <th>Type 2</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $pokemon): ?>
                <tr>
                    <td><?php echo $pokemon['nomPokemon']; ?></td>
                    <!-- Utilisation de la balise img pour afficher l'image -->
                    <td><img src="<?php echo $pokemon['urlPhoto']; ?>" alt="Image de <?php echo $pokemon['nomPokemon']; ?>"></td>
                    <td><?php echo $pokemon['Type 1']; ?></td>
                    <td><?php echo $pokemon['Type 2']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
    require_once("footer.php");
    ?>
</body>
</html>
