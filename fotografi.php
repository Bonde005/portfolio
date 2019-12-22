<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Fotografi</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_fotografi.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Fotografi</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>I nutiden kan næsten alle tage billeder med deres mobil eller et digitalt kamera, men det betyder ikke at alle har forstand på hvordan et kamera virker og dens funktioner. Det betyder blot at kameraer har fået brugervenlige funktioner. Hvis man i stedet vil tage nogle helt specifikke billeder, kan man stadig bruge kameraernes funktioner til at få det billede man ser for sig.</p>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#kameraatonomi_overskrift"><h2>Sådan virker et kamera</h2></a>
            <a href="#iso_overskrift"><h2>ISO</h2></a>
            <a href="#lukkertid_overskrift"><h2>Lukkertid</h2></a>
            <a href="#arpeture_overskrift"><h2>Blænde</h2></a>
            <a href="#lys_overskrift"><h2>Lys</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="kameraatonomi_overskrift" class="under_overskrift">
          <h2>Sådan virker et kamera</h2>
        </section> <!-- kameraatonomi_overskrift -->

        <section id="kameraatonomi_tekst" class="tekstfelt">
          <p>Et kamera tager billeder vha. lys. Når man tager et billede, åbner kameraet op for lyset og lukker det ind, hvor det bliver ført igennem linser til en sensor som så danner billedet. Dvs. at når man gerne vil have et bestemt udtryk i sit billede skal man manipulere det lys der kommer frem til sensoren. Dette gøres ved at indstille på ISO, lukkertid og blænde. Derudover kan man kigge på brændvidde. Her indstiller man på afstanden vha. et objektiv. På den måde får billedet en anden vinkel uden at man selv skal rykke på sig.</p>
          <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
        </section> <!-- kameraatonomi_tekst -->

        <section id="kameraatonomi_eksempler" class="illustrationer">
          <img src="billeder/grafisk_design/kamera_indvendig.PNG" alt="Det indvendige af et kamera">
          <blockquote>
            <p>Indersiden af et kamera</p>
            <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
          </blockquote>
        </section> <!-- kameraatonomi_eksempler -->

        <section id="iso_overskrift" class="under_overskrift">
          <h2>ISO</h2>
        </section> <!-- iso_overskrift -->

        <section id="iso_tekst" class="tekstfelt">
          <p>Når man indstiller ISO ændrer man i lysfølsomheden. På den måde kommer der mere eller mindre lys ind på billedet. Ved at sensoren er mere følsom skal der ikke ligeså meget lys til. Derudover kan en høj ISO medføre støj fra sensoren, som kan ses på billedet. Billedet vil derfor blive mere grynet, og det skulle gerne undgås.</p>
          <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
        </section> <!-- iso_tekst -->

        <section id="iso_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/iso.png" alt="Eksempel på ISO">
          <blockquote>
            <p>Forskellen på høj og lav ISO</p>
            <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
          </blockquote>
        </section> <!-- iso_eksempel -->

        <section id="lukkertid_overskrift" class="under_overskrift">
          <h2>Lukkertid</h2>
        </section> <!-- lukkertid_overskrift -->

        <section id="lukkertid_tekst" class="tekstfelt">
          <p>Der sidder en lukker indeni kameraet, som er den der åbner op og lukker lyset ind. Man justerer derved på hvor lang tid lukkeren skal være åben. Dette benyttes særligt i forbindelse med motiver i bevægelser. Ved at have en lang lukkertid kommer der mere bevægelsessløring og rystelser på billedet. Hvis man derimod har kort lukkertid kommer det bevægende motiv til at se stillestående ud. På den måde kan man fange noget i bevægelse, og samme tid gøre det muligt at se på billedet at motivet er i bevægelse. Man skal dog være opmærksom på at hvis man har en lang lukkertid skal kameraet stå stille, og her bruges gerne et stativ.</p>
          <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
        </section> <!-- lukkertid_tekst -->

        <section id="lukkertid_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/lukkertid.PNG" alt="Eksempel på forskellig lukkertid">
          <blockquote>
            <p>Forskellen på høj og lav lukkertid</p>
            <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
          </blockquote>
        </section> <!-- lukkertid_eksempel -->

        <section id="arpeture_overskrift" class="under_overskrift">
          <h2>Blænde</h2>
        </section> <!-- arpeture_overskrift -->

        <section id="arpeture_tekst" class="tekstfelt">
          <p>Ved at justere på blænden kan man ændre i billedets dybdeskarphed. Dette gøres ved at man justerer hvor meget lys der kommer ind i kameraet, og på den måde ændrer man fokusset i billedet. Et lavt blændetal giver en stor blændeåbning, og et højt blændetal giver en lille blændeåbning.</p>
          <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
        </section> <!-- arpeture_tekst -->

        <section id="arpeture_high_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/blaendetal_high.PNG" alt="Eksempel på høj blændetal">
          <blockquote>
            <p>Eksempel på høj blændetal</p>
            <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
          </blockquote>
        </section> <!-- arpeture_high_eksempel -->

        <section id="arpeture_low_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/blaendetal_lavt.PNG" alt="Eksempel på lav blændetal">
          <blockquote>
            <p>Eksempel på lav blændetal</p>
            <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
          </blockquote>
        </section> <!-- arpeture_low_eksempel -->

        <section id="lys_overskrift" class="under_overskrift">
          <h2>Lys</h2>
        </section> <!-- lys_overskrift -->

        <section id="lys_tekst" class="tekstfelt">
          <p>Når man tager billeder af et motiv, kan billedet ændre udtryk alt efter hvilket lys der på motivet. Der er en forskel om man bruger varmt eller koldt lys. Det kolde lys svare til lyset midt på dagen, hvor lyset virker hvidt. Varmt lys derimod svare til morgen- og aftensolen, hvor lyset er mere gult og det er også det lys der typisk i hjemmet. Ved at lege med lysets temperatur kan man altså også for forskellige udtryk i billedet. (Product Photography, Joseph Linaschke) Derudover er der også en forskel på hårdt og blødt lys. Blødt lys ”bøjer” sig motivet og følger dens former, i forhold til hårdt lys hvor der kommer en mere klar skilning. (Photography for Graphic Designers, Ben Long) Man kan bruge forskellige lamper og andet udstyr til at indstille temperatur, manipulere lysets hårdhed og refleksionen af lyset og deraf skygger.</p>
          <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
        </section> <!-- lys_tekst -->

        <section id="lys_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/lys.PNG" alt="Eksempel på hård og blød lys">
          <blockquote>
            <p>Eksempel på hård og blød lys</p>
            <p class="kilde">(Niels Østergaard, fotografering: grundlæggende)</p>
          </blockquote>
        </section> <!-- lys_eksempel -->
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
