<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $pseudonyme = $_POST['pseudonyme'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    // Vérifier si le fichier CSV existe, sinon le créer
    $nomFichier = "users.csv";
    if (!file_exists($nomFichier)) {
        // Créer le fichier et ajouter l'en-tête des colonnes
        $enTete = array("Pseudonyme", "Email", "Motdepasse");
        $handle = fopen($nomFichier, 'w');
        if ($handle !== false) {
            fputcsv($handle, $enTete, ',');
            fclose($handle);
        } else {
            echo "Impossible de créer le fichier CSV";
        }
    }

    // Vérifier si le pseudonyme ou l'adresse e-mail existe déjà dans le fichier CSV
    $file = fopen($nomFichier, "r");
    while (($data = fgetcsv($file)) !== false) {
        if ($data[0] == $pseudonyme) {
            $errorMessage = "Le pseudonyme est déjà utilisé. Veuillez en choisir un autre.";
            break;
        }
        if ($data[1] == $email) {
            $errorMessage = "L'adresse e-mail est déjà utilisée. Veuillez en choisir une autre.";
            break;
        }
    }
    fclose($file);

    // Si aucune erreur n'est survenue, ajouter les données au fichier CSV
    if (!isset($errorMessage)) {
        $nouvelleLigne = array($pseudonyme, $email, $motdepasse, "null", "null");
        $handle = fopen($nomFichier, 'a');
        if ($handle !== false) {
            fputcsv($handle, $nouvelleLigne, ',');
            fclose($handle);

            // Rediriger vers la page précédente
            header("Location: login.php");
            exit();
        } else {
            die("Impossible d'écrire dans le fichier CSV");
        }
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
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Inscription 📥</header>
            <?php if (isset($errorMessage)) { ?>
              <div class="error-message"><?php echo $errorMessage ?></div>
            <?php } ?>
            <form action="" method="post">
                <div class="field input">
                    <label for="pseudonyme">Pseudonyme</label>
                    <input type="text" name="pseudonyme" id="pseudonyme" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" name="motdepasse" id="motdepasse" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="enregistrer" value="Enregister" required>
                </div>
                <div class="links">
                ⚠️ Le pseudonyme et l'adresse mail sont définitifs.
                </div>
                <div class="links">
                    Déjà inscrit ? <a href="login.php">Se connecter</a>  ⬅️
                </div>
            </form>
        </div>
    </div>
</body>
</html>
