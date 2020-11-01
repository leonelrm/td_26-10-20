<?php
    require_once("../../models/employes/employesModel.php");
    session_start();

    $listeEmployes = employes_findAll();

    include_once '../../pages/header.php';
?>


    <div class="container text-black-70" style="text-align: center; margin: 10px auto">
		<h1>GESTION EMPLOYE</h1>
	</div>
	<br>

    <div class="container">
        <form class="container-sm" action="../../controllers/employes/employesAjouterAccept.php" method="post">
            <div class="form-row" id="profile" >
                <h1 style="padding-left: 13rem  " >Profile</h1>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4" style="text-align: center">
                    <label for="" ><i class="fas fa-portrait" style=" font-size: 10rem; color: lightgray"></i> </label>
                </div>
                <div class="form-group col-md-4">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?php $prenom; ?>" autofocus>
                </div>
                <div class="form-group col-md-4">
                    <label for="dateNaissance">Date</label>
                    <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" value="<?php $dateNaissance; ?>" autofocus>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="photo"> </label>
                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Choisissez votre photo">
                </div>
                <div class="form-group col-md-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php  $email; ?>" autofocus>
                </div>
                <div class="form-group col-md-3">
                    <label for="function">Function</label>
                    <select class="form-control" id="function" name="function">
                        <option value="0"></option>
                       <?php
                        foreach ( $listeEmployes as $ligne ){
                        ?>
                        <option><?php echo $ligne['function']; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="salaire">Salaire</label>
                    <input type="number" class="form-control" id="salaire" name="salaire" value="<?php $salaire; ?>" autofocus>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>
            <button type="reset" class="btn btn-danger" id="reset" style="float:right ">Reset</button>
        </form>
    </div>
<?php
include_once '../../pages/footer.php';
