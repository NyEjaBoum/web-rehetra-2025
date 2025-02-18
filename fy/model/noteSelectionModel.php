<?php 
    require('../db/connexion.php');

    function getAllNoteByEtd($id){
        global $bdd;
        $sql = "SELECT * FROM noteSelection WHERE idNote = $id";
        $resultat=mysqli_query($bdd,$sql);
        if (!$resultat) {
            die("Erreur lors de l'exécution de la requête : " . mysqli_error($bdd));
        }
    
        return mysqli_fetch_all($resultat, MYSQLI_ASSOC);
    }

    function insertNoteEtd($idMatiere,$idEtudiant,$valeur){
        global $bdd;
        $sql="INSERT INTO noteSelection (idEtudiant,idMatiere,valeur) VALUES ($idEtudiant,$idMatiere,$valeur)";

        if (mysqli_query($bdd, $sql)) {
            return true; 
        } else {
            die("Erreur lors de l'insertion de la note : " . mysqli_error($bdd));
        }    
    }

    

?>