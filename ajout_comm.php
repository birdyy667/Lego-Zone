<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $comment = $_POST["comment"];
    $email = $_SESSION["user"]["email"];
    
    while (($data = fgetcsv($file)) !== false) {
    if ($data[1] == $_SESSION["user"]["email"]) {
    if ($data[4] == "true") {
                $menu = "Création recette";
                $VALID = "Validé les recettes";
                $lien = "creation.php";
                $validation = "validation.php";
                
            } else {
                $menu = "Proposer une recette";
                $lien = "Recette.php";
            }
    }}

    // Lire les données de produits.csv
    $products_file = fopen("produits.csv", "r");
    $products = [];
    while (($product_data = fgetcsv($products_file, 100, ",")) !== FALSE) {
        $products[] = $product_data;
    }
    fclose($products_file);

    // Ajouter l'utilisateur à users.csv si la ligne est vide, sinon récupérer la ligne existante
    $users_file = fopen("users.csv", "r");
    $header_row_read = fgetcsv($users_file, 100, ",");
    $users = [];
    $found = false;

    // Trouver l'index de la colonne correspondant au produit sélectionné dans le fichier "users.csv"
    $product_column = -1;
    for ($i = 0; $i < count($header_row_read); $i++) {
        if ($header_row_read[$i] == $product) {
            $product_column = $i;
            break;
        }
    }

    while (($user_data = fgetcsv($users_file, 100, ",")) !== FALSE) {
        if (!empty($user_data) && $user_data[0] != '') { // Ajout de la condition pour ignorer les lignes vides
            $users[] = $user_data;
            if ($user_data[1] == $email) {
                $found = true;
            }
        }
    }
    fclose($users_file);

    // Écrire le commentaire dans la colonne correspondante
    if ($product_column != -1) {
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i][1] == $email) {
                $users[$i][$product_column] = $comment;
                break;
            }
        }
    }

    // Enregistrer les modifications dans users.csv
    $users_file = fopen("users.csv", "w");
    fputcsv($users_file, $header_row_read);
    foreach ($users as $user_data) {
        fputcsv($users_file, $user_data);
    }
    fclose($users_file);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires sur les produits</title>
    <style>
        /* ... */
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $product = $_POST["product"];
        $comment = $_POST["comment"];

        // Lire les données de produits.csv
        $products_file = fopen("produits.csv", "r");
        $products = [];
        while (($product_data = fgetcsv($products_file, 100, ",")) !== FALSE) {
            $products[] = $product_data;
        }
        fclose($products_file);


        // Ajouter l'utilisateur à users.csv si la ligne est vide, sinon récupérer la ligne existante
        $users_file = fopen("users.csv", "r");
        $header_row_read = fgetcsv($users_file, 1000, ",");
        $users = [];
        $found = false;

        // Trouver l'index de la colonne correspondant au produit sélectionné dans le fichier "users.csv"
        $product_column = -1;
        for ($i = 0; $i < count($header_row_read); $i++) {
            if ($header_row_read[$i] == $product) {
                $product_column = $i;
                break;
            }
        }

        while (($user_data = fgetcsv($users_file, 100, ",")) !== FALSE) {
            if (!empty($user_data) && $user_data[0] != '') { // Ajout de la condition pour ignorer les lignes vides
                $users[] = $user_data;
                if ($user_data[0] == $username && $user_data[1] == $email) {
                    $found = true;
                }
            }
        }
        fclose($users_file);

        if (!$found) {
            $new_user = array_merge([$username, $email], array_fill(0, count($products), ''));
            $users[] = $new_user;
        }

        // Écrire le commentaire dans la colonne correspondante
        if ($product_column != -1) {
            for ($i = 0; $i < count($users); $i++) {
                if ($users[$i][1] == $email) {
                    $users[$i][$product_column] = $comment;
                    break;
                }
            }
        }

        // Enregistrer les modifications dans users.csv
        $users_file = fopen("users.csv", "w");
        fputcsv($users_file, $header_row_read);
        foreach ($users as $user_data) {
            fputcsv($users_file, $user_data);
        }
        fclose($users_file);
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
html, body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    background-color: #f5f5f5;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 2rem;
    color: #444;
    margin-bottom: 30px;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-size: 0.9rem;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"], input[type="email"], textarea, select {
    width: 100%;
    padding: 10px;
    font-size: 0.9rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    font-size: 0.9rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

