<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
   

<section class="container-fluid banner">
        <div class="herobg">
   <h1><?php the_field('titleforourservices'); ?></h1>
             <h2 class="herobg-subhead"><?php the_field('subheadingforourservices'); ?></h2>
            <div class="ourservices-btn">
                <a class="btn btn-default ourservices_btn" href="our-services.html"><?php the_field('buttonforourservices'); ?></a>
            </div>

</div>
    </section>



    <!--DIRECTIONS-->

    <section class="container-fluid directions">
        <div class="row">
            <div class="col-sm-5 map">
                <img class="minimal-map-freo" src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/minimal_map_freo.png" alt="Map of Fremantle">
            </div>
            <!--COL-SM-6-->
            <div class="col-sm-7 directions_bodycopy">
                <div class="directions_text">

<h3><?php the_field('titlefordirections'); ?></h3>
                    <p><?php the_field('textfordirections'); ?></p>
                    <div class="getdirections-btn">
                        <a class="btn btn-default ourservices_btn" href="directions.html"><?php the_field('buttonfordirections'); ?></a>
                    </div>
                    <!--GETDIRECTIONS-BTN-->
                    
                </div>
                <!--DIRECTIONS_TEXT-->
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>
    <!--CONTAINER-FLUID DIRECTIONS-->



    <!--SUPPORT US-->

    <section class="container-fluid support-us">
        <div class="support-us-section">
            <div class="support-us-header">
                <h3><?php the_field('titleforsupportus'); ?></h3>
                <p><?php the_field('textforsupportus'); ?></p>
            </div>
            <!--SUPPORT-US-HEADER-->
            <div class="row">

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="donation-white" src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/donation_white.png" alt="An icon of donation">
                    </div>
                    <!--ICONs-->
<!--Placeholder Donation-->
                </div>
                <!--COL-SM-6-->

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="volunteer-white" src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/volunteer_white.png" alt="An icon of volunteering">
                    </div>
                    <!--ICONS-->
<!--place holdervolunteer-->
                </div>
                <!--COL-SM-6-->
            </div>
            <!--ROW-->
        </div>
        <!--SUPPORT-US-SECTION-->
    </section>
    <!--CONTAINER-FLUID SUPPORT-US-->



    <!--SEAFARER RIGHTS-->

    <section class="container-fluid">
        <div class="rights">
            <div class="row">
                <div class="col-sm-5">
                    <div class="seafarers-rights-img">
                        <img class="seafarers-rights" src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/seafarers_rights.jpg" alt="Smiling seafarer">
                    </div>
                    <!--SEAFARERS-RIGHTS-IMG-->
                </div>
                <!--COL-SM-6-->
                <div class="col-sm-7">
                    <div class="rights_content">
                        <div class="seafarers-rights-text">
<!--Placeholder Seafarers rights-->
                        </div>
                        <!--SEAFARERS-RIGHTS_BTN-->
                    </div>
                    <!--RIGHTS_CONTENT-->
                </div>
                <!--COL-SM-6-->
            </div>
            <!--ROW-->
        </div>
        <!--RIGHTS-->
    </section>
<?php get_footer();?>