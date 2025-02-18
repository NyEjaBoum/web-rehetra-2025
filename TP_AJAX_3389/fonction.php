<?php

// function nombre($nombre) {
//     include("connexion.php");

//     $sql = "INSERT INTO nombre (nombre_p) VALUES ('$nombre')";

//     if (mysqli_query($bdd, $sql)) {
//         echo "Nombre $nombre inséré avec succès.<br>";
//     } else {
//         echo "Erreur : " . mysqli_error($bdd) . "<br>";
//     }
// }

    function nombre($nombre){
        include("connexion.php");
        $STH = $DBH->prepare("INSERT INTO nombre (nombre_p) VALUES (?) ");
        
        $STH->bindParam(1, $nombre);

        $STH->execute();
    }

    function verifierNombresDansBase($nombres) {
        include("connexion.php");
        $nombresTrouves = array();
        
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM nombre WHERE nombre_p = ?");

        $STH->bindParam(1, $nombre);
 
        $STH->execute();
    }
    
?>