<?php
/*
Template Name: Religious Resources
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<body>

    <!-- CONTACT -->

    <section class="container-fluid contact">
        <div class="contact-header">
            <!--need new classes for text-->
            <h3><?php the_field('titleforcontact'); ?></h3>
        </div>
        <!--CONTACT-HEADER-->
        <div class="row contact-content">
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p>Location:</p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p>16 Queen Victoria Street, Fremantle, WA 6160</p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p>Opening Hours:</p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p>Mon to Sat 10:00am - 10:00pm</p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p>Email:</p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p>stella.maris@perthcatholic.org.au</p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p>Phone:</p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p>+61 894 308 488</p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div> 
                <!--CONTACT-ROW-->
        </div>
        <!--CONTACT-CONTENT-->
    </section>
    <!--CONTAINER-FLUID CONTACT-->

    <!-- FEEDBACK -->

    <section class="container-fluid">
        <div class="feedback">
            <div class="row">
                <div class="feedback-content">
                    <h3 class="feedback-header">Feedback</h3>
                    <div class="feedback-text">
                        <p> Should you have any feedback about your interactions with Stella Maris Seafarers' Centre Fremantle, please feel free to leave some feedback below. We greatly appreciate your time and endeavour to keep improving our services.</p>
                    </div>
                    <!--FEEDBACK-TEXT-->
                    <div class="feedback-input">
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="form-group">
                            <label for="usr">Email:</label>
                            <input type="text" class="form-control" id="usr2">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                    <!--FEEDBACK-INPUT-->
                </div>
                <!--FEEDBACK-CONTENT-->
            </div>
            <!--ROW-->
        </div>
        <!--FEEDBACK-->
    </section>
    <!--CONTAINER-FLUID-->

</body>
<?php get_footer();?>