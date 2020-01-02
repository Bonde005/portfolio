<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Typografi</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_typografi.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Typografi</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Typografi er vigtigt til når man har tekst. Man kan vælge typografi ud fra hvilket udtryk eller følelse man vil give. Hvis man derimod har meget skrift skal man også tænke at det skal være læseligt og man skal kunne kende forskel på overskrift og brødtekst. På den måde påvirker den typografi man vælger meget af sit design. Typografi er ikke blot en skrifttype men indeholder mange elementer.</p>
          <p class="kilde">(Design: Typografi · Typografiens historie)</p>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#skrifttyper_overskrift"><h2>Skrifttyper</h2></a>
            <a href="#size_lines_overskrift"><h2>Størrelse og linjer</h2></a>
            <a href="#opbygning_overskrift"><h2>Skriftens opbygning</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="skrifttyper_overskrift" class="under_overskrift">
          <h2>Skrifttyper</h2>
        </section> <!-- skrifttyper_overskrift -->

        <section id="skrifttyper_tekst" class="tekstfelt">
          <p>De to største skrifttyper som indeholder flest skrifter, og bliver mest anvendt er serif og sans serif. Seriffer er de føder man kan finde på bogstaver, som stammer fra da man skrev med pen og blæk. Serif er godt at bruge til længere tekst da mennesker i praksis ikke læser hvert enkelt bogstav men ordet som en form. Serif-typer hjælper dermed at grupper ordene og danne disse læselige former, samt de skaber en synlig linje der hjælper læseren med at fokusere. Derimod er der sans serif-typer som ikke har fødderne. Derudover har de ofte den samme stregtykkelse, som hjælper med det enkelte bogstavs udtryk. Denne type er gode til korte og vigtige tekster hvor der hurtigt skal læses noget. Til længere tekst kan de være knap så gode eftersom de ikke har de linjer serifferne skaber. Udover disse to vigtige skrifttyper er der nogle der falder udenfor to de kategorier. Heriblandt er der monospace-skrifter hvor hvert enkelte bogstav fylder ligeså meget plads i forhold til hinanden. Disse er gode at bruge hvor det er vigtigt at se hvert enkelt bogstav tydeligt, som f.eks. i kode. Derudover findes der også script-skrifter, som prøve så vidt muligt at ligne håndskrift. Således er der flere forskellige typer af skrifter, men de vigtigste er serif og sans serif.</p>
          <p class="kilde">(Interfacedesign, s. 161-163)</p>
          <p>Man skal vælge sin skrifttype omhyggeligt baseret på sit medie. Hvis der ses på webdesign, skal typen være læseligt i forskellige skærmstørrelse da dette ændre sig. Derudover læser brugeren anderledes på skærme end på papir, her læses der ikke lineært som man gør på papir. Der springes mere rundt i teksten og enkelte stykker læses. Dette er også noget man skal tage højde for når man vælger skrift.</p>
          <p class="kilde">(Interfacedesign, s. 165)</p>
        </section> <!-- skrifttyper_tekst -->

        <section id="serif_eksempler" class="illustrationer">
          <img src="billeder/grafisk_design/serif.png" alt="S uden og med serif">
          <blockquote>
            <p>Et S med og uden serif. (Den til højre er med serif)</p>
            <a class="kilde" href="https://www.silocreativo.com/en/serif-vs-sans-serif-differences-similarities/"><p>silocreativo.com</p></a>
          </blockquote>
        </section> <!-- serif_eksempler -->

        <section id="skrifttyper_eksempler" class="illustrationer">
          <img src="billeder/grafisk_design/fonts.png" alt="Forskellige skrifttyper">
          <blockquote>
            <p>Eksempel på forskellige skrifttyper</p>
            <a class="kilde" href="https://webdesign.tutsplus.com/articles/designing-accessible-content-typography-font-styling-and-structure--cms-31934"><p>webdesign.tutsplus.com</p></a>
          </blockquote>
        </section> <!-- skrifttyper_eksempler -->

        <section id="size_lines_overskrift" class="under_overskrift">
          <h2>Størrelse og linjer</h2>
        </section> <!-- size_lines_overskrift -->

        <section id="size_lines_tekst" class="tekstfelt">
          <p>For at sørge for at skriften er letlæseligt for brugeren skal man kigge på skriftstørrelsen og linjeafstand. Hvis skriften er for lille, er det ikke til at læse, og hvis det er på en skærm, er der så få pixels til rådighed at formen på bogstaverne forvrænget. Hvis skriften derimod er for stor, bliver det svært at overskue alt teksten. En tommelfingerregel er at brødtekst på skærme skal have en størrelse mellem 14 og 16 pixels. Der er dog en stor forskel på selve størrelsen på skrifter, selvom de har den samme pixelværdi, er der nødvendigvis ikke lige store. (</p>
          <p class="kilde">(Interfacedesign, s. 166 & 168)</p>
          <p>Det skyldes at majusklerne og minusklerne i skrifter ikke har den samme versal- eller x-højde. Majuskler er store bogstaver og minuskler er de små, samtidig med x-højde er højden på de små bogstaver og versalhøjde er højden på de store bogstaver.</p>
          <p class="kilde">(Skriftdesign grundprincipper og arbejdsproces, s. 10-11 & 44)</p>
        </section> <!-- size_lines_tekst -->

        <section id="size_billede" class="illustrationer">
          <img src="billeder/grafisk_design/typografi_linjer.PNG" alt="Bogstavets højder">
          <blockquote>
            <p>Bogstavets højde opbygning, med underlængde, grundlinje, x-højde, versalhøjde og overlængde.</p>
            <p class="kilde">(Skriftdesign grundprincipper og arbejdsproces, s. 10)</p>
          </blockquote>
        </section> <!-- size_billede -->

        <section id="linjeafstand_tekst" class="tekstfelt">
          <p>Linjeafstanden har samme betydning for læseligheden af teksten. Hvis linjeafstanden er for kort, flyder teksten sammen og det er svært at fokusere. Derimod hvis den er for høj flyder de fra hinanden og dermed gør det svært at overskue. Som tommelfingerregel siger man at linjeafstanden skal være 150 procent af skriftstørrelsen. Hvis skriften er 12 pixels, skal afstanden altså være 18 pixels. Hvis selve linjerne er lange, kan det være svært at finde ned på næste linje igen. Derfor siges det at der skal være en linjelængde på 45-75 tegn inkl. Mellemrum. Linjerne må dog gerne være kortere hvis det er det valgt layout, f.eks. hvis man har teksten i spalter.</p>
          <p class="kilde">FIND THE SOURCE</p>
        </section> <!-- linjeafstand_tekst -->

        <section id="opbygning_overskrift" class="under_overskrift">
          <h2>Skriftens opbygning</h2>
        </section> <!-- opbygning_overskrift -->

        <section id="opbygning_tekst" class="tekstfelt">
          <p>En skrift består af majuskler, minuskler, højder og linjeafstande, men derudover består det også af tracking, kerning og kontrast. Tracking er afstanden mellem de enkelte ord. Har man lav tracking stå de altså tæt sammen, og hvis man har høj tracking er der store mellemrum. Kerning er derimod afstanden mellem bogstaverne. Her ses ikke på alle bogstaver generelt men mellem to specifikke bogstaver. Dette skyldes at bogstaverne ikke fylder ligeså meget. På den måde kan det justeres så bogstaverne opfattes som at være i det samme ord uden at skille ud.</p>
          <a class="kilde" href="https://www.webfx.com/blog/web-design/the-basics-of-typography/ "><p>webfx.com</p></a>
        </section> <!-- opbygning_tekst -->

        <section id="tracking_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/tracking.jpg" alt="Eksempel på tracking">
          <blockquote>
            <p>Eksempel op tracking, med høje og lave værdier.</p>
            <a class="kilde" href="https://www.webfx.com/blog/web-design/the-basics-of-typography/ "><p>webfx.com</p></a>
          </blockquote>
        </section> <!-- tracking_eksempel -->

        <section id="kerning_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/kerning.jpg" alt="Eksempel på kerning">
          <blockquote>
            <p>Eksempel på ord med og uden kerning.</p>
            <a class="kilde" href="https://www.webfx.com/blog/web-design/the-basics-of-typography/ "><p>webfx.com</p></a>
          </blockquote>
        </section> <!-- kerning_eksempel -->

        <section id="kontrast" class="boks">
          <section id="kontrast_tekst" class="tekstfelt">
            <p>Derudover kan man også væge en skrifttype yd fra deres kontrast. Her omhandler det forskellen på de tykke og tynde streger i bogstaverne. Hvis der er en høj kontrast, hvor de tynde streger er meget tynde, bliver det svært at læse i en lille skriftstørrelse.</p>
            <a class="kilde" href="www.typeburrito.com/stop-feeling-dumb-about-pairing-fonts"><p>typeburrito.com</p></a>
          </section> <!-- kontrast_tekst -->

          <section id="kontrast_eksempel" class="illustrationer">
            <img src="billeder/grafisk_design/contrast.png" alt="Eksemepl på kontrast">
            <blockquote>
              <p>Eksempel på lave og høje kontrast</p>
              <a class="kilde" href="www.typeburrito.com/stop-feeling-dumb-about-pairing-fonts"><p>typeburrito.com</p></a>
            </blockquote>
          </section> <!-- kontrast_eksempel -->
        </section> <!-- kontrast boks -->
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
