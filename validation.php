<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

  <?php 
  	$nom= $_POST['nom'];
  	$prenom= $_POST['prenom'];
  	$surnom= $_POST['surnom'];
    $pays = $_POST['pays'];
    $victimes = $_POST['victimes'];
  	$naissance= $_POST['naissance'];
  	$mort= $_POST['mort'];
  	$description= $_POST['description']; 

  	if(!get_magic_quotes_gpc()){
  		$nom = addslashes($nom);
  		$prenom = addslashes($prenom);
  		$surnom = addslashes($surnom);
      $pays = addslashes($pays);
      $victimes = addslashes($victimes);
  		$naissance = addslashes($naissance);
  		$mort = addslashes($mort);
  		$description = addslashes($description);
  	}

  	mysql_connect('db472787372.db.1and1.com', 'dbo472787372', 'mechants007') or die ('ERREUR '.mysql_error());
  	mysql_select_db('db472787372');


  	$req = 'INSERT INTO mechants (nom, prenom, surnom, pays, victimes, naissance, mort, description) VALUES ("'.$nom.'", "'.$prenom.'", "'.$surnom.'", "'.$pays.'", "'.$victimes.'", "'.$naissance.'", "'.$mort.'", "'.$description.'")';
    if(mysql_query($req)){
    	echo "bien ajouté";
    }else {
    	echo "<br/>problème à l'ajout";
    }


  ?>

</body>
</html>