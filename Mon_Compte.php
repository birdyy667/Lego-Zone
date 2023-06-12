<?php
session_start();
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
        if ($data[1] == $_SESSION["user"]["email"]) {
            if ($data[3] == "null") {
                $image = "Logo-Lego-Zone.png";
            } else {
                $image = $data[3];
            }

            if ($data[4] == "true") {
                $menu = "Création recette";
                $VALID = "Validé les recettes";
                $lien = "Création.php";
                $validation = "validation.php";
                
            } else {
                $menu = "Proposer une recette";
                $lien = "Recette.php";
            }
        }
    }

    $data2 = fgetcsv($file);
    $commentaires = array();

    for ($i = 5; $i < count($data2); $i += 2) {
        if (!is_null($data2[$i])) {
            while (($data3 = fgetcsv($file)) !== false) {
                if (!is_null($data3[$i])) {
                    if ($data3[1] == $_SESSION["user"]["email"]) {
                        $commentaire[] = $data3[$i];
                    }
                }
            }
        }
    }

    fclose($file);
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lego Zone</title>
    <style>
        /* Styles pour le footer */
        #footer {
            background-color: black;
            color: white;
            padding: 20px;
        }

        /* Sticky footer */
        html, body {
            height: 100%;
        }

        #page-content {
            flex: 1 0 auto;
        }

        #footer {
            flex-shrink: 0;
        }

        /* Styles pour les liens "Contactez-nous" et "Nos réseaux" */
        #footer h3 {
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        #footer a {
            color: white;
            text-decoration: none;
        }

        #footer a:hover {
            color: #8B0000;
            text-decoration: none;
        }

        /* Autres styles */
        body {
            background-color: rgb(105,105,105);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(105,105,105);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #8B0000
        }

        .profile-button:focus {
            background: #8B0000;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        #upper a:hover {
            color: #8B0000;
            text-decoration: none;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="page_acceuil.php" action="page_acceuil.php"><img src="Logo-Lego-Zone.png" alt="Logo" width="70px"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="upper">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $lien ?>"><?= $menu ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $validation ?>"><?= $VALID ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajout_comm.php">Ajouter un commentaire</a>
                </li>
            </ul>
            <button class="btn btn-primary profile-button" onclick="window.location.href = 'Mon_Compte.php';">Mon Compte</button>
        </div>
    </div>
</nav>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <a class="navbar-brand" ><img src=<?= $image ?> alt="profil" width="150px"></a>
                <span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Votre Profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Pseudo</label>
                        <p><?= $_SESSION["user"]["pseudo"] ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <p><?= $_SESSION["user"]["email"] ?></p>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button" onclick=window.location.href="http://localhost:8000/Lego_Zone/modification.php">Modifier son profil</button>
                    <button class="btn btn-primary profile-button" type="button" onclick=window.location.href="http://localhost:8000/Lego_Zone/delete.php">Supprimer son profil</button>
                </div>
                <br>
                <br>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Vos Commentaires</h4>
                </div>

                <?php
                if (count($commentaire) > 0) {
                    foreach ($commentaires as $commentaire) {
                        echo "<p>$commentaire</p>";
                    }
                } else {
                    echo "Aucun commentaire trouvé.";
                }
                ?>

            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- JS Bootstrap (facultatif, mais recommandé) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-x13uEr/CO3pOtW8q8fIVs5LwH1+AoONaw28gRGto3miwNqqK+2T29JlDT5pnwRHM"
    crossorigin="anonymous"></script>
</body>

</html>
