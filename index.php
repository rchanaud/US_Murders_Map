<?php require("./server/init.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    
    <title>Les serial killers dans le monde</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery-jvectormap-1.1.1.css" />
    <!-- /CSS -->

</head>

<body>

  <!-- HEADER -->
  <header>
      <div id="logo"></div>
      <h1>SERIAL KILLER VISUALIZER</h1>
  </header>
  <!-- /HEADER -->

      <!-- INFOS AREA -->
      <div id="info-area"></div>
      <!-- /INFOS AREA -->

      <!-- STATS GLOBALES -->
      <section>
          <div></div>
          <span id="totalSerial">TOTAL SERIAL KILLERS : <?php echo $row2[0]; ?></span>
          <span id="totalVictims">VICTIMES TOTAL : <?php echo $row[0]; ?></span>
      </section>
      <!-- STATS GLOBALES -->
      
      <!-- ELEMENT -->
      <div id="ecouteurs"></div>
      <div id="planche"></div>
      <div id="cafegrandmere"></div>
      <!-- /ELEMENT -->

      <!-- SWITCH -->
      <div class="radioBtns">
          <span class="radioKill">
            <input id="kill" type="radio" name="radio" checked="checked" value="yes" />
            <label for="serialkillers">Tueurs</label>
          </span>
          <span class="radioVictims">
            <input id="victims" type="radio" name="radio" value="no" />
            <label for="victimes">Victimes</label>
          </span>
      </div>
      <!-- /SWITCH -->
      
      <!-- LA MAP -->
      <div id="world-map"></div>
      <!-- /LA MAP -->
  
  <!-- FOOTER -->
  <footer>
    <p>Une terrifiante data visualisation des serial killers, propulsée par <a href="http://www.hetic.net">Hétic</a><p>
  </footer>
  <!-- /FOOTER -->

  <!-- SCRIPTS JS -->
  <script src="js/assets/jquery-1.8.2.js"></script>
  <script src="js/jquery-jvectormap-1.1.1.min.js"></script>
  <script src="js/assets/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/gdp-data.js"></script>
  <script src="js/main.js"></script>
  <!-- /SCRIPTS JS -->

</body>
</html>