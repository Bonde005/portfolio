<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio css</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_css.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>CSS</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>CSS står for cascading style sheets og bruges til at beskrive udseendet af en hjemmeside. På den måde kan man have en html-fil med informationer og struktur og en css-fil, også kaldet stylesheet, som indeholder udseende. Således har man strukturen og udseendet hver for sig, så man behøver ikke at ændre på begge hvis man vil lave en ændring på siden. </p>
          <p class="kilde">(Niels Østergaard, introduktion til HTML)</p>
        </section> <!-- indledning -->

        <section id="falsk_overskrift" class="under_overskrift">
        </section> <!-- For at have en stregn som der var en overskrift -->

        <section id="selectors_tekst" class="tekstfelt">
            <p>CSS er sit eget sprog og bruger derfor ikke html elementer, men CSS kommunikerer med html, på den måde at man vælger hvad der skal styles fra htmlen. Det gør man ved at man vælger fra htmlen ved at bruge selectors. Der er flere forskellige selectors som kan vælge forskellige tags fra htmlen. Med en element selector vælger man elementer fra html-filen, f.eks. et tag &alt;p&gt; som i CSS-filen bliver valgt med p. Der er ligeledes id selectors og class selectors som der angives med #idnavnet og class bliver angivet .classnavnet. Der findes også pseudo-class selectors som er mere specifik, ved at ikke bare vælge et element men f.eks. den første i elementet (first-child), den kan også bruges til at lave en udseendemæssig forskel på links. Man vælger et element fra html efterfulgt af et kolon og det specifikke man vil vælge. Nogle eksempler: </p>
            <ul>
              <li>a:visited</li>
              <li>li:first-child</li>
            </ul>
          <p class="kilde">(Niels Østergaard, Introduktion til CSS)</p>
        </section> <!-- selectors_tekst -->

        <section id="selector_eksempel_1" class="illustrationer">
          <img src="billeder/websites/css/selector_eksempel_1.png" alt="Eksempler af selectors">
          <blockquote>
            <p>Eksempel på elemt- og idselector</p>
          </blockquote>
        </section> <!-- selector_eksempel_1 -->

        <section id="selector_eksempel_2" class="illustrationer">
          <img src="billeder/websites/css/selector_eksempel_2.png" alt="Eksempler af selectors">
          <blockquote>
            <p>Eksempel på class- og pseudo-classselector</p>
          </blockquote>
        </section> <!-- selector_eksempler_2 -->

        <section id="strukturelselector_tekst" class="tekstfelt">
            <p>Udover at der er forskellige typer af selectors er der også nogle strukturelle selectors. Man kan bruge descendant selectors til at vælge ét specifikt element indeni en eller flere andre elementer. F.eks. hvis man vil style på et afsnit indeni en sektion kan man bruge section p og derved styler man på alle afsnits der er indeni sektioner. For at gøre det mere specifikt kan man bruge en id selector f.eks. #specifiktsektion p, så styler man på alle afsnit inden i sektionen med IDen specifiktsektion. Man kan også bruge kombinations selectors hvis man vil style flere elementer på samme måde. På den måde sparer man på pladsen og gør det mere overskueligt. Et eksempel er hvis alle ens overskrifter skal have den samme font, så vælger man alle sine overskrifter ved h1, h2, h3, h4. </p>
            <p class="kilde">(Niels Østergaard, Introduktion til CSS)</p>
        </section> <!-- strukturelselector_tekst -->

        <section id="strukturelselector_billede" class="illustrationer">
          <img src="billeder/websites/css/selector_eksempel_3.png" alt="Strukturelle selectors">
          <blockquote>
            <p>Eksempler på strukturelle selectors</p>
          </blockquote>
        </section> <!-- strukturelselector_billede -->

        <section id="deklaration_tekst" class="tekstfelt">
          <p>I stedet for et element har CSS deklarationer som angives med {} efter en selector. Alt det man vil style på den udvalgte selector skrives imellem de to krøllede parenteser. Det præcise man vil style angives med en property, f.eks. hvis man vil ændre farve bruger man propertyen color, som bliver efterfulgt af en separator som er et kolon. Derefter indsætter man et value, altså en værdi ligesom man gjorde i HTML. I dette eksempel er det en farve, det kan angives ved en RGBA-kode, HEX-kode, HSL eller ved navn som nogle farver kan angives med. F.eks. kan man godt bruge valuen red. Valuen bliver efterfulgt af en deklaration separator som er et semikolon, således kan man style på et nyt property. </p>
          <p class="kilde">(Niels Østergaard, Introduktion til CSS)</p>
        </section> <!-- deklaration_tekst -->

        <section id="deklaration_billede" class="illustrationer">
          <img src="billeder/websites/css/declaration.png" alt="En deklaration">
          <blockquote>
            <p>Opbygningen af en deklaration</p>
            <a class="kilde" href="https://blitzen.com/blog/how-to-learn-to-css-style-code-in-15-minutes-or-less/"><p>blitzen.com</p></a>
          </blockquote>
        </section> <!-- deklaration_billede -->

        <section id="embed_tekst" class="tekstfelt">
          <p>Der er tre måder hvorpå man kan placere CSS. Man kan embed CSS i html-filen, dvs. at man i selve html-filen har et område for CSS som bliver angivet med &alt;style&gt; og &alt;/style&gt; herimellem kan man skrive CSS, som var det i en CSS-fil. Det CSS der bliver embedet, gælder kun for det dokument det befinder sig i. Derudover kan man have CSS i sin egen fil, som bliver linket til i html-filen. På den måde kan man style flere sider på samme måde. Til sidst kan man bruge inline hvor man laver CSS i html elementet og derved style på det specifikke element.</p>
          <p class="kilde">(Niels Østergaard, Introduktion til CSS)</p>
        </section> <!-- embed_tekst -->

        <section id="kaskade_tekst" class="tekstfelt">
          <div class="tekst">
            <p>Arbejder man i en fil eller i embedet CSS er det vigtigt at huske på kaskadereglerne. Kaskade er ligesom den måde vande ryger ned over ryggen på en and, altså man starter oppefra og kører nedad. På den måde læses filen og hvis der er modstridende CSS-deklarationer vil kaskadereglerne sige at det er den sidste der anvendes. Derudover vil noget mere specifikt vælges som den gældende. Altså hvis der styles på et samme element to steder i filen, vil den sidste være gældende medmindre at den første er et mere specifikt selector, f.eks. er et id selector mere præcist end et element selector. Dette gælder ikke kun i modsætning til rækkefølgen af deklarationerne, men specifikke har forrang over mere generelle. Der er altså tre overordnede regler der indgår i kaskadereglerne.</p>
          </div> <!-- tekst -->
          <div class="punkter">
            <ul>
              <li>Specificity: Mere specifik har forrang mod mere general</li>
              <li>Source order: Seneste deklarationer har forrang mod tidligere deklareringer</li>
              <li>Specificity har forrang mod Source order</li>
            </ul>
            <p class="kilde"> - Niels Østergaard, Introduktion til CSS</p>
          </div> <!-- punkter -->
          <p class="kilde">(Niels Østergaard, Introduktion til CSS)</p>
        </section> <!-- selectors_tekst -->

        <section id="kaskade_billede" class="illustrationer">
          <img src="billeder/websites/css/cascade.png" alt="Et Vandfald">
          <blockquote>
            <p>Et eksempel på kaskade</p>
            <a class="kilde" href="https://www.visitroanokeva.com/listings/cascade-falls/8744/"><p>visitroanokeva.com</p></a>
          </blockquote>
        </section> <!-- deklaration_billede -->
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
