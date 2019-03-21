<?php

?>
<!DOCTYPE html>
<html lang=nl>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gemeenteloket.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Gemeenteloket</title>
    <link rel="shortcut icon" href="afbeeldingen/R.png">
    </head>
    <button onclick="topFunction()" id="myBtn2" title="Go to top">Top</button>
    <body>
        
        <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="paspoort.php">Paspoort</a>
  <a href="kapvergunning.php">Kapvergunning</a>
  <a href="bevolkingsregister.php">Bevolkingsregister</a>
  <a href="toeristen.php">Toeristen</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="foto1">
            
        </div>

<a class="weatherwidget-io" href="https://forecast7.com/nl/51d924d48/rotterdam/" data-label_1="ROTTERDAM"
    data-label_2="Weer" data-icons="Climacons Animated" data-theme="dark" data-basecolor="#50b56c"
    data-highcolor="#fcfcfc" data-lowcolor="#2f25a1">ROTTERDAM Weer</a>
<script>
    !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
</script>
<h1><br>Gemeentesite Rotterdam</h1><br>
<p id="tekst">Dit is de gemeentesite van Rotterdam. Hier kunt u informatie inzien over een paspoort,kapvergunning en bevolkingsregister.U kunt op de website ook afspraken maken met de gemeente.
U kunt op de website activiteiten vinden in Rotterdam. </p>
<h2>Nieuws</h2>

<style>
    div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 15%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<br>
<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/honderd-jaar-kiesrecht/">
            <img src="afbeeldingen/kiesrecht.png" alt="kiesrecht" width="600" height="400">
        </a>
        <div class="desc">100 jaar kiesrecht voor mannen én vrouwen</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/reset-rotterdam/">
            <img src="afbeeldingen/geld.jpg" alt="geld" width="600" height="400">
        </a>
        <div class="desc">Nieuwe start Rotterdamse schuldenaanpak</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/onderwijsprestaties-zuid/">
            <img src="afbeeldingen/onderwijs.jpg" alt="onderwijs" width="600" height="400">
        </a>
        <div class="desc">Onderwijsprestaties leerlingen Zuid blijven stijgen</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/programma-in-de-bak/">
            <img src="afbeeldingen/afval.jpg" alt="afval" width="600" height="400">
        </a>
        <div class="desc">Rotterdam pakt afval naast container aan</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/meld-discriminatie-nu/">
            <img src="afbeeldingen/discriminatie.png" alt="afval" width="600" height="400">
        </a>
        <div class="desc">Aftrap campagne Meld discriminatie nu</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/looproutes-ouderen/">
            <img src="afbeeldingen/wandelen.jpg" alt="ouderen" width="600" height="400">
        </a>
        <div class="desc">Rotterdamse looproutes voor ouderen onder de loep genomen<br></div>
    </div>
    </div>


<div class="responsive">
<div class="gallery">
    <a target="_blank" href="https://www.rotterdam.nl/nieuws/minder-inbraak-en-roven/">
        <img src="afbeeldingen/roven.jpg" alt="geweld" width="600" height="400">
    </a>
    <div class="desc">Minder woninginbraken en straatroven</div>
</div>
</div>


<div class="responsive">
<div class="gallery">
    <a target="_blank" href="https://www.rotterdam.nl/nieuws/windmolens-slufterdam/">
        <img src="afbeeldingen/windmolen.png" alt="windmolen" width="600" height="400">
    </a>
    <div class="desc">Efficiëntere windmolens op Slufterdam</div>
</div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="https://www.rotterdam.nl/nieuws/clubhuis-feyenoord/">
            <img src="afbeeldingen/feyenoord.jpg" alt="Feyenoord" width="600" height="400">
        </a>
        <div class="desc">Feyenoord clubhuis in Afrikaanderwijk</div>
        </div>

    </div>
    <script>
        // als de user naar beneden scrollt, verschijnt een knop die terug gaat naar de top
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn2").style.display = "block";
            } else {
                document.getElementById("myBtn2").style.display = "none";
            }
        }

        // 
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        
        function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        }
        
        
        </script>
</body>
<?

?>