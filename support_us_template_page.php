<?php
/*
Template Name: Support Us
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
   
<section class="container-fluid support-us">
        <div class="support-us-section">
            <div class="support-us-header">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=13');//look for posts that have the category of 13
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
                <div><p class="support-us-support-us"><?php the_content() ?></p></div>
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
query_posts('cat=15');//look for posts that have the category of 15
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="donate-support-us"><?php the_content() ?></p></div>
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
query_posts('cat=14');//look for posts that have the category of 14
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="volunteer-support-us"><?php the_content() ?></p></div>
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


    <!--IMAGE AND TITLE-->

    <section class="image-title">
        <div class="row">
            <div class="col-sm-6 supportus-img">

            </div>
            <!--COL-SM-6-->
            <div class="col-sm-6">
                <div class="support-seafarers">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=16');//look for posts that have the category of 16
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="help-out-support-us"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
                </div>
                <!--SUPPORT-SEAFARERS-->
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>


    <!--BIOGRAPHY-->

    <section class="biography">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=17');//look for posts that have the category of 17
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
            <div><p class="why-help-support-us"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
    </section>

<?php get_footer(); ?>