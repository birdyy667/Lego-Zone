<?php
$dataFilename = "data.csv"; // Chemin vers le fichier data.csv
$produitsFilename = "produits.csv"; // Chemin vers le fichier produits.csv





// Lecture du fichier data.csv
$dataFile = fopen($dataFilename, "r+");
if ($dataFile) {
    $lastRow = ''; // Variable pour stocker la dernière ligne

    // Parcours des lignes du fichier data.csv
    while (($data = fgetcsv($dataFile, 0, ",")) !== false) {
        $lastRow = $data; // Met à jour la dernière ligne à chaque itération
    }

    // Vérifie s'il y a une dernière ligne
    if (!empty($lastRow)) {
        $firstCell = $lastRow[0]; // Récupère la première case de la dernière ligne
        echo "Première case de la dernière ligne du fichier data.csv : " . $firstCell . "<br>";

        // Lecture du fichier produits.csv
        $produitsLines = file($produitsFilename, FILE_IGNORE_NEW_LINES); // Lecture de toutes les lignes du fichier produits.csv
        $found = false; // Variable pour indiquer si la ligne a été trouvée

        // Parcours des lignes du fichier produits.csv
        foreach ($produitsLines as $index => $line) {
            $produitsData = str_getcsv($line); // Convertit la ligne en un tableau de données
            $produitsFirstCell = $produitsData[0]; // Récupère la première case de la ligne

            // Vérifie si la première case correspond à $firstCell
            if ($produitsFirstCell === $firstCell) {
                // Ligne trouvée !
                echo "Ligne correspondante dans le fichier produits.csv : " . implode(",", $produitsData) . "<br>";
                unset($produitsLines[$index]); // Supprime la ligne du tableau des lignes
                $found = true;
                break; // Sort de la boucle
            }
        }

        if (!$found) {
            echo "Aucune ligne correspondante trouvée dans le fichier produits.csv.";
        } else {
            // Réindexe les clés du tableau produitsLines
            $produitsLines = array_values($produitsLines);

            // Réécrit les lignes restantes dans le fichier produits.csv
            file_put_contents($produitsFilename, implode("\n", $produitsLines));

            // Supprime la ligne complète du fichier data.csv
            ftruncate($dataFile, 0);
            fseek($dataFile, 0);
            foreach ($produitsLines as $line) {
                $lineData = str_getcsv($line);
                fputcsv($dataFile, $lineData);
            }

            echo "La ligne correspondante a été supprimée du fichier produits.csv et du fichier data.csv.";
        }
    } else {
        echo "Le fichier data.csv est vide.";
    }

    fclose($dataFile);
} else {
    echo "Erreur lors de l'ouverture du fichier data.csv.";
}
?>

