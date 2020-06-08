<?php
/*
Template Name: Donate Page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid donate">
        <div class="row">
            <div class="col-sm-6">
                <div class="donation_content">
                    <div class="donate-title">
                        <h3><?php the_field('titlefordonate'); ?></h3>
                    </div>
                    <!--DONATE-TITLE-->
                    <div class="donate-bodycopy">
                        <p><?php the_field('textfordonate'); ?></p>
                    </div>
                    <!--DONATE-BODYCOPY-->
                </div>
                <!--DONATION_CONTENT-->
            </div>
            <!--COL-SM-6-->
            <div class="col-sm-6">
                <div class="donation_image">
                    <img class="wooly_hats" alt="Seafarer's with woolen hats" src="<?php the_field('imagefordonate'); ?>">
                </div>
                <!--DONATION_IMAGE-->
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>

    <!--VOLUNTEER-->

    <section class="container-fluid support-us subpage"<?php if ( get_field('backgroundimageforvolunteer') ) { echo 'style="background: url(' . get_field('backgroundimageforvolunteer') . ')"'; } ?>>
        <div class="support_subpage">
            <div class="icons">
                <img class="volunteer-white" alt="An icon of volunteering" src="<?php the_field('imageforvolunteer'); ?>">
            </div>
            <!--ICONS-->
            <div Class="volunteer_btn">
                <a class="btn btn-default volunteer_btn" href="<?php the_field('linkforvolunteer'); ?>"><?php the_field('buttonforvolunteer'); ?></a>
            </div>
            <!--VOLUNTEER_BTN-->
            <div class="volunteer_text">
                <p><?php the_field('textforvolunteer'); ?></p>
            </div>
            <!--VOLUNTEER_TEXT-->
        </div>
        <!--SUPPORT_SUBPAGE-->
    </section>
<?php get_footer();?>