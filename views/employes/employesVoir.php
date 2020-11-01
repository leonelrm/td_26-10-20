
<?php
session_start();
$idEmployes = $_GET['idEmployes'];




include_once '../../pages/header.php';
?>


    <div class="container text-black-70" style="text-align: center; margin: 10px auto">
        <h1>DETAILS EMPLOYE</h1>
    </div>
    <br>

    <div class="container" id="details" style="display: flex;">
        <div class="container" >
            <div class="row-cols-md-4" style="text-align: right">
                <label for="" ><i class="fas fa-portrait" style=" font-size: 10rem; color: lightgray"></i> </label>
            </div>
        </div>
        <div class="container">
            <div class=" col-md-4">
                <label for="prenom"></label>
                <input type="text" class="" id="prenom" name="prenom" value="<?php echo $idEmployes['prenom']; ?>" disabled>
            </div>
            <div class=" col-md-4">
                <label for="function"></label>
                <input type="text"  id="email" name="function" value="<?php  echo $idEmployes['function']; ?>" disabled>
            </div>
            <div class="col-md-4">
                <label for="email"></label>
                <input type="text" class="" id="email" name="email" value="<?php  echo $idEmployes['email']; ?>" disabled>
            </div>
        </div>
    </div>
<?php
include_once '../../pages/footer.php';
