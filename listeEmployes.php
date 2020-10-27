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
    <?php
    require_once("employesLister.php");
    $listeEmployes = employes_findAll();
    ?>
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
    <header class="container">
        <h3 class="text-center">LISTE DES EMPLOYES</h3>
    </header>
    <br>
    <div class="container">
        <div class="float-right">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </div>
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>ID</th>
                    <th>Prenom Employe</th>
                    <th>Date de Naissance</th>
                    <th>Function</th>
                    <th>Email</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="bg-teal">
            <?php foreach($listeEmployes as $ligne) {?>
                <tr>
                    <td><?php echo $ligne['id_employes'];?></td>
                    <td><?php echo $ligne['prenom'];?></td>
                    <td><?php echo $ligne['date_naissance'];?></td>
                    <td><?php echo $ligne['function'];?></td>
                    <td><?php echo $ligne['email'];?></td>
                    <td><?php echo $ligne['salaire'];?></td>
                    <td>&nbsp;&nbsp;
                        <a href="../../controllers/monument/MonumentChercher.php?idEmployes=<?php echo $employes['id_employes']; ?>&traitement=2"><button class="btn"><i style="color:darkblue;"class="fas fa-user-edit"></i>&nbsp;&nbsp</button></a>&nbsp;&nbsp;
                        <a href="../../controllers/monument/MonumentChercher.php?idEmployes=<?php echo $employes['id_employes']; ?>&traitement=3"><button class="btn"><i style="color:darkred;" class="fas fa-user-times"></i>&nbsp;&nbsp</button></a>&nbsp;&nbsp;
                        <a href="../../controllers/monument/MonumentChercher.php?idEmployes=<?php echo $employes['id_employes']; ?>&traitement=1"><button class="btn"><i style="color:yellowgreen;"class="fas fa-info"></i>&nbsp</button></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<footer class="container-fluid  bg-dark ">
    <div class="justify-content-center">
        <a class="icon" href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
        <a class="icon" href="https://www.twiter.com"><i class="fab fa-twitter-square"></i></a>
        <a class="icon" href="https://www.instagram.com"><i class="fab fa-instagram-square"></i></a>
        <a class="icon" href="https://www.pinterest.com"><i class="fab fa-pinterest-square"></i></a>
    </div>




</footer>

<!--fichiers js-->
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>
