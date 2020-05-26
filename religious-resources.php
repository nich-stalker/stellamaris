<?php
/*
Template Name: Religious Resources
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid">
        <div class="directions">
            <h3 class="directions-title"><?php the_field('titleforreligiousresources'); ?></h3>

        </div>
    </section>.
    
    <section class="container-fluid religious-top">

        <div class="row">
            <div class="col-md-3"> </div>
            <div class="col-md-2">
                <div class="prayer-mary">
                    <div class="col-md-6">
                <img class="jesus_seafarer_2" src="<?php the_field('imageforreligiousresources'); ?>" alt="Jesus standing over the seafarer" height="360px">
            </div>
                    
                </div>
            </div>


            <div class="col-md-6">
                <div class="directions-info-text">
                    <h2 class="prayer-mary-title"><?php the_field('titleforfirstprayer'); ?></h2>
                    <p class="prayer-body mary-body"><?php the_field('textforfirstprayer'); ?></p>
                </div>
            </div>
            <div> </div>
        </div>
    </section>
    
    <div class="text-center our-lady">
    <h4 class="text-center our-lady-2"><?php the_field('religiousquote'); ?></h4>
    <p><?php the_field('quoteauthor'); ?></p>
    </div>
    
     <section class="container-fluid religious-top">
         <div>

        <div class="row prayer-mary-2">
            <div class="col-md-3"> </div>
            <div class="col-md-3">
                <div class="prayer-mary">
                    <h2 class="prayer-bottom prayer-mary-title"> Spiritual Communion <br> <div class="cf"> (cf. St Alphonsus Liguori) </div></h2>
                    <p class="prayer-body">  My Jesus, <br> I believe that you are present in this Holy Sacrament of the altar.<br> I love you above all things<br>and I passionately desire to receive you into my soul.<br>Since I cannot now receive you sacramentally,<br>come spiritually into my soul<br>so that I may unite myself wholly to you now and forever. Amen. </p>
                    
                </div>
            </div>
            
            <div class="col-md-1"> </div>
            <div class="col-md-3">
                <div class="prayer-mary">
                    <h2 class="prayer-bottom prayer-mary-title">General Prayers for Health </h2>
                    <p class="prayer-body"> Lord Jesus, you came that we might have life in all its fullness.<br>In this time of sickness and the fear of sickness,<br>give me the health of mind – that I might seek out wise guidance and act upon it;<br>the health of body – that will enable me to serve you and those around me;<br>the health of spirit – that my soul rests in the secure knowledge<br>that there is nothing that can separate me from the Father’s love.<br>Give me the grace to share your peace – that peace the world cannot give. </p>
                    
                </div>
            </div>
            
            
        </div>
        
        </div>
    </section>

    
<div class="text-center go-to">
    <h4 class="text-center our-lady-2 prayer-body">  Go to facebook.com/StellaMarisOrg for more inspiration and prayer </h4>
   
</div>
</body>
<?php get_footer();?>