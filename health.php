<?php
/*
Template Name: Health
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<body>
 
<!--HEALTH-->

    <section class="container-fluid health">
        <div class="health-section">
            <div class="health-header">
                <h3><?php the_field('titleforreligiousresources'); ?></h3>
            </div>
            <!--HEALTH-HEADER-->
            <div class="row">
                 <div class="health-text">
                    <p>Life at sea is very stressful.  All seafarers have a responsibility to both care for themselves but also to be mindful of their crewmates wellbeing.</p>
                    <p>Here are links to some resources that might be especially helpful during the coronavirus Covid-19 outbreak including managing stress and mental health and wellbeing.</p>
                </div>
                <!--HEALTH-TEXT-->
            </div>
            <!--ROW-->
        </div>
        <!--HEALTH-TEXT-->
    </section>
    <!--CONTAINER-FLUID HEALTH-->

    <!--HEALTH LINKS-->

    <section class="container-fluid">
        <div class="health-links">
            <div class="row">
                <div class="col-md-6 health-linkbox linkbox-darkgreen linkbox-slim linkbox-fr">
                    <div class="health-link-img">
                        <img src="<?php the_field('imageforhealthone'); ?>" class="health-img-responsive" alt="Covid-19 Seafarer Wellbeing">
                        <!--Add this: class="img-circle", if we want circle-->
                    </div>
                    <!-- HEALTH-LINK-IMG-->
                    <div class="health-links-text">
                        <h2> Covid 19: Seafarer Wellbeing </h2>
                        <p>CHIRP Maritime Focus on seafarer wellbeing during Covid-19 pandemic.</p>
                    </div>
                    <!--HEALTH-LINKS-TEXT-->
                    <div class="health-btn">
                        <a class="btn btn-default" href="https://www.chirpmaritime.org/wp-content/uploads/2020/04/Covid-19-psycology-and-welfare-paper-April-2020-Final.pdf">See details</a>
                        <!--        <link href="#" rel="#"/><a href="#" class="btn btn-default" role="button">Text</a>
                        -->
                    </div>
                    <!--HEALTH-BTN-->
                </div>
                <!-- HEALTH-LINKBOX -->
                <div class="col-md-6 health-linkbox linkbox-green linkbox-fl">
                    <div class="health-link-img">
                        <img src="<?php the_field('imageforhealthtwo'); ?>" class="health-img-responsive" alt="Covid-19 General Advice">
                        <!--Add this: class="img-circle", if we want circle-->
                    </div>
                    <!-- HEALTH-LINK-IMG-->
                    <div class="health-links-text">
                        <h2> Covid-19: General Advice </h2>
                        <p>CHIRP Maritime Covid-19 general advice to Masters and crew.</p>
                    </div>
                    <!--HEALTH-LINKS-TEXT-->
                    <div class="health-btn">
                        <a class="btn btn-default" href="https://www.chirpmaritime.org/wp-content/uploads/2020/04/CHIRP-Maritime-COVID19-General-Medical-Advice.pdf">See details</a>
                    </div>
                    <!--HEALTH-BTN-->
                </div>
                <!-- HEALTH-LINKBOX -->
            </div>
            <!--ROW-->
            <div class="row">
                <div class="col-md-6 health-linkbox linkbox-darkgreen">
                    <div class="health-link-img">
                        <img src="<?php the_field('imageforhealththree'); ?>" class="health-img-responsive" alt="Fatigue">
                        <!--Add this: class="img-circle", if we want circle-->
                    </div>
                    <!-- HEALTH-LINK-IMG-->
                    <div class="health-links-text">
                        <h2> Fatigue </h2>
                        <p> Fatigue Guidelines: Managing and reducing the risk of fatigue at sea.</p>
                    </div>
                    <!--HEALTH-LINKS-TEXT-->
                    <div class="health-btn">
                        <a class="btn btn-default" href="https://www.chirpmaritime.org/wp-content/uploads/2020/03/amsa-fatigue-guidelines-web.pdf">See details</a>
                    </div>
                    <!--HEALTH-BTN-->
                </div>
                <!-- HEALTH-LINKBOX -->
            </div>
            <!--ROW-->
        </div>
        <!--HEALTH-LINKS-->
    </section>
    <!--CONTAINER-FLUID-->
    
</body>
<?php get_footer();?>