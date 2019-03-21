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
  <a href="index.php" >Home</a>
  <a href="paspoort.php">Paspoort</a>
  <a href="kapvergunning.php">Kapvergunning</a>
  <a href="bevolkingsregister.php">Bevolkingsregister</a>
  <a href="toeristen.php" class="active">Toeristen</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="foto5">
            
        </div>

<a href="toeristeneng.php">
    <img id="eng" src="afbeeldingen/eng.png" alt="eng" style="width:50px;height:50px;border:0;">
</a>

<h1>Rotterdam</h1>
<h2>"Make it happen"</h2>

<p>
    Rotterdam is een van de grootste steden in Nederland.<br>
    Er zijn verschillende activiteiten te beleven in Rotterdam.
</p>
<div class="container">
   

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="https://www.diergaardeblijdorp.nl/"><img class="card-img-top" src="afbeeldingen/beer.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="https://www.diergaardeblijdorp.nl/">Diergaarde Blijdorp</a>
                    </h4>
                    <p class="card-text">Begin hier je ontdekkingsreis door een van Europa's mooiste dierentuinen. Ontmoet bijzondere dieren in een natuurlijke
                    omgeving. Dagje uit voor jong & oud!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="https://euromast.nl/"><img class="card-img-top" src="afbeeldingen/euromast.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="Diergaarde Blijdorp">
                        <a href="https://euromast.nl/">Euromast</a>
                    </h4>
                    <p class="card-text">De hoogste uitkijktoren van Nederland. Geniet van het uitzicht over de stad Rotterdam vanaf een hoogte van 185 meter.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="https://www.feyenoord.com/"><img class="card-img-top" src="afbeeldingen/kuip.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="Euromast">
                        <a href="https://www.feyenoord.com/">Feyenoord</a>
                    </h4>
                    <p class="card-text">Officiële site van Feyenoord. Met informatie over de club, spelers, competitie en het laatste nieuws.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="http://www.miniworldrotterdam.com/"><img class="card-img-top" src="afbeeldingen/miniworld.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://www.miniworldrotterdam.com/">Miniworld Rotterdam</a>
                    </h4>
                    <p class="card-text">Miniworld Rotterdam is de grootste overdekte miniatuurwereld van Nederland met een voorlopige oppervlakte van 600 m2 in
                    schaal.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="https://markthal.klepierre.nl/"><img class="card-img-top" src="afbeeldingen/markthal.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="markthal">
                        <a href="https://markthal.klepierre.nl/">Markthal</a>
                    </h4>
                    <p class="card-text">De Markthal in het centrum van Rotterdam is een overdekte markthal met vele restaurants en marktkramen onder het mooiste
                    plafond van de stad.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="http://www.kubuswoning.nl/"></a><img class="card-img-top" src="afbeeldingen/kubus.jpeg" alt=""></a>
                <div class="card-body">
                    <h4 class="markthal">
                        <a href="http://www.kubuswoning.nl/">Kubushuizen</a>
                    </h4>
                    <p class="card-text">De rotterdamse kubuswoning is al meer dan 30 jaar een architectonisch fenomeen. Als je er tegen aan kijkt, vraag je je
                    af of hierin wel gewoond kan worden.</p>
                </div>
            </div>
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

                function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
            }</script>
</body>
<?

?>