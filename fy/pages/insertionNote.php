<?php
include("../model/classeSelectionModel.php");
include("../model/matiereModel.php");

// Récupérer toutes les classes
$allClasse = getAllClasse();

if (empty($allClasse)) {
    die("Aucun résultat trouvé ou erreur de requête.");
}

$idClasseSelectionnee = isset($_POST['classe']) ? intval($_POST['classe']) : null;

$matieres = [];
if ($idClasseSelectionnee) {
    $resultat = getAllMatiereByClasse($idClasseSelectionnee);
    if ($resultat) {
        $matieres = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Note</title>
</head>
<body>
   <h1>Insertion Note</h1> 

   <!-- Formulaire pour sélectionner une classe -->
   <form method="POST" action="">
       <label for="classe">Classe</label>
       <select name="classe" id="classe" onchange="this.form.submit()">
           <option value="">Sélectionnez une classe</option>
           <?php
           foreach ($allClasse as $row) { ?>
               <option value='<?= $row['idClasseSelection'] ?>' <?= ($idClasseSelectionnee == $row['idClasseSelection']) ? 'selected' : '' ?>>
                   <?= $row['nom'] ?>
               </option>
           <?php }
           ?>
       </select>
   </form>

   <?php if ($idClasseSelectionnee && !empty($matieres)) { ?>
       <h2>Matières de la classe sélectionnée</h2>
       <form method="GET" action="../traitement/noteTraitement.php">
           <!-- Champ pour saisir l'ID de l'étudiant -->
           <div>
               <label for="idEtudiant">ID de l'étudiant</label>
               <input type="number" id="idEtudiant" name="idEtudiant" required>
           </div>

           <!-- Saisie des notes pour chaque matière -->
           <?php
           foreach ($matieres as $matiere) { ?>
               <div>
                   <label for="note-<?= $matiere['idMatiere'] ?>"><?= $matiere['nom'] ?></label>
                   <input type="hidden" name="matieres[]" value="<?= $matiere['idMatiere'] ?>">
                   <input type="number" id="note-<?= $matiere['idMatiere'] ?>" name="notes[]" min="0" max="20" required>
               </div>
           <?php }
           ?>
           <button type="submit">Enregistrer les notes</button>
       </form>
   <?php } elseif ($idClasseSelectionnee) { ?>
       <p>Aucune matière trouvée pour cette classe.</p>
   <?php } ?>
</body>
</html>