.navbar-brand {
    display: inline-flex;
    align-items: center;
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.8);
}

.navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255, 255, 255, 1);
}
        #etoiles{
          width:100px;
          display: flex;
          justify-content: center; /* Centre horizontalement */
          align-items: center;
          position:relative;
          left:500px;
          top:-35px;
        }
        #etoiles > img{

            width:20px;
            top:-4px;
            right:+321px;
            margin-bottom:10px;
          }

        #commentaire{

          margin-top:20px;
        }
        #conteneur1{

          display:flex;
          /* flex-direction:column; */
          flex-wrap: wrap;
          margin-top:130px;
        }
        #nom_user{

          margin-bottom:20px;
          font-weight: bold;
        }
        #note{

          margin-right:20px;
        }
        #bouton{

            margin-top:40px;
            position:relative;
            left:140px;
            background-color:;
            margin-top:50px;;
        }
        #conteneur2{

          margin-left:50px;
          width: 350px;
          margin-bottom:30px;

        }
        #bouton > button{
            color: white;
            background-color: black;
            border: none;
            padding: 10px;
            font-size: 16px;  /* taille de texte du bouton */
            transition: all 0.3s ease;  /* transition pour le hover effect */
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);  /* ombre du bouton */
            border-radius:100px;
            cursor: pointer;  /* le curseur changera lorsque vous passerez le curseur sur le bouton */
        }

        #bouton > button:hover {
            background-color: #8B0000;  /* couleur de fond du bouton au survol */
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);  /* ombre du bouton au survol */
            color: white;  /* couleur de texte du bouton au survol */
            transform: translateY(-3px);  /* déplace légèrement le bouton vers le haut lors du survol */
        }

        #bouton > button:active {
            transform: translateY(1px);  /* déplace légèrement le bouton vers le bas lors du clic */
        }

    #para{

        margin-top:30px;
        margin-left:100px;
        width:700px;

    }
    #prix{

        margin-left:70px;
        font-size: 20px;
        margin-top:60px; 
        color:black;

    }
    #titre{

        margin-top:80px;
        font-size: 50px;
        background-color:#23282d;
        color:white; 
        width:1000px;
        padding-left:60px;
        border-radius: 50px;

    }
  #footer {
    background-color: black;
    color: white;
    padding: 20px;
    margin-top:100px;
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

  /* Styles pour les liens Contactez-nous et Nos réseaux */
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
  #upper a:hover {
    color: #8B0000;
    text-decoration: none;
  }
  img{

    position:relative;
    right:100px;
    top:50px;
  }
  #logo_1{

    position:relative;
    left:0px;
    top:0px;
  }
 

</style>
</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="Accueil.php" action="Accueil.php"><img id="logo_1" src="photos/logo.png" alt="Logo" width="70px"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="upper">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="Recette.php">Création  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mon_Compte.php">Mon compte</a>
        </li>
      </ul>
      
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
      </form>
    </div>
  </div>
</nav>

<h1>Ajouter un commentaires sur un produit</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <br>
        <br>
        <label for="product">Produit:</label>
        <select id="product" name="product" required>
            <?php
            $products_file = fopen("produits.csv", "r");
            while (($product_data = fgetcsv($products_file, 1000, ",")) !== FALSE) {
                echo "<option value=\"" . htmlspecialchars($product_data[0]) . "\">" . htmlspecialchars($product_data[0]) . "</option>";
            }
            fclose($products_file);
            ?>
        </select>
        <br>
        <label for="comment">Commentaire:</label>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
