
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bike Test Gryon</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/test.css">

  <link rel="stylesheet" href="css/mobile.css">
  <link rel="icon-menu" type="image/png" href="../src/icomoonSVG/PNG/menu.png">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/nav.js"></script>

  <link rel="stylesheet" href="css/styleIndex.css">

</head>
<body>
<header>
    <img class="btlogo" src="img/BikeTestLogo.svg">
    <div class="nav-modal">
      <div class="blob"></div>
      <nav class="nav justify-content-center">
        <ul>
          <li><a href="#allProducts">Catalogue</a> </li>
          <li><a href="#allTests">Historique des tests</a> </li>
          <li><a href="#profile">Mon compte</a> </li>
          <li><a href="{{ url('logout') }}">logout</a></li>
          <li><p>{{ session('id') }}</p></li>
      </nav>
    </div>
    <div class="head">
      <div class="tile burger">
        <div class="meat">
          <div class="line one"></div>
          <div class="line two"></div>
          <div class="line three"></div>
          </div>
        </div>
      </div>
  </header>

  <main>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-lg-12">

          <!--PAGE CATALOGUE-->

          <div class="page" name="allProducts">
            <h1 class="titrePage">Catalogue</h1>
             <!--Barre de recherche du catalogue-->
             <div class="filterDiv row">
<form class="form-inline" >
                <input  id="productSearch" class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                </form> 
                <div class="btn-group filter-options float-right">
            <button class="btn btn--primary" data-group="Mtb">Mtb</button>
            <button class="btn btn--primary active" data-group="Emtb">Emtb</button>
            <button class="btn btn--primary" data-group="Road">Road</button>
            <button class="btn btn--primary" data-group="Eroad">Eroad</button>
            <button class="btn btn--primary" data-group="Gravel">Gravel</button>

          </div>
         
         </div>
 
            
            <div id="products-list">
            </div>
            
        
            </div>

<!--PAGE HISTORIQUE DES TESTS-->
<div class="page" name="allTests">
  <h1 class="titrePage">Historique des tests</h1>

            <!--Barre de recherche de l'historique des tests-->
            <div id="tests-list" class="row"></div>
                <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                </form>
            </div>
            <div class="listeTest">
             

        <!--PAGE MON COMPTE-->
        <div class="page" name="profile">
            <h1 class="titrePage">Mon compte</h1>
            <div class="infocompte">
              <!--ici, les infos du compte-->
            </div>
            <div class="btn-compte">
              <form action="html/modifieProfile.html">
                <button type="submit" class="btn btn-default btn-lg" id="back">
                  Modifier les information du compte
                </button>
              </form>
              <form method="Get" action="{{ url('changePW') }}">
                <button type="submit" class="btn btn-default btn-lg" id="back">
                  Changer le mot de passe
                </button>
              </form>
            </div>
            </div>
        </div>
      </div>

        </main>
</body>
<script src="bundle.js"></script>

</html>