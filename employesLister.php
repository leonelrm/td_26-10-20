<?php
    require_once("models/connexion.php");

    function employes_findAll() {
        $reqsql = "Select * from employes";
        //connexion a la base de donnes
        $cnx = connect_db();

        $ListeEmployes = array();
        
        try{
            $cnx = connect_db();
            $stmt=$cnx->prepare($reqsql);
                            
            //exécution
            $cnx->query($reqsql);
            $stmt->execute();

            $ListeEmployes = $stmt->fetchAll();

            //fermeture du curseur
            $stmt->closeCursor();

            //echo "Création réussie";
            
        } catch(PDOException $error){
            $message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
            $_SESSION['message_erreur'] = $message_erreur;
            Header("Location: page_erreur.php" );
        }
        //fermer la connexion
        $cnx = null;
        return $ListeEmployes;
    }    
    // print_r($ListeTypeMonument);
    // echo "<br>";

    // foreach($ListeTypeMonument as $rows){
    //     print_r("$rows");
    // }
?>