<?php
/*
Template Name: Tourist Attractions
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid">
        <div class="directions">
            <h3 class="directions-title"><?php the_field('titlefortourist'); ?></h3>

        </div>
    </section>.
    
    <p class="text-center tourist-crop p-padded"><?php the_field('introtextfortourist'); ?></p>
    
    

    
<!-- Container for the image gallery -->
<div class="container tourist_slide p-padded">

  <!-- Full-width images with number text -->
  <div class="mySlides tourist-crop">
    <div class="numbertext">1 / 6</div>
      <img src="<?php the_field('slideshowimageone'); ?>" style="width:100%" alt="Boat Harbour">
  </div>

  <div class="mySlides tourist-crop">
    <div class="numbertext">2 / 6</div>
     <img src="<?php the_field('slideshowimagetwo'); ?>" style="width:100%" alt="Maritime Museum">
  </div>

  <div class="mySlides tourist-crop">
    <div class="numbertext">3 / 6</div>
      <img src="<?php the_field('slideshowimagethree'); ?>" style="width:100%" alt="Shipwreck Museum">
  </div>

  <div class="mySlides tourist-crop">
    <div class="numbertext">4 / 6</div>
      <img src="<?php the_field('slideshowimagefour'); ?>" style="width:100%" alt="Fremantle Prison">
  </div>
    
  <div class="mySlides tourist-crop">
    <div class="numbertext">5 / 6</div>
      <img src="<?php the_field('slideshowimagefive'); ?>" style="width:100%" alt="Roundhouse">
  </div>
    
  <div class="mySlides tourist-crop">
    <div class="numbertext">6 / 6</div>
      <img src="<?php the_field('slideshowimagesix'); ?>" style="width:100%" alt="Arts Center">
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
      <img class="demo cursor" src="<?php the_field('slideshowiconone'); ?>" style="width:100%" onclick="currentSlide(1)" alt="<?php the_field('slideshowcaptionone'); ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field('slideshowicontwo'); ?>" style="width:100%" onclick="currentSlide(2)" alt="<?php the_field('slideshowcaptiontwo'); ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field('slideshowiconthree'); ?>" style="width:100%" onclick="currentSlide(3)" alt="<?php the_field('slideshowcaptionthree'); ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field('slideshowiconfour'); ?>" style="width:100%" onclick="currentSlide(4)" alt="<?php the_field('slideshowcaptionfour'); ?>">
    </div>
      <div class="column">
      <img class="demo cursor" src="<?php the_field('slideshowiconfive'); ?>" style="width:100%" onclick="currentSlide(5)" alt="<?php the_field('slideshowcaptionfive'); ?>">
    </div>
      <div class="column">
      <img class="demo cursor" src="<?php the_field('slideshowiconsix'); ?>" style="width:100%" onclick="currentSlide(6)" alt="<?php the_field('slideshowcaptionsix'); ?>">
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