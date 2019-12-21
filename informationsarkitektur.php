<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Informationsarkitektur</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_informationsarkitektur.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Informationsarkitektur</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>På en website er der masser af information som skal struktureres bedst muligt, således det bliver nemt at finde rundt. En af de elementer hvor informationsstruktur ofte bruges i forbindelse med websites, er navigation i form af menuer eller ved e-handel sortering af produkter. Ved at sortere sin information kan man lettere lave sit navigationsdesign, og her få en god mapping. Mapping er relationen mellem en betjeningsenhed, det objekt der skal betjenes og det resultat man forventer der kommer som følge af interaktionen. God mapping er altså hvor det fungerer som man forventer.</p>
          <blockquote id="citat">
            <p><q id="citat_tekst">Good information architecture enables people to find and do what they came for.
              Great information architecture takes find out of the equation: the site behaves as the visitor expects.</q></p>
            <p class="kilde">Jeffrey Zeldman (Founder of A List Apart)</p>
          </blockquote>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#sortering_overskrift"><h2>Sortering</h2></a>
            <a href="#website_struktur_overskrift"><h2>Website struktur</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="sortering_overskrift" class="under_overskrift">
          <h2>Sortering</h2>
        </section> <!-- sortering_overskrift -->

        <section id="sortering_tekst" class="tekstfelt">
          <p>Der er mange måde at sortere sin information på, hvis det slet ikke er sorteret og kommer i tilfældig rækkefølge, kan det svære uoverskueligt og svært at finde det man leder efter. Derfor er det vigtigt at sortere, og her er der et princip kaldet LATCH. L står for location, her sortere man altså efter lokation. Det behøver ikke at være en geografisk lokation men kan også være en fysisk placering på siden. A står for alphabet, her sorteres der altså efter alfabetisk rækkefølge. Dette er noget man som menneske har en tendens til da det er hvad man kender fra registre, ordlister og meget mere. T står for time, her er der sorteret efter tid. Dette gøres ofte i form af en tidslinje men kan også være efter historik. C står for category, her inddeler man i kategorier. Der sorteres her ofte efter fællestræk. H står for hierachy, hvor det bliver sorteret efter hierarki. Her sorteres der efter værdi og betydning. Et eksempel er statistik fremvist i søjler efter længde. Det bliver ofte brugt i hjemmesider i form af menuer og undermenuer, her har de globale menuer mere betydning end undermenuerne. (All You Need To Know About Information Architecture In 10 Minutes, UX Brighton) Udover disse fem kategorier er der også en sjette måde at sortere på. Det er kontinuum, her bliver sorteret efter en målt værdi f.eks. pris, point, størrelse eller vægt. Det bliver ofte brugt i forbindelse med e-handel, hvor man kan sortere efter en minimum- og en maksimumpris, og bliver vist produkter indenfor den prisklasse.</p>
          <p class="kilde">(Kommunikation i multimediedesign, s. 167)</p>
        </section> <!-- sortering_tekst -->

        <section id="jemogfix_billede" class="illustrationer">
          <img src="billeder/websites/informationsstruktur/jem_og_fix_menuer.png" alt="Jem og Fixs menuer på deres hjemmeside">
          <blockquote>
            <p>Jem og Fixs hjemmeside hvor de sortere efter kategorier og alfabetisk</p>
            <a class="kilde" href="https://www.jemogfix.dk/"><p>jemogfix.dk</p></a>
          </blockquote>
        </section> <!-- jemogfix_billede -->

        <section id="jemogfix_kontinuum_billede" class="illustrationer">
          <img src="billeder/websites/informationsstruktur/jem_og_fix_kontinuum.png" alt="Sortering efter pris på Jem og Fixs webshop">
          <blockquote>
            <p>Et eksempel fra Jem og Fixs hjemmeside hvor man kan sortere efter kontinuum</p>
            <a class="kilde" href="https://www.jemogfix.dk/"><p>jemogfix.dk</p></a>
          </blockquote>
        </section> <!-- jemogfix_kontinuum_billede -->

        <section id="website_struktur_overskrift" class="under_overskrift">
          <h2>Website strukturer</h2>
        </section> <!-- website_struktur_overskrift -->

        <section id="website_struktur_tekst" class="tekstfelt">
          <p>Når man har flere websites der er sammenhængende, skal man strukturere disse. Der er tre forskellige struktur herunder. Den første er sekventiel struktur, her kommer siderne efterhinanden i en rækkefølge ligesom man kender det fra bøger. Det kan være en lineær sekvens, som er den der bruges i bøger. Derudover er der lineære sekvenser med sløjfer, hvor nogle sider kan have deres egne undersider som er inddelt i sekvenser, og som føre tilbage til den overordnet side tilhøre sløjfen. Derudover findes der en hierarkisk struktur, hvor man har en udgangsside med undersider. Altså man har en forside, som har nogle sider tilhørende. En simpel struktur her er blot en side men undersider, hvorimod en kompleks struktur er en side med underside med undersider osv. Til sidst er der webstruktur. Her er der ganske få begrænsninger, og man kan hoppe fra den ene side til den anden uden at være tvunget af en rækkefølge. Et sted hvor dette benyttes er websiten ww.wikipedia.dk. Her kan på en side springe til en anden via. Et link på siden, som indgår i teksten og derved har relevans til hinanden. </p>
          <p class="kilde">(Kommunikation i multimediedesign, s. 170-171)</p>
        </section> <!-- website_struktur_tekst -->

        <section id="bodyshop_billede" class="illustrationer">
          <img src="billeder/websites/informationsstruktur/bodyshop.png" alt="Bodyshops hjemmeside">
          <blockquote>
            <p>Bodyshops hjemmesides frontpage</p>
            <a class="kilde "href="https://www.thebodyshop.com/da-dk/"><p>thebodyshop.com</p></a>
          </blockquote>
            <p id="struktur_tekst">Siden har et hierarkisk struktur, og indeholder sekventiel struktur ved køb af varer. Der er delt på i kategorier (jul, ansigt, krop, hårpleje mm.), hvorfor nogle af underkategorierne er inddelt alfabetisk. Der er også et sæson kategori "jul". Der er en vandret globalmenu, søgefelt, ikoner til kundeservice, fysiske butikker, profil, favoritter og kurv. Derudover indeholder den også en krummesti. Siden er tilpasset til dem med et bestemt mål fx. serie, men også for dem som ikke helt ved hvad de har brug for (min hudtype, tips og råd). Forsiden har et smalt vandret banner med Call to Action, og en stort banner nedenunder, som fylder halvdelen af siden med to slides af andre CTA Begge er meget subtile i farven og flyder med resten af sidens farver og æstetik. Man kan antage at de ikke føler behov for skrigende CTA bannere, da de allerede har et medlemskab som tilbyder langt mere “køb nu” og “medlemstilbud”.</p>
        </section>
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
