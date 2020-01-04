<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_frontpage.css">
    </head>
    <body>
        <nav>
          <section id="logo">
            <img src="billeder/logo.png" alt="AB portfolio">
          </section> <!-- logo -->

          <section class="dropdown" id="menu_websites">
            <section  class="menu_punkt">
              <h1>Websites</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="html.php"><h2>HTML</h2></a>
                <a href="css.php"><h2>CSS</h2></a>
                <a href="responsiv_design.php"><h2>Responsiv Design</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="internettet.php"><h2>Internettet</h2></a>
                <a href="versionsstyring.php"><h2>Versionsstyring</h2></a>
                <a href="informationsarkitektur.php"><h2>Informationsarkitektur</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Websites -->
          </section> <!-- dropdown Websites -->

          <section class="dropdown" id="menu_grafisk_design">
            <section  class="menu_punkt">
              <h1>Grafisk Design</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="gestaltlove.php"><h2>Gestaltlove</h2></a>
                <a href="illustrator.php"><h2>Illustrator</h2></a>
                <a href="photoshop.php"><h2>Photoshop</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="farveteori.php"><h2>Farveteori</h2></a>
                <a href="fotografi.php"><h2>Fotografi</h2></a>
                <a href="typografi.php"><h2>Typografi</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Grafisk Design -->
          </section> <!-- dropdown Grafisk Design -->

          <section class="dropdown" id="menu_kommunikation">
            <section  class="menu_punkt">
              <h1>Kommunikation</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="grundlaegende_kommunikation.php"><h2>Grundlæggende</h2></a>
                <a href="presentationtech.php"><h2>Præsentationsteknink</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="tekstproduktion.php"><h2>Tekstproduktion</h2></a>
                <a href="surveys.php"><h2>Undersøgelser</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Kommunikation -->
          </section> <!-- dropdown kommunikation -->

          <section class="dropdown" id="menu_projekter_opgaver">
            <section  class="menu_punkt">
              <h1>Projekter & Opgaver</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="design_thinking.php"><h2>Design Thinking</h2></a>
                <a href="onepage.php"><h2>Onepage</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="workshop_flexbox.php"><h2>Workshop</h2></a>
                <a href="#"><h2>Licens og ophavsret</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Projekter og opgaver -->
          </section> <!-- dropdown Projekter og Opgaver -->

          <section class="menu_punkt" id="menu_bagom_siden">
            <h1>Bag om siden</h1>
          </section> <!-- button bag om siden -->
        </nav>
        <?php include("footer.inc"); ?>
    </body>
