<?php
/*
Template Name: About us
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid about-us">
        <div class="row">
            <div class="col-md-6">
                <div class="about-us-content">
                    <div class="about-us-title">
                        <h3><?php the_field('titleforaboutus'); ?></h3>
                    </div>
                    <!--ABOUT-US-TITLE-->
                    <div class="about-us-bodycopu">
                        <p><?php the_field('textforaboutus'); ?></p>
                    </div>
                    <!--ABOUT-US-BODYCOPY-->
                </div>
                <!--ABOUT-US-CONTENT-->
            </div>
            <!--COL-SM-6-->
            <div class="col-md-6">
                <img class="jesus_seafarer" alt="Jesus standing over the seafarer" src="<?php the_field('imageforaboutus'); ?>">
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>

    <!--DIRECTIONS-->

    <section class="container-fluid directions subpage">
        <div class="row">
            <div class="col-sm-5 map">
                <img class="minimal-map-freo" alt="Map of Fremantle" src="<?php the_field('imagefordirections'); ?>">
            </div>
            <!--COL-SM-6-->
            <div class="col-sm-7 directions_bodycopy">
                <div class="directions_text">
                    <h3><?php the_field('titlefordirections'); ?></h3>
                    <p><?php the_field('textfordirections'); ?></p>
                    <div class="aboutusbutton">
                    <a class="btn btn-default ourservices_btn" href="directions.html"><?php the_field('buttonfordirections'); ?></a>
                </div>
                    </div>
                <!--DIRECTIONS_TEXT-->
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
