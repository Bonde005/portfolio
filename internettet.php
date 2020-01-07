<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio internettet</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_internettet.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Internettet</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Internettet som vi kender det i dag er ikke bygget op på én dag, men i stedet over længere tid. Det er heller ikke én person eller firma der har opfundet internettet. Internettet er ikke det samme som The World Wide Web, WWW. Samtidig har webbet, har sin egen udvikling gennem tiderne.</p>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#historie_overskrift"><h2>Internettets historie</h2></a>
            <a href="#webbet_overskrift"><h2>Webbets historie</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="historie_overskrift" class="under_overskrift">
          <h2>Internettets historie</h2>
        </section> <!-- historie_overskrift -->

        <section id="historie_tekst" class="tekstfelt">
          <p>Det hele startede i 1957. Computeren kunne kun arbejde på en opgave af gangen, og var blevet så store at de skulle stå i kølerum. For nemmere at kunne arbejde på dem blev fjernforbindelse opfundet, her kunne man arbejde på computeren igennem en anden computer. Samtidig blev timeshare opfundet, hvor det nu var muligt at arbejde flere på den samme computer. Det var i samme år hvor Sputnik blev sendt i rummet, og teknologi- og rumkapløbet gik for alvor i gang. Defense Advanced Research Project Agency, DARPA, blev derfor til. De ville overføre informationer hurtigere, nemmere og mere effektivt, og opfandt derfor ARPANET i 1960. Det var et lille netværk af computere til det formal at overføre informationer. En vigtig funktion i ARPANET var TCP, transmission control protocol, hvor en computer sendte en bekræftelse tilbage, når den havde fået den ønskede fil. ARPANET var ikke det eneste netværk var opfundet, der fandtes tre andre fungerende netværks i verdenen. RAND var et militært netværk fra USA. NPL var et kommercielt netværk i England, hvor de havde opfundet packet switching. De overførte filer og informationer gennem computere, ved at opdele informationen i små ”pakker” som så blev sendt videre og sat sammen hos modtageren. Derudover var det også CYCLADES som var et videnskabeligt netværk i Frankrig, som egentligt var så netværker der snakkede sammen, og derfor kom begrebet inter-net. Det havde også den vigtige funktion hvor computere hvor informationer blev sendt igennem, slet ikke skulle gøre noget med informationen udover at overføre det videre. De fire netværker blev bygget sammen og blev til det internet vi kender i dag. </p>
          <a class="kilde" href="https://www.youtube.com/watch?v=9hIQjrMHTv4"><p>(History of the Internet, picolsigns)</p></a>
        </section> <!-- historie_tekst -->

        <section id="network_billede" class="illustrationer">
          <img src="billeder/websites/internettet/network.png" alt="Netværk">
          <blockquote>
            <p>Illustration af et netværk</p>
          </blockquote>
        </section> <!-- network_billede -->

        <section id="webbet_overskrift" class="under_overskrift">
          <h2>Webbets historie</h2>
        </section> <!-- webbet_overskrift -->

        <section id="server_tekst" class="tekstfelt">
          <p>I starten af internettes levetid, hvor det blot var fire forskellige netværk, var der opstået et problem. Computerne snakkede i samme sprog, så der skulle en ekspert til at få noget ud af informationen som man havde fået overført. Tim Bernes-Lee opfandt derfor HTML, som et sprog alle computere kunne forstå. Samtidig opfandt han URL til at lokalisere informationerne på den rigtige server. En server er en computer som fungerer som en slags opbevaring. <a class="kilde" href="https://www.youtube.com/watch?v=j4cN_q3NX9c"><p>(Tim Berners-Lee ~ The World Wide Web, Dap Dapple)</p></a> Det er ikke en computer der benyttes på samme måde som en hverdagscomputer som har en client. Serveren opbevarer informationer som clienten kan efterspørge, hvor serveren så sender informationerne ud til clienten vha. internettet. (Client and Server Model - Fast Tech Skills, Easy Tech Tips) Der findes forskellige typer af servere med hver deres formål. For eksempel en mail-server der opbevarer og distribuere e-mails, eller en web-server som opbevarer hjemmesider, i den forstand at den opbevarer alt information og filer der nødvendig for at vise siden.</p>
          <p class="kilde">(Niels Østergaard, internettets historie + serverbegrebet)</p>
        </section> <!-- server_tekst -->

        <section id="server_billede" class="illustrationer">
          <img src="billeder/websites/internettet/server_client.png" alt="server client relation">
          <blockquote>
            <p>Illustration af server client relation</p>
          </blockquote>
        </section> <!-- server_billede -->

        <section id="web_tekst" class="tekstfelt">
          <p>Tim Berners-Lee opfandt altså World Wide Web, WWW, som gjorde at man kunne tilgå informationer på servere og få dem fremvist på en computer, selvom computeren ikke havde samme styresystem og derfor ikke snakkede samme sprog. HTML vises i en browser på computeren, som fortolker filen og fremviser det, fremfor en uoverskuelig tekstfil. Senere hen kom der browsere der også lagde vægt på det visuelle og gjorde det mere anvendeligt. Derved var det også nemmere for ikke-eksperter at tilgå, og medførte derfor udbredelsen af webbet</p>
          <a class="kilde" href="https://www.youtube.com/watch?v=j4cN_q3NX9c"><p>(Tim Berners-Lee ~ The World Wide Web, Dap Dapple)</p></a>
        </section> <!-- web_tekst -->

        <section id="webperioder_tekst" class="tekstfelt">
          <div class="tekst">
            <p>For at nemt kunne finde rundt i sin kode, og for at andre nemt kan finde rundt i ens kode, skal man følge godt kodeskik. Heriblandt skal man sørge for at lave indryk i sin kode således at man nemt kan se hvad der høre sammen med hvad, f.eks. kan man angive indholdet i en sektion ved at lave et indryk så alt indholdet er rykket ind i sektionen. Derudover er det også godt at give sine sektioner, eller andre tags hvor det er relevante, gode ider eller classes så man nemt kan se og forstå hvad indholdet er og hvad det skal bruges til. Man skal ikke bruge sit egen forkortelsessystem til at navngive sit indhold men derimod bruge navne der kan forstå af en der slet ikke har kigget på koden før. Ligeledes er det en del af god kodeskik at bruge kommentar. Man kan bruge kommentar til at give en indblik i hvad de forskellige dele skal bruges til og er i sær også god til at vise hvor de forskellige tags slutter. Hvis man f.eks. har en lang sektion med meget indhold i, vil det blive nemmere overskueligt at se hvor sektionen slutter hvis man tilføjer en kommentar ved slut tagget. </p>
          </div>
          <div class="punkter">
            <ul>
              <li>Tidligere eksperimenter (1993-1995)</li>
              <li>Under konstruktion (1996-2000)</li>
              <li>Semantisk søgning (2000-2003)</li>
              <li>Det sociale web (2003-2010)</li>
              <li>Det mobile web (2010-)</li>
            <div class="kilde">
              <p>-	Online kommunikation en introduktion, 346-371</p>
              <span>Christiansen, Hans-Christian og Rose, Gitte B: Online Kommunikation - en introduktion, Hans Reitzels forlag, 1. udgave, 2015 s. 346-371</span>
            </div> <!-- kilde -->
          </ul>
          </div>
        </section> <!-- webperioder_tekst -->

        <section id="tidlige_eksperimenter" class="boks">
          <section id="tidlige_eksperimenter_overskrift" class="under_overskrift">
            <h3>Tidlige eksperimenter</h3>
          </section> <!-- tidlige_eksperimenter_overskrift -->

          <section id="tidlige_eksperimenter_tekst" class="tekstfelt">
            <p>Hver periode har nogle karakteristiske tendenser. I perioden tidlige eksperimenter var det meget simpelt. Af teknikker havder man HTML, Javascript og GIF. Man kunne derfor kun opsætte det visuelle til en vis grad. Man kunne styre opsætningen men skrifttyper og lign. Kom an på brugerens browser. Derudover var man vant til bøger, så en udbredt stilart var den klassiske bogsideformat som man kendte til.</p>
            <div class="kilde">
              <p>(Online kommunikation en introduktion, 346-371) </p>
              <span>Christiansen, Hans-Christian og Rose, Gitte B: Online Kommunikation - en introduktion, Hans Reitzels forlag, 1. udgave, 2015 s. 346-371</span>
            </div>
          </section> <!-- tidlige_eksperimenter_tekst -->

          <section id="tidlige_eksperimenter_billede" class="illustrationer">
            <img src="billeder/websites/internettet/tidliger_eksperimenter.png" alt="IMBb i 1996">
            <blockquote>
              <p>Ældste version af IMDbs hjemmeside i 1996, desværre kan billederne ikke længere findes</p>
              <a class="kilde" href="https://web.archive.org/web/19961119065302/http://www.imdb.com/ "><p>web.archive.org</p></a>
            </blockquote>
          </section> <!-- tidlige_eksperimenter_billede -->
        </section> <!-- tidlige_eksperimenter boks -->

        <section id="under_konstruktion" class="boks">
          <section id="under_konstruktion_overskrift" class="under_overskrift">
            <h3>Under konstruktion</h3>
          </section> <!-- under_konstruktion_overskrift -->

          <section id="under_konstruktion_tekst" class="tekstfelt">
            <p>I perioden under konstruktion, var det blevet meget mere udbredt og folk gik amok med at lave deres egne hjemmesider. Der var endnu ingen standarder for hvordan en hjemmeside skulle se ud, hvilket medførte til at Jakob Nielsen kom på banen med Usability Engineering, med hans ide om at dele det op i en engineering del og en grafisk del. I samme tidsperiode opstod browserkrigen, hvor Microsoft gjorde deres browser Explorer en standard ved at den fulgte med når man fik en computer med Microsoft styresystem Windows. Browseren Netscape blev derfor ikke ligeså udbredt, og forsøgt at være mere udbudt ved at få sine egne udvidelser så man kunne nogle ting udseendemæssigt, som man så ikke kunne se på en Explorer Browser. Det samme begyndte Explorer at gøre. Det blev også begyndelse på WWW Consordion, som en forening mellem browsere, hvor de skulle blive enige om standarder. </p>
            <div class="kilde">
              <p>(Online kommunikation en introduktion, 346-371) </p>
              <span>Christiansen, Hans-Christian og Rose, Gitte B: Online Kommunikation - en introduktion, Hans Reitzels forlag, 1. udgave, 2015 s. 346-371</span>
            </div>
          </section> <!-- under_konstruktion_tekst -->

          <section id="under_konstruktion_billede" class="illustrationer">
            <img src="billeder/websites/internettet/under_konstruktion.png" alt="IMBb i 2000">
            <blockquote>
              <p>IMDbs hjemmeside i april i 2000</p>
              <a class="kilde" href="https://web.archive.org/web/20001018194040/http://www.imdb.com/ "><p>web.archive.org</p></a>
            </blockquote>
          </section> <!-- under_konstruktion_billede -->
        </section> <!-- under_konstruktion boks -->

        <section id="semantisk_search" class="boks">
          <section id="semantisk_search_overskrift" class="under_overskrift">
            <h3>Semantisk søgning</h3>
          </section> <!-- semantisk_search_overskrift -->

          <section id="semantisk_search_tekst" class="tekstfelt">
            <p>Perioden derefter, semantisk søgning, kom med CSS og udbredelsen af Googles søgemaskine. Google bliver født og ændre webbet. Den kunne finde relevante hjemmesider, som ingen søgemaskine før kunne. Google har en algoritme som gør det muligt at søge hjemmesider og finde det relevante vha. semantik. Derfor blev semantik meget udbredt, da man fik flere besøgende hvis Google kunne finde siden. Virksomheder begyndte at bruge semantik og simple design, eftersom Google kunne henvise en til en underside og derfor var forsiden ikke altid der man startede. Derfor forsimplede man hjemmesiderne så det var nemt at navigere i. Der var dog stadig nogle som eksperimenterede ligeså meget som før i baggrunden</p>
            <div class="kilde">
              <p>(Online kommunikation en introduktion, 346-371) </p>
              <span>Christiansen, Hans-Christian og Rose, Gitte B: Online Kommunikation - en introduktion, Hans Reitzels forlag, 1. udgave, 2015 s. 346-371</span>
            </div>
          </section> <!-- semantisk_search_tekst -->

          <section id="semantisk_search_billede" class="illustrationer">
            <img src="billeder/websites/internettet/semantisk_search.png" alt="IMBb i 2002">
            <blockquote>
              <p>IMDbs hjemmeside i 2002</p>
              <a class="kilde" href="https://web.archive.org/web/20021029051347/http://www.imdb.com/"><p>web.archive.org</p></a>
            </blockquote>
          </section> <!-- semantisk_search_billede -->
        </section> <!-- semantisk_search boks -->

        <section id="sociale_web" class="boks">
          <section id="sociale_web_overskrift" class="under_overskrift">
            <h3>Det sociale web</h3>
          </section> <!-- sociale_web_overskrift -->

          <section id="sociale_web_tekst" class="tekstfelt">
            <p>I perioden det sociale web, blev bruger sociale sammen på en anden måde en nogensinde før, og her var starten på de sociale medier. LinkedIn, Twitter, Myspace og blogs blev meget udbredte. Det medførte at webbet blev ”styret” af brugeren selv, da brugerne selv lavede oplæg, delte, kommenterede og fyldte webbet med sociale interaktioner. Samtidig kom udbredelsen af niche e-handel, som fik navnet Den lange hale. Ved e-handel kunne man opbevare mange flere produkter end i en fysisk butik, og derfor kunne man også sælge niche vare selvom det ikke var det der var mest populær. På den måde kunne man pludselig tjene mange penge på nichevare.</p>
            <div class="kilde">
              <p>(Online kommunikation en introduktion, 346-371) </p>
              <span>Christiansen, Hans-Christian og Rose, Gitte B: Online Kommunikation - en introduktion, Hans Reitzels forlag, 1. udgave, 2015 s. 346-371</span>
            </div>
          </section> <!-- sociale_web_tekst -->

          <section id="sociale_web_billede" class="illustrationer">
            <img src="billeder/websites/internettet/sociale_web.png" alt="IMBb i 2006">
            <blockquote>
              <p>IMDbs hjemmeside i 2006</p>
              <a class="kilde" href="https://web.archive.org/web/20060428103014/http://www.imdb.com:80/ "><p>web.archive.org</p></a>
            </blockquote>
          </section> <!-- sociale_web_billede -->
        </section> <!-- sociale_web boks -->

        <section id="mobile_web" class="boks">
          <section id="mobile_web_overskrift" class="under_overskrift">
            <h3>Det mobile web</h3>
          </section> <!-- mobile_web_overskrift -->

          <section id="mobile_web_tekst" class="tekstfelt">
            <p>Det mobile web kom efter smartphones blev udbredte. Nu er man ikke kun på hjemmesider på computeren længere, men folk brugte også mobiler til at tilgå webbet. Derfor skal hjemmesider og til at være mobil-venlige, og derved begynder hjemmesider at indeholde elementer som browseren kan flytte på alt efter hvilken enhed man er på. Derudover bruger man ikke længer kun World Wide Web, men nu også apps på mobilen hvor man ikke behøver en hjemmeside. For eksempel appen Tinder er meget udbredt men har ingen hjemmeside.</p>
            <div class="kilde">
              <p>(Online kommunikation en introduktion, 346-371) </p>
              <span>Christiansen, Hans-Christian og Rose, Gitte B: Online Kommunikation - en introduktion, Hans Reitzels forlag, 1. udgave, 2015 s. 346-371</span>
            </div>
          </section> <!-- mobile_web_tekst -->

          <section id="mobile_web_billede" class="illustrationer">
            <img src="billeder/websites/internettet/mobile_web.png" alt="IMBb i 2019">
            <blockquote>
              <p>IMDbs hjemmeside i 2019</p>
              <a class="kilde" href="https://www.imdb.com/"><p>imdb.com</p></a>
            </blockquote>
          </section> <!-- sociale_web_billede -->
        </section> <!-- sociale_web boks -->
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
