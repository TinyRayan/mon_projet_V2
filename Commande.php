
<?php require_once('header/header.php'); ?>    

<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Asset/css/accueil_css.css" rel="stylesheet">

</head>

<body> -->


    <!-- NAVBAR -------------------------------->

   <!--  <nav class="navbar navbar-expand-lg mx-2 mt-2 rounded-bottom-5 sticky-lg-top">

      <div class="container-fluid row">
  
        <div class="col-md-3 img-fluid d-flex justify-content-start">
          <img src="Asset/img/IMAGES/images_the_district/the_district_brand/logo_transparent.png" alt="" width="30%">
        </div>
  
        <div class="position-absolute d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
  
  
        <div class="collapse navbar-collapse col-8 col-lg-10 mt-4" id="navbarNav">
          <div class="col d-flex justify-content-start align-self-center  ">
  
            <div class=" col-11 col-md-10 d-flex justify-content-between  ">
  
              <a id="color_navlink" href="index.html" class="me-lg-5 me-4 fw-bold">Accueil</a>
              <a id="color_navlink" href="catégorie.html" class="me-lg-5 me-4 fw-bold">Catégorie</a>
              <a id="color_navlink" href="plats.html" class="me-lg-5 me-4 fw-bold">Plats</a>
              <a id="color_navlink" href="Contact.html" class="me-lg-5 me-4 fw-bold">Contact</a>
            </div>
          </div>
        </div>
  
  
      </div>
  
    </nav> -->

    <!-- NAVBAR --------------------------------->

    <header class="d-flex justify-content-center p-0 ">

        <!-- BACKGROUND ------------------------->

        <div class="container-fluid p-0 mx-2 row">
            <div class="col-12 p-0 mt-5">
                <div id="blackshadow" class="img-fluid object-fit-cover d-flex justify-content-center ">
                    <img src="Asset/img/SIZEDBANNEr.png" class=" w-100 rounded-bottom-5 rounded-top-5 " height="">
                </div>
            </div>

            <!-- BACKGROUND----------------------------->

    </header>

    <main>

      <div class="container-fluid mt-5">
      
        <div class=" border border-primary m-2 mt-3 ">

            <div class="container-fluid row d-flex justify-content-center m-0">
      
              <div id="cardplat" class="card col-4 flex-row ms-lg-5 mt-4" style="width: 40rem;">
      
                <img src="Asset/img/ASIAN01.jpg" class=" rounded-3 mt-3 border border-muted" alt=""
                  style="width: 10rem;">
      
                <div class="card-body">
      
                  <h5 class="card-title fs-3 mt-md-4 mt-1">VEGGIE Courgettes farcies</h5>
                  <p class="card-text fst-italic mb-3">"Voici une recette équilibrée à base de courgettes, quinoa et champignons,
                    100% vegan et sans gluten!"</p>
                  <div id="OMBRE" class="d-flex justify-content-center">
                    <PRIX class="text-bg-danger rounded p-2 mt-3">PRIX : 17.50E</PRIX>
                  </div>
                </div>
      
              </div>
      
      </div>
      
      <div class="container-fluid mt-5">
        <form class="row g-3 d-flex justify-content-center "method="post" id="form">
          <div class="col-lg-5 col-md-8 col-10">
            <label for="name" class="form-label fs-5 fw-bold">Nom</label>
            <input  type="text" class="form-control" id="nom_form" name="name" placeholder="Votre nom">
          </div>

          <div class="col-lg-5 col-md-8 col-10">
            <label for="firstname" class="form-label fs-5 fw-bold">Prénom</label>
            <input  type="text" class="form-control" id="prenom_form" name="prenom" placeholder="Votre prénom">
          </div>

          <div class="col-lg-5 col-md-8 col-10">
            <label for="email" class="form-label fs-5 fw-bold">Email</label>
            <input  type="email" class="form-control" id="email_form" name="email" placeholder="exemple@gmail.com">
          </div>

         <div class="col-lg-5 col-md-8 col-10">
            <label for="phone" class="form-label fs-5 fw-bold">Téléphone</label>
            <input method="post" type="text" class="form-control" id="phone_form" name="phone" placeholder="Votre numéro de téléphone!">
          </div>
        </form>
      </div>
 
      <div class="container-fluid mt-5 d-flex justify-content-center ">
        <div class="col-10 col-md-8 col-lg-10">
          <label for="address" class="form-label fs-5 fw-bold">Entrez votre addresse !</label>
          <textarea class="form-control" id="address_form" cols="30" rows="5" name="address"></textarea>
        </div>
      </div>

      <div class="container-fluid mt-5">
        <div class="col-12 col-md-12 col-lg-12 text-center">
          <button id="bouton" type="submit" class="btn btn-lg w-auto">Confirmer</button>
        </div>
      </div>
          
    </main>

    
    
    

    <?php require_once('footer/footer.php'); ?>

<!--     <footer>

        <div class="container-fluid p-0">
          <div class=" border border-danger m-2 mt-5 d-flex justify-content-center ">
    
            <div class="col-2 col-md-2 d-flex justify-content-center ">
              <a class=" d-flex align-content-center" href="#">
                <img id="sociallogo" class="mx-3" src="Asset/img/facebook.svg" width="50rem">
              </a>
            </div>
    
            <div class="col-2 col-md-2 d-flex justify-content-center">
              <a class=" d-flex align-content-center" href="#">
                <img id="sociallogo" class="mx-3" src="Asset/img/twitter-x.svg" width="50rem">
              </a>
            </div>
    
            <div class="col-md-2 d-none d-md-block">
              <a class=" d-flex align-content-center justify-content-center" href="#">
                <img id="sociallogo" class="mx-3"
                  src="Asset/img/IMAGES/images_the_district/the_district_brand/logo_transparent.png" alt="" width="150rem">
              </a>
            </div>
    
            <div class="col-2 col-md-2 d-flex justify-content-center">
              <a class=" d-flex align-content-center" href="#">
                <img id="sociallogo" class="mx-3" src="Asset/img/linkedin.svg" width="50rem">
              </a>
            </div>
    
            <div class="col-2 col-md-2 d-flex justify-content-center">
              <a class=" d-flex align-content-center" href="#">
                <img id="sociallogo" class="mx-3" src="Asset/img/instagram.svg" width="50rem">
              </a>
            </div>
    
          </div>
        </div>
    
    
      </footer>






    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="Asset/javascript/json.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>
    <script src="Asset/javascript/jquery.js"></script>
</body>

</html> -->