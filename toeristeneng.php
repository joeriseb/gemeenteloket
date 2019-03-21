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
  <a href="bevolkingsregister.php">Bevolkingsregister</a>
  <a href="toeristen.php" class="active">Toeristen</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="foto5">

    </div>

    <a href="toeristen.php">
        <img id="nl" src="afbeeldingen/nl.png" alt="nl" style="width:50px;height:50px;border:0;">
    </a>
    
    <h1>Rotterdam</h1>
    <h2>"Make it happen"</h2>
  

    <p>

        Rotterdam is one of the biggest cities in the Netherlands. <br>There are a lot of activities to enjoy!<br>
</p>
    <div class="container">


        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="https://www.diergaardeblijdorp.nl/"><img class="card-img-top" src="afbeeldingen/beer.jpg"
                            alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="https://www.diergaardeblijdorp.nl/">Diergaarde Blijdorp</a>
                        </h4>
                        <p class="card-text">Begin a journey through Europe with one of the best zoo's. Meet special animals in a natural habitat. Its for young
                        and old!</p>
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
                        <p class="card-text">This is the highest tower of the Netherlands. Enjoy of a view on Rotterdam at a height of 185 meters.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="https://www.feyenoord.com/"><img class="card-img-top" src="afbeeldingen/kuip.jpg"
                            alt=""></a>
                    <div class="card-body">
                        <h4 class="Euromast">
                            <a href="https://www.feyenoord.com/">Feyenoord</a>
                        </h4>
                        <p class="card-text">Official site of Feyenoord. With information about the club, players, competition and the latest news.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="http://www.miniworldrotterdam.com/"><img class="card-img-top"
                            src="afbeeldingen/miniworld.jpg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="http://www.miniworldrotterdam.com/">Miniworld Rotterdam</a>
                        </h4>
                        <p class="card-text">Miniworld Rotterdam is the largest indoor miniature world in the Netherlands with a provisional area of 600 m2 scale
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="https://markthal.klepierre.nl/"><img class="card-img-top" src="afbeeldingen/markthal.jpg"
                            alt=""></a>
                    <div class="card-body">
                        <h4 class="markthal">
                            <a href="https://markthal.klepierre.nl/">Markthal</a>
                        </h4>
                        <p class="card-text">The Markthal in the center of Rotterdam is a covered market hall with many restaurants and market stalls under the most
                        beautiful ceiling in the city.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <a href="http://www.kubuswoning.nl/"></a><img class="card-img-top" src="afbeeldingen/kubus.jpeg"
                        alt=""></a>
                    <div class="card-body">
                        <h4 class="markthal">
                            <a href="http://www.kubuswoning.nl/">Kubushuizen</a>
                        </h4>
                        <p class="card-text">The rotterdam cube house has been an architectural phenomenon for more than 30 years. If you look at it, you wonder if
                        you can live in it.</p>
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

        </div>
</body>
<?

?>