<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Workshop Flexbox</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_workshop_flexbox.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Workshop Flexbox</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Holdet blev inddelt i grupper af to personer og en gruppe på tre, hvor jeg var i tremandsgruppen. Hver gruppe fik et emne indenfor HTML eller CSS, og tilføre sig viden indenfor det emne. Derudover skulle man lave en web-bog og en præsentation der omhandlede emnet. På denne måde skulle vi ikke kun tilegne os ny viden men også formidle det videre.</p>
        </section> <!-- indledning -->

        <section id="projekt_overskrift" class="under_overskrift">
          <h2>Projektet</h2>
        </section> <!-- projekt_overskrift -->

        <section id="projektstart_tekst" class="tekstfelt">
          <p>Vi fik emnet flexbox, hvor vi startede med at undersøge det overordnet emne. Derefter havde vi fået forståelse for hvad emnet indebar, og derefter tildelte vi de forskellige gruppemedlemmer forskellige underemner. Dog var der meget dialog indbyrdes til at hjælpe med forståelsen af det nye emne. Selvom gruppemedlemmerne havde hver deres underemner at fordybe sig i, havde alle en overordnet forståelse for alle emnerne. Viden blev fundet fra hjemmesiden w3schools og fra bøger som underviseren havde bragt med.</p>
        </section> <!-- projektstart_tekst -->

        <section id="produktion_tekst" class="tekstfelt">
          <p>Da alle havde fordybet sig i deres emner og skrevet tekst hertil, gennemgik hver gruppemedlem teksten. På den måde blev teksten rettet til, ikke kun for stave- og grammatikfejl men også for dens tilhørende format som webbog. Da teksten og de tilhørende illustrationer var rettet til, blev der skitseret wireframes for hvordan siden skulle se ud. Det foregik efter mobil-first princippet, hvor der først blev fundet et design til mobilversionen. På samme måde blev mobilversionen først kodet. Teksten og illustrationerne blev sat ind og struktureret i en HTML-fil. Dette foregik over GitHub, således flere kunne arbejde i filen på én gang. Derefter gik to af gruppemedlemmerne sammen og kodede CCS, mens det tredje gruppemedlem gik i gang med at forberede et PowerPoint til præsentationen. Igen forgik det i dialog med hinanden, så selvom alle medlemmerne ikke arbejde med det samme, fik alle indblik i hvad der foregik.</p>
        </section> <!-- produktion_tekst -->

        <section id="presentation_tekst" class="tekstfelt">
          <p>Præsentationen foregik med to medlemmer, da den tredje medlem ikke var tilstede, hvilket gruppen vidste fra starten af. Der blev brugt præsentationsteknikker i form af kropssprog, men også igennem PowerPointen. Her var der ikke for meget tekst, men blev mest brugt til at vise eksempler i form af illustrationer og billeder.</p>
          <a href="http://www.agne4531.apache.eadania.dk/flexbox"><p>Siden om flexbox</p></a>
        </section> <!-- presentation_tekst -->

        <section id="slide_billede" class="illustrationer">
          <img src="billeder/projekter_opgaver/slide.png" alt="Et slide fra powerpointet">
          <blockquote>
            <p>Et slide fra gruppens præsentation</p>
          </blockquote>
        </section> <!-- slide_billede -->
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
