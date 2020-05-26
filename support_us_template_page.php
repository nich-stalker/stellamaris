<?php
/*
Template Name: Support Us
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid support-us"<?php if ( get_field('backgroundimageforsupportus') ) { echo 'style="background: url(' . get_field('backgroundimageforsupportus') . ')"'; } ?>>
        <div class="support-us-section">
            <div class="support-us-header">
<h3><?php the_field('titleforsupportus'); ?></h3>
                <p><?php the_field('textforsupportus'); ?></p>
            <!--SUPPORT-US-HEADER-->
                </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="donation-white" alt="An icon of donation" src="<?php the_field('imagefordonation'); ?>">
                    </div>
                    <!--ICONs-->
                    <div class="donation_btn">
                    <a class="btn btn-default donation_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=371"><?php the_field('buttonfordonation'); ?></a>
                    </div>
                    <!--DONATION_BTN-->
                    <div class="donation_text">
                    <p><?php the_field('textfordonation'); ?></p>
                    </div>
                    <!--DONATION_TEXT-->
                </div>
                <!--COL-SM-6-->

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="volunteer-white" alt="An icon of volunteering" src="<?php the_field('imageforvolunteer'); ?>">
                    </div>
                    <!--ICONS-->
                    <div Class="volunteer_btn">
                    <a class="btn btn-default volunteer_btn" href="http://206.189.45.97/~mesh21/sub/?page_id=350"><?php the_field('buttonforvolunteer'); ?></a>
                    </div>
                    <!--VOLUNTEER_BTN-->
                    <div class="volunteer_text">
                    <p><?php the_field('textforvolunteer'); ?></p>
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


    <!--IMAGE AND TITLE-->

    <section class="image-title">
        <div class="row">
            <div class="col-sm-6 supportus-img img-responsive"<?php if ( get_field('imageforseafarersupport') ) { echo 'style="background: url no-repeat center center(' . get_field('imageforseafarersupport') . ')"'; } ?>>

            </div>
            <!--COL-SM-6-->
            <div class="col-sm-6">
                <div class="support-seafarers">
                    <h1><?php the_field('titleforseafarersupport'); ?></h1>
                </div>
                <!--SUPPORT-SEAFARERS-->
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>


    <!--BIOGRAPHY-->

    <section class="biography">
<div class="biography-title">
            <h3><?php the_field('titleforwhyhelp'); ?></h3>
        </div>
        <!--BIOGRAPHY-TITLE-->
        <div class="biography-bodycopy">
            <p><?php the_field('textforwhyhelp'); ?></p>
        </div>
        <!--BIOGRAPHY-BODYCOPY-->
    </section>

<?php get_footer(); ?>