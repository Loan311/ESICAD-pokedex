<!-- 
    Ce fichier représente la page de liste de tous les pokémons.
-->
<?php 
require_once("head.php");
require_once("database-connection.php");
$query = $databaseConnection->query("SELECT nomPokemon,urlPhoto, T.libelleType as 'Type 1', T2.libelleType as 'Type 2'
From pokemon P
JOIN typePokemon T ON P.IdTypePokemon = T.IdType
LEFT JOIN typePokemon T2 ON P.IdSecondTypePokemon = T2.IdType");
$result = $query->fetch_all(MYSQLI_ASSOC);
var_dump($result);


?> 
<pre>
    &lt;
    A REMPLACER PAR VOTRE CODE POUR CHARGER ET AFFICHER DANS UN TABLEAU LA LISTE DES POKEMONS PAR LEUR NOM.
    CHAQUE POKEMON DOIT ETRE CLIQUABLE POUR NAVIGUER SUR UNE PAGE OU L'ON AFFICHE SON IMAGE ET L'ENSEMBLE DE SES CARACTERISTIQUES 
    &gt;
    </pre>


<?php
require_once("footer.php");
?> 