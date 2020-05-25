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
                        <h3>Donating to Stella Maris</h3>
                    </div>
                    <!--DONATE-TITLE-->
                    <div class="donate-bodycopy">
                        <p>Our work is funded through voluntary donations. Funds are raised through regular appeals, volunteer activities, generous legacy donations and special fundraising events such as our annual Sea Sunday campaign.</p>

                        <p>We rely on your donations. If you would like to help please call us on <b>9430 8488</b>, email us at <b>stella.maris@perthcatholic.org.au</b> or <b>visit the Centre.</b></p>

                        <p>Apart from financial help we also welcome gifts of clothing, books and magazines.</p>
                    </div>
                    <!--DONATE-BODYCOPY-->
                </div>
                <!--DONATION_CONTENT-->
            </div>
            <!--COL-SM-6-->
            <div class="col-sm-6">
                <div class="donation_image">
                    <img class="wooly_hats" src="assets/wooly_hats.jpg" alt="Seafarer's with woolen hats">
                </div>
                <!--DONATION_IMAGE-->
            </div>
            <!--COL-SM-6-->
        </div>
        <!--ROW-->
    </section>

    <!--VOLUNTEER-->

    <section class="container-fluid support-us subpage">
        <div class="support_subpage">
            <div class="icons">
                <img class="volunteer-white" src="assets/volunteer_white.png" alt="An icon of volunteering">
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
        <!--SUPPORT_SUBPAGE-->
    </section>
<?php get_footer();?>