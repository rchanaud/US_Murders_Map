<?php require("./server/init.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    
    <title>Les serial killers dans le monde</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="jquery-jvector.css" type="text/css" media="screen"/>
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

      <!-- STATS GLOBALES -->
      <section>
          <div></div>
          <span id="totalSerial">TOTAL SERIAL KILLERS : <?php echo $row2[0]; ?></span>
          <span id="totalVictims">VICTIMES TOTAL : <?php echo $row[0]; ?></span>
      </section>
      <!-- STATS GLOBALES -->
      
      <!-- RESEAUX SOCIAUX -->
        <div id="facebook">
          <a title="Partager sur Facebook" href="http://www.facebook.com/share.php?u=Serial-Killers-Visualizer/542085159182499?ref=hl" onclick="return fbs_click()" target="_blank">
          <img src="css/img/fb_default.png" alt="Partager sur Facebook" /></a>
        </div>
        <div id="twitter">
          <a title="Partager sur Facebook" href="http://www.facebook.com/share.php?u=Serial-Killers-Visualizer/542085159182499?ref=hl" onclick="return fbs_click()" target="_blank">
          <img src="css/img/twitter_default.png" alt="Partager sur Facebook" /></a>
        </div>
      <!-- /RESEAUX SOCIAUX -->

      <!-- SWITCH -->
      <div class="radioBtns">
          <span class="radioKill">
            <input id="kill" type="radio" name="radio" checked="checked" value="yes" />
            <label for="kill">Tueurs</label>
          </span>
          <span class="radioVictims">
            <input id="victims" type="radio" name="radio" value="no" />
            <label for="victims">Victimes</label>
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
  <script src="js/main.js"></script>
  <!-- /SCRIPTS JS -->

</body>
</html>