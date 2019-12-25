<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
        <title>AB læringsportfolio Photoshop</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand:400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet_page.css">
        <link rel="stylesheet" href="grid_illustrator.css">
        <link rel="stylesheet" href="slideshow.css">
    </head>
    <body>

      <?php include("header.inc"); ?>

      <div id="pagewrap">
        <div id="back_arrow">
          <img src="billeder/back_arrow.png" alt="Tilbage pil" onclick="goBack()">
        </div> <!-- back_arrow -->

        <section id="overskrift">
          <h1>Photoshop</h1>
        </section> <!-- overskrift -->

        <section id="indledning" class="tekstfelt">
          <p>Adobes program photoshop er et pixelbaseret billederedigeringsprogram. Det kan bruges til redigering af et enkelt billede, sammensætning af flere men kan også bruges til at lave illustrationer fra bunden. Der er mange muligheder i photoshop, hvilket også er grunden til dens udbredelse.</p>
          <p class="kilde">(Carsten Kjeldsen Bogner, Photoshop: grundlæggende)</p>
        </section> <!-- indledning -->

        <section id="funktioner_overskrift" class="under_overskrift">
          <h2>Funktioner</h2>
        </section> <!-- funktioner_overskrift -->

        <section id="funktioner_tekst" class="tekstfelt">
          <p>I photoshop arbejder man i lag, så man kan arbejde ovenpå andre ting, og derved undgå at ændre i noget man ikke vil. På den måde er det let at lave ændringer og slette noget af sit arbejde uden af ødelægge alt det man har arbejdet på. Masks er en anden funktion som også er en non-destruktiv metode at lave ændringer og tilføje effekter på. På den måde kan man ændre i selve masken, uden at egentligt fjerne noget. På den måde kan man let fjerne og tilføje noget i masken, uden at det har varige mén. Nogle metoder man kan bruge vha. layer masks er f.eks. fritlægning. Hvis man vil fjerne en person fra en baggrund, for at få personen ind i en andet baggrund, kan man vha. fritlægning gøre dette. Når man laver fritlægning i masks, kan man let gå tilbage og justere samtidig med at sørge for en overgang mellem de to billeder.</p>
          <p class="kilde">(Carsten Kjeldsen Bogner, Photoshop: grundlæggende)</p>
        </section> <!-- funktioner_tekst -->

        <div id="home_button">
          <a href="index.php"><img src="billeder/home.png" alt="home knap"></a>
        </div>

        <section id="slideshow">
          <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 6</div>
              <img src="billeder/grafisk_design/slideshow_photoshop/bruno.png" alt="En bamse bjørn">
            </div> <!-- mySlides fade -->

            <div class="mySlides fade">
              <div class="numbertext">2 / 6</div>
              <img src="billeder/grafisk_design/slideshow_photoshop/bruno_farvet" alt="En farvet bamse bjørn">
            </div> <!-- mySlides fade -->

            <div class="mySlides fade">
              <div class="numbertext">3 / 6</div>
              <img src="billeder/grafisk_design/slideshow_photoshop/smart_object.png" alt="Tekst på væg">
            </div> <!-- mySlides fade -->

            <div class="mySlides fade">
              <div class="numbertext">4 / 6</div>
              <img src="billeder/grafisk_design/slideshow_photoshop/smooth.png" alt="Tekst effekter i photoshop">
            </div> <!-- mySlides fade -->

            <div class="mySlides fade">
              <div class="numbertext">5 / 6</div>
              <img src="billeder/grafisk_design/slideshow_photoshop/Grapevine_leaf.jpg" alt="Et blad">
              <img src="billeder/grafisk_design/slideshow_photoshop/draabe.png" alt="Et blad med dråbe på">
            </div> <!-- mySlides fade -->

            <div class="mySlides fade">
              <div class="numbertext">6 / 6</div>
              <img src="billeder/grafisk_design/slideshow_photoshop/spot_healing_brush.jpg" alt="En ældre dame">
              <img src="billeder/grafisk_design/slideshow_photoshop/spot_healing_brush.png" alt="En ældre dame med færre rynker">
            </div> <!-- mySlides fade -->

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div> <!-- slideshow-contaioner -->
        <br> <!-- linebreak -->

        <div id="prikker"> <!-- style="text-align:center" -->
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
        </div> <!-- prikker -->
      </section> <!-- slideshow -->

      <?php include("footer.inc"); ?>
  </div> <!-- pagewrap -->
    <script>
      function goBack() { /* Går en tilbage i historikken */
      window.history.back();
      }

      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
    </script>
  </html>
