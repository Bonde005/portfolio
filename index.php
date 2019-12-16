<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>Læringsportofolie forside</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand&display=swap" rel="stylesheet">
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
                <a href="#"><h2>CSS</h2></a>
                <a href="#"><h2>Responsiv Design</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="#"><h2>Internettet</h2></a>
                <a href="#"><h2>Versionsstyring</h2></a>
                <a href="#"><h2>Informationsarkitektur</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Websites -->
          </section> <!-- dropdown Websites -->

          <section class="dropdown" id="menu_grafisk_design">
            <section  class="menu_punkt">
              <h1>Grafisk Design</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="#"><h2>Gestaltlove</h2></a>
                <a href="#"><h2>Illustrator</h2></a>
                <a href="#"><h2>Photoshop</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="#"><h2>Farveteori</h2></a>
                <a href="#"><h2>Fotografi</h2></a>
                <a href="#"><h2>Typografi</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Grafisk Design -->
          </section> <!-- dropdown Grafisk Design -->

          <section class="dropdown" id="menu_kommunikation">
            <section  class="menu_punkt">
              <h1>Kommunikation</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="#"><h2>Grundlæggende</h2></a>
                <a href="#"><h2>Præsentationsteknink</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="#"><h2>Tekstproduktion</h2></a>
                <a href="#"><h2>Undersøgelser</h2></a>
              </div> <!-- column_right -->
            </section> <!-- dropdown_content Kommunikation -->
          </section> <!-- dropdown kommunikation -->

          <section class="dropdown" id="menu_projekter_opgaver">
            <section  class="menu_punkt">
              <h1>Projekter & Opgaver</h1>
            </section>
            <section class="dropdown_content">
              <div class="column_left">
                <a href="#"><h2>Design Thinking</h2></a>
                <a href="#"><h2>Onepage</h2></a>
              </div> <!-- column_left -->
              <div class="column_right">
                <a href="#"><h2>Workshop</h2></a>
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
