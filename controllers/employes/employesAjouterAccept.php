<?php
require_once("../../models/employes/employesModel.php");
session_start();

function convert(){
    $ext = strstr($_FILES['photo']['name'],".");
    $png = ".png";
    if($ext !== "png"){
        $ext = $png;
    }return $ext;
}

$ext_png = convert();

$destination = "../../images/monument/monument_".$_SESSION['idMonument'].$ext_png;
if ( isset($_FILES['photo']['tmp_name']) ) {
    $retour = copy($_FILES['photo']['tmp_name'], $destination);
    if($retour) {
        echo '<p>La photo a bien été envoyée.</p>';
        echo '<img src="' . $_FILES['photo']['name'] . '">';
    }
}

//recuperation donnes postees (formulaire)
$prenom = trim(ucfirst($_POST['prenom']));
$dateNaissance = $_POST['dateNaissance'];
$function = $_POST['function'];
$email = trim($_POST['email']);
$salaire = trim($_POST['salaire']);
$idEmployes = $_POST['idEmployes'];

// on remets les donnes postes en variable de session au cas ou il y a un erreur de saisie
//retour au formulaire
$_SESSION['prenom'] = $prenom;
$_SESSION['dateNaissance'] = $dateNaissance;
$_SESSION['function'] = $function;
$_SESSION['email'] = $email;
$_SESSION['salaire'] = $salaire;


employes_Insert( $prenom, $dateNaissance, $function, $email, $salaire );


Header("Location: ../../views/employes/employesAjouter.php");

?>