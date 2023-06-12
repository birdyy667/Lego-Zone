<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $image = $_FILES['image'];
    $pdf = $_FILES['pdf'];
    $prix = $_POST['Prix'];
    $motorisation = $_POST['motorisation'];
    $difficulte = $_POST['difficulte'];
    $couleurs = $_POST['couleurs'];
    $commentaires = $_POST['commentaires'];

    // Vérifier si le fichier CSV existe, sinon le créer
    $nomFichier = "Validation.csv";
    if (!file_exists($nomFichier)) {
        // Créer le fichier et ajouter l'en-tête des colonnes
        $enTete = array("titre", "Image", "prix", "motorisation", "difficulte", "couleur" , "commentaires");
        $handle = fopen($nomFichier, 'w');
        if ($handle !== false) {
            fputcsv($handle, $enTete, ';');
            fclose($handle);
        } else {
            die("Impossible de créer le fichier CSV");
        }
    }

    // Vérifier si le titre existe déjà dans le fichier CSV
    $fichierExistant = fopen($nomFichier, 'r');
    if ($fichierExistant !== false) {
        while (($ligne = fgetcsv($fichierExistant, 1000, ';')) !== false) {
            if ($ligne[0] == $titre) {
                fclose($fichierExistant);
                echo '<script>alert("Le titre existe déjà. Les informations n\'ont pas été enregistrées."); history.back();</script>';
                exit(); // Arrêter l'exécution du script
            }
        }
        fclose($fichierExistant);
    } else {
        die("Impossible de lire le fichier CSV");
    }

    // Ajouter les données au fichier CSV
    $nouvelleLigne = array($titre, $image['name'], $motorisation, $prix, $difficulte, $couleur, $pdf['name'], $commentaires, $texte);
    $handle = fopen($nomFichier, 'a');
    if ($handle !== false) {
        fputcsv($handle, $nouvelleLigne, ';');
        fclose($handle);
    } else {
        die("Impossible d'écrire dans le fichier CSV");
    }

    // Rediriger vers la page précédente
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>

