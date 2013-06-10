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


	/**********************************
		Survol d'une région
	**********************************/

		if( isset($_POST['action']) && $_POST['action'] == 'survol' ){

			try {

				// Connexion
				$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
				$conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

				//Récupération du pays et du mode
				$pays = $_POST['pays'];
				$mode = $_POST['mode'];

				//Requète SQL
				if($mode == 'victime'){

					// Nombre de victime | % Pays / %Global

					// Requète
					$sql  = $conn->prepare("SELECT SUM(victimes) FROM `mechants` WHERE pays=:param1");
					$sql2 = $conn->prepare("SELECT SUM(victimes) FROM `mechants`");

					$sql  ->bindParam(':param1', $pays, PDO::PARAM_STR);

					$sql  ->execute();
					$sql2 ->execute();

				}elseif($mode == 'serialkiller'){

					// Nombre de serialkillers | % Pays / %Global

					// Requète
					$sql  = $conn->prepare("SELECT COUNT(nom) FROM `mechants` WHERE pays=:param1");
					$sql2 = $conn->prepare("SELECT COUNT(nom) FROM `mechants`");

					$sql  ->bindParam(':param1', $pays, PDO::PARAM_STR);

					$sql  ->execute();
					$sql2 ->execute();

				}

				// Succès
			  	if($result !== false) {

			  		// DATA type
			  		$row  = $sql ->fetch(PDO::FETCH_BOTH);
			  		$row2 = $sql2->fetch(PDO::FETCH_BOTH);

			  		//Traitement
					$nbr  = $row[0];
					$nbr2 = $row2[0];

					$pourcent = (100*$nbr)/$nbr2;
					$pourcent = round($pourcent, 1);

					//JSONage
		    		$data = array(
		    					'Pays'    => $pays,
		    					'Nbr'     => $nbr,
		    					'Pourcent'=> $pourcent
		    				);
		    		
					$data = json_encode($data);

					//Sortie
					echo $data;
			  	}

			  $conn = null; // Déconnexion
			}
			catch(PDOException $e) {
			  echo "Erreur: ".$e->getMessage();
			}

		}

	/**********************************
		Clique sur un pays
	**********************************/

	if( isset($_POST['action']) && $_POST['action'] == 'clique' ){

		try {

			// Connexion
			$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
			$conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

			//Récupération du pays et du mode
			$pays = $_POST['pays'];

			$pays ='Australie';

			//Requète SQL
			// Top 5

			// Requète
			$sql  = $conn->prepare("SELECT nom, prenom, surnom, victimes FROM `mechants` WHERE pays=:param1 ORDER BY victimes DESC LIMIT 0, 5");

			$sql  ->bindParam(':param1', $pays, PDO::PARAM_STR);
			$sql  ->execute();

			// Succès
		  	if($result !== false) {

		  		// DATA type
		  		$row  = $sql ->fetch(PDO::FETCH_BOTH);

		  		//Traitement
				$top5  = $row;

				// for ($i=0; $i < count($top5); $i++) { 
				// 	$top5[$i]
				// }

				var_dump($top5['nom'][0]);

				//JSONage
	    		$data = array(
	    					'Pays'    => $pays,
	    					'Top5'     => $top5,
	    				);
	    		
				$data = json_encode($data);

				//Sortie
				echo $data;
		  	}

		  $conn = null; // Déconnexion
		}
		catch(PDOException $e) {
		  echo "Erreur: ".$e->getMessage();
		}

	}

	/**********************************
		Clique sur un tueur
	**********************************/

?>