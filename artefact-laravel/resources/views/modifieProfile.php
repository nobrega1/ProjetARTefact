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
        <link rel="stylesheet" href="../css/styleMP.css">



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
                        <label for="inputName">Nom *</label>
                        <input type="name" class="form-control" id="inputName" placeholder="Mon nom" required="">
                    </div>
                    <div class="form-group">
                        <label for="inputFirstname">Prénom *</label>
                        <input type="firstname" class="form-control" id="inputFirstname" placeholder="Mon prénom"
                            required="">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Adresse Email *</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Mon adresse email"
                            required="">
                    </div>
                    <div class="form-group">
                        <label for="inputPhonenumber">Numéro de téléphone</label>
                        <input type="phonenumber" class="form-control" id="inputPhonenumber"
                            placeholder="Mon numéro de téléphone">
                    </div>
                    <div class="form-group">
                        <label for="inputAdress">Adresse</label>
                        <input type="adress" class="form-control" id="inputAdress" placeholder="Mon adresse">
                    </div>
                    <div class="form-group">
                        <label for="inputRoadnumber">Numéro de rue</label>
                        <input type="roadnumber" class="form-control" id="inputRoadnumber" placeholder="Mon numéro de rue">
                    </div>
                    <div class="form-group">
                        <label for="inputNPA">NPA</label>
                        <input type="NPA" class="form-control" id="inputNPA" placeholder="Mon npa">
                    </div>
                    <div class="form-group">
                        <label for="inputCity">Ville</label>
                        <input type="city" class="form-control" id="inputCity" placeholder="Ma ville">
                    </div>
                    <div class="form-group">
                        <label for="inputCanton">Canton</label>
                        <input type="canton" class="form-control" id="inputCanton" placeholder="Mon canton">
                    </div>
                    <div class="form-group">
                        <label for="inputCountry">Pays</label>
                        <input type="country" class="form-control" id="inputCountry" placeholder="Mon pays">
                    </div>
                    <p>* Champs obligatoires</p>
                    <button type="submit" class="btn btn-default">Valider</button>
                </form>

            </div>

        </main>

    </body>

</html> 