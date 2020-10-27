<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand/logo -->
    <img id="img-logo" src="images/logo-dawn.png" alt="logo-dawn">
    <a class="navbar-brand" href="#"> DAWN-NOISIEL</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Employes</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <form class="container-sm">
        <div class="form-row">

        <h1>Profile</h1>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for=""> </label>
            </div>
            <div class="form-group col-md-4">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom">
            </div>
            <div class="form-group col-md-4">
                <label for="dateNaissance">Date</label>
                <input type="date" class="form-control" id="dateNaissance">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="photo"> </label>
            <input type="file" class="form-control" id="photo" placeholder="Choisissez votre photo">
            </div>
            <div class="form-group col-md-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group col-md-3">
                <label for="function">Function</label>
                <input type="text" class="form-control" id="function">
            </div>
            <div class="form-group col-md-2">
                <label for="salaire">Salaire</label>
                <input type="text" class="form-control" id="salaire">
            </div>
        </div>

    <button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>
    <button type="submit" class="btn btn-danger" id="reset">Reset</button>
</form>
</div>


<footer class="container-fluid  bg-dark ">
    <div class="justify-content-center">
        <a class="icon" href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
        <a class="icon" href="https://www.twiter.com"><i class="fab fa-twitter-square"></i></a>
        <a class="icon" href="https://www.instagram.com"><i class="fab fa-instagram-square"></i></a>
        <a class="icon" href="https://www.pinterest.com"><i class="fab fa-pinterest-square"></i></a>
    </div>
    </nav>



</footer>

<!--fichiers js-->
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>

