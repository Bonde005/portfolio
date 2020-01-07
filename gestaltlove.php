<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Gestaltlove</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_gestaltlove.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Gestaltlove</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Når man opsætter et website, skal brugeren nemt kunne overskue siden og navigere rundt i det. Man skal altså være opmærksom på hvordan man opstiller indholdet på siden, så det er nemt at finde ud af hvad der hænger sammen og hvad der ikke gør. Når mennesker møde en hjemmeside eller et maleri, ses der på det hele før de enkelte elementer. Denne psykologi har lagt grundlag til de fem gestaltlove, som kan bruges sim hjælp til opsætningen af en website eller andet grafisk design. </p>
          <div class="kilde">
            <p>(Interfacedesign, s. 122)</p>
            <span>Rold, Morten: Interfacedesign - fra idé til digital prototype, Hans Reitzels Forlag, 2019 s. 122</span>
          </div>
          <section id="lokal_menu">
            <p>Gestaltlovene indeholder fem love som er vigtigt at have kendskab til:</p>
            <a href="#proximity_overskrift"><h2>Nærhed</h2></a>
            <a href="#lighed_overskrift"><h2>Lighed</h2></a>
            <a href="#kontinuitet_overskrift"><h2>Kontinuitet</h2></a>
            <a href="#lukkethed_overskrift"><h2>Lukkethed</h2></a>
            <p class="kilde">Interfacedesign, s. 123</p>
          </section>
        </section> <!-- indledning -->

        <section id="proximity" class="boks">
          <section id="proximity_overskrift" class="under_overskrift">
            <h2>Nærhed</h2>
          </section> <!-- proximity_overskrift -->

          <section id="proximity_tekst" class="tekstfelt">
            <p>Elementer som er tæt på hinanden, bliver opfattet som værende relateret. Den engelske betegnelse er proximity.</p>
            <div class="kilde">
              <p>(Interfacedesign, s. 122)</p>
              <span>Rold, Morten: Interfacedesign - fra idé til digital prototype, Hans Reitzels Forlag, 2019 s. 122</span>
            </div>
          </section> <!-- proximity_tekst -->

          <section id="proximity_eksempel" class="illustrationer">
            <img src="billeder/grafisk_design/gestalt_proximity.png" alt="Eksempel af gestaltloven om nærhed">
          </section> <!-- proximity_eksempel -->
        </section> <!-- proximity boks  -->

        <section id="lighed" class="boks">
          <section id="lighed_overskrift" class="under_overskrift">
            <h2>Lighed</h2>
          </section> <!-- lighed_overskrift -->

          <section id="lighed_tekst" class="tekstfelt">
            <p>Elementer der har ser ens ud, f.eks. samme farve, form eller størrelse, betragtes som at høre sammen. Den engelske betegnelse er similarity.</p>
            <div class="kilde">
              <p>(Interfacedesign, s. 122)</p>
              <span>Rold, Morten: Interfacedesign - fra idé til digital prototype, Hans Reitzels Forlag, 2019 s. 122</span>
            </div>
          </section> <!-- lighed_tekst -->

          <section id="lighed_eksempel" class="illustrationer">
            <img src="billeder/grafisk_design/gestalt_lighed.png" alt="Eksemel af gestaltloven om lighed">
          </section> <!-- lighed_eksempel -->
        </section> <!-- lighed boks  -->

        <section id="kontinuitet" class="boks">
          <section id="kontinuitet_overskrift" class="under_overskrift">
            <h2>Kontinuitet</h2>
          </section> <!-- kontinuitet_overskrift -->

          <section id="kontinuitet_tekst" class="tekstfelt">
            <p>Elementer der er placeret således at de danne en linje eller kurve, bliver anset som at være relateret til hinanden. Den engelske betegnelse er good continuation.</p>
            <div class="kilde">
              <p>(Interfacedesign, s. 122)</p>
              <span>Rold, Morten: Interfacedesign - fra idé til digital prototype, Hans Reitzels Forlag, 2019 s. 122</span>
            </div>
          </section> <!-- kontinuitet_tekst -->

          <section id="kontinuitet_eksempel" class="illustrationer">
            <img src="billeder/grafisk_design/gestalt_kontinuitet.png" alt="Eksemel af gestaltloven om kontinuitet">
          </section> <!-- kontinuitet_eksempel -->
        </section> <!-- kontinuitet boks  -->

        <section id="lukkethed" class="boks">
          <section id="lukkethed_overskrift" class="under_overskrift">
            <h2>Lukkethed</h2>
          </section> <!-- lukkethed_overskrift -->

          <section id="lukkethed_tekst" class="tekstfelt">
            <p>Elementer som er placeret i samme ramme, ”lukket” inde sammen, bliver betragtet som relateret. Den engelske betegnelse er common region.</p>
            <div class="kilde">
              <p>(Interfacedesign, s. 122)</p>
              <span>Rold, Morten: Interfacedesign - fra idé til digital prototype, Hans Reitzels Forlag, 2019 s. 122</span>
            </div>
          </section> <!-- lukkethed_tekst -->

          <section id="kontinuitet_eksempel" class="illustrationer">
            <img src="billeder/grafisk_design/gestalt_lukkethed.png" alt="Eksemel af gestaltloven om lukkethed">
          </section> <!-- lukkethed_eksempel -->
        </section> <!-- lukkethed boks  -->

        <section id="figurdannelse" class="boks">
          <section id="figurdannelse_overskrift" class="under_overskrift">
            <h2>Figurdannelse</h2>
          </section> <!-- figurdannelse_overskrift -->

          <section id="figurdannelse_tekst" class="tekstfelt">
            <p>Elementer som er hver for sig kan opfattes som en samlet figur, også selvom figuren reelt ikke er eksplicit til stedet. Den engelske betegnelse er closure.</p>
            <div class="kilde">
              <p>(Interfacedesign, s. 122)</p>
              <span>Rold, Morten: Interfacedesign - fra idé til digital prototype, Hans Reitzels Forlag, 2019 s. 122</span>
            </div>
          </section> <!-- figurdannelse_tekst -->

          <section id="figurdannelse_eksempel" class="illustrationer">
            <img src="billeder/grafisk_design/gestalt_figurdannelse.png" alt="Eksemel af gestaltloven om figurdannelse">
          </section> <!-- figurdannelse_eksempel -->
        </section> <!-- figurdannelse boks  -->
      </div> <!-- pagewrap -->

      <div id="home_button">
        <a href="index.php"><img src="billeder/home.png" alt="home knap"></a>
      </div>

      <?php include("footer.inc"); ?>
    </body>
    <script>
      function goBack() { /* Går en tilbage i historikken */
      window.history.back();
      }
    </script>
  </html>
