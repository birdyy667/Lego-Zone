<?php
session_start();

function loginUser($email, $motdepasse, $pseudonyme) {
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

        // Parcourir les lignes du fichier CSV
        while (($data = fgetcsv($file)) !== false) {
            if($data[1] == $email && $data[2] == $motdepasse){
                fclose($file); // Fermer le fichier CSV
                return true;
            }
        }
        fclose($file); // Fermer le fichier CSV 
        return false;
    }
}

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $motdepasse = trim($_POST['motdepasse']);
    $pseudonyme = trim($_POST['pseudonyme']);
    if (loginUser($email, $motdepasse, $pseudonyme)) { 
        $_SESSION["user"] = [
            "email" => $email,
            "pseudo" => $pseudonyme 
        ];
        header("Location: Mon_Compte.php");
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
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Connexion 🔐</header>
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
                    <input type="submit" class="btn" name="submit" value="Se connecter" required>
                </div>
                <div class="links">
                    Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a>  ⬅️
                </div>
            </form>
        </div>
    </div>
</body>
</html>
