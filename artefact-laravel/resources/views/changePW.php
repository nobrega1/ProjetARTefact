<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bike Test Gryon</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="../css/mobile.css">
        <link rel="icon-menu" type="image/png" href="../src/icomoonSVG/PNG/menu.png">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/styleChangePW.css">



    </head>
    <body>
        <header>
            <div class="row">
                <div class="col-sm-4">
                    <div class="d-flex justify-content-center">
                        <form action="../index.html#profile">
                        <button type="submit" class="btn btn-default btn-lg">Annuler</button>
                    </form>
                    </div>
                </div>
                <div class="col-sm-4">
                <img  class="btlogo" src="../img/BikeTestLogo.svg">
                </div>
            </div>

          </header>
        <main>
            <!--Formulaire modification-->
            <div id="profile-list" class="row"></div>
                <div class="container">
                    <legend>Modifier les informations du compte</legend>

                    <form>
                        <div class="form-group">
                            <label for="inputName">Mot de passe actuelle *</label>
                            <input type="name" class="form-control" id="inputName" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputFirstname">Nouveau mot de passe *</label>
                            <input type="firstname" class="form-control" id="inputFirstname" placeholder=""
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Confirmer le nouveau mot de passe *</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder=""
                                required="">
                        </div>

                        <p>* Champs obligatoires</p>
                        <button type="submit" class="btn btn-default">Valider</button>
                    </form>
                </div>
            </div>
        </main>

    </body>

</html> 