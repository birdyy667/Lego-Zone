    <!DOCTYPE html>
    <html>
            <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <title>Lego Zone</title>
                    <style>
                        /* Styles précédents */

                #barre_nav{

                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        z-index: 100;                
                }
                #search-input{

                    margin-top:20px;
                    margin-bottom:40px;
                    margin-left:20px;
                    width:420px;
                    border-radius:10px;
                    border:1px solid black;
                    border-color:none;
                }
                #search-input:hover {
                    transform: translateY(-3px);  /* déplace légèrement le bouton vers le haut lors du survol */
                }

                #search-input:active {
                    transform: translateY(1px);  /* déplace légèrement le bouton vers le bas lors du clic */
                }
                #prix_range{


                    display:flex;
                    justify-content:space-between;

                }

                .custom-link {
                    text-decoration: none;
                    color: white;
                }

                #mon_range_prix{

                    width: 200px; /* Définir une largeur */
                    height: 10px; /* Définir une hauteur */
                    background-color: #e0e0e0; /* Définir une couleur de fond */
                    border-radius: 5px; /* Définir un rayon de bordure arrondi */
                    outline: none;
                }
                body {
                    display: flex;
                    flex-direction: column;
                    min-height: 100vh;
                    
                }

                .col-4 {
                width: 300px; /* Définir une largeur fixe pour le bloc de filtrage. */
                    margin-left: 50px; /* Définir une marge à gauche pour éloigner le bloc de filtrage du bord gauche de la fenêtre. */
                }

                .col-8 {
                        min-width: 800px; /* ajustez cette valeur selon vos besoins */
                }
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

                #difficulte{

                    margin-left:20px;
                    margin-top:20px;
                    display:flex;
                    justify-content:space-between;
                    width:85%;
                }

                #motorisation {

                    margin-left:20px;
                    margin-top:20px;
                    display:flex;
                    justify-content: space-between;
                    width:85%;
                    margin-bottom:50px;
                }

                #prix{

                    margin-left:30px;
                    margin-top:20px;
                    margin-bottom:50px;
                }
                #prix > input{

                    width:90%;
                }


                #footer {
                    /* ... */
                    margin-top: auto;
                }   
                    .container {
                        display: flex;
                    }

                    #filter-menu {
                    
                        padding: 10px;
                        border-radius: 5px;
                        position:relative;
                        left:-250px;
                        width:500px;
                        margin-top:50px;
                    }

                    .produits-grid {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        gap: 20px;
                        margin-top: 20px;
                    }
                    #filter-menu h3 {
                        font-size: 18px;
                        margin-bottom: 10px;
                        color: #333;
                    }

                    #filter-menu ul {
                        list-style: none;
                        padding: 0;
                        margin-bottom: 10px; /* Ajout de la marge inférieure */
                    }

                    #filter-menu li {
                        margin-bottom: 5px;
                    }
                    #filter-menu > p{

                        margin-top:10px;
                        margin-bottom:100px;
                    }

                    #filter-menu a {
                        color: #333;
                        text-decoration: none;
                        display: block;
                        padding: 5px;
                        border-radius: 3px;
                        transition: background-color 0.3s ease;
                    }

                    #filter-menu a:hover {
                        background-color: #eaeaea;
                    }

                    #filter-menu a.active {
                        background-color: #8B0000;
                        color: #fff;
                    }

                    .color-options {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;
                        margin-top: 30px;
                        margin-left:30px;
                        width:85%;
                        cursor: pointer;
                        transition: all 0.3s ease;
                    }
                    .color-option:hover {
                        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
                        transform: translateY(-3px);
                    }

                    .color-option:active {
                        transform: translateY(1px);
                    }

                    .color-option[data-color='rouge'] {
                        background-color: red;
                    }

                    .color-option[data-color='bleu'] {
                        background-color: blue;
                    }

                    .color-option[data-color='jaune'] {
                        background-color: yellow;
                    }

                    .color-option[data-color='vert'] {
                        background-color: green;
                    }

                    .color-option[data-color='orange'] {
                        background-color: orange;
                    }

                    .color-option {
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                        cursor: pointer;
                    }
                    .produit {
                        padding: 10px;
                        text-align: center;
                        background-color: #fff;
                        border-radius: 5px;
                        transition: box-shadow 0.3s ease;
                    }

                    .produit img {
                        width: 320px;
                        height: auto;
                    }

                    .produit h2 {
                        font-size: 16px;
                        color: white;
                        background-color: black;
                        padding: 10px;
                        margin: 5px;
                        height:40px;
                        color: white;
                        background-color: black;
                        border: none;
                        padding: 10px;
                        font-size: 16px;  /* taille de texte du bouton */
                        transition: all 0.3s ease;  /* transition pour le hover effect */
                        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);  /* ombre du bouton */
                        border-radius:100px;
                        color: white !important;
                        text-decoration: none;
                        cursor: pointer;  /* le curseur changera lorsque vous passerez le curseur sur le bouton */
                    }
                    
                    .produit h2:hover{

                        background-color: #8B0000;  /* couleur de fond du bouton au survol */
                        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);  /* ombre du bouton au survol */
                        color: white;  /* couleur de texte du bouton au survol */
                        transform: translateY(-3px);
                        
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
                        border: none;
                    }

                    .profile-button:hover {
                        background: #8B0000;
                    }

                    .profile-button:focus {
                        background: #8B0000;
                        box-shadow: none;
                    }

                    #upper a:hover {
                        color: #8B0000;
                        text-decoration: none;
                    }
            </style>
        </head>
        <body class="d-flex flex-column">
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
        
        <div class="container">
    <div class="row">
        <div class="col-4">
            <!-- Le contenu de #filter-menu -->
            <div id="filter-menu">
                <p>
                    Lego Zone est un site Web qui propose des montages
                    de Lego gratuits pour les enfants et les adultes passionnés de Lego.
                </p>
                <h3>Couleurs</h3>
                <div class="color-options">
                    <div class="color-option" style="background-color: red" onclick="filterByColor('rouge')"></div>
                    <div class="color-option" style="background-color: blue" onclick="filterByColor('bleu')"></div>
                    <div class="color-option" style="background-color: yellow" onclick="filterByColor('jaune')"></div>
                    <div class="color-option" style="background-color: green" onclick="filterByColor('vert')"></div>
                    <div class="color-option" style="background-color: orange" onclick="filterByColor('orange')"></div>
                </div>
                <h3>Prix</h3>
                <div id="prix">
                    <input type="range" id="mon_range_prix" min="10" max="30" step="1" oninput="handlePriceChange(this.value)">
                    <div id="prix_range">
                        <p>0€</p>
                        <p id="price_to_modif">30€</p>
                    </div>
                </div>
                <h3>Recherche</h3>
                <div>
                    <input type="text" id="search-input" placeholder="Rechercher par titre" oninput="filtrerParRecherche()">
                </div>
                <h3>Motorisation</h3>
                <div id="motorisation">
                    <div onclick="filterByMotorization(true)">
                        <input type="radio" name="myOption">
                        <label for="avec">Avec</label><br>
                    </div>
                    <div onclick="filterByMotorization(false)">
                        <input type="radio" name="myOption">
                        <label for="sans">Sans</label><br>
                    </div>
                </div>
                <h3>Difficulté</h3>
                <div id="difficulte">
                    <div onclick="filterByDifficulty(1)">
                        <input type="radio" name="myOption">
                        <label for="Facile">Facile</label><br>
                    </div>
                    <div onclick="filterByDifficulty(2)">
                        <input type="radio" name="myOption">
                        <label for="Moyen">Moyen</label><br>
                    </div>
                    <div onclick="filterByDifficulty(3)">
                        <input type="radio" name="myOption">
                        <label for="Difficile">Difficile</label><br>
                    </div>
                </div>
                <div id="bouton" onclick="filterByReset()">
                    <button>Réinitialiser les filtres</button>
                </div>
            </div>
                </div>
                <div class="col-8">
                    <div class="produits-grid">
                    <?php
        /* Le contenu de la grille de produits */
        $file = fopen('produits.csv', 'r');

        while (($line = fgetcsv($file)) !== FALSE) {
          // $line is an array of the csv elements
          $name = $line[0];
          $image = $line[1];
          $motorization = $line[2];
          $price = $line[3];
          $difficulty = $line[4];
          $color = $line[5];
          $type = $line[6];
          $notice = $line[8]; // 9ème colonne (notice)

          echo "<div class='produit' data-color='$color' data-price='$price' data-motorization='$motorization' data-difficulty='$difficulty'>";
          echo "<img src='$image' alt='Image de l'article'>";
          echo "<a href='page_recette.php?name=" . urlencode($name) . "&price=" . urlencode($price) . "&notice=" . urlencode($notice) . "' style='text-decoration: none;'><h2>$name</h2></a>";
          echo "</div>";
        }

        fclose($file);

        function redirect($url) {
          header("Location: $url");
          exit();
        }
        ?>

                    </div>
                </div>
            </div>
        </div>

        <script>
            
            function filtrerParRecherche() {
            const champRecherche = document.getElementById("search-input").value.toLowerCase();
            const produits = document.querySelectorAll('.produit');

            produits.forEach((produit) => {
                const nomProduit = produit.querySelector("h2").textContent.toLowerCase();

                if (nomProduit.includes(champRecherche)) {
                    produit.style.display = 'block';
                } else {
                    produit.style.display = 'none';
                }
            });
        }
    // Au chargement de la page, cacher tous les produits
    window.onload = function() {
        const produits = document.querySelectorAll('.produit');
        produits.forEach((produit) => {
            produit.style.display = 'none';
        });
        // Réinitialiser les filtres au chargement de la page
        filterByReset();
    }

    function handlePriceChange(value) {
        filterByPrice(value);
        updatePrice('price_to_modif', value);
    }

    function filterByColor(color) {
        const produits = document.querySelectorAll('.produit');
        produits.forEach((produit) => {
            const produitColor = produit.getAttribute('data-color');
            if (produitColor === color) {
                produit.style.display = 'block';
            } else {
                produit.style.display = 'none';
            }
        });
    }

    function filterByPrice(price) {
        const produits = document.querySelectorAll('.produit');
        produits.forEach((produit) => {
            const produitPrice = parseFloat(produit.getAttribute('data-price'));
            if (produitPrice <= price) {
                produit.style.display = 'block';
            } else {
                produit.style.display = 'none';
            }
        });
    }

    function updatePrice(elementId, value) {
        const element = document.getElementById(elementId);
        element.textContent = value + "€";
    }

    function filterByMotorization(hasMotorization) {
        const produits = document.querySelectorAll('.produit');
        produits.forEach((produit) => {
            const produitMotorization = produit.getAttribute('data-motorization');
            if (produitMotorization === '1' && hasMotorization) {
                produit.style.display = 'block';
            } else if (produitMotorization === '0' && !hasMotorization) {
                produit.style.display = 'block';
            } else {
                produit.style.display = 'none';
            }
        });
    }

    function filterByDifficulty(difficulty) {
        const produits = document.querySelectorAll('.produit');
        produits.forEach((produit) => {
            const produitDifficulty = parseInt(produit.getAttribute('data-difficulty'));
            if (produitDifficulty === difficulty) {
                produit.style.display = 'block';
            } else {
                produit.style.display = 'none';
            }
        });
    }

    function filterByReset() {
        const produits = document.querySelectorAll('.produit');
        produits.forEach((produit) => {
            produit.style.display = 'block';
        });
    }
    function filterBySearch() {
            const searchInput = document.getElementById("search-input").value.toLowerCase();
            const produits = document.querySelectorAll('.produit');

            produits.forEach((produit) => {
                const productName = produit.querySelector("h2").textContent.toLowerCase();

                if (productName.includes(searchInput)) {
                    produit.style.display = 'block';
                } else {
                    produit.style.display = 'none';
                }
            });
        }
</script>



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
