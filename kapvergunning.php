<?php
 if(isset($_POST['firstname']))
 {
 $data=$_POST['firstname'];
 }

 if(isset($_POST['Achternaam']))
 {
 $data.=$_POST['Achternaam'];
 }

 if(isset($_POST['Geboortedatum']))
 {
 $data.=$_POST['Geboortedatum'];
 }

 if(isset($_POST['Geslacht']))
 {
 $data.=$_POST['Geslacht'];
 }

 if(isset($_POST['Telnummer']))
 {
 $data.=$_POST['Telnummer'];
 }

 if(isset($_POST['email']))
 {
 $data.=$_POST['email'];
 }

 if(isset($_POST['trip-start']))
 {
 $data.=$_POST['trip-start'];
 }
 
 if(isset($data))
 {

 $fp = fopen('kap.txt', 'a');
 
 fwrite($fp, $data);
 fclose($fp);
 }
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
  <a href="kapvergunning.php" class="active">Kapvergunning</a>
  <a href="bevolkingsregister.php">Bevolkingsregister</a>
  <a href="toeristen.php">Toeristen</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div id="foto2">
            
        </div>
<h1>Waarom moet ik een kapvergunning aanvragen?</h1>
<br>
<p id="tekst">De gemeente is verantwoordelijk voor het groen en de handhaving hiervan.<br> Houtopstand, zoals bomen en struiken, kan
    bijdragen aan het stadsschoon of het landschap en de leefbaarheid, maar kan ook cultuurhistorische of milieuwaarde
    hebben.<br> Het aanvragen van een vergunning is dus nodig zodat de gemeente de staat van het groen kan beheren.</div>
<span id="dots"></span><span id="more">Via de website van de gemeente waarin je woonachtig bent, kan je een kapvergunning aanvragen. Dit kan ook schriftelijk.
Er worden een aantal gegevens gevraagd, zoals waar de boom staat, wat de afmetingen zijn, welke boom het betreft, in
welke omgeving deze staat en enkele foto’s van de situatie.<br> Voor zo’n aanvraag zullen in de meeste gevallen kosten
worden gerekend. De hoogte hiervan verschilt ook weer per gemeente.

Vervolgens wordt de aanvraag in behandeling genomen door het college.<br> Hier wordt afgewogen wat de risico’s zijn en wat
het belang van behoud van de boom is.<br> In de volgende gevallen zal de vergunning bijvoorbeeld bijna altijd worden
toegekend:

Als de boom een gevaar vormt en er geen alternatief is voor kappen;<br>
Als de boom schade aan eigendom veroorzaakt en dit niet te voorkomen of op te lossen is.<br>
Een boom moet wijken voor een bouwinitiatief waarvoor een vergunning is verleend.<br>
Maar in deze gevallen zal je bijvoorbeeld vaak geen kapvergunning krijgen:<br>

Het betreft een monumentale boom<br>
Je wilt kappen vanwege overlast als vogels, bladluis of vallend blad<br>
Na je aanvraag zal je een aantal weken moeten wachten voordat je antwoord krijgt.<br>
De gemeente kan je verplichten om na de kap van een boom een nieuwe boom te herplanten.<br> Op dezelfde locatie of als dat
echt niet kan ergens anders.<br> Zo wil de gemeente het groenniveau in stand houden.</span></p><br>



<button onclick="myFunction()" id="maken">meer lezen</button>
<script>function myFunction() {
        var dots = document.getElementById("dots","dots1");
        var moreText = document.getElementById("more","more1");
        var btnText = document.getElementById("maken");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Meer lezen";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Minder lezen";
            moreText.style.display = "inline";
        }
    }
    
    </script><br><br><br>
    <button id="maken" onclick="document.getElementById('demo').style.display = 'block';">Afspraak maken</button>
    <br><br>
    <form method="post" id="demo" style="display: none;">
        Voornaam<br>
        <input type="text" name="firstname" placeholder="Voornamen">
        <br><br>
    
    
        Achternaam:<br>
        <input type="text" name="Achternaam" placeholder="Achternaam">
        <br><br>
    
        Geboortedatum:<br>
        <input type="text" name="Geboortedatum" placeholder="DD/MM/JJJJ">
        <br><br>
    
        <label for="Geslacht">Geslacht</label>
        <br>
        <select name="Geslacht">
            <option value="Man">Man</option>
            <option value="Vrouw">Vrouw</option>
            <option value="Anders">Anders</option>
        </select>
        <br><br>
    
    
        Telefoon nummer:<br>
        <input type="text" name="Telnummer" placeholder="06 12345678">
        <br><br>
    
        Email adres:<br>
        <input type="text" name="email" placeholder="voorbeeld@email.com">
        <br><br>
        <label for="start">Kies een datum:</label>
        <br>
        <input type="date" id="start" name="trip-start" value="dd-mm-jjjj" min="2019-01-01" max="2999-12-31">
        <br><br>
        <label for="tijd">Kies een tijdstip</label>
        <br>
        <select name="tijd">
            <option value="08:30">08:30</option>
            <option value="09:00">09:00</option>
            <option value="10:00">10:00</option>
            <option value="10:15">10:15</option>
            <option value="10:30">10:30</option>
            <option value="11:15">11:15</option>
            <option value="11:30">11:30</option>
            <option value="11:45">11:45</option>
            <option value="12:00">12:00</option>
            <option value="12:15">12:15</option>
            <option value="12:45">12:45</option>
            <option value="13:30">13:30</option>
            <option value="14:15">14:15</option>
            <option value="14:45">14:45</option>
            <option value="15:30">15:30</option>
            <option value="15:45">15:45</option>
        </select>
    
        <br>
        <input type="Submit" value="Verzenden">
    </form>
    <br><br>
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