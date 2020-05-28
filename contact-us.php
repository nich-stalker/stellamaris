<?php
/*
Template Name: Contact
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
                        <p><?php the_field('contextforcontactrowone'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('infoforcontactrowone'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contextforcontactrowtwo'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('infoforcontactrowtwo'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contextforcontactrowthree'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('infoforcontactrowthree'); ?></p>
                    </div>
                    <!--CONTACT-RIGHT-TEXT-->
                </div>
                <!--CONTACT-ROW-->
                <div class="row contact-row">
                    <div class="col-md-6 contact-left-text">
                        <p><?php the_field('contextforcontactrowfour'); ?></p>
                    </div>
                    <!--CONTACT-LEFT-TEXT-->
                    <div class="col-md-6 contact-right-text">
                        <p><?php the_field('infoforcontactrowfour'); ?></p>
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
                    <h3 class="feedback-header"><?php the_field('titleforfeedback'); ?></h3>
                    <div class="feedback-text">
                        <p><?php the_field('descriptionforfeedback'); ?></p>
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