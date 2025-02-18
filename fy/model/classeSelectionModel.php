<?php
require '../db/connexion.php';

function getAllClasse() {
    global $bdd;
    $sql = "SELECT * FROM classeSelection";
    $resultat = mysqli_query($bdd, $sql);

    if (!$resultat) {
        die("Erreur lors de l'exécution de la requête : " . mysqli_error($bdd));
    }

    return mysqli_fetch_all($resultat, MYSQLI_ASSOC);
}
?>