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
            <div><p class="our-services-home"><?php the_content() ?></p>
            <?php echo '<a class="btn btn-default ourservices_btn" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?></div>
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
                    <div Class="volunteer_btn">
                        <a class="btn btn-default volunteer_btn" href="volunteer.html">Volunteer Now</a>
                    </div>
                    <!--VOLUNTEER_BTN-->
                    <div class="volunteer_text">
                        <p>Stella Maris provides a number of services to fully assist seafarers during their stay in Fremantle. Volunteers with a friendly attitude and smile are always needed to make this possible.</p>
                    </div>
                    <!--VOLUNTEER_TEXT-->
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
                            <h3>Seafarer Rights</h3>
                            <p> It is important for seafarers to be aware of their rights whilst at sea and also when they are in port. We have provided the basic information needed and links to other important sources.</p>
                            <div class="seafarers-rights_btn">
                                <a class="btn btn-default seafarers-rights_btn" href="rights.html">View Rights</a>
                            </div>
                            <!--SEAFARERS-RIGHTS-TEXT-->
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