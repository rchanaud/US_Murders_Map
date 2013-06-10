<?php require("server/init.php") ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    
    <title>Les serial killers dans le monde</title>
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/jquery-jvectormap-1.1.1.css" />
    <link rel="stylesheet" href="jquery-jvector.css" type="text/css" media="screen"/>
    <!-- /Style -->

</head>

<body>
    <header>
        <div id="logo"></div>
        <span>SERIAL<br /> KILLER<br /> VISUALIZER</span>
    </header>

    <section>
        <div></div>
        <span id="totalSerial">TOTAL SERIAL KILLERS : 206</span>
        <span id="totalVictims">TOTAL VICTIMS : 100345</span>
    </section>

    <div id="switch">
        <div id="switchKills"></div>
        <div id="switchVictims"></div>
    </div>

  <div id="world-map" style="width: 1350px; height: 900px"></div>
  
  <!-- Scripts -->
  <script src="js/assets/jquery-1.8.2.js"></script>
  <script src="js/jquery-jvectormap-1.1.1.min.js"></script>
  <script src="js/assets/jquery-jvectormap-world-mill-en.js"></script>
  <script>
    $(function(){
      $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        regions: [{
            scale: ['#DEEBF7', '#08519C']
        }]
      });
    });
  </script>
  <!-- /Scripts -->

</body>
</html>
