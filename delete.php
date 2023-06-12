<?php
session_start();

function supprimerUtilisateur($email, $motdepasse) {
    $nomFichier = "users.csv";

    // Vérifier si le fichier CSV existe
    if (!file_exists($nomFichier)) {
        echo "Le fichier CSV n'existe pas.";
    }
    // Vérifier si le fichier CSV est lisible
    elseif (!is_readable($nomFichier)) {
        echo "Le fichier CSV n'est pas accessible en lecture.";
    } else {
        // Tableau pour stocker les lignes du fichier
        $lignes = array();
        $fichierLecture = fopen($nomFichier, "r");

        // Lire les lignes du fichier et les stocker dans le tableau
        while (($ligne = fgetcsv($fichierLecture)) !== false) {
            $lignes[] = $ligne;
        }

        fclose($fichierLecture);

        // Ouvrir le fichier CSV en écriture
        $fichierEcriture = fopen($nomFichier, 'w');

        foreach ($lignes as $numeroLigne => $ligne) {
            // Vérifier si l'utilisateur correspond à la ligne actuelle
            if ($ligne[1] == $email && $ligne[2] !== $motdepasse) {
                fclose($fichierEcriture);
                return false;
            }
            if ($ligne[1] !== $email && $ligne[2] !== $motdepasse) {
                fputcsv($fichierEcriture, $ligne);
            }
        }

        fclose($fichierEcriture);
        return true;
    }
}

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $motdepasse = trim($_POST['motdepasse']);
    if (supprimerUtilisateur($email, $motdepasse)) {
        header("Location: login.php");
        exit();
    } else {
        $errorMessage = "Identifiants incorrects!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Suppression</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Suppression 🗑</header>
            <?php if (isset($errorMessage)) { ?>
                <div class="error-message"><?php echo $errorMessage ?></div>
            <?php } ?>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" name="motdepasse" id="motdepasse" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Supprimer" required>
                </div>
                <div class="links">
                    ⚠️ La suppression sera définitive.
                </div>
            </form>
        </div>
    </div>
</body>
</html>
