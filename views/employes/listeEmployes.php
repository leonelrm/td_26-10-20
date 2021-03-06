<?php
session_start();
require_once("../../models/employes/employesModel.php");
$listeEmployes = employes_findAll();

include_once '../../pages/header.php';
?>

<div class="container">
    <header class="container">
        <h3 class="text-center">LISTE DES EMPLOYES</h3>
    </header>
    <br>
    <div class="container">
        <div class="float-right">
            <a href="employesAjouter.php"><button type="button" class="btn btn-primary">Ajouter</button></a>
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
            <?php foreach($listeEmployes as $employes) {?>
                <tr>
                    <td><?php echo $employes['id_employes'];?></td>
                    <td><?php echo $employes['prenom'];?></td>
                    <td><?php echo $employes['date_naissance'];?></td>
                    <td><?php echo $employes['function'];?></td>
                    <td><?php echo $employes['email'];?></td>
                    <td><?php echo $employes['salaire'];?></td>
                    <td>&nbsp;&nbsp;
                        <a href="../../controllers/employes/employesChercher.php?idEmployes=<?php echo $employes['idEmployes']; ?>&traitement=2"><button class="btn"><i style="color:darkblue;"class="fas fa-user-edit"></i>&nbsp;&nbsp</button></a>&nbsp;&nbsp;
                        <a href="../../controllers/employes/employesChercher.php?idEmployes=<?php echo $employes['idEmployes']; ?>&traitement=3"><button class="btn"><i style="color:darkred;" class="fas fa-user-times"></i>&nbsp;&nbsp</button></a>&nbsp;&nbsp;
                        <a href="../../controllers/employes/employesChercher.php?idEmployes=<?php echo $employes['idEmployes']; ?>&traitement=1"><button class="btn"><i style="color:yellowgreen;"class="fas fa-info"></i>&nbsp</button></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once '../../pages/footer.php';