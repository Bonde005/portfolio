<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Farveteori</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_farveteori.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Farveteori</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Når man skal designe noget, er farver en vigtig del af det. Farver kan have forskellige betydninger og ligeledes opfattes forskelligt. Derudover skal man sørge for at farverne ”ser godt ud” sammen, således de ikke har en dårlig effekt på brugeren/målgruppen. </p>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#farvebeskrivelse_overskrift"><h2>Farvebeskrivelse</h2></a>
            <a href="#farvecirkel_overskrift"><h2>Farvecirkel og sammensætning</h2></a>
            <a href="#farvekoder_overskrift"><h2>Farvekoder</h2></a>
            <a href="#farvespykologi_overskrift"><h2>Farvepsykologi</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="farvebeskrivelse_overskrift" class="under_overskrift">
          <h2>Farvebeskrivelse</h2>
        </section> <!-- farvebeskrivelse_overskrift -->

        <section id="farvebeskrivelse_tekst" class="tekstfelt">
          <p>Farver beskrives ud fra tre begreber: kulør, intensitet og lyshed. Kulør beskriver farven, f.eks. rød, blå, gul. Intensiteten omhandler hvor meget grå farven indeholder. Der kan f.eks. var tale om en støvet rød, her har farven en lav intensitet fordi den er dæmpet med grå, fremfør en klar rød med høj intensitet. Lyshed indikerer hvor meget hvid eller sort farven indeholder i forhold til kuløren. Her kendes det i dagligdagen som f.eks. lyserød, lyseblå, mørkerød og mørkeblå. Intensitet og lyshed er ofte forbundet eftersom en ændring i lysheden vil også ændre intensiteten, da farven bliver mindre ”ren”. Derimod kan man godt ændre intensiteten uden at ændre lysheden.</p>
          <p class="kilde">(Interfacedesign, s. 173-174)</p>
        </section> <!-- farvebeskrivelse_tekst -->

        <section id="farvebeskrivelse_eksempler" class="illustrationer">
          <img src="billeder/grafisk_design/farve_beskrivelse.png" alt="Eksempel af kulør, intensitet og lyshed">
          <blockquote>
            <p>Eksempel på kulør, intensitet og lyshed</p>
          </blockquote>
        </section> <!-- farvebeskrivelse_eksempler -->

        <section id="farvecirkel_overskrift" class="under_overskrift">
          <h2>Farvecirkel og sammensætning</h2>
        </section> <!-- farvecirkel_overskrift -->

        <section id="farvecirkel_tekst" class="tekstfelt">
          <p>For at skabe et overblik over farverne og hvilke der passer godt sammen, bliver de ofte visuelleret som i en cirkel. Den består heraf de primære farver, som ikke kan blandes af nogle andre farver. Dette er rød, gul og blå. Imellem de primærefarver finder man de sekundærfarver, som er de farver man får af at blande de primærefarver. Det er grøn, orange og lilla. De sekundærfarver er placeret mellem deres tilhørende primærefarver, altså de farver de er en blanding af. Derudover indeholder cirklen ofte tertiærefarver, som er farverne der opstår når man blander sekundærfarver med primærfarver. </p>
          <p class="kilde">(Interfacedesign, s. 175)</p>
        </section> <!-- farvecirkel_tekst -->

        <section id="farvecirkel_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul.png" alt="Et farvehjul">
          <blockquote>
            <p>Et farvehjul, bestående af primær-, sekundær- og teritærfarver</p>
          </blockquote>
        </section> <!-- farvecirkel_eksempel -->

        <section id="composition_tekst" class="tekstfelt">
          <div class="tekst">
            <p>For at skabe et overblik over farverne og hvilke der passer godt sammen, bliver de ofte visuelleret som i en cirkel. Den består heraf de primære farver, som ikke kan blandes af nogle andre farver. Dette er rød, gul og blå. Imellem de primærefarver finder man de sekundærfarver, som er de farver man får af at blande de primærefarver. Det er grøn, orange og lilla. De sekundærfarver er placeret mellem deres tilhørende primærefarver, altså de farver de er en blanding af. Derudover indeholder cirklen ofte tertiærefarver, som er farverne der opstår når man blander sekundærfarver med primærfarver. </p>
            <p class="kilde">(Interfacedesign, s. 183 & 176)</p>
          </div> <!-- tekst -->
          <div class="punkter">
            <dl>
              <dt>Monokron</dt>
                <dd>Benyttelsen af en kulør med forskellige intensitet og lyshed.</dd>
              <dt>Split komplimentær</dt>
                <dd>Én kulør med de to farver der ligger ved siden af den komplimentærefarve.</dd>
              <dt>Dobbelt komplimentær</dt>
                <dd>Hvor man benytter sig af to sæt af komplimentærefarver, som har en lille afstand imellem sig.</dd>
            </dl>
            <a href="https://youtu.be/Qj1FK8n7WgY"><p>(Understanding Color, Blender Guru)</p></a>
          </div> <!-- punkter -->
        </section> <!-- sammensætning_tekst -->

        <section id="analog_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul_analogai.png" alt="Analoge farver">
          <blockquote>
            <p>Et eksempel på analoge farver i et farvehjul</p>
          </blockquote>
        </section> <!-- analog_eksempel -->

        <section id="complimentary_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul_complimentary.png" alt="komplimentær farver">
          <blockquote>
            <p>Et eksempel på komplimentære farver i et farvehjul</p>
          </blockquote>
        </section> <!-- complimentary_eksempel -->

        <section id="dobbelcomplimentary_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul_dobbelcomplimentary.png" alt="dobbelt komplimentær farver">
          <blockquote>
            <p>Et eksempel på dobbelt komplimentære farver i et farvehjul</p>
          </blockquote>
        </section> <!-- dobbelcomplimentary_eksempel -->

        <section id="monokron_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul_monokron.png" alt="Monokron farve">
          <blockquote>
            <p>Et eksempel på monokron farver i et farvehjul</p>
          </blockquote>
        </section> <!-- monokron_eksempel -->

        <section id="splitcomplimentary_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul_splitcomplimentary.png" alt="Split komplimentære farver">
          <blockquote>
            <p>Et eksempel på split komplimentære farver i et farvehjul</p>
          </blockquote>
        </section> <!-- splitcomplimentary_eksempel -->

        <section id="triade_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/farvehjul_triade.png" alt="Triade farver">
          <blockquote>
            <p>Et eksempel på triade farver i et farvehjul</p>
          </blockquote>
        </section> <!-- triade_eksempel -->

        <section id="farvekoder_overskrift" class="under_overskrift">
          <h2>Farvekoder</h2>
        </section> <!-- farvekoder_overskrift -->

        <section id="farvekoder_rgb_tekst" class="tekstfelt">
          <p>Når man arbejder med farver digitalt, benytter man sig af koder til at angive farverne. Der er forskellige koder man kan bruge, og der har forskellige formål. På en digital skærm vises farverne med lys og farverne rød, grøn og blå. På den måde viser skærmen farver ved at blande de tre farver samtidig med at justere i lysets intensitet. Dette kaldes RGB-farver, som kan angives med forskellige farvekoder. De to mest anvendte er HEX- og RGB-kode. Ved koden angiver man de tre farvers lys intensitet med en værdi mellem 0 og 255, hvor 0 er ingen lys og 255 er fuld lysintensitet. Ved en RGB-kode angives værdierne direkte til de farvede lamper, hvor en HEX-kode benytter et forkortet format på seks tegn som angiver værdierne. Dette gøres med tal fra 0 til 9 hvorefter der bruges bogstaver fra a til f. På denne måde forkortes, hvor der bruges to cifre, bogstaver eller en kombination til at angive en pæres værdi. </p>
          <p class="kilde">(Interfacedesign, s. 180)</p>
        </section> <!-- farvekoder_rgb_tekst -->

        <section id="rgb_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/rgb.PNG" alt="RGB farvevalg i Illustrator">
          <blockquote>
            <p>I illustrator kan det set hvordan man angiver der tre farve en værdi på direkte ved RGB og ved en HEX-kode</p>
          </blockquote>
        </section> <!-- rgb_eksempel -->

        <section id="farvekoder_cmyk_tekst" class="tekstfelt">
          <p>Hvis man skal have et design printet benytter man sig af andre koder, eftersom en printer ikke benytter sig af RGB-farver. I stedet for at tilføje lys til farverne, trækker printeren lyset fra farverne, og på den måde justere kulørerne. Derudover bruger printeren ikke rød, grøn og blå til at blande farver, men i stedet bruger den cyan, magenta, gul og sort. På engelsk kaldes det cyan, magenta, yellow og key i denne sammenhæng, hvilket forkortes til at den bruger CMYK farver. Derfor skal man give disse farver værdier for at få de farver man vil. Dette kan man gøre på samme måde som med RGB-koden og angive farvernes værdier direkte. </p>
          <p class="kilde">(Carsten Kjeldsen Bogner, Design: Farver)</p>
        </section> <!-- farvekoder_cmyk_tekst -->

        <section id="cmyk_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/cmyk.png" alt="CMYK farvevalg i Illustrator">
          <blockquote>
            <p>I illustrator kan man se hvordan man laver farver ud fra CMYK</p>
          </blockquote>
        </section> <!-- cmyk_eksempel -->

        <section id="farvespykologi_overskrift" class="under_overskrift">
          <h2>Farvepsykologi</h2>
        </section> <!-- farvespykologi_overskrift -->

        <section id="farvespykologi_tekst" class="tekstfelt">
          <p>Der findes mange teorier om hvordan farver opfattes og hvilke følelser de associeres med. Der er dog også en forskel mellem køn og kultur når det omhandler farver. Varme farver, som er farverne indenfor det røde og gule spektrum i cirklen, et tilknyttet med energi, passion og entusiasme. Hvorimod kolde farver, som er farver indenfor det blå spektrum, bliver forstået som ro, stabilitet og professionalisme. <p class="kilde">(Interfacedesign, s. 176) </p>Der er forskellige teorier om de tilknyttede følelser for de specifikke kulører. Derudover er det vigtigt at være opmærksom på at farve opfattes forskelligt rundt om i verden baseret på kulturen. F.eks. er gul i Danmark farve for discount og tilbud hvorimod det i USA er Orange. <p class="kilde">(Carsten Kjeldsen Bogner, Design: Farver)</p></p>
          <p class="kilde">(Interfacedesign, s. 175)</p>
        </section> <!-- farvespykologi_tekst -->

        <section id="farvespykologi_logoer_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/colour_brand_emotion.png" alt="logoer opdelt i farver og følelser">
          <blockquote>
            <p>Et eksempel på farvepsykologi i forbindelse med logoer og brands</p>
          </blockquote>
        </section> <!-- farvepsykologi_logoer_eksempel -->

        <section id="farvespykologi_farver_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/colours_values.jpg" alt="Farver og deres symbolik og følelser">
          <blockquote>
            <p>Et eksempel på farver og deres værdier</p>
          </blockquote>
        </section> <!-- farvepsykologi_farver_eksempel -->

        <section id="farvespykologi_gender_tekst" class="tekstfelt">
          <p>Derudover er der forskel i køn og hvilke farver de kan lide. Blå er ofte både mænd og kvinders yndlingsfarve. Derimod er brun og orange oftest den farve de mindst bryder sig om. Derudover kan det ses at flere kvinder kan lide lille, hvorimod mænd betragter det som en af de farver de mindst kan lide.</p>
          <a class="kilde" href="https://www.helpscout.net/blog/psychology-of-color/"><p>helpscout.com</p></a>
        </section> <!-- farvespykologi_gender_tekst -->

        <section id="farvespykologi_bedstefarver_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/favorite_colour.png" alt="Mænd og kvinders yndlingsfarver">
          <blockquote>
            <p>Mænd og kvinders yndlingsfarver</p>
            <a class="kilde" href="https://www.helpscout.net/blog/psychology-of-color/"><p>helpscout.com</p></a>
          </blockquote>
        </section> <!-- farvepsykologi_bedstefarve_eksempel -->

        <section id="farvespykologi_ikkebedstefarver_eksempel" class="illustrationer">
          <img src="billeder/grafisk_design/leastfavorite_colours.png" alt="Farver mænd og kvinder mindst kan lide">
          <blockquote>
            <p>De farver mænd og kvinder mindst kan lide</p>
            <a class="kilde" href="https://www.helpscout.net/blog/psychology-of-color/"><p>helpscout.com</p></a>
          </blockquote>
        </section> <!-- farvepsykologi_ikkebedstefarve_eksempel -->
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
