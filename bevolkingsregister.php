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
    
    <body>
        <button onclick="topFunction()" id="myBtn2" title="Go to top">Top</button>
        
        <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="paspoort.php">Paspoort</a>
  <a href="kapvergunning.php">Kapvergunning</a>
  <a href="bevolkingsregister.php" class="active">Bevolkingsregister</a>
  <a href="toeristen.php">Toeristen</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="foto4">
            
        </div>
<br>
<h1>Bevolkingsregister</h1>
<p id="tekst">In gemeentes met een bevolkingsregister houdt de gemeente gegevens bij over iedere bewoner.<br> De bevolking in deze landen zijn
meestal verplicht om veranderingen van status aan te melden, zoals veranderingen in echtelijke status, woonadres,
overlijden, geboorten enzovoort.<br><br></p>
<div class="container">


    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href=""></a><img class="card-img-top" src="afbeeldingen/bevolking.png" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="">Aantal inwoners</a>
                    </h4>
                    <p class="card-text">Het aantal inwoners in Rotterdam is met 40.473 inwoners toegenomen (afgerond is dat 6%): van 598.239 in 1995 tot 638.712
                    in 2018. Het aantal inwoners is het aantal personen zoals op 1 januari in het bevolkingsregister vastgelegd.</p>
                </div>
            </div>
        </div>
<div class="col-lg-6 mb-4">
    <div class="card h-100">
        <a href=""><img class="card-img-top" src="afbeeldingen/bevolking2.png" alt=""></a>
        <div class="card-body">
            <h4 class="">
                <a href="">Leeftijd inwoners</a>
            </h4>
            <p class="card-text">Bevolking, leeftijdsgroepen: aantal en percentage inwoners op 1 januari 2018 per leeftijdscategorie.</p>
        </div>
    </div>

</div>
<div class="col-lg-6 mb-4">
    <div class="card h-100">
        <a href=""><img class="card-img-top" src="afbeeldingen/bevolking4.png" alt=""></a>
        <div class="card-body">
            <h4 class="">
                <a href="">Achtergrond bevolking</a>
            </h4>
            <p class="card-text">Donut diagram met een verdeling van de bevolking in Rotterdam naar autochtoon, migratie westers en migratie niet-westers.</p>
        </div>
    </div>

</div>
<div class="col-lg-6 mb-4">
    <div class="card h-100">
        <a href=""><img class="card-img-top" src="afbeeldingen/bevolking3.png" alt=""></a>
        <div class="card-body">
            <h4 class="">
                <a href="">Gemmideld inkomen inwoner</a>
            </h4>
            <p class="card-text">De wijzer van de meter toont het gemiddeld inkomen voor de gemeente. De schaal van de meter toont de variatie in inkomen met het minimum en maximum gemiddeld inkomen per regio.</p>
        </div>
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