<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid banner herobg">
        <div class="">
            <h1> Stella Maris Seafarers' Centre Fremantle </h1>
            <h2 class="herobg-subhead">Supporting Seafarers from all across the world</h2>
            <div class="ourservices-btn">
                <a class="btn btn-default ourservices_btn" href="<?php echo get_permalink(166); ?>">Our Services</a>
            </div>
            <!--OURSERVICES_BTN-->
        </div>
        <!--HEROBG-->
    </section>



    <!--DIRECTIONS-->

    <section class="container-fluid directions">
        <div class="row">
            <div class="col-sm-5 map">
                <img class="minimal-map-freo" src="assets/minimal_map_freo.png" alt="Map of Fremantle">
            </div>
            <!--COL-SM-6-->
            <div class="col-sm-7 directions_bodycopy">
                <div class="directions_text">
                    <h3> Where are we located?</h3>
                    <p> Stella Maris is based at 16 Queen Victoria Street in Frematnle. Click get directions to find out exactly where we are or see all the useful things seafarers may need around us.</p>
                    <div class="getdirections-btn">
                        <a class="btn btn-default ourservices_btn" href="<?php echo get_permalink(167); ?>">Get Directions</a>
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
                <h3>Support us today</h3>
                <p>Stella Maris is a “not-for-profit" organisation staffed chiefly by volunteers.</p>
                <p> We need your prayers, your support and your time to help us to continue offering support to seafarers.</p>
            </div>
            <!--SUPPORT-US-HEADER-->
            <div class="row">

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="donation-white" src="assets/donation_white.png" alt="An icon of donation">
                    </div>
                    <!--ICONs-->
                    <div class="donation_btn">
                        <a class="btn btn-default donation_btn" href="<?php echo get_permalink(371); ?>">Donate Now</a>
                    </div>
                    <!--DONATION_BTN-->
                    <div class="donation_text">
                        <p>Seafarers spend most of their life at sea and are unable to access stores easily. Any donations are welcome, from clothing to magazines, to games or any lose change.</p>
                    </div>
                    <!--DONATION_TEXT-->
                </div>
                <!--COL-SM-6-->

                <div class="col-sm-6">
                    <div class="icons">
                        <img class="volunteer-white" src="assets/volunteer_white.png" alt="An icon of volunteering">
                    </div>
                    <!--ICONS-->
                    <div Class="volunteer_btn">
                        <a class="btn btn-default volunteer_btn" href="<?php echo get_permalink(350); ?>">Volunteer Now</a>
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
                        <img class="seafarers-rights" src="assets/seafarers_rights.jpg" alt="Smiling seafarer">
                    </div>
                    <!--SEAFARERS-RIGHTS-IMG-->
                </div>
                <!--COL-SM-6-->
                <div class="col-sm-7">
                    <div class="rights_content">
                        <div class="seafarers-rights-text">
                            <h3>Seafarer Rights</h3>
                            <p class="seafarers-rights-home"> It is important for seafarers to be aware of their rights whilst at sea and also when they are in port. We have provided the basic information needed and links to other important sources.</p>
                            <div class="seafarers-rights_btn">
                                <a class="btn btn-default seafarers-rights_btn"  href="<?php echo get_permalink(168); ?>">View Rights</a>
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
    <!--CONTAINER-FLUID SEAFARERS-RIGHTS-->
<?php get_footer();?>