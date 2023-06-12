<!DOCTYPE html> 
<html> 
  <head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Lego Zone</title> 
  <style>


    #titre_note{

      text-align:center;
      margin-top:120px;
      font-size:38px;
      background-color:black;
      color:white;
      padding-bottom:10px;
      padding-top:30px;
    }
    #image_note{

      width:550px;
      margin-top:50px;

    }
    #conteneur_note{
      
      position:relative;
      top:-15px;
      display:flex;
      flex-direction:row;
      padding-top:150px;
      padding-bottom:50px;
      padding-left:50px;
      background-color:black;

    }
    #etoiles_notes{

      width:60px;
      margin-top:50px;
      margin-left:30px;
      position:relative;
      top:-540px;
    }

    #bouton{

      margin-top:40px;
      position:relative;
      left:140px;
      background-color:;
      margin-top:70px;
      margin-left:100px;
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
     #bouton_note{

      margin-top:10px;
      position:relative;
      left:140px;
      margin-left:100px;
    }
    #bouton_note > button{
      color: black;
      background-color:white;
      border: none;
      padding: 10px;
      font-size: 16px;  /* taille de texte du bouton */
      transition: all 0.3s ease;  /* transition pour le hover effect */
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);  /* ombre du bouton */
      border-radius:100px;
      cursor: pointer;  /* le curseur changera lorsque vous passerez le curseur sur le bouton */
    }

    #bouton_note > button:hover {
      background-color: #8B0000;  /* couleur de fond du bouton au survol */
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);  /* ombre du bouton au survol */
      color: white;  /* couleur de texte du bouton au survol */
      transform: translateY(-3px);  /* déplace légèrement le bouton vers le haut lors du survol */
    }

    #bouton_note > button:active {
        transform: translateY(1px);  /* déplace légèrement le bouton vers le bas lors du clic */
    }
    #barre_nav{

      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
    }
    #corpus{

      display:flex;
      flex-direction:column;
    }
    #footer {
      background-color: black;
      color: white;
      padding: 20px;
      padding-bottom:70px;

    }

    #page_banniere {
      background-color: #161616;
      display: flex;
      flex-direction: column;
      /* height: 950px; */
      align-items: center; /* Centrer le contenu horizontalement */
      padding: 50px; /* Ajouter un peu d'espace autour du contenu */
      text-align: center; /* Centrer le texte horizontalement */
      height:100%;
    }


      #image_banniere{

        display: flex;
        flex-direction:row;
        justify-content: center;

      }
    #img1{

    width:300px;

    }

    #img2{

    width:300px;

    }
    #lego_zone{

      color:#9d2b2f;
    }

    #lambo{

    height:30%;
    position: relative;
    left:-450px;

    }
    #fefe{

    height:18%;
    position:relative;
    top:100px;
    }
    #page_banniere > h1 {

    text-align: center;
    margin-top: 100px;
    color: white;
    }

    #page_banniere > p{

    margin-top: 30px;
    text-align: left;
    position:relative;
    color: #d2d2d2;

    }

    #notices{

    background-color: white;
    display: flex;
    flex-direction: column;
    height:100%;

    }

    #bloc{

    display: flex;
    flex-direction: row;
    justify-content: center;
    height: 500px;
    margin-top:20px;
    }
    #bloc1{

      display: flex;
      flex-direction: column;
      width: 100%;
      height:400px;
      margin-top: 20px;
      margin-right: 50px;
    }

    #bloc1 > img{
      max-width: 100%; /* L'image ne dépasse pas la largeur complète du conteneur */
      max-height: 100%; /* L'image ne dépasse pas la hauteur complète du conteneur */
      width: auto; /* La largeur de l'image s'ajuste en fonction de la hauteur tout en conservant le ratio */
      height: auto; /* La hauteur de l'image s'ajuste en fonction de la largeur tout en conservant le ratio */
      object-fit: contain; /* L'image est redimensionnée pour être entièrement visible tout en conservant son aspect ratio */
      display: block; /* Évite les marges inattendues */
      margin: auto; 
      /* Centrer l'image */ 
    }

    
    #image{

    margin-top: 50px;

    }

    #titre{

    margin-top: 80px;
    text-align: center;

    }

    #titre2{

    text-align: center;
    color: #737373;
    }

    /* Sticky footer */
    html, body {
    height:100%;
    
    }



    /* Styles pour les liens Contactez-nous et Nos réseaux */
    #footer h3 {
    font-family: Arial, sans-serif;
    font-weight: bold;
    font-size: 18px;
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
  </style>
  </head> 
  <body id=corpus> 
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
          <a class="nav-link" href="page_descriptionv4.php">Recettes</a>
        </li>
      </ul>
      
  <button class="btn btn-primary profile-button" onclick="window.location.href = 'login.php';">Login</button>


      
      
    </div>
  </div>
