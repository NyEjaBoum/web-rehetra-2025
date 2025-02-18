<?php

require('../db/connexion.php');
include("../model/noteSelectionModel.php");

if(isset($_GET['notes'])&& isset($_GET['matieres'])){
    $matieres = array();
    $matieres = $_GET['matieres'];
    $notes = $_GET['notes'];
    $etd = $_GET['idEtudiant'];
    for($i=0; $i<count($matieres);$i++){
        insertNoteEtd($matieres[$i],$etd,$notes[$i]);
    }
    header("Location: ../pages/insertionNote.php?succes"); 
    exit();
}

?>