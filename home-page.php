<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid banner">
        <div class="herobg"<?php if ( get_field('imageforourservices') ) { echo 'style="background: url(' . get_field('imageforourservices') . ')"'; } ?>>
   <h1><?php the_field('titleforourservices'); ?></h1>
             <h2 class="herobg-subhead"><?php the_field('subheadingforourservices'); ?></h2>
            <div class="ourservices-btn">
                <a class="btn btn-default ourservices_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=166"><?php the_field('buttonforourservices'); ?></a>
            </div>

</div>
    </section>



    <!--DIRECTIONS-->

    <section class="container-fluid directions">
        <div class="row">
            <div class="col-sm-5 map">
                <img class="minimal-map-freo" alt=“map of fremantle” src="<?php the_field('imagefordirections'); ?>">
            </div>
            <!--COL-SM-6-->
            <div class="col-sm-7 directions_bodycopy">
                <div class="directions_text">

<h3><?php the_field('titlefordirections'); ?></h3>
                    <p><?php the_field('textfordirections'); ?></p>
                    <div class="getdirections-btn">
                        <a class="btn btn-default ourservices_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=167"><?php the_field('buttonfordirections'); ?></a>
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

    <section class="container-fluid support-us"<?php if ( get_field('backgroundimageforsupportus') ) { echo 'style="background: url(' . get_field('backgroundimageforsupportus') . ')"'; } ?>>
        <div class="support-us-section">
            <div class="support-us-header">
                <h3><?php the_field('titleforsupportus'); ?></h3>
                <p><?php the_field('textforsupportus'); ?></p>
            </div>
            <!--SUPPORT-US-HEADER-->
            <div class="row">

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="donation-white" alt=“donation-icon” src="<?php the_field('imagefordonations'); ?>">
                    </div>
                    <!--ICONs-->
                    <div class="donation_btn">
                        <a class="btn btn-default donation_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=371"><?php the_field('buttonfordonation'); ?></a>
                    </div>
                    <!--DONATION_BTN-->
                    <div class="donation_text">
                        <p><?php the_field('textfordonation'); ?></p>
                    </div>
                </div>
                <!--COL-SM-6-->

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="volunteer-white" alt=“volunteering icon” src="<?php the_field('imageforvolunteer'); ?>">
                    </div>
                    <!--ICONS-->
                    <div Class="volunteer_btn">
                        <a class="btn btn-default volunteer_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=350"><?php the_field('buttonforvolunteer'); ?></a>
                    </div>
                    <!--VOLUNTEER_BTN-->
                    <div class="volunteer_text">
                        <p><?php the_field('textforvolunteer'); ?></p>
                    </div>
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
                        <img class="seafarers-rights" alt=“smiling seafarer” src="<?php the_field('imageforseafarersrights'); ?>">
                    </div>
                    <!--SEAFARERS-RIGHTS-IMG-->
                </div>
                <!--COL-SM-6-->
                <div class="col-sm-7">
                    <div class="rights_content">
                        <div class="seafarers-rights-text">
       <h3><?php the_field('titleforseafarerrights'); ?></h3>
                            <p class="seafarers-rights-home"><?php the_field('textforseafarersrights'); ?></p>
                            <div class="seafarers-rights_btn">
                                <a class="btn btn-default seafarers-rights_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=168"><?php the_field('buttonforseafarersrights'); ?></a>
                            </div>
                        </div>
                       
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