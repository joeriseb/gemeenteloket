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

 if(isset($_POST['reden']))
 {
 $data.=$_POST['reden'];
 }
 
 if(isset($data))
 {
 $fp = fopen('pasp.txt', 'a');
 
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
    <title>Gementeloket</title>
</head>

<body>
    <link rel="shortcut icon" href="afbeeldingen/R.png">

    <button onclick="topFunction()" id="myBtn2" title="Go to top">Top</button>
    
    <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="paspoort.php" class="active">Paspoort</a>
  <a href="kapvergunning.php">Kapvergunning</a>
  <a href="bevolkingsregister.php">Bevolkingsregister</a>
  <a href="toeristen.php">Toeristen</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="foto3">

    </div>
    <br>
    <h5 id="tekst">Wat is een paspoort?</h5>
    <p id="tekst">Met een paspoort kunt u zich identificeren en reizen.
        Kinderen van alle leeftijden hebben een eigen paspoort (of identiteitskaart) nodig als ze naar het buitenland
        reizen.</p>

    
        <h5 id="tekst">Geldigheid</h5>
        <dl>
            <dt> <p id="tekst"> •Een paspoort is 10 jaar geldig.</p></dt>
            <dt> <p id="tekst">•Een paspoort voor kinderen tot 18 jaar is 5 jaar geldig.</p></dt>
            <dt> <p id="tekst">•Het paspoort is geldig voor alle landen.</p></dt>
        </dl>
    <p id="tekst"> U betaalt de kosten bij de aanvraag. Na vier werkdagen ligt het paspoort voor u klaar.

        U krijgt 6 weken voordat uw paspoort verloopt bericht van de gemeente. Wilt u uw paspoort eerder verlengen, dat
        is dat ook mogelijk.
    </p>
    <br>
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
        <label for="reden">Waarvoor wilt u een afspraak maken?</label>
                <br>
                <select name="reden">
                    <option value="Verlengen">Verlengen</option>
                    <option value="Ophalen">Ophalen</option>
                    <option value="Inleveren">Inleveren</option>
                </select>
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