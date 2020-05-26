<?php
/*
Template Name: Our Services
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid text-center our-services-top">
       
                <h3><?php the_field('titleforourservices'); ?></h3>
                <p><?php the_field('introforourservices'); ?></p>
          
    </section>
    <!--CONTAINER-FLUID OUR-SERVICES-->


    <section class="container-fluid our-services-info">
        <div class="our-services-section">
            <!--SUPPORT-US-HEADER-->
            <div class="row">

                <div class="col-sm-6 darkblue services-right">
                    <div class="our-services-images">
                        <img class="money-image" src="<?php the_field('imageforserviceone'); ?>" alt="Foreign Exchange" height="120px">
                    </div>
                    <!--TITLES-->
                    <div class="money-title">
                        <h2 class="center"><?php the_field('titleforserviceone'); ?></h2>
                    </div>
                    <!--TEXT-->
                    <div class="sim-text"><?php the_field('textforserviceone'); ?></div>
                    <!--TEXT-->
                </div>
                <!--COL-SM-6-->
                
                 <div class="col-sm-6 lightblue services-left">
                    <div class="our-services-images">
                        <img class="sim-image" src="<?php the_field('imageforservicetwo'); ?>" alt="SIM Cards" height="120px">
                    </div>
                    <!--TITLES-->
                    <div class="sim-title">
                        <h2 class="center"><?php the_field('titleforservicetwo'); ?></h2>
                    </div>
                    <!--TEXT-->
                    <div class="sim-text sim-text-low"><?php the_field('textforservicetwo'); ?> </div>
                    <!--TEXT-->
                </div>
                
            </div>

            <!--ROW-->
        </div>
        <!--SUPPORT-US-TEXT-->
    </section>
    <!--CONTAINER-FLUID OUR SERVICES-->



    <section class="container-fluid our-services-section">
        <div class="our-services-section-dark">
            <!--HEADER-->
            <div class="row">

                <div class="col-sm-6 darkblue">
                    <div class="our-services-images">
                        <img class="wifi-image" src="<?php the_field('imageforservicethree'); ?>" alt="Free Wifi" height="120px">
                    </div>
                    <!--TITLES-->
                    <div class="wifi-title">
                        <h2 class="center"><?php the_field('titleforservicethree'); ?></h2>
                    </div>
                    <!--TEXT-->
                    <div class="sim-text"><?php the_field('textforservicethree'); ?></div>
                    <!--TEXT-->
                </div>
                <!--COL-SM-6-->

                <div class="col-sm-6 lightblue">
                    <div class="our-services-images">
                        <img class="food-image" src="<?php the_field('imageforservicefour'); ?>" alt="Food and Drinks" height="120px">
                    </div>
                    <!--TITLES-->
                    <div class="food-title">
                        <h2 class="center"><?php the_field('titleforservicefour'); ?></h2>
                    </div>
                    <!--TEXT-->
                    <div class="sim-text"><?php the_field('textforservicefour'); ?></div>
                    <!--TEXT-->
                </div>
                <!--COL-SM-6-->
            </div>

            <!--ROW-->
        </div>
        <!--SUPPORT-US-TEXT-->
    </section>
    <!--CONTAINER-FLUID OUR SERVICES-->
    
        <section class="container-fluid our-services">
        <div class="our-services-header">
            <div class="our-services-title">
                <h3><?php the_field('ourservicesoutrotitle'); ?></h3>
                <p class="free-clothing"><?php the_field('ourservicesoutrotext'); ?></p>
            </div>
            <!--ROW-->
        </div>
        <!--OUR-SERVICES-TEXT-->
    </section>
    <!--CONTAINER-FLUID OUR-SERVICES-->
</body>
<?php get_footer();?>