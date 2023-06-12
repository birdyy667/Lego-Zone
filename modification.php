<?php
session_start();

function modifUser($email, $amotdepasse, $nmotdepasse) {
    $nomFichier = "users.csv";

    // Vérifier si le fichier CSV existe
    if (!file_exists($nomFichier)) {
        echo "Le fichier CSV n'existe pas.";
    }
    // Vérifier si le fichier CSV est lisible
    elseif (!is_readable($nomFichier)) {
        echo "Le fichier CSV n'est pas accessible en lecture.";
    } else {
        $file = fopen($nomFichier, "r");
        $copie = fopen("copie.csv", "w");

        // Parcourir les lignes du fichier CSV
        while (($data = fgetcsv($file)) !== false) {
            if ($data[1] == $email && $data[2] !== $amotdepasse) {
                fclose($file); // Fermer le fichier CSV 
                fclose($copie);
                return false;
            }
            if ($data[1] == $email && $data[2] == $amotdepasse) {
                $data[2] = $nmotdepasse;

                // Vérifier s'il y a un fichier téléchargé
                if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                    // Récupérer le nom temporaire du fichier
                    $tmpName = $_FILES['photo']['tmp_name'];

                    // Définir l'emplacement de destination pour le fichier
                    $destination = 'photos/' . $_FILES['photo']['name'];

                    // Déplacer le fichier téléchargé vers l'emplacement de destination
                    move_uploaded_file($tmpName, $destination);

                    // Mettre à jour les données utilisateur avec le chemin de la photo
                    $data[3] = $destination;
                }
            }
            fputcsv($copie, $data, ",");
        }

        fclose($file); // Fermer le fichier CSV 
        fclose($copie);

        $file = fopen($nomFichier, "w");
        $copie = fopen("copie.csv", "r");

        while (($data = fgetcsv($copie)) !== false) {
            fputcsv($file, $data, ",");
        }

        return true;
    }
}

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $amotdepasse = trim($_POST['amotdepasse']);
    $nmotdepasse = trim($_POST['nmotdepasse']);
    if (modifUser($email, $amotdepasse, $nmotdepasse)) {
        header("Location: login.php");
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
    <title>Modification</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Modification 📝</header>
            <?php if (isset($errorMessage)) { ?>
                <div class="error-message"><?php echo $errorMessage ?></div>
            <?php } ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="motdepasse">Ancien Mot de passe</label>
                    <input type="password" name="amotdepasse" id="amotdepasse" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="motdepasse">Nouveau Mot de passe</label>
                    <input type="password" name="nmotdepasse" id="nmotdepasse" autocomplete="off" required>
                </div>

                <div class="field">
                    <label for="photo">Photo de profil</label>
                    <input type="file" name="photo" id="photo" accept="image/*">
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Modifier" required>
                </div>
                <div class="links">
                    ⚠️ Notez bien votre nouveau mot de passe.
                </div>
            </form>
        </div>
    </div>
</body>
</html>
