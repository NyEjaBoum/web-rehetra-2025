<?php 
    require('../db/connexion.php');

    function getEtudiantById($id){
        global $bdd;
        $sql = "SELECT * FROM ETUDIANTS WHERE IDETUDIANT = $id";
        $resultat=mysqli_query($bdd,$sql);
        return $resultat;
    }

    

?>