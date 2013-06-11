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
			// Wolrd Fucking Map

				$sql3 = $conn->prepare("SELECT pays, SUM(victimes) AS 'Victimes' FROM `mechants` GROUP BY pays LIMIT 0 , 100");
				//$sql3 = $conn->prepare("SELECT COUNT(nom), pays FROM `mechants` group by pays");

			$sql  ->execute();
			$sql2 ->execute();
			$sql3 ->execute();

	  		// DATA type
	  		$row  = $sql ->fetch(PDO::FETCH_BOTH);
	  		$row2 = $sql2->fetch(PDO::FETCH_BOTH);
	  		$row3 = $sql3->fetchAll(PDO::FETCH_KEY_PAIR);

	  		$numItems = count($row3);
	  		$i = 0;
	  		$data = "var gdpData = {\n";
	  		foreach ($row3 as $key => $value) {
	  			switch ($key) {
				    case "Afrique du Sud":
				        $key = "ZA";
				        break;
				    case "Allemagne":
				        $key = "DE";
				        break;
				    case "Argentine":
				        $key = "AR";
				        break;
				    case "Australie":
				        $key = "AU";
				        break;
				    case "Autriche":
				        $key = "AT";
				        break;
				    case "Belgique":
				        $key = "BE";
				        break;
				    case "Canada":
				        $key = "CA";
				        break;
				    case "Chine":
				        $key = "CN";
				        break;
				    case "Colombie":
				        $key = "CO";
				        break;
				    case "Corée du Sud":
				        $key = "KR";
				        break;
				    case "Espagne":
				        $key = "ES";
				        break;
				    case "Etats Unis":
				        $key = "US";
				        break;
				    case "France":
				        $key = "FR";
				        break;
				    case "Ghana":
				        $key = "GH";
				        break;
				    case "Hongrie":
				        $key = "HU";
				        break;
				    case "Inde":
				        $key = "IN";
				        break;
				    case "Italie":
				        $key = "IT";
				        break;
				    case "Japon":
				        $key = "JP";
				        break;
				    case "Maroc":
				        $key = "MA";
				        break;
				    case "Royaume Uni":
				        $key = "GB";
				        break;
				    case "Russie":
				        $key = "RU";
				        break;
				    case "Suisse":
				        $key = "CH";
				        break;
				    case "Yemen":
				        $key = "YE";
				        break;
				}
	  			$data.= "\t'".$key."' : ".$value;
	  			if(++$i === $numItems) {
    				$data.= "\n";
				}else{
					$data.= ",\n";
				}
	  		}
	  		$data.= "};";
	  		
	  		file_put_contents ("./js/data.js", $data );

		  	$conn = null; // Déconnexion

		}
		catch(PDOException $e) {
			echo "Erreur: ".$e->getMessage();
		}

?>