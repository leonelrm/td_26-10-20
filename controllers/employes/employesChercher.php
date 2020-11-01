<?php
require_once("../../models/employes/employesModel.php");
session_start();

//recuperation de l'id de employer a chercher
$id= $_GET['idEmployes'];
$traitement = $_GET['traitement'];
$_SESSION['idEmployes']= $id;
//recuperation de type monument
$employes= employes_find($id);

//on passe $employes en variable de session
$_SESSION['employes'] = $employes;

if($traitement == 1){
    Header('Location: ../../views/monument/frmEmployesVoir.php');
} else{
    if($traitement == 2){
        Header('Location: ../../views/monument/frmEmployesModifier.php');
    }else{
        if($traitement == 3){
            Header('Location: ../../views/monument/frmEmployesSupprimer.php');
        }
    }
}