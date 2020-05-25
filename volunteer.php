<?php
    /*
    Template Name: Volunteer page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid volunteer">
        <div class="row">
            <div class="col-md-6">
                <div class="volunteer-title">
                    <h3><?php the_field('titleforvolunteer'); ?></h3>
                </div>
                <!--VOLUNTEER-TITLE-->
                <div class="volunteer-bodycopy">
                    <p><?php the_field('firstparagraphforvolunteer'); ?></p>
                    <ul class="volunteer-list">
                        <li class="volunteer-list-item">
                            <p><?php the_field('volunteerresponsibilityone'); ?></p>
                        </li>
                        <li class="volunteer-list-item">
                            <p><?php the_field('volunteerresponsibilitytwo'); ?></p>
                        </li>
                        <li class="volunteer-list-item">
                            <p><?php the_field('volunteerresponsibilitythree'); ?></p>
                        </li>
                        <li class="volunteer-list-item">
                            <p><?php the_field('volunteerresponsibilityfour'); ?></p>
                        </li>
                        <li class="volunteer-list-item">
                            <p><?php the_field('volunteerresponsibilityfive'); ?></p>
                        </li>
                    </ul>
                    <p><?php the_field('secondparagraphforvolunteer'); ?></p>
                </div>
                <!--VOLUNTEER-BODYCOPY-->
            </div>
            <!--COL-SM-6-->
            <div class="col-md-6">
                <div class="volunteer-img">
                    <img class="seafarers_flag" alt="Smiling seafarer"  src="<?php the_field('imageforvolunteer'); ?>">
                </div>
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>

    <!--DONATE-->
    <section class="container-fluid support-us subpage volunteer-subpage"<?php if ( get_field('backgroundimagefordonate') ) { echo 'style="background: url(' . get_field('backgroundimagefordonate') . ')"'; } ?>>
        <div class="support_subpage">
            <div class="icons">
                <img class="donation-white" alt="An icon of donation" src="<?php the_field('imagefordonate'); ?>">
            </div>
            <!--ICONs-->
            <div class="donation_btn">
                <a class="btn btn-default donation_btn" href="donate.html"><?php the_field('buttonfordonate'); ?></a>
            </div>
            <!--DONATION_BTN-->
            <div class="donation_text">
                <p><?php the_field('textfordonate'); ?></p>
            </div>
            <!--DONATION_TEXT-->
        </div>
        <!--SUPPORT_SUBPAGE-->
    </section>
<?php get_footer();?>
