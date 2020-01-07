<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Versionsstyring</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_versionsstyring.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Versionsstyring</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Der kan opstå mange problemer når man arbejder på en fil, især når man koder kan man komme til at lave en fejl. Hvis man allerede har gemt filen, kan det være svært at finde tilbage til filens tilstand fra før fejlen foregik. Derfor kan man finde på at gemme i flere versioner. Hvis man så laver en fejl, ved man hvad man har ændret siden sidst og det er nemmere at finde og rette fejlen. Derudover hvis man har fået lavet en fejl, kan man nemt finde tilbage til en ældre version hvor fejlen ikke var der. På den måde kan man også holde styr på delprojekter der høre til den samme kode. Samtidig kan det gøre det nemmere at samarbejde, ved at man arbejder i forskellige versioner som man kan flette sammen. </p>
          <p class="kilde">(Niels Østergaard, Versionsstyring)</p>
          <section id="lokal_menu">
            <p>Punkter i dette emne</p>
            <a href="#git_overskrift"><h2>Git</h2></a>
            <a href="#github_overskrift"><h2>GitHub</h2></a>
          </section>
        </section> <!-- indledning -->

        <section id="git_overskrift" class="under_overskrift">
          <h2>Git</h2>
        </section> <!-- git_overskrift -->

        <section id="git_tekst" class="tekstfelt">
          <p>Versionsstyring kan gøres på forskellige måder, man kan have software til at holde styr på versioner, man kan manuelt navngive mappe og filer men en af de mest udbredte metoder er Git-protokollen. Git er et versionsstyringssystem, som blev lavet for at holde styr på udviklingen af Linux, eftersom det er et open-sourceprogram og derfor kan alle bidrage. På den måde blev Git opfundet, for at gøre det nemmere at holde styr på de forskellige versioner og udgaver. Git er ligeledes også open-source og er derfor til fri afbenyttelse, samtidig med at man selv kan bidrage til systemet. Man kan altså selv oprette en Git-server, men man kan også benytte sig af online tjenester. </p>
          <p class="kilde">(Niels Østergaard, Versionsstrying)</p>
        </section> <!-- git_tekst -->

        <section id="git_billede" class="illustrationer">
          <img src="billeder/websites/versionsstyring/git.png" alt="Git logo">
          <blockquote>
            <p>Gits logo</p>
            <a class="kilde" href="https://da.m.wikipedia.org/wiki/Fil:Git-logo.svg"><p>wikipedia.org</p></a>
          </blockquote>
        </section> <!-- git_billede -->

        <section id="versionstyring_billede" class="illustrationer">
          <img src="billeder/websites/versionsstyring/versioner.png" alt="Versioner af tekstdokumenter">
          <blockquote>
            <p>Eksempler på verssionsstyring ved navngivning af filer</p>
          </blockquote>
        </section> <!-- versionstyring_billede -->

        <section id="github_overskrift" class="under_overskrift">
          <h2>GitHub</h2>
        </section> <!-- github_overskrift -->

        <section id="github_tekst" class="tekstfelt">
          <p>En af de mange online tjenester man kan bruge, for at benytte Git til versionsstyring, er GitHub. Det er en webplatform, hvor man kan oprette Git-repositories (en form for projektmappe) på en server så man ikke selv skal installere det. GitHub har derudover også flere forskellige features, som gør det lettere at arbejde sammen på samme repository. For at benytte GitHub bedst muligt, er der nogle væsentlige begreber man skal kunne forstå.</p>
          <p class="kilde">(Niels Østergaard, Versionsstyring) </p>
          <dl>
            <dt>Branch</dt>
              <dd>Alle repositories har en master branch, som er hovedforløbet og den der gælder. Man kan tilføje flere branches som kører som en parallel version, så man kan arbejde på den uden at ændre i den der gælder, master branchen.</dd>
            <dt>Commit</dt>
              <dd>En metoder hvor man gemmer sine ændringer, men på en måde hvor man kan finde tilbage dertil- Det fungerer derfor ligesom en milepæl</dd>
            <dt>Pull reguest</dt>
              <dd>Når man har lavet et projekt færdig på en branch kan man lavet et pull request, hvor man foreslår en ny udgave eller rettelser. Man forslår altså at tilføje sin branch til masteren eller blot rettelser til en anden eksisterende branch.</dd>
            <dt>Diff</dt>
              <dd>Diff er forkortelsen af difference, og er altså forskellen. Her er der snakke om forskellen mellem to commits, så man nemt kan holde styr på sine ændringer og tilføjelser.</dd>
            <dt>Merge</dt>
              <dd>Når man har en ny udgave eller ændringer, som skal tilføjes til en branch, merger man. Smelter altså de to branches sammen og gør dem til et. Dette sker ofte som følge af en pull reguest.</dd>
            <dt>Pull</dt>
              <dd>Det kaldes pull når man henter de nye ændringer og derefter merger dem.</dd>
            </dl>
            <a class="kilde" href="https://guides.github.com/activities/hello-world/"><p>github.com</p></a>
        </section> <!-- github_tekst -->

        <section id="github_billede" class="illustrationer">
          <img src="billeder/websites/versionsstyring/git_master_branches.png" alt="Illustration af branches">
          <blockquote>
            <p>Ilustration af hvordan branches fungerer</p>
            <a class="kilde "href="https://www.nobledesktop.com/blog/what-is-git-and-why-should-you-use-it"><p>nobledesktop.com</p></a>
          </blockquote>
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
