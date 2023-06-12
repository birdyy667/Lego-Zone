<!DOCTYPE html>
<html>
<head>
  <title>Lego Zone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
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
color: #DC143C;
text-decoration: none;
}
.profile-button {
    background: rgb(105,105,105);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #8B0000;
}

.profile-button:focus {
    background: #8B0000;
    box-shadow: none
}
#upper a:hover {
color: #DC143C;
text-decoration: none;
}
 #titre{
	margin-top:50px;
        margin-bottom:20px;
        font-size: 55px;
        background-color:#8B0000;
        color:white; 
        width:1280px;
        padding-left:300px;
        border-radius: 50px;


    }
    #Image{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        margin-left:100px;
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:100px;
        padding-left:20px;
        border-radius: 50px;
    }
    #Texte{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:150px;
        padding-left:30px;
        border-radius: 50px;
    }
    #Couleurs{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:130px;
        padding-left:30px;
        border-radius: 50px;
    }
    #Prix{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:90px;
        padding-left:30px;
        border-radius: 50px;
    }
    #Difficulté{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:130px;
        padding-left:25px;
        border-radius: 50px;
    }
    #PDF{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:100px;
        padding-left:30px;
        border-radius: 50px;
    }
    #Motorisation{
    	display: flex;
    	align-items: center;
        margin-bottom:20px;
        
        font-size: 16px;
        background-color:#6E0B14;
        color:white; 
        width:150px;
        padding-left:20px;
        border-radius: 50px;
    }
  .image-with-text {
    display: flex;
    align-items: center;
  }
  .image-with-text2 {
    display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  }

  .image-with-text img {
    margin-right: 10px;
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
                    .color-option.selected {
  border: 2px solid #000;
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


  <div class="container mt-4">
  

  

    <form id="blogForm" enctype="multipart/form-data" action="index.php" method="POST" onsubmit="refreshPage()">
    <div class="mb-3">
    <textarea class="form-control" id="titre" name="titre" rows="1" required>Entrer le nom de votre Recette</textarea>
    
</div>
    <div class="image-with-text">
  <img src="Logo-Lego-Zone.png" alt="Logo" width="300px">
  <div class="image-with-text2">
  <p>Vous pouvez entrer une image qui sera un exemple de votre LEGO construit en entier. Entrer de préférence une image en .jpg ou en .png.
    L'image est malheureusement obligatoire pour que l'on comprenne bien de quel LEGO vous parlez.</p>
  <div class="mb-3">
    <br>
    <p id="Image">Image :</p>
    <input class="form-control" type="file" id="image" name="image" required>
    </div>
  </div>
</div>
<div class="mb-3">
  <p id="Motorisation">Motorisation :</p>
  <div class="input-group">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="motorisation" id="motorisationEssence" value="0" required>
      <label class="form-check-label" for="motorisation0">Avec</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="motorisation" id="motorisationDiesel" value="1" required>
      <label class="form-check-label" for="motorisation1">Sans</label>
    </div>
    
  </div>
</div>

<div class="mb-3">
  <p id="Prix">Prix :</p>
 <textarea class="form-control" id="texte" name="Prix" rows="3" required></textarea>
</div>

<div class="mb-3">
  <p id="Difficulté">Difficulté :</p>
  <div class="input-group">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="difficulte" id="difficulteFacile" value="1" required>
      <label class="form-check-label" for="difficulte1">Facile</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="difficulte" id="difficulteMoyenne" value="2" required>
      <label class="form-check-label" for="difficulte2">Moyenne</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="difficulte" id="difficulteDifficile" value="3" required>
      <label class="form-check-label" for="difficulte3">Difficile</label>
    </div>
  </div>
</div>

<div class="mb-3">
  <p id="Couleurs">Couleurs :</p>
 <div class="color-options">
  <div class="color-option" style="background-color: red" onclick="filterByColor('rouge', this)" name="couleurs" value="red"></div>
  <div class="color-option" style="background-color: blue" onclick="filterByColor('bleu', this)" name="couleurs" value="blue"></div>
  <div class="color-option" style="background-color: yellow" onclick="filterByColor('jaune', this)" name="couleurs" value="yellow"></div>
  <div class="color-option" style="background-color: green" onclick="filterByColor('vert', this)" name="couleurs" value="green"></div>
  <div class="color-option" style="background-color: orange" onclick="filterByColor('orange', this)" name="couleurs" value="orange"></div>
</div>

</div>
<div class="mb-3">
  <p id="PDF">PDF :</p>
  <input type="file" class="form-control" name="pdf" accept=".pdf" >
</div>

	<div class="mb-3">
  <p id="Texte">Description :</p>
  <textarea class="form-control" id="texte" name="texte" rows="3" required> </textarea>
</div>
<div class="mb-3">
  <p id="Motorisation">Commentaires :</p>
  <div class="input-group">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="commentaires" id="motorisationEssence" value="0" required>
      <label class="form-check-label" for="commentaires0">Avec</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="commentaires" id="motorisationDiesel" value="1" required>
      <label class="form-check-label" for="commentaires1">Sans</label>
    </div>
    
  </div>
</div>











      <button type="submit" class="btn btn-primary profile-button" name="enregistrer">Enregistrer</button>
    </form>
    
  </div>
  <div id="page-content" class="flex-grow-1">
  <!-- Ajoutez le contenu principal de la page ici -->
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  function refreshPage() {
    if (document.querySelector('[name="enregistrer"]').clicked) {
      history.go(0);
    }
  }
  function filterByColor(color, element) {
  // Supprimer la classe "selected" de toutes les options
  var colorOptions = document.getElementsByClassName('color-option');
  for (var i = 0; i < colorOptions.length; i++) {
    colorOptions[i].classList.remove('selected');
  }

  // Ajouter la classe "selected" à l'option cliquée
  element.classList.add('selected');

  // Autres actions à effectuer en fonction de la couleur sélectionnée...
  // Par exemple, vous pouvez mettre à jour une variable ou appeler une fonction avec la couleur sélectionnée.
}

</script>

  
</body>
</html>

