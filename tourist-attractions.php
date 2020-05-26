<?php
/*
Template Name: Tourist Attractions
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>

    <!--NAVIGATION BAR-->
    <header class="container-fluid">

        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Index.html"> <img src="assets/logo_stellamaris.png" alt="Stella Maris Logo"> </a>
                </div>
                <!--NAVBAR-HEADER-->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a class="navigation-text" href="index.html">Stella Maris</a></li>
                        <li><a class="navigation-text" href="our-services.html">Our Services</a></li>
                        <li><a class="navigation-text" href="directions.html">Directions</a></li>
                        <li><a class="navigation-text" href="rights.html">Rights</a></li>
                        <li><a class="navigation-text" href="health.html">Health</a></li>
                        <li><a class="navigation-text" href="religious-resources.html">Religious Resources</a></li>
                        <li><a class="navigation-text" href="about-us.html">About Us</a></li>
                        <li><a class="navigation-text" href="contact-us.html">Contact</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-left" action="/action_page.php">
                                <a class="btn btn-default header" href="support-us.html">Support Us</a>
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Search">
                                </div>

                            </form>
                        </li>
                    </ul>
                    <!--NAVBAR-->
                </div>
                <!--COLLAPSE NAVBAR-COLLAPSE-->
            </div>
            <!--CONTAINER FLUID-->
        </nav><!-- NAVBAR -->
    </header><!-- HEADER -->
    
    
        <section class="container-fluid">
        <div class="directions">
            <h3 class="directions-title"> Tourist Attractions </h3>

        </div>
    </section>.
    
    <p class="text-center tourist-crop p-padded"> There’s lots to do and see in Fremantle.  You can visit:
 </p>
    
    

    
<!-- Container for the image gallery -->
<div class="container tourist_slide p-padded">

  <!-- Full-width images with number text -->
  <div class="mySlides tourist-crop">
    <div class="numbertext">1 / 6</div>
      <img src="assets/boat_harbour2.jpg" style="width:100%" alt="Boat Harbour">
  </div>

  <div class="mySlides tourist-crop">
    <div class="numbertext">2 / 6</div>
     <img src="assets/maritime_museum.jpg" style="width:100%" alt="Maritime Museum">
  </div>

  <div class="mySlides tourist-crop">
    <div class="numbertext">3 / 6</div>
      <img src="assets/shipwreck_museum.jpg" style="width:100%" alt="Shipwreck Museum">
  </div>

  <div class="mySlides tourist-crop">
    <div class="numbertext">4 / 6</div>
      <img src="assets/fremantle_prison.jpg" style="width:100%" alt="Fremantle Prison">
  </div>
    
  <div class="mySlides tourist-crop">
    <div class="numbertext">5 / 6</div>
      <img src="assets/roundhouse.jpg" style="width:100%" alt="Roundhouse">
  </div>
    
  <div class="mySlides tourist-crop">
    <div class="numbertext">6 / 6</div>
      <img src="assets/arts_centre.jpg" style="width:100%" alt="Arts Center">
  </div>


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption" class="tourist_image_text"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row tourist-crop">
    <div class="column">
      <img class="demo cursor" src="assets/boat_harbour2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Fremantle Fishing Boat Harbour - And enjoy traditional fish and chips.">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/maritime_museum.jpg" style="width:100%" onclick="currentSlide(2)" alt="WA Maritime Museum – A premier attraction. Open every day.">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/shipwreck_museum.jpg" style="width:100%" onclick="currentSlide(3)" alt="WA Shipwrecks Museum – Explore our maritime history. Open every day.">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/fremantle_prison.jpg" style="width:100%" onclick="currentSlide(4)" alt="Fremantle Jail – Built by convicts, the prison operated from 1855 to 1991. Open 9-5 every day.">
    </div>
      <div class="column">
      <img class="demo cursor" src="assets/roundhouse.jpg" style="width:100%" onclick="currentSlide(5)" alt="The Round House – The oldest building in Western Australia. Open 10.30am.">
    </div>
      <div class="column">
      <img class="demo cursor" src="assets/arts_centre.jpg" style="width:100%" onclick="currentSlide(6)" alt="Fremantle Arts Centre - Explore the WA art and culture. Opens 10am.">
    </div> 
  </div>
</div>    
<script>

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
</body>
<?php get_footer();?>