</nav>

        <div id="page_banniere">

            <h1>Lego zone : notice & instructions</h1>

            <p>
                <span id="lego_zone">Lego Zone</span> est un site Web qui propose des montages<br>
                de Lego gratuits pour les enfants et les adultes  <br>
                passionnés de Lego.
            
            </p>

            <div id="image_banniere">


                <div id="img1"><img id="lambo" src="photos/lambo.png" class="image_zoom image_zoom_active"></div>
                <div id="img2"><img id="fefe" src="photos/fefe.png" class="image_zoom image_zoom_active"></div>

            </div>
        </div>
        <div id="notices">

            <div id="titre">
                    <h1>Les nouvelles notices</h1>
            </div>
            <?php
                // Ouverture du fichier CSV en lecture
                $file = fopen("produits.csv", "r");

                // Initialisation d'un tableau pour stocker les données
                $data = [];

                // Lecture du fichier CSV ligne par ligne
                while (($row = fgetcsv($file)) !== FALSE) {
                    $data[] = $row;
                }

                // Fermeture du fichier CSV
                fclose($file);

                // Récupération des trois dernières lignes du tableau
                $lastThree = array_slice($data, -3);

                // Début du bloc
                echo '<div id="bloc">';

                // Affichage des titres d'articles et des images
                foreach ($lastThree as $item) {
                    echo '<div id="bloc1">';
                    echo '<img id="' . str_replace(' ', '_', strtolower($item[0])) . '" src="' . $item[1] . '" alt="' . $item[0] . '">';  // Image de l'article

                    // Création du bouton avec les informations de l'article
                    echo '<div id="bouton"><button onclick="location.href=\'page_recette.php?name=' . urlencode($item[0])  . "&price=" . urlencode($item[3]) . "&notice=" . urlencode($item[9]) . '&description=' . urlencode($item[7]) .'\';">Voir l\'article</button></div>';

                    echo '</div>';
                }

                // Fin du bloc
                echo '</div>';
            ?>
        </div>
<?php
$file = fopen('users.csv', 'r');

// Lire les titres des produits à partir de la première ligne
$titles = fgetcsv($file);
$product_titles = array_slice($titles, 3, null, true);

// Initialiser un tableau pour stocker les totaux et le nombre de notes pour chaque produit
$products = [];
foreach($product_titles as $i => $title) {
    if ($i % 2 != 0) { // les indices impairs sont des notes de produits
        $products[trim($title)] = ['total' => 0, 'count' => 0]; // Utilisation de trim
    }
}

// Lire le fichier ligne par ligne
while (($line = fgetcsv($file)) !== FALSE) {
    $i = 0; // reset product index for each line
    foreach($products as $title => $product) {
        // ajouter la note à la somme totale et augmenter le nombre de notes
        // seulement si une note est présente
        if (!empty($line[$i+4])) { // shift the index by 4 (3 for user data columns and 1 for 0-based indexing)
            $products[$title]['total'] += (int)$line[$i+4];
            $products[$title]['count']++;
        }
        $i += 2; // increment by 2 to skip the comment columns
    }
}

// Calculer la moyenne pour chaque produit
$averages = [];
foreach($products as $title => $product) {
    if ($product['count'] > 0) {
        $averages[$title] = $product['total'] / $product['count'];
    }
}

// Trier les produits par leur moyenne en ordre décroissant
arsort($averages);

// Afficher les trois premiers produits
$top_three = array_slice($averages, 0, 3, true);

// Ensuite, ouvrez le fichier produits.csv
$file = fopen('produits.csv', 'r');

// Lire le fichier ligne par ligne
echo"<h3 id='titre_note'>Les notices les mieux notées</h3>";
echo"<div id='conteneur_note'>";
while (($line = fgetcsv($file)) !== FALSE) {
    // Si le produit est dans le top trois
    if (array_key_exists(trim($line[0]), $top_three)) { // Utilisation de trim
        // Afficher les informations du produit
        echo"<div id='conteneur_note2'>";
        echo "<img id='image_note' src='" . $line[1] . "' alt='" . $line[0] . "'/>";
        
        echo"<div>";
        for ($i = 0; $i < floor($top_three[trim($line[0])]); $i++) {
            echo "<img id='etoiles_notes' src='photos/etoile_note.png' alt='etoile_note' />";
        }
        echo"</div>";

        // Créer l'URL avec les informations de l'article
        $name = urlencode($line[0]);
        $price = urlencode($line[3]);
        $description = urlencode($line[7]);
        $notice = urlencode($line[9]);
        $url = "page_recette.php?name=$name&price=$price&description=$description&notice=$notice";
        
        // Afficher le bouton "Voir l'article"
        echo "<div id='bouton_note'><button onclick=\"location.href='$url'\">Voir l'article</button></div>";
        
        echo"</div>";
    }
}
echo"</div>";

fclose($file);
?>

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
