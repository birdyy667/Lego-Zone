<?php

    // Chemin vers le fichier CSV
    $chemin_fichier = 'users.csv';

    // Lecture du fichier CSV
    if (($fichier = fopen($chemin_fichier, 'r')) !== false) {
        // Tableau pour stocker les utilisateurs
        $utilisateurs = [];

        // Parcourir chaque ligne du fichier CSV
        while (($ligne = fgetcsv($fichier)) !== false) {
            // Récupérer les colonnes pertinentes
            $pseudo = $ligne[0];
            $commentaire_note = $ligne[3];
            $note = $ligne[4];

            // Séparer le titre de l'article et le commentaire
            $commentaire_note_separe = explode('|', $commentaire_note);
            $titre_article = $commentaire_note_separe[0];
            $commentaire = $commentaire_note_separe[1];

            // Ajouter les informations à un tableau d'utilisateurs
            $utilisateur = [
                'pseudo' => $pseudo,
                'titre_article' => $titre_article,
                'commentaire' => $commentaire,
                'note' => $note
            ];
            $utilisateurs[] = $utilisateur;
        }

        // Fermer le fichier CSV
        fclose($fichier);

        // Afficher les informations des utilisateurs
        foreach ($utilisateurs as $utilisateur) {
            echo 'Pseudo : ' . $utilisateur['pseudo'] . '<br>';
            echo 'Titre de l\'article : ' . $utilisateur['titre_article'] . '<br>';
            echo 'Commentaire : ' . $utilisateur['commentaire'] . '<br>';
            echo 'Note : ' . $utilisateur['note'] . '<br><br>';
        }
    } else {
        echo 'Erreur lors de l\'ouverture du fichier CSV.';
    }

?>
