<?php
/*
Template Name: Health
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<body>
 
    
<!-- BANNER -->
<!-- copy and paste the BANNER class style.css into health-banner -->
    <section class="container-fluid banner">
        <div class="health-banner">
            <img class="health-banner-img" src="<?php the_field('heroimageforhealth'); ?>" alt="Banner of smiling seafarers.">
         <!-- need this in php heroimageforhealth -->
        </div>
    </section>    
    
    
<!--HEALTH-->

    <section class="container-fluid health">
        <div class="health-section">
            <div class="health-header">
                <h3><?php the_field('titleforhealth'); ?></h3>
            </div>
            <!--HEALTH-HEADER-->
            <div class="row">
                 <div class="health-text">
                    <p><?php the_field('descriptionforhealth'); ?></p>
                </div>
                <!--HEALTH-TEXT-->
            </div>
            <!--ROW-->
        </div>
        <!--HEALTH-TEXT-->
    </section>
    <!--CONTAINER-FLUID HEALTH-->

    <!--HEALTH LINKS-->

    <section class="container-fluid">
        <div class="col-lg-12 health-links">
                <div class="row health-linkbox linkbox-green" id="linkbox-one">
                    <div class="health-link-img">
                        <img src="<?php the_field('imageforhealthone'); ?>" class="health-img-responsive" alt="Covid-19 Seafarer Wellbeing">
                        <!--Add this: class="img-circle", if we want circle-->
                    </div>
                    <!-- HEALTH-LINK-IMG-->
                    <div class="health-links-text">
                        <h2><?php the_field('titleforlinkboxone'); ?></h2>
                        <p><?php the_field('descriptionforlinkboxone'); ?></p>
                    </div>
                    <!--HEALTH-LINKS-TEXT-->
                    <div class="health-btn">
                        <a class="btn btn-default" href="<?php the_field('buttonforlinkboxone'); ?>">See details</a>
                        <!--        <link href="#" rel="#"/><a href="#" class="btn btn-default" role="button">Text</a>
                        -->
                    </div>
                    <!--HEALTH-BTN-->
                </div>
                <!-- HEALTH-LINKBOX -->
                <div class="row health-linkbox linkbox-darkgreen" id="linkbox-two">
                    <div class="health-link-img">
                        <img src="<?php the_field('imageforhealthtwo'); ?>" class="health-img-responsive" alt="Covid-19 General Advice">
                        <!--Add this: class="img-circle", if we want circle-->
                    </div>
                    <!-- HEALTH-LINK-IMG-->
                    <div class="health-links-text">
                        <h2><?php the_field('titleforlinkboxtwo'); ?></h2>
                        <p><?php the_field('descriptionforlinkboxtwo'); ?></p>
                    </div>
                    <!--HEALTH-LINKS-TEXT-->
                    <div class="health-btn">
                        <a class="btn btn-default" href="<?php the_field('buttonforlinkboxtwo'); ?>">See details</a>
                    </div>
                    <!--HEALTH-BTN-->
                </div>
                <!-- HEALTH-LINKBOX -->
            <div class="row health-linkbox linkbox-green" id="linkbox-three">
                    <div class="health-link-img">
                        <img src="<?php the_field('imageforhealththree'); ?>" class="health-img-responsive" alt="Fatigue">
                        <!--Add this: class="img-circle", if we want circle-->
                    </div>
                    <!-- HEALTH-LINK-IMG-->
                    <div class="health-links-text">
                        <h2><?php the_field('titleforlinkboxthree'); ?></h2>
                        <p><?php the_field('descriptionforlinkboxthree'); ?></p>
                    </div>
                    <!--HEALTH-LINKS-TEXT-->
                    <div class="health-btn">
                        <a class="btn btn-default" href="<?php the_field('buttonforlinkboxthree'); ?>">See details</a>
                    </div>
                    <!--HEALTH-BTN-->
            </div>
            <!-- HEALTH-LINKBOX -->
        </div>
        <!--HEALTH-LINKS-->
    </section>
    <!--CONTAINER-FLUID-->
    
</body>
<?php get_footer();?>