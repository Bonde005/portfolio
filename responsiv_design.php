<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Responsiv Design</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_responsiv_design.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Responsiv Design</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>I nutidens verden bruger man ikke længere kun hjemmesider på sin computer, men også på tablet og mobil. Det betyder at der er en helt masse forskellige skærmstørrelser som en hjemmeside kan vises på. Derfor skal man til at tænke på layoutformer, hvor der er fire overordnede tilgange. </p>
          <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#Statisk_layout_overskrift"><h2>Statisk layout</h2></a>
            <a href="#flydende_layout_overskrift"><h2>Flydende webdesign</h2></a>
            <a href="#responsiv_layout_overskrift"><h2>Responsive layout</h2></a>
            <a href="#adaptiv_layout_overskrift"><h2>Adaptive layout</h2></a>
            <a href="#grid_overskrift"><h2>Grid</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="statisk_layout" class="boks">
          <section id="Statisk_layout_overskrift" class="under_overskrift">
            <h2>Statisk layout</h2>
          </section> <!-- Statisk_layout_overskrift -->

          <section id="statisk_layout_tekst" class="tekstfelt">
            <p>Her er layoutet baseret på faste mål, og der er ikke nogen ændringer ved de forskellige skærmstørrelser. Hvis skærmen derfor er større end der er blevet designet til, bliver den ekstra plads der er tilovers bare til ekstra luft og er derfor ikke stylet. Hvis en computerskærm er mindre end den tiltænkte størrelse bliver siden skåret af, og man skal i stedet scrolle for at se de andre aspekter af siden. Når siden åbnes på en mobil, vil siden være skaleret ned så den fylder skærmen bedst muligt, så siden er i realiteten blevet zoomet. </p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </section> <!-- statisk_layout_tekst -->

          <section id="statisk_layout_billede" class="illustrationer">
            <img src="billeder/websites/responsiv_design/layout_statisk.png" alt="Et statisk layout">
            <blockquote>
              <p>Illustration af statisk layout</p>
              <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
            </blockquote>
          </section> <!-- statisk_layout_billede -->
        </section> <!-- statisk_layout -->

        <section id="flydende_layout" class="boks">
          <section id="flydende_layout_overskrift" class="under_overskrift">
            <h2>Flydende Webdesign</h2>
          </section> <!-- flydende_layout_overskrift -->

          <section id="flydende_layout_tekst" class="tekstfelt">
            <p>Her tilpasser elementerne sig efter bredden af skærmen. Her bliver bredden angivet på en relativ størrelse og derfor ofte i procent. På den måde kan elementer blive meget smalle for at tilpasse sig skærmbredden, selvom der ofte er grænser på hvor smalt indholdet kan blive. Det bliver brugt til sider hvor funktionalitet og indholdet bliver prioriteret mere end det grafiske design.</p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </section> <!-- flydende_layout_tekst -->

          <section id="flydende_layout_billede" class="illustrationer">
            <img src="billeder/websites/responsiv_design/layout_flydende.png" alt="Et flydende layout">
            <blockquote>
              <p>Illustration af flydende layout</p>
              <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
            </blockquote>
          </section> <!-- flydende_layout_billede -->
        </section> <!-- flydende_layout -->

        <section id="responsiv_layout" class="boks">
          <section id="responsiv_layout_overskrift" class="under_overskrift">
            <h2>Responsiv Layout</h2>
          </section> <!-- responsiv_layout_overskrift -->

          <section id="responsiv_layout_tekst" class="tekstfelt">
            <p>Består af et flydende layout men hvor der er angivet en række regler, som der ændre på layoutet efter skærmbredden. Her bruges der @media i CSS til disse regler, hvor der også bruges breakpoints til at angive en bredde hvor en ny regel gælder. På den måde tilpasser indholdet sig skærmstørrelsen, og samtidig sker der ændringer i layoutet så det grafiske design også bliver vægtet. Det er standarden i dag, og her skal man lave planlægning inden man går i gang med produktionen af siden. Her er tankegangen at man starter med at designe til mobilen før desktop versioner.</p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </section> <!-- responsiv_layout_tekst -->

          <section id="responsiv_layout_billede" class="illustrationer">
            <img src="billeder/websites/responsiv_design/layout_responsiv.png" alt="Et responsivt layout">
            <blockquote>
              <p>Illustration af responsiv layout</p>
              <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
            </blockquote>
          </section> <!-- responsiv_layout_billede -->
        </section> <!-- responsiv_layout -->

        <section id="adaptiv_layout" class="boks">
          <section id="adaptiv_layout_overskrift" class="under_overskrift">
            <h2>Adaptiv layout</h2>
          </section> <!-- adaptiv_layout_overskrift -->

          <section id="adaptiv_layout_tekst" class="tekstfelt">
            <p>Adaptive layout findes mellem statisk og responsiv layout. Det er flere statiske layouts som styres i CSS med @mediaqueries. Der laves altså flere statiske layouts til flere forskellige skærmstørrelser, hvis man så har en skærmstørrelse der ikke er angivet, kan der være for meget eller lidt plads, og bliver altså ikke tilpasset skærmbredden. Det benyttes oftest når en side med statistik layout skal gøres responsiv. (Niels Østergaard, Responsive Design </p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </section> <!-- adaptiv_layout_tekst -->

          <section id="adaptiv_layout_billede" class="illustrationer">
            <img src="billeder/websites/responsiv_design/layout_adaptiv.png" alt="Et adaptivt layout">
            <blockquote>
              <p>Illustration af adaptiv layout</p>
              <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
            </blockquote>
          </section> <!-- adaptiv_layout_billede -->
        </section> <!-- adaptiv_layout -->

        <section id="grid_overskrift" class="under_overskrift">
          <h2>Grid</h2>
        </section> <!-- grid_overskrift -->

        <section id="grid_tekst" class="tekstfelt">
          <p>Man kan opnå responsiv design ved at benytte grid i koden. Her tildeler man sidens indhold områder at være på, som i kasser i et ”gitter” som man selv har lavet. Grid beregner derudfra selv deres størrelse ud efter indholdet. Man kan også selv retter i størrelsen. Hvis man vil have noget til at fylde to ”kasser”, kan man i stedet gøre kassen bredere, hvis dette passer til resten af layoutet. Man angiver rækker og kolonners størrelse med fr, forkortet for frame. Så hvis den skal være dobbelt så stor skriver man 2fr. På den måde kan man justere meget i layoutet og få det man vil. Således kan man ændre meget i layoutet alt efter skærmstørrelse, vha. breakpoints. </p>
          <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
        </section> <!-- grid_tekst -->

        <section id="grid_mobil_billede" class="illustrationer">
          <img src="billeder/websites/responsiv_design/grid_mobile.png" alt="mobil version">
          <blockquote>
            <p>Mobil version i en øvelse om grid</p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </blockquote>
        </section> <!-- grid_mobil_billede -->

        <section id="grid_tablet_billede" class="illustrationer">
          <img src="billeder/websites/responsiv_design/grid_tablet.png" alt="tablet version">
          <blockquote>
            <p>Tablet version i en øvelse om grid</p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </blockquote>
        </section> <!-- grid_tablet_billede -->

        <section id="grid_desktop_billede" class="illustrationer">
          <img src="billeder/websites/responsiv_design/grid_dekstop.png" alt="desktop version">
          <blockquote>
            <p>Desktop version i en øvelse om grid</p>
            <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
          </blockquote>
        </section> <!-- grid_desktop_billede -->

        <section id="grid_slut_tekst" class="tekstfelt">
          <p>Man bruger grid ved at angive sektioner eller diver, som man vil have i kasser på siden, nogle IDer i html-filen. Dernæst giver man dem hver et ”grid-area” i CCS. Derudover skal grid i CSS bliver ”displayet”, således CSS ved at der skal være et grid. Herefter har man et templatearea hvor man opsætter sit grid, med gridareasene som man har givet indholdet. </p>
          <p class="kilde">(Niels Østergaard, Responsive Design + CSS Grid)</p>
        </section> <!-- grid_slut_tekst -->
      </div>

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
