<?php
	
	/**********************************
		Connexion BDD
	**********************************/

		// ******  Configuration - Debut ******
			$hostdb = 'db472787372.db.1and1.com';
			$namedb = 'db472787372';
			$userdb = 'dbo472787372';
			$passdb = 'mechants007';
		// ******  Configuration - Fin ******

	try {

			// Connexion
			$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
			$conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

			// Total victimes
			$sql  = $conn->prepare("SELECT SUM(victimes) FROM `mechants`");
			// Total serial
			$sql2 = $conn->prepare("SELECT COUNT(nom) FROM `mechants`");

			$sql  ->execute();
			$sql2 ->execute();

	  		// DATA type
	  		$row  = $sql ->fetch(PDO::FETCH_BOTH);
	  		$row2 = $sql2->fetch(PDO::FETCH_BOTH);

		  	$conn = null; // Déconnexion

		}
		catch(PDOException $e) {
			echo "Erreur: ".$e->getMessage();
		}

?>