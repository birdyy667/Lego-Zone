<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<title>Lego Zone</title>
<style>

        #bouton{

            margin-top:40px;
            position:relative;
            left:140px;
            background-color:;
            margin-top:50px;;
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
  .editing {
  border: 2px solid red;
  outline: none;
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
          <a class="nav-link" href="Création.php">Création (temporaire)  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Mon_Compte.php">Mon compte (temporaire) </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page_descriptionv4.php">Recettes</a>
        </li>
      </ul>
      
  <button class="btn btn-primary profile-button" onclick="window.location.href = 'login.php';">Login</button>
</svg>

      
      
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
    $nomFichier = "data.csv";
    $nouvelleLigne = array($name);
    $handle = fopen($nomFichier, 'a');
    if ($handle !== false) {
        fputcsv($handle, $nouvelleLigne, ';');
        fclose($handle);
    } else {
        die("Impossible d'écrire dans le fichier CSV");
    }
      fclose($file);
    } else {
      echo "Erreur lors de l'ouverture du fichier.";
    }
  } else {
    echo "Aucun article spécifié.";
  }
  
  ?>
<button id="edit-button" class="btn btn-primary profile-button" onclick="enableEditMode()" form="form1" formaction="enregistrer.php">Modifier</button>
 <button id="delete-button" class="btn btn-danger profile-button" onclick="deleteProduct()">Suppression</button>

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
<script>   function enableEditMode() {
    // Rendre le titre, le prix et la description éditables
    document.getElementById('titre').contentEditable = true;
    document.getElementById('prix').contentEditable = true;
    document.getElementById('para').contentEditable = true;

    // Mettre le focus sur le titre pour faciliter la modification
    document.getElementById('titre').focus();

    // Changer le texte du bouton en "Enregistrer"
    document.getElementById('edit-button').innerHTML = 'Enregistrer';

    // Ajouter une classe CSS pour mettre en évidence le mode d'édition
    document.getElementById('titre').classList.add('editing');
    document.getElementById('prix').classList.add('editing');
    document.getElementById('para').classList.add('editing');

    // Ajouter un gestionnaire d'événement pour l'enregistrement des modifications lorsque le bouton "Enregistrer" est cliqué
    document.getElementById('edit-button').addEventListener('click', saveChanges);
  }
function deleteProduct() {
  // Effectuer une requête AJAX pour supprimer le produit
  $.ajax({
    url: 'supprimer.php', // Remplacez "supprimer.php" par le chemin vers votre script PHP de suppression
    method: 'POST',
    data: {
     
    },
    success: function(response) {
      // Afficher une notification ou effectuer toute autre action après la suppression réussie
      alert('Produit supprimé avec succès !');
    },
    error: function(xhr, status, error) {
      // Gérer les erreurs en cas d'échec de la suppression
      console.error(error);
      alert('Une erreur s\'est produite lors de la suppression du produit.');
    }
  });
}
  function saveChanges() {
    // Récupérer les valeurs modifiées
    var title = document.getElementById('titre').innerText;
    var price = document.getElementById('prix').innerText;
    var description = document.getElementById('para').innerText;

    // Effectuer une requête AJAX pour enregistrer les modifications
    $.ajax({
      url: 'enregistrer.php', // Remplacez "save_changes.php" par le chemin vers votre script PHP de sauvegarde
      method: 'POST',
      data: {
        title: title,
        price: price,
        description: description
      },
      success: function(response) {
        // Afficher une notification ou effectuer toute autre action après l'enregistrement réussi
        alert('Modifications enregistrées avec succès !');
      },
      error: function(xhr, status, error) {
        // Gérer les erreurs en cas d'échec de l'enregistrement
        console.error(error);
        alert('Une erreur s\'est produite lors de l\'enregistrement des modifications.');
      }
    });

    // Désactiver le mode d'édition
    disableEditMode();
  }

  function disableEditMode() {
    // Désactiver la modification du contenu
    document.getElementById('titre').contentEditable = false;
    document.getElementById('prix').contentEditable = false;
    document.getElementById('para').contentEditable = false;

    // Supprimer la classe CSS pour le mode d'édition
    document.getElementById('titre').classList.remove('editing');
    document.getElementById('prix').classList.remove('editing');
    document.getElementById('para').classList.remove('editing');

    // Restaurer le texte du bouton en "Modifier"
    document.getElementById('edit-button').innerHTML = 'Modifier';

    // Supprimer le gestionnaire d'événement d'enregistrement des modifications
    document.getElementById('edit-button').removeEventListener('click', saveChanges);
  }




</script>
</body>
</html>
