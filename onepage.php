<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Onepage</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_onepage.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Onepage</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Til dette projekt blev holdet inddelt i grupper af og en enkelt på tre, hvor jeg befandt mig i tremandsgruppen. Her trak hver gruppe et fysisk produkt som de skulle tage udgangspunkt i. Projektet skulle ende med en onepage, hvorpå produktet skulle fremgå i form af et billede. Derudover skulle processen og koden bag produktet også fremvises for holdet.</p>
        </section> <!-- indledning -->

        <section id="projekt_overskrift" class="under_overskrift">
          <h2>Projektet</h2>
        </section> <!-- projekt_overskrift -->

        <section id="projektstart_tekst" class="tekstfelt">
          <p>Min gruppe trak toiletrens Full Blast fra Domestos. Vi startede med at brainstorme omkring toiletrens, hvad vi kendte til og hvad vi tænkte på. Derefter gik vi rundt og spurgte folk på campus hvad de tænkte på når vi sagde toiletrens, og hvad de så tænkte når vi viste vores produkt. På den måde fik også viden hvad andre tænker på. Vi undersøgte også informationerne på bagsiden af toiletrensen samt brandet og deres marketing. Vi tog ud i alle supermarkeder i Skive og XL-byg og tog billeder af alle de forskellige toiletrens vi kunne finde. Vi tog både billeder af forsiden og bagsiden, så vi kunne se alle forskelle. Af alle de toiletrens vi havde set lavede vi en del observationer og tanker. Vi hang billederne op hvor vi inddelte dem i tre kategorier alt efter hvor miljøvenlige de var. På den måde kunne vi nu skabe nogle nye observationer af mønstre der gik igen for dem alle og indenfor de enkelte kategorier. Vi lavede også nogle eksperimenter eftersom vi havde observeret at det stod på flasken at den kunne ætse metaller. Vi købte en miljøvenlig toiletrens, hvor vi placerede hobbyknive og blyanter i hver af de to rense, for at se forskellen det gør på fysiske objekter. Til sidst gik vi hurtigt rundt og spurgte på campus hvor folk havde deres toiletrens til at stå, eftersom vi havde tænkt på sikkerheden og særligt for børn. Det viste sig at de fleste havde deres toiletrens ved siden af toilettet, og dem med små børn havde dem et sted hvor børnene ikke kunne komme til. Ud fra alt den viden vi havde fundet frem til snævrede vi os ind på et problem. Vi formulerede vores framing som vi skulle arbejde med resten af projektet. Vi ville gøre miljø en faktor for kunden når der skulle vælges toiltrens, ved at informere om denne faktor.</p>
        </section> <!-- projektstart_tekst -->

        <section id="toiletrens_billede" class="illustrationer">
          <img src="billeder/projekter_opgaver/toiletrens_wall.jpg" alt="Billeder af toiletrens på vægge">
          <blockquote>
            <p>Billederne der blev hængt op og inddelt i tre kategorier</p>
          </blockquote>
        </section> <!-- toiletrens_billede -->

        <section id="design_tekst" class="tekstfelt">
          <p>Når vi nu havde en framing, skulle vi til at designe vores side. Vi startede med at blive enige om hvilke udtryk vi ville give og hvilke udtryk vi ikke ville give. Vi ville have en følelse af bruger til bruger kommunikation, og ville derfor ikke fremstå som aggressive miljøaktivister. På den måde besluttede vi os for at siden skulle fremstå rolig, blød og naturlig. Ligeledes ville vi nødvendigvis ikke benytte os af grøn, da dette er en typisk farve at bruge til miljøvenlighed, for at fastholde denne bruger til bruger følelse. Vi fandt hver især billeder til vores moodboard, hvorefter vi printede dem og hang dem op til at passe sammen. På den måde fik vi 3 moodboards, hvor vi havde én stor og to små. Vi valgte at gå videre med den store som gav den følelse vi ville. Hvorudfra vi besluttede for nogle farver, som var triader på farvehjulet. Samtidig fandt vi nogle skrifttyper, som både virkede personlig og professionel. Efter dette skitserede vi ideér for wireframes til mobilversion, hvor vi valgte en og gå videre med. På samme måde lavede vi for tablet og desktopversionen med mobilversionen som udgangspunkt.</p>
        </section> <!-- design_tekst -->

        <section id="moodboard_billede" class="illustrationer">
          <img src="billeder/projekter_opgaver/toiletrens_moodboard.jpg" alt="Moodboard">
          <blockquote>
            <p>Gruppens moodboard</p>
          </blockquote>
        </section> <!-- moodboard_billede -->

        <section id="wireframe_billede" class="illustrationer">
          <img src="billeder/projekter_opgaver/toiletrens_wireframe.jpg" alt="Wireframe for mobilversion">
          <blockquote>
            <p>Ét wireframe for mobilversionen</p>
          </blockquote>
        </section> <!-- wireframe_billede -->

        <section id="produktion_tekst" class="tekstfelt">
          <p>Produktionsfasen skulle i gang og vi startede med at tage nye billeder, eftersom nogle at de billeder vi havde tidligere taget, ikke var gode nok og ikke var i samme format. Derefter gik vi i gang med at sætte en repository op, og begyndte at kode. Vi havde problemer med benyttelse af GitHub, da dette ikke genkender Brackets som en editor, hvilket gjorde at vi skulle arbejde på hver vores gren og lave push commits. Vores workflow gjorde at vi gerne ville se hvad de andre havde gjort undervejs, derfor ville vi gerne have at vi kunne lave commits i samme fil, og derved hente filerne ned og se det med det samme. Derfor prøvede vi at bruge Visuel Studio med nogle plugins, eftersom vi ikke kunne finde et plugin vi skulle bruge, som vi vidste fandtes fordi en anden gruppe benyttede det, besluttede vi os for at gå videre fra Visuel Studio og bruge editoren Atom. Vi valgte dette fordi vi vidste med sikkerhed at GitHub genkendte den, eftersom det var den de selv henviste til. Efter at det fungerede forsat vi med at kode. Efter at alt HTML var sat op, begyndte vi på CSS. Dog var der stadig noget JavaScript vi ville have med som skulle være i html-filen, som jeg arbejde på mens resten af gruppen startede på CSS. Vi snakkede fælles om alle delene af koden, så vi vidste hvad de andre havde gang i samt at vi hjalp hinanden med at finde den optimale løsninger, hvilket også var derfor vi gerne ville se ændringer hurtigt. Under kodningen gik vi lidt fra vores wireframes. Det omhandlede footeren, eftersom vi havde planlagt at der skulle være en fixed footer, hvor der ville være links til de forskellige sektioner. Vi besluttede os at i mobil- og tabletversionen at de skulle være formet som knapper, i stedet for en lang footer. Efter vi var færdige og tilfredse med siden, begyndt vi at snakke om vores præsentation så vi var klar til dette.</p>
          <a href="http://magn381i.web.eadania.dk/Wc-Rens/"><p>Her findes onepage siden vi fik lavet.</p></a>
        </section> <!-- produktion_tekst -->
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
