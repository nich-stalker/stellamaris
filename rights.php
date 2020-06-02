<?php
/*
Template Name: Rights
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid text-center our-services-top p-padded">
       
                <h3><?php the_field('titleforrightsintro'); ?></h3>
                <p><?php the_field('subheadingforrightsintro'); ?></p>
        
                <p><?php the_field('textforrightsintro'); ?></p>

                <p class="rights-intro"><?php the_field('introtorightslinks'); ?></p>
          
    </section>


    <section class="container-fluid">
        <div class="rights-contact">
            <div class="row p-padded">
                <!-- may need to make these into rows instead for responsive -->

            <p class="rights-title rights-margin"><?php the_field('titleforrightslinkone'); ?></p>
            <p class="rights-free rights-margin"><?php the_field('textforrightslinkone'); ?></p>
                <div class="health-btn">
            <a class="btn btn-default" href="<?php the_field('linkforrightslinkone'); ?>"> See Website </a>
                </div>
            <p class="rights-title rights-margin"><?php the_field('titleforrightslinktwo'); ?></p>
                <div class="health-btn">
            <a class="btn btn-default" href="<?php the_field('linkforrightslinktwo'); ?>"> See Website </a>
                </div>
            </div>
            <!--ROW-->
        </div>
        <!--RIGHTS-TEXT-->
    </section>
    <!--CONTAINER-FLUID RIGHTS-->

    
    
    <section class="container-fluid contact">
        <div class="rights-bottom text-center rights-margin">
            <!--CONTACT-HEADER-->


                <p class="rights-free"><?php the_field('outroforrights'); ?></p>

            <!--ROW-->
        </div>
        <!--RIGHTS-TEXT-->
    </section>
    <!--CONTAINER-FLUID RIGHTS-->
</body>
<?php get_footer();?>
