<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>Læringsportofolie forside</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
    </head>
    <body>
      <div id="back_arrow">
        <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
      </div>
      <section id="overskrift">
        <h1>HTML</h1>
      </section> <!-- overskrift -->

      <section id="indledning">
        <p>HTML står for hypertext markup language, hvor hypertext gør det muligt at springe rundt i informationer, f.eks. igennem hyperlinks som er de links man normalt finder. Man kan komme til en anden side ved hjælp af et enkelt klik på linket. Markup er en måde hvorpå man beskriver noget indhold ved at give det ”mærker” som beskriver hvad indholdet er. Altså man har noget indhold man putter i kasser og på de kasser kan man sætte en etiket på, hvorpå man så kan se hvad der er i kassen. På den måde betyder HTML et sprog hvor man kan springe i indhold og information som er afmærket, således kan det bruges til at bygge struktur og indhold af hjemmesider. </p>
        <p class="kilde">(Niels Østergaard, introduktion til HTML)</p>
      </section> <!-- indledning -->

      <section id="kodning_overskrift">
        <h2>Kodning</h2>
      </section> <!-- kodning_overskrift -->

      <section id="tags_tekst">
        <p>Man bruger en editor til at skrive html i, det kan f.eks være brackets, atom eller visual studio. Hvor det bliver gemt som en html-fil som browsere kan forstå. I filen bruger man markup i form af tags, som angiver indholdet. Nogle eksempler på tags og hvad de betyder:</p>
        <dl>
          <dt>&lt;body&gt;</dt>
            <dd>Hele sidens indhold som fremvises.</dd>
          <dt>&lt;head&gt;</dt>
            <dd>Informationer som ikke vises på siden.</dd>
          <dt>&lt;header&gt;</dt>
            <dd>Websidens sidehovede.</dd>
          <dt>&lt;footer&gt;</dt>
            <dd>Websidens sidefod.</dd>
        </dl>
        <a class="kilde" href="https://www.w3schools.com/tags/ref_byfunc.asp ">w3schools.com</a>
      </section> <!-- tags_tekst -->

      <section id="tags_eksempler">
        <img src="billeder/websites/html/tags_eksempler.png" alt="Eksempler af tags">
      </section> <!-- tags_eksempler -->

      <section id="semantik_tekst">
        <p>Semantiske tags beskriver ikke kun hvad indholdet er, men også deres betydning, på en måde hvor søgemaskiner kan forstå relevansen af indholdet og hvad der har mere betydning end andet. F.eks. har h1 en større betydning end h2, hvor h1 her er tilsvarende til overskrift 1 og h2 overskrift 2. På denne måde kan man ved semantiske tags vise at h1 er over h2 hierarkimæssigt, og derved er det nemmere for maskiner at forstå relevansen og relationen af indholdet på siden. Nogle eksempler op nogle af de oftest brugte semantiske tags og deres betydning:</p>
        <dl>
          <dt>&lt;p&gt;</dt>
            <dd>Et afsnit.</dd>
          <dt>&lt;section&gt;</dt>
            <dd>En sektion på siden</dd>
          <dt>&lt;h1, h2, h3, h4, h5, h6&gt;</dt>
            <dd>6 forskellige overskrifter med hver deres rang</dd>
        </dl>
        <a class="kilde" href="https://www.w3schools.com/tags/ref_byfunc.asp">w3schools.com</a>
      </section> <!-- semantik_tekst -->

      <section id="element_tekst">
        <p>Selve indholdet i en html-fil består af elementer. Elementerne består af et start tag og et slut tag, som indikere starten og slutningen på elementet. Taget kan have en attribut som har en værdi, f.eks. hvis en img tag har en class attribut med værdien ”billeder”. Hvis taget har en attribut, indikeres det i start taget. Selve indholdet findes imellem tagsene. </p>
        <p class="kilde">(Niels Østergaard, introduktion til HTML)</p>
      </section> <!-- element_tekst -->

      <section id="element_billede">
        <img src="billeder/websites/html/element.png" alt="et element">
        <blockquote>
          <a class="kilde" href="http://langintro.com/cljsbook/_images/terminology.png">langintro.com</a>
        </blockquote>
      </section> <!-- element_billede -->

      <section id="kodeskik_overskrift">
        <h2>Kodeskik</h2>
      </section> <!-- kodeskik_overskrift -->

      <section id="kodeskik_tekst">
        <p>For at nemt kunne finde rundt i sin kode, og for at andre nemt kan finde rundt i ens kode, skal man følge godt kodeskik. Heriblandt skal man sørge for at lave indryk i sin kode således at man nemt kan se hvad der høre sammen med hvad, f.eks. kan man angive indholdet i en sektion ved at lave et indryk så alt indholdet er rykket ind i sektionen. Derudover er det også godt at give sine sektioner, eller andre tags hvor det er relevante, gode ider eller classes så man nemt kan se og forstå hvad indholdet er og hvad det skal bruges til. Man skal ikke bruge sit egen forkortelsessystem til at navngive sit indhold men derimod bruge navne der kan forstå af en der slet ikke har kigget på koden før. Ligeledes er det en del af god kodeskik at bruge kommentar. Man kan bruge kommentar til at give en indblik i hvad de forskellige dele skal bruges til og er i sær også god til at vise hvor de forskellige tags slutter. Hvis man f.eks. har en lang sektion med meget indhold i, vil det blive nemmere overskueligt at se hvor sektionen slutter hvis man tilføjer en kommentar ved slut tagget. </p>
        <p class="kilde">(Niels Østergaard, introduktion til HTML) </p>
      </section> <!-- kodeskik_tekst -->

      <section id="kodeskik_billede">
        <img src="billeder/websites/html/kodeskik.png" alt="eksempel på god kodeskik">
      </section>
    </body>
    <script>
      function goBack() { /* Går en tilbage i historikken */
      window.history.back();
      }
    </script>
  </html>
