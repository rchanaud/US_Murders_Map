<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

  <!-- Le reste du contenu -->
  <h1>Remplissage de la base de données des vilains dans le monde</h1>
  <form action="validation.php" method="post" >
  	<label>Nom :</label><input type="text" name="nom"><br/>
  	<label>Prénom :</label><input type="text" name="prenom"><br/>
  	<label>Surnom :</label><input type="text" name="surnom"><br/>
    <label>Pays :</label><input type="text" name="pays"><br/>
    <label>Nombre de victime :</label><input type="text" name="victimes"><br/>
  	<label>Date de naissance :</label><input type="text" name="naissance"><br/>
  	<label>Date de mort :</label><input type="text" name="mort"><br/>
  	<textarea name="description">Description du méchant</textarea><br/>
  	<input type="submit" value="Terminez">
  </form> 
</body>
</html>