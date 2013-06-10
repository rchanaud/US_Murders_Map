<!DOCTYPE html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">

    </style>
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="jquery-jvector.css" type="text/css" media="screen"/>
      <script src="js/assets/jquery-1.8.2.js"></script>
      <script src="js/jquery-jvectormap-1.1.1.min.js"></script>
      <script src="js/assets/jquery-jvectormap-world-mill-en.js"></script>
</head>

<body>
    <header>
        <div id="logo"></div>
        <h1>SERIAL KILLER VISUALIZER</h1>
    </header>


    <section>
        <div></div>
        <span id="totalSerial">TOTAL SERIAL KILLERS : 206</span>
        <span id="totalVictims">VICTIMES TOTAL : 100345</span>
    </section>

    <div id="facebook">
      <a title="Partager sur Facebook" href="http://www.facebook.com/share.php?u=Serial-Killers-Visualizer/542085159182499?ref=hl" onclick="return fbs_click()" target="_blank">
      <img src="css/img/fb_default.png" alt="Partager sur Facebook" /></a>
    </div>
    
    <div class="radioBtns">
        <span class="radioKill">
          <input id="yes" type="radio" name="radio" checked="checked" value="yes" />
          <label for="yes">Tueurs</label>
        </span>
        <span class="radioVictims">
          <input id="no" type="radio" name="radio" value="no" />
          <label for="no">Victimes</label>
        </span>
    </div>

  <div id="world-map" style="width: 900px; height: 442px"></div>
  <script src="js/main.js"></script>
  <footer><p>Une terrifiante data visualisation des serial killers, propulsée par Hétic<p></footer>
</body>
</html>