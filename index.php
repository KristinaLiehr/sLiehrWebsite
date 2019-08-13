<!DOCTYPE html>

<script>
  function goToAboutUs()
  {
      window.open("aboutus.html", "_self");
  }
  function goToDataProtection()
  {
      window.open("dataProtection.html", "_self");
  }
  function goToGallery()
  {
     window.open("gallery.html", "_self");
  }
  function goToHome()
  {
    window.open("index.html", "_self");
  }
  function goToImprint()
  {
      window.open("imprint.html", "_self");
  }
  function goToServices()
  {
      window.open("services.html", "_self");
  }
  function cookieTemplateCall()
  {
    
  }
</script>

<html class="no-js" lang="">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Startseite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/headstyle.css">
    <link rel="stylesheet" type="text/css" href="css/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="css/imageHoverWithLink.css">
    <link rel="stylesheet" type="text/css" href="css/footstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Days+One|Homemade+Apple|Just+Another+Hand|Kalam|Maven+Pro|Molengo|Poiret+One|Prosto+One|Shadows+Into+Light"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <!--<link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/new.css" />-->

      <?php include("header.php"); ?>
  </head>

  <body>
    <!-- Add your site or application content here -->

    <hr class="headSeparation">
    
    <h1 style="text-align: center;">- WILLKOMMEN -</h1>
    <h3 style= "text-align: center; color: darkorange;"> WIR FREUEN UNS, DASS SIE UNSERE INTERNETPRÄSENZ BESUCHEN 
      <br>UND DAS DAMIT VERBUNDENE INTERESSE AN UNSEREM UNTERNEHMEN! </h3>
      
    <div class="skew-c"></div>
    <div class="colour-block">
      <!--<p style= "text-align: center">Wir freuen uns, dass Sie unsere Internetpräsenz besuchen und das damit verbundene Interesse an unserem Unternehmen
    zeigen.</p> -->
      <p style="text-align: center;">
        <br>Firma s.liehr – Ihr kompetenter Partner in Sachen Holz, egal ob Neubau, Sanierung oder für Sonderlösungen. 
        <br>Hier befinden Sie sich immer in guten Händen. 
      <br>
      <br>Wir sind Ihr erster Ansprechpartner in Geilenkirchen für Zimmerer- und Dachdeckerarbeiten, Holzarbeiten jeglicher
      Art, Montage- und Klempnerarbeiten - sowie Fassaden, Terrassen, Carports, etc.
      <br>
      <br>
      <br>Holz ist unsere Berufung - Seit Menschengedenken wird Holz in Haus und Heim verwendet. Trotzdem ist es immer noch einer der modernsten Werkstoffe der Welt. Kaum ein anderes Material ist in der Lage, so ein natürliches, menschliches Umfeld zu schaffen. Deshalb sind unsere Leistungen auch so vielfältig wie die Möglichkeiten, die der Werkstoff Holz bietet. Ausgerüstet mit fundierter Sachkenntnis und bestem Equipment freuen wir uns auf neue Herausforderungen! // Der Baustoff Holz hat in seiner jahrtausend alten Verwendung an Bedeutung nichts verloren. In seiner großen Vielfalt an Bearbeitungsmöglichkeiten und Einsatzbereichen, gewinnt es zudem immer größerer Beliebtheit. Das soll uns Zimmerleuten recht sein, denn schließlich ist seit jeher der Beruf des Zimmermanns mit dem Baustoff Holz fest verbunden. Unter Ausschöpfung der heutigen, Technischen Möglichkeiten, sollen wir jedoch auch die alten Traditionen unserer Vorfahren und die Ehre eines Handwerkers stets hochhalten, damit auch in Zukunft das Handwerk an Wichtigkeit und Ansehen nichts einbußt.</p>
  
    </p>
    </div>
  </div>
    <div class="skew-cc"></div>
    <div class="white-block">
       <h3 style="text-align: center;">Überzeugen Sie sich doch selbst von unserer Arbeit! 
        <br>In unserer Bildergalerie finden Sie ein paar ausgesuchte Referenzen.</h3>
        <br>
      <div class="container">
        <img src="Images/Webseite/collage.jpeg" alt="Avatar" class="image" style="width:50%; padding-left: 25%;">
        <div class="middle" onclick="goToGallery();">
          <div class="text">Zur Galerie</div>
        </div>
      </div>
      <!--
      <div>
        <a href="gallery.html"
          target="_self">
          <Figure>
            <picture>
              <img src="Images/goToGalleryIndexImage.PNG" style="width: 100%;" />
            </picture>
          </Figure>
        </a>
      </div>
      -->
    </div>

    <hr class="footSeparation">

  </body>

<footer>
  <div class="footer">
    <div class="footerColumn">
      <a class="aFooter">Sergej Liehr</a><br>
      <a class="aFooter">Von-Humboldt-Straße 128</a><br>
      <a class="aFooter">52511 Geilenkirchen</a><br>
      <a class="aFooter">Deutschland</a>
    </div>
    <div class="footerColumn">
      <a class="aFooter">&#9743; 02451-9400 390</a><br>
      <a class="aFooter">&#128439; 02451-9161 886</a><br>
      <a class="aFooter">&#9993; sergejliehr@ymail.com</a>
    </div>
    <div class="footerColumn">
      <a class="aFooter" onclick="goToImprint();" style="cursor: pointer;">Impressum</a><br>
      <a class="aFooter" onclick="goToDataProtection();" style="cursor: pointer;">Datenschutz</a><br>
      <a class="aFooter">&copy; Kristina Liehr</a>
    </div>
  </div>
</footer>
  
</html>