<?php 
    require('../db/connexion.php');

    function getAllMatiereByClasse($id){
        global $bdd;
        $sql = "SELECT * FROM matiereSelection WHERE idClasseSelection = $id";
        $resultat=mysqli_query($bdd,$sql);
        return $resultat;
    }

?>