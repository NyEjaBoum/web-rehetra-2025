<?php
include("connexion.php");
include("fonction.php");
header('Content-Type: application/json');

function pair($nb) {
    $nombres = array();
    for ($i = 0; $i < $nb; $i++) {
        $random = rand(1, 10);
        if ($random % 2 != 0) {
            $random += 1;
        }
        $nombres[] = $random;
        nombre($random);
    }
    return compterOccurrences($nombres);
}

function impair($nb) {
    $nombres = array();
    for ($i = 0; $i < $nb; $i++) {
        $random = rand(1, 10);
        if ($random % 2 == 0) {
            $random += 1;
        }
        $nombres[] = $random;
        nombre($random);
    }
    return compterOccurrences($nombres);
}

function compterOccurrences($nombres) {
    $occurrences = array();
    foreach ($nombres as $nombre) {
        if (!isset($occurrences[$nombre])) {
            $occurrences[$nombre] = 1;
        } else {
            $occurrences[$nombre]++;
        }
    }
    return $occurrences;
}

$nombre = isset($_GET['nombre']) ? intval($_GET['nombre']) : 0;
$parite = isset($_GET['parite']) ? $_GET['parite'] : 'pair';

$resultat = ($parite === 'pair') ? pair($nombre) : impair($nombre);

echo json_encode($resultat);
?>