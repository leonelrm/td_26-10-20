<?php
	$mdp = "admin";
	echo password_hash($mdp, PASSWORD_DEFAULT);
?>