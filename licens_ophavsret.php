<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Licens og ophavsret</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_licens_ophavsret.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Licens og ophavsret</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Når man har lavet noget man vil beskytte, kan man gøre dette igennem licenserne og ophavsret. Det betyder også at hvis man vil benytte noget andre har lavet skal man kigge efter hvilken licens det har, hvis der er nogen, ellers skal man tænkte på ophavsret. Man skal uanset hvad sørge for at få lov og tydeligt anerkende personen der står bag. Hvis man vil benytte sig af noget der er beskyttet under en licens, skal man kigge på hvilken licens det er og hvilke krav den har opstillet. Ved nogle licenser skal man betale for at benytte sig af det, andre må man slet ikke bruge det.</p>
        </section> <!-- indledning -->

        <section id="opgaven_overskrift" class="under_overskrift">
          <h2>Opgaven</h2>
        </section> <!-- opgaven_overskrift -->

        <section id="opgave">
          <object data="ophavsret_licenser.pdf" type="application/pdf" width="100%" height="100%">
            <p>It appears you don't have a PDF plugin for this browser.
              You can <a href="ophavsret_licenser.pdf">click here to
              download the PDF file.</a></p>
          </object>
          <!--<iframe src="ophavsret_licenser.pdf" style="width:100%; height: 100%; border: none;"></iframe> -->
        </section> <!-- opgave -->
      </div> <!-- pagewrap -->

      <div id="home_button">
        <a href="index.php"><img src="billeder/home.png" alt="home knap"></a>
      </div>

      <?php include("footer.inc"); ?>
    </body> <!-- pagewrap -->
    <script>
      function goBack() { /* Går en tilbage i historikken */
      window.history.back();
      }
    </script>
  </html>
