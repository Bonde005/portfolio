<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Undersøgelser</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_survey.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Undersøgelser</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Der er to forskellige metoder hvorpå man kan indsamle data i forbindelse med undersøgelser. Der er den kvantitative metode, hvor man samler på målbare data. Det bliver ofte udført igennem spørgeskemaer, som enten kan foregå over telefon, ansigt til ansigt eller over internettet. Her kan respondenten vælge svarmuligheder og derved afgive nogle målbare data der kan analyseres på. Den kvalitative metode indsamler mere bløde data. Det foregår ofte med interviews. Her sætter respondenten selv ord på sine svar, som så senere kan fortolkes og analyseres. Derudover er der også nogle test/undersøgelser som er gode at afbenytte i forbindelse med web-udvikling.</p>
          <div class="kilde">
            <p>(Kommunikation i multimediedesign, s. 84-88)</p>
            <span>Andersen, Gunhild Marie m.fl.: Kommunikation i multimediedesign, Hans Reitzels Forlag, 2. udgave, 84-88</span>
          </div>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#tometoder_overskrift"><h2>De to metoder</h2></a>
            <a href="#kvantitativ_overskrift"><h3>Kvantitative undersøgelser</h3></a>
            <a href="#kvalitativ_overskrift"><h3>Kvalitative undersøgelser</h3></a>
            <a href="#brugersurveys_overskrift"><h2>Bruger undersøgelser</h2></a>
            <a href="#gangstertest_overskrift"><h3>Gangstertest</h3></a>
            <a href="#questionnaire_overskrift"><h3>Spørgeskema</h3></a>
            <a href="#ekspertvurdering_overskrift"><h3>Ekspertvurdering</h3></a>
            <a href="#kortsortering_overskrift"><h3>Kortsortering</h3></a>
            <a href="#brugertest_overskrift"><h3>Brugertest</h3></a>
            <a href="#availability_overskrift"><h3>Tilgængelighedstest</h3></a>
          </section> <!-- lokal_menu -->
        </section> <!-- indledning -->

        <section id="tometoder_overskrift" class="under_overskrift">
          <h2>De to metoder</h2>
          <p>Udsnit af opgave der beskriver de to metoder.</p>
        </section> <!-- tometoder_overskrift -->

        <section id="kvantitativ" class="boks">
          <section id="kvantitativ_overskrift" class="under_overskrift">
            <h3>Hvad kendetegner kvantitative undersøgelser?</h3>
          </section>

          <section id="kvantitativ_tekst" class="tekstfelt">
            <p>En kvantitativ undersøgelse indsamler hårde data som der kan udføres statistik på. Dette kan være spørgsmål med svarmuligheder og derved ingen fordybelse. Det kan f.eks. være ved ja/nej spørgsmål, hvor man kan se hvor mange respondenter der er, altså hvor mange der har svaret spørgsmålene, samtidig med at man kan se hvor mange har svaret ja og hvor mange har svaret nej. På denne måde kan der opbygges statistik på besvarelserne. <i>(denstoredanske.dk/kvantitative_metoder besøgt 28/09/19)</i> Når man laver en kvantitativ undersøgelse, kigger man altså på ”hvor mange”, og derved kigger på tendenser. På denne måde kan man nemt finde tendenser indenfor sin målgruppe og opsætte overskueligt statistik. Derved kan man få en større forståelse for sin målgruppe og især deres tendenser. <i>(voxmeter.dk/kvantitativ-kvalitativ/ besøgt 28/09/19)</i> En meget udbredt metode at anvende er spørgeskemaer, hvor respondenten selv læser spørgsmålene og besvare ved valg af en svarmulighed. <i>(denstoredanske.dk/kvantitative_metoder besøgt 28/09/19)</i></p>
          </section> <!-- kvantitativ_tekst -->

          <section id="kvantitativ_eksempel" class="illustrationer">
            <img src="billeder/kommunikation/statistik.png" alt="Søjlediagram fra en kvantitativ undersøgelse">
            <blockquote>
              <p>Eksempel på bearbejdning over resultater af kvantitativ undersøgelse</p>
              <a class="kilde" href="https://www.dst.dk/da/Statistik/emner/uddannelse-og-viden/informationssamfundet/it-anvendelse-i-befolkningen"><p>dst.dk</p></a>
            </blockquote>
          </section> <!-- kvantitativ_eksempel-->


          <section id="kvantitativ_forsat_tekst" class="illustrationer">
            <p>Ved brug af kvantitative undersøgelser kan man ikke lære sin målgruppes holdninger og meninger, man ved kun hvor mange men ved ikke hvorfor. (voxmeter.dk/kvantitativ-kvalitativ/ besøgt 28/09/19) Kvantitative metoder er altså gode til hvis man vil se på hvor mange der f.eks. har gjort noget, eller mener noget specifikt. Hvis man så igennem en kvantitativ undersøgelse finder ud af f.eks. at en målgruppe ikke kan lide ét produkt, kan man ikke vide hvorfor de ikke kan lide produktet.</p>
          </section> <!-- kvantitativ_forsat_tekst -->

        <section id=" kvantitativ_kilder" class="tekstfelt">
          <a href="www.denstoredanske.dk/Samfund,_jura_og_politik/Sociologi/Sociologisk_metodologi/kvantitative_metoder"><p>denstoredanske.dk/kvantitative_metoder, besøgt 28/09/19</p></a>
          <a href="www.voxmeter.dk/kvantitativ-kvalitativ/"><p>voxmeter.dk/kvantitativ-kvalitativ, besøgt 28/09/19</p></a>
        </section> <!-- kvantitativ_kilder -->
      </section> <!-- kvantitativ boks -->

        <section id="kvalitativ" class="boks">
          <section id="kvalitativ_overskrift" class="under_overskrift">
            <h3>Hvad kendetegner kvalitative undersøgelser?</h3>
          </section> <!-- kvalitativ_overskrift -->

          <section id="kvalitativ_tekst" class="tekstfelt">
            <p>En kvalitativ undersøgelse bruges når man vil undersøge noget der er svært at måle på, og hvor man derfor ikke kan få hårde data. Her kommer der en kommunikationsproces mellem forskeren og undersøgelsessubjektet. Der er altså fokus på indlevelse og forståelse. Det kan f.eks. gøres ved et interview hvor subjektet, i denne sammenhæng den er besvare spørgsmålene, kan give uddybende svar. På denne måde kan der komme en større forståelse for subjektet. <i>(denstoredanske.dk/kvalitative_metoder besøgt 28/09/19)</i> Kvalitative undersøgelser bliver altså anvendt når man vil have en mere dybdegående analyse af f.eks. holdninger og motiver. Her kigges der altså på ”hvorfor” og ”hvordan”. Nogle typiske metoder der bliver anvendt, er deltagerobservation og interview. Deltagerobservation er hvor man deltager i selv undersøgelsen mens man observere de andre deltagere. <i>(voxmeter.dk/kvantitativ-kvalitativ/ besøgt 28/09/19)</i></p>
          </section> <!-- kvalitativ_tekst -->

          <section id="kvalitativ_billede" class="illustrationer">
            <img src="billeder/kommunikation/interview.png" alt="Interview">
            <blockquote>
              <p>Eksempel af interview, som ofte benyttes i kvali undersøgelser</p>
              <a class="kilde" href="https://insights.dice.com/2019/10/31/tell-me-about-yourself-interview/"><p>insights.dice.com</p></a>
            </blockquote>
          </section> <!-- kvalitativ_billede -->

          <section id="kvalitativ_forsat_tekst" class="tekstfelt">
            <p>Ved brug af kvalitative undersøgelser kan man altså forstå sit subjekt, men man ved dog ikke hvor mange i sin målgruppe der deler sit subjekts syn. Derudover er kvalitative undersøgelser afhængige af kommunikationen mellem forsker og subjekt. (denstoredanske.dk/Kvalitativ_metode besøgt 28/09/19) Dette kan altså betyde at der kan opstå fejlkommunikation, hvor forsker og subjekt misforstår hinanden.</p>
          </section> <!-- kvalitativ_forsat_tekst -->

        <section id="kvalitativ_kilder" class="tekstfelt">
          <p>Kilder fra udsnittet</p>
          <a href="http://denstoredanske.dk/Samfund%2c_jura_og_politik/Sociologi/Sociologisk_metodologi/kvalitative_metoder"><p>denstoredanske.dk/kvalitative_metoder, besøgt 28/09/19</p></a>
          <a href="https://voxmeter.dk/kvantitativ-kvalitativ/"><p>voxmeter.dk/kvantitativ-kvalitativ, besøgt 28/09/19</p></a>
        </section> <!-- kvalitativ_kilder -->
      </section> <!-- kvalitativ boks -->

        <section id="brugersurveys_overskrift" class="under_overskrift">
          <h2>Bruger undersøgelser</h2>
        </section> <!-- brugersurveys_overskrift -->

        <section id="brugersurveys_tekst" class="tekstfelt">
          <p>I forbindelse med web-udvikling er der flere undersøgelser der kan foregå undervejs i produktionen, så man sikre sig at siden fungere optimalt inden implementering af siden. Til dette er det hensigtsmæssigt at udføre test på brugere. Der findes flere forskellige brugertest, som hver især har sit formål.</p>
          <div class="kilde">
            <p>(Usability, s. 21 & 26)</p>
            <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 21 & 26</span>
          </div> <!-- kilde -->
          <table id="surveys_table">
            <tr>
              <th>Fokusområde</th>
              <th>Testmetoder</th>
            </tr>
            <tr>
              <td>Navigation og struktur</td>
              <td>Gangster test, Kortsortering</td>
            </tr>
            <tr>
              <td>Funktionalitet</td>
              <td>Spørgeskema, Ekspertvurdering, Brugertest</td>
            </tr>
            <tr>
              <td>Layout og opbygning</td>
              <td>Gangstertest, Ekspertvurdering, Brugertest</td>
            </tr>
            <tr>
              <td>Tilgængelighed</td>
              <td>Ekspertvurdering, Brugertest, Tilgængelighedstest</td>
            </tr>
            <tr>
              <td>Forståelse for bruger</td>
              <td>Spørgeskema, Kortsortering, Brugertest</td>
            </tr>
          </table>
          <div class="kilde">
            <p>(Usability, s. 26)</p>
            <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 26</span>
          </div> <!-- kilde -->
        </section> <!-- brugersurveys_tekst -->

        <section id="gangstertest" class="boks">
          <section id="gangstertest_overskrift" class="under_overskrift">
            <h3>Gangstertest</h3>
          </section> <!-- gangstertest_overskrift -->

          <section id="gangstertest_tekst" class="tekstfelt">
            <div class="tekst">
              <p>Testen går ud på at have en forsøgsperson, som sidder overfor et tilfældigt side inde på en website. Forsøgspersonen skal nu kunne navigere rundt på siden. Det har taget navn efter gangsterfilm, hvor en person bliver smidt i et bagagerum, for at efterfølgende bliver sat af et tilfældigt sted og skal nu finde rundt.</p>
            </div> <!-- tekst -->
            <div class="punkter">
              <p>For at finde ud af om forsøgspersonen kan finde det nødvendige på siden stiller man seks spørgsmål:</p>
              <ul>
                <li>Hvilket website er du på?</li>
                <li>Hvor er websites globale menu?</li>
                <li>Hvilken underside er du på?</li>
                <li>Hvilke muligheder har du på denne side?</li>
                <li>Hvordan er du kommet hertil?</li>
                <li>Hvor kan du søge?</li>
              </ul>
            </div> <!-- punkter -->
            <div class="kilde">
              <p>(Usability, s. 44-45)</p>
              <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 44-45</span>
            </div> <!-- kilde -->
          </section> <!-- gangstertest_tekst -->

          <section id="gangstertest_billede" class="illustrationer">
            <img src="billeder/kommunikation/signs.jpg" alt="Skilte">
            <blockquote>
              <p>Hjemmesider skal have der egne "vejskilte" så det er nemt at finde rundt</p>
              <a class="kilde" href="https://www.seton.com/custom-street-signs-js0110.html"><p>seton.com</p></a>
            </blockquote>
          </section> <!-- gangstertest_billede -->
        </section> <!-- gangstertest boks -->

        <section id="questionnaire" class="boks">
          <section id="questionnaire_overskrift" class="under_overskrift">
            <h3>Spørgeskema</h3>
          </section> <!-- questionnaire_overskrift -->

          <section id="questionnaire_tekst" class="tekstfelt">
            <p>Spørgeskemaer er gode at bruge når man vil undersøge karakteristika for brugerne. Her skal man sørge for at formulere spørgsmålene så præcise at de ikke kan misforstås. Samtidig skal de ikke være ledende, og svarmulighederne skal helst dække alle mulige svar. Man kan dog tilføje en svarmulighed hvor respondenten selv kan skrive, hvis ingen af de andre muligheder passer. Samtidig med at der ikke skal være for mange svarmuligheder, da det kan være uoverskueligt. I stedet bør ma gruppér nogle af svarmuligheder, f.eks. ved en mulighed der hedder: 18-29 år. Derudover skal svarmulighederne også være præcise, så disse heller ikke kan misforstås eller virke forvirrende for respondenten.</p>
            <div class="kilde">
              <p>(Usability, s. 50-60)</p>
              <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 50-60</span>
            </div> <!-- kilde -->
          </section> <!-- questionnaire_tekst -->
        </section> <!-- questionnaire boks -->

        <section id="ekspertvurdering" class="boks">
          <section id="ekspertvurdering_overskrift" class="under_overskrift">
            <h3>Ekspertvurdering</h3>
          </section> <!-- ekspertvurdering_overskrift -->

          <section id="ekspertvurdering_tekst" class="tekstfelt">
            <p>Testen går ud på en eller flere eksperter vurder siden uden fra nogle retningslinjer. På den måde kan de forudse fejl, eftersom de ved hvad de skal kigge efter. Man kan også selv lave en ekspertvurdering af sin side, hvor man grundigt går igennem og kigger på siden. En ekspert er ellers en indenfor det område som siden handler om. De har derfor kendskab til informationen og servicer på siden, den kontekst siden vil blive brugt i og de brugere som vil benytte siden.</p>
            <div class="kilde">
              <p>(Usability, s. 64-65)</p>
              <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 64-65</span>
            </div> <!-- kilde -->
          </section> <!-- ekspertvurdering_tekst -->
        </section> <!-- ekspertvurdering boks -->

        <section id="kortsortering" class="boks">
          <section id="kortsortering_overskrift" class="under_overskrift">
            <h3>Kortsortering</h3>
          </section> <!-- kortsortering_overskrift -->

          <section id="kortsortering_tekst" class="tekstfelt">
            <p>En test af strukturen, hvor man undersøger om brugeren kan forstå knapper og menupunkter på siden. Her får brugerne nogle kort, sok f.eks. er menu-underpunkter og menupunkter, og sorter underpunkterne til de hvad de betragter som de tilsvarende menupunkter. Derudover kan de også lave samme test, hvor de selv skal give en titel til de kategorier de har får sorteret. På den måde sørger man for at brugerne forstå den inddeling man har lavet, eller får en forståelse af brugerens opfattelse som kan hjælpe med at inddele sine emner.</p>
            <div class="kilde">
              <p>(Usability, s. 86 & 91)</p>
              <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 86 & 91</span>
            </div> <!-- kilde -->
          </section> <!-- kortsortering_tekst -->

          <section id="kortsortering_billede" class="illustrationer">
            <img src="billeder/kommunikation/kortsortering.jpeg" alt="Kortsortering">
            <blockquote>
              <p>Eksempel af kortsortering</p>
              <a class="kilde" href="https://www.userdesign.dk/tags/kortsortering/"><p>userdesign.dk</p></a>
            </blockquote>
          </section> <!-- kortsortering_billede -->
        </section> <!-- kortsortering boks -->

        <section id="brugertest" class="boks">
          <section id="brugertest_overskrift" class="under_overskrift">
            <h3>Brugertest</h3>
          </section> <!-- brugertest_overskrift -->

          <section id="brugertest_tekst" class="tekstfelt">
            <p>En general test af siden. Her kigger på om brugeren kan benytte siden hensigtsmæssigt og finde eventuelle fejl eller misforståelser. Testen forgår ved at have en testperson som får stillet en opgave der skal gennemføre på siden. Ofte foregår dette efter tænke-højt metoden, hvor testpersonen skal sige sine tanker højt, således man kan få indblik i tanker og overvejelser.</p>
            <div class="kilde">
              <p>(Usability, s. 116-120)</p>
              <span>Gregersen, Ole & Wisler-Poulsen, Ian: Usability - Testmetoder til mere brugbare websites, Grafisk Litteratir, 2018 s. 116-120</span>
            </div> <!-- kilde -->
          </section> <!-- brugertest_tekst -->
        </section> <!-- brugertest boks -->

        <section id="availability" class="boks">
          <section id="availability_overskrift" class="under_overskrift">
            <h3>Tilgængelighedstest</h3>
          </section> <!-- availability_overskrift -->

          <section id="availability_tekst" class="tekstfelt">
            <p>Websites skal gerne være let tilgængelige for alle. Derfor føres der en test, som kan udføres automatisk eller manuelt. En automatisk test er et program der analyserer koden, for at se om den overholder retningslinjerne for tilgængelighed. Ved den manuelle ser man ikke kun på koden. Her ser man på nogle retningslinjer indenfor visuel opbygning, billeder og tekst og teknisk tilgængelighed.</p>
            <p class="kilde">(Usability, s. 116-120)</p>
          </section> <!-- availability_tekst -->

          <section id="availability_billede" class="illustrationer">
            <img src="billeder/kommunikation/availability.jpg" alt="Tilgængelighed">
            <blockquote>
              <p>Eksempel af tilgængelighed for alle</p>
              <a class="kilde" href="https://www.hillerod.dk/borger/bolig-byggeri-og-flytning/byggesagsbehandling/tilgaengelighed/"><p>hillerod.dk</p></a>
            </blockquote>
          </section> <!-- availability_billede -->
        </section> <!-- availability -->
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
