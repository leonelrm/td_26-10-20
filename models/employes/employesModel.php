<?php

	require_once("../../models/connexion.php");
	
	function employes_Find( $id ) {
	
		$vId = $id;
		
		// preparation de la requête sql 
		$reqSql = "select * from employes where id_employes = :vId";

		//initialisation de $monumenttrouve
		$employestrouve = array();

		try{
			//établit la connexion à la bdd
			$cnx = connect_db();
			
			//préparation à l'exécution de la requete
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vId', $vId, PDO::PARAM_INT);
			
			//exécution
			$stmt->execute();
			$employestrouve = $stmt->fetch();
			
			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
			$_SESSION['message_erreur'] = $message_erreur;
			Header("Location: ../../controllers/employes/employesListerAccept.php" );
		}
		
		//fermer la connexion
		$cnx = null;	
		return $employestrouve;
	}

	function employes_Insert( $prenom, $dateNaissance, $function, $email, $salaire ) {
		
		// sécurisation des données

		$vPrenom = filter_var($prenom, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$vDateNaissance = $dateNaissance;
		$vFunction = $function;
		$vEmail = filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$vSalaire = filter_var($salaire, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$vIdEmployes = '';

		// prepare requête sql 
		$reqSql = "insert into employes values (:vIdEmployes, :vPrenom," .
					" :vDateNaissance, :vFunction, :vEmail, :vSalaire)";

		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vIdEmployes', $vIdEmployes, PDO::PARAM_INT);
			$stmt->bindParam(':vPrenom', $vPrenom, PDO::PARAM_STR);
			$stmt->bindParam(':vDateNaissance', $vDateNaissance, PDO::PARAM_STR);
			$stmt->bindParam(':vFunction', $vFunction, PDO::PARAM_STR);
			$stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
			$stmt->bindParam(':vSalaire', $vSalaire, PDO::PARAM_INT);

			
			
			//exécution
			$stmt->execute();

			//fermeture du curseur
			$stmt->closeCursor();
			
		} catch(PDOException $error){
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
		
		//fermer la connexion
		$cnx = null;			
	}
	
	function employes_Update( $prenom, $dateNaissance, $function, $email, $salaire ) {
		
		$vIdEmployes = $id;
	
		// sécurisation des données
        $vPrenom = filter_var($prenom, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $vDateNaissance = filter_var($dateNaissance, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $vFunction = filter_var($function, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $vEmail = filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $vSalaire = filter_var($salaire, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $vIdEmployes = '';

		// prepare requête sql 
		$reqSql = "update employes set prenom = :vPrenom, " .
				  "Arrondissement_Monument = :vDateNaissance, " .
				  "Adresse_Monument = :vFunction," .
				  "Site_Web_Monument = :vEmail, " .
				  "date_creation = :vSalaire, " .
				  " where id_employes = :vIdEmployes";

		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
            $stmt->bindParam(':vIdEmployes', $vIdEmployes, PDO::PARAM_INT);
            $stmt->bindParam(':vPrenom', $vPrenom, PDO::PARAM_STR);
            $stmt->bindParam(':vDateNaissance', $vDateNaissance, PDO::PARAM_INT);
            $stmt->bindParam(':vFunction', $vFunction, PDO::PARAM_STR);
            $stmt->bindParam(':vEmail', $vEmail, PDO::PARAM_STR);
            $stmt->bindParam(':vSalaire', $vSalaire, PDO::PARAM_INT);
			
			//exécution
			$stmt->execute();

			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
		
		//fermer la connexion
		$cnx = null;		
	}
	
	function monument_Delete( $id ) {

		$vIdEmployes = $id;

		// prepare requête sql 
		$reqSql = "delete from monument " .
				  " where id_employes = :vIdEmployes";

		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
							
			// bind parameters
			$stmt->bindParam(':vIdEmployes', $vIdEmployes, PDO::PARAM_INT);
			
			//exécution
			$stmt->execute();

			//fermeture du curseur
			$stmt->closeCursor();

		} catch(PDOException $error){
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
		
		//fermer la connexion
		$cnx = null;			
	}
	
	function employes_findAll(){

		//preparation de la requete d'extraction de tous les enregistrements
		$reqSql = "select * from employes";

		//connexion  la base de données
		$cnx = connect_db();
	
		$listeEmployes = array();
		
		try{
			$cnx = connect_db();
			$stmt=$cnx->prepare($reqSql);
		
			//exécution
			$stmt->execute();
		
			$listeEmployes = $stmt->fetchAll();

			//fermeture du curseur
			$stmt->closeCursor();
		
		} catch(PDOException $error){
			//$message_erreur =  "Erreur SQL ! : " . $error->getCode().' '.$error->getMessage() . "<br/>";
			//$_SESSION['message_erreur'] = $message_erreur;
			//Header("Location: PageErreur.php" );
			$_SESSION['msg_erreur'] = $error->getMessage();
		}
	
		//fermer la connexion
		$cnx = null;	
		return $listeEmployes;

	}
?>
