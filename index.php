<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Jarvis</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="Content-Language" content="Fr"/>
    <meta name="Author" lang="fr" content="Torna"/>
    <meta name="Copyright" content="© Torna"/>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="refresh" content="3600;url=index.php">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <script type="text/javascript" src="//widget.coindesk.com/bpiticker/coindesk-widget.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>

    <div id="main">
      <div id="earth"><img id="img_earth" src="pict/blank.png"></div>
      <div id="moon"><img id="img_moon" src="pict/blank.png"></div>
      <div id="horloge"></div>
      <!-- <div id="meteo"></div> -->
      <div id="ping"></div>
      <!-- <div id="coindesk-widget"></div> -->
     <!--  <div class="deezer">
        <div class="deezer-widget-player" data-src="https://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=true&width=200&height=200&color=007FEB&layout=dark&size=medium&type=playlist&id=1109890291&app_id=1" data-scrolling="no" data-frameborder="0" data-allowTransparency="true" data-width="200" data-height="200"></div>
      </div> -->
    </div>

    <script>
      (function(d, s, id) { 
      var js, djs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return; 
      js = d.createElement(s); js.id = id; 
      js.src = "https://e-cdns-files.dzcdn.net/js/widget/loader.js"; 
       djs.parentNode.insertBefore(js, djs);
    }(document, "script", "deezer-widget-loader"));
    </script>

   <!--  <script>
      (function(b,i,t,C,O,I,N) {
        window.addEventListener('load',function() {
          if(b.getElementById(C))
            return;
          I=b.createElement(i),N=b.getElementsByTagName(i)[0];
          I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
        },false)
      })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
    </script> -->

  </body>
</html>
