<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Lego Zone</title>
<style> 
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
   <a class="navbar-brand" href="Accueil.php" action="Accueil.php"><img src="Logo-Lego-Zone.png" alt="Logo" width="70px"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="upper">
      <ul class="navbar-nav me-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="Création.php">Création (temporaire) </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mon_Compte.php">Mon compte (temporaire)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page_descriptionv4.php">Recettes</a>
        </li>
      </ul>
      <form class="d-flex" >
  <button class="btn btn-primary profile-button" onclick="window.location.href = 'Connexion.php';">Login</button>
</svg>

      </button>
      </form>
    </div>
  </div>
</nav>

<div id="page-content" class="flex-grow-1">
  <!-- Ajoutez le contenu principal de la page ici -->
  <?php
  $filename = "produits.csv"; // Chemin vers le fichier CSV

  // Vérifie si les paramètres name et price sont passés dans l'URL
  if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['notice'])) {
    $name = $_GET['name'];
    $price = $_GET['price'];
    $notice = $_GET['notice'];

    // Lecture du fichier CSV
    $file = fopen($filename, "r");
    if ($file) {
      // Parcours des lignes du fichier
      while (($data = fgetcsv($file, 0, ",")) !== false) {
        // Récupération des informations de l'article
        $title = $data[0]; // Première colonne (titre)
        $image = $data[1]; // Deuxième colonne (image)
        $productPrice = $data[3]; // Quatrième colonne (prix)
        $description = $data[7]; // Huitième colonne (description)
        $noticeFile = $data[8]; // Neuvième colonne (notice)



        // Vérifie si les informations correspondent
        if ($title === $name && $productPrice === $price) {
          echo "<div class='container'>";
          echo "<div class='row'>";
          echo "<div class='col-md-6'>";
          echo "<img src='" . $image . "' alt='Image du produit' style='width: 110%;'><br>";
          echo "</div>";
          echo "<div class='col-md-6'>";
          echo "<h1 id='titre'>" . $title . "</h1>";
          echo "<h2 id='prix'> Prix materiel:   " . $productPrice ."€</h2>";
          echo "<p id='para'>" . $description . "</p>";
          echo "<div id='bouton'><a href='$notice' download><button style='color: white; background-color: black; border: none; padding: 10px; font-size: 16px; transition: all 0.3s ease; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1); border-radius: 100px; cursor: pointer;' onmouseover=\"this.style.backgroundColor = '#8B0000'; this.style.boxShadow = '0px 15px 20px rgba(0, 0, 0, 0.3)'; this.style.transform = 'translateY(-3px)';\" onmouseout=\"this.style.backgroundColor = 'black'; this.style.boxShadow = '0px 8px 15px rgba(0, 0, 0, 0.1)'; this.style.transform = 'translateY(0px)';\" onmousedown=\"this.style.transform = 'translateY(1px)';\" onmouseup=\"this.style.transform = 'translateY(-3px)';\">Télécharger la notice</button></a></div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          break; // Sort de la boucle si l'article est trouvé
        }
      }

      fclose($file);
    } else {
      echo "Erreur lors de l'ouverture du fichier.";
    }
  } else {
    echo "Aucun article spécifié.";
  }
?>
<script>

  function afficherEtoileNote($note) {
    $image = '';

    for ($i = 0; $i < $note; $i++) {
      $image .= "<img src='photos/etoile_note.png' alt='etoile_note' />";
    }

    return $image;
  }
</script>

<?php
// Récupération du nom de l'article depuis l'URL
$articleName = $_GET['name'];

if (($handle = fopen("users.csv", "r")) !== FALSE) {
    // Lire la première ligne pour obtenir les noms des articles
    $header = fgetcsv($handle, 1000, ",");

    // Trouver l'index de l'article dans l'en-tête
    $articleIndex = array_search(strtolower(trim($articleName)), array_map('strtolower', array_map('trim', $header)));
    
    echo"<div id='conteneur1'>";

    if ($articleIndex !== FALSE) {
        // Parcourir l'ensemble du fichier
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $username = $data[0]; // La première colonne

            if (isset($data[$articleIndex])) {
                $comment = $data[$articleIndex]; // Commentaire

                if (isset($data[$articleIndex + 1])) {
                    $note = $data[$articleIndex + 1]; // Note
                } else {
                    $note = ""; // Valeur par défaut si la colonne n'est pas présente
                }
            } else {
                $comment = ""; // Valeur par défaut si la colonne n'est pas présente
                $note = ""; // Valeur par défaut si la colonne n'est pas présente
            }

            // Affichage des informations

            echo"<div id='conteneur2'>";
              echo"<div id='nom_user'>";
                echo " $username";
              echo"</div>";
              
              echo"<div>";
                echo"<div id='etoiles'>";
                  for ($i = 0; $i < $note; $i++) {
                    echo "<img src='photos/etoile_note.png' alt='etoile_note' />";
                  }
                echo"</div>";
                echo "$comment";
              echo"</div>";
            echo"</div>";
        }
      echo"</div>";
    }
    fclose($handle);
}
?>


</div>
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3><a href="#">Contactez-nous</a></h3>
      </div>
      <div class="col-md-6">
        <h3><a href="#">Nos réseaux</a></h3>
      </div>
    </div>
  </div>
</div>
</body>
</html>
