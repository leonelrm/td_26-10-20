<?php
require_once("../../models/employes/employesModel.php");
session_start();

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