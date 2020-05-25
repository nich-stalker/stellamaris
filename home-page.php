<?php
/*
Template Name: Home page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid banner">
        <div class="herobg">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=8');//look for posts that have the category of 8
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="our-services-home"><?php the_content() ?></p></div>

<?php
endwhile;
endif;
wp_reset_query();?> 

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
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=9');//look for posts that have the category of 9
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="directions-home"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
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
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=7');//look for posts that have the category of 7
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="support-us-home"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
            </div>
            <!--SUPPORT-US-HEADER-->
            <div class="row">

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="donation-white" src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/donation_white.png" alt="An icon of donation">
                    </div>
                    <!--ICONs-->
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=10');//look for posts that have the category of 10
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="donate-home"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
                </div>
                <!--COL-SM-6-->

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="volunteer-white" src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/volunteer_white.png" alt="An icon of volunteering">
                    </div>
                    <!--ICONS-->
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=11');//look for posts that have the category of 11
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="volunteer-home"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
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
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=12');//look for posts that have the category of 12
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="seafarer-rights-home"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
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