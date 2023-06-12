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
    $nomFichier = "articles.csv";
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

