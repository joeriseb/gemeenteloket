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
  <a href="toeristen.php">Toeristen</a>
  <a href="contact.php" class="active">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="foto6">
            
        </div>


<h1>
   <br> U kunt bij ons terecht op de volgende manieren:<br><br>
</h1>
<div class="container">


    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href=""></a><img class="card-img-top" src="afbeeldingen/bellen.jpg"
                        alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="">Bellen</a>
                    </h4>
                    <p class="card-text">U kunt altijd bij ons terecht voor vragen via het telefoonnummer<br> 14 010. We zijn elke werkdag bereikbaar van 08:00 tot 18:00. In het weekend zijn we bereikbaar van 08:00 tot 16:00</p>
                </div>
            </div>
        </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100">
                        <a href="https://www.google.nl/maps/place/Coolsingel+40,+3011+AD+Rotterdam/@51.9229888,4.4773042,17z/data=!3m1!4b1!4m5!3m4!1s0x47c43358f38ed90d:0x61048aa66fc1fad1!8m2!3d51.9229888!4d4.4794929?hl=nl"><img class="card-img-top" src="afbeeldingen/langskomen.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="">
                                <a href="">Langskomen</a>
                            </h4>
                            <p class="card-text">U kunt bij onze vestiging langskomen voor afspraken. klik op de foto voor de routebeschrijving.</p>
                        </div>
                    </div>
                
                </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card h-100">
                                <a href="https://www.rotterdam.nl/bestuur-organisatie/social-media/"><img class="card-img-top" src="afbeeldingen/socialmedia.jpg" alt=""></a>
                                <div class="card-body">
                                    <h4 class="">
                                        <a href="">Social media</a>
                                    </h4>
                                    <p class="card-text">U kunt ook via social media contact met ons opnemen en nieuws lezen.</p>
                                </div>
                            </div>
                        </div>
                        
                               
                                <div class="col-lg-6 mb-4">
                                    <div class="card h-100">
                                        <a href=""><img class="card-img-top" src="afbeeldingen/post.jpg" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="">
                                                <a href="">Post</a>
                                            </h4>
                                            <p class="card-text">Wilt u ons een vraag stellen per post dan kunt u altijd een brief sturen naar ons postbus:
                                                70012.</p>
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
