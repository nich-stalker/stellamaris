<?php
/*
Template Name: Directions Backup
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid">
        <div class="directions">
            <h3 class="directions-title"><?php the_field('titlefordirections'); ?></h3>
            
            
          
    </div>
    </section>.


    
     <section class="container-fluid contact-directions directions-info">
        <div class="contact-header">
            <!--need new classes for text-->
            <h2><?php the_field('directionscontact'); ?></h2>
        </div>
        <!--CONTACT-HEADER-->
        <div class="row contact-content-directions">
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contactlocationtitle'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('contactlocationtext'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contacthourstitle'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('contacthourstext'); ?><p></div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contactphonetitle'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('contactphonetext'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div> 
                <!--CONTACT-ROW-->
        </div>
        <!--CONTACT-CONTENT-->
    </section>
    <!--CONTAINER-FLUID CONTACT-->
    
    
    
    
    
    
    
    
<section class="container-fluid directions-tourist">

        <div class="row">
            
            <div class="col-md-6">
                <div class="directions-info-text">
                    <div>
                    
                    <img class="minimal-map-freo" src="<?php the_field('imagefordirectionstourist'); ?>" alt="Fremantle Boat Harbour" height="300px">
                        
                    </div>
                
            </div>
            <div> </div>
        </div>
            
            
        <div> </div>
            <div class="col-md-5 directions-attractions">
                <h2 class="directions-title-2"><?php the_field('titlefordirectionstourist'); ?></h2>
                <div class="directions-info-headings">
                    <p><?php the_field('textfordirectionstourist'); ?></p>
                    <br>
                    
                    <div class="ourservices-btn">
                <a class="btn btn-default ourservices_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=547"><?php the_field('buttonfordirectionstourist'); ?></a>
            </div>
                    
                </div>
            </div>
            
    </div>

    

</section>
</body>
<?php get_footer();?>