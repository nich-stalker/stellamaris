<?php
/*
Template Name: Religious Resources
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<body>
<section class="container-fluid">
        <div class="directions">
            <h3 class="directions-title"><?php the_field('titleforreligiousresources'); ?></h3>

        </div>
    </section>.
    
    <section class="container-fluid religious-top">

        <div class="row">
            <div class="col-md-3"> </div>
            <div class="col-md-2">
                <div class="prayer-mary">
                    <div class="col-md-6">
                <img class="jesus_seafarer_2" src="<?php the_field('imageforreligiousresources'); ?>" alt="Jesus standing over the seafarer" height="360px">
            </div>
                    
                </div>
            </div>


            <div class="col-md-6">
                <div class="directions-info-text">
                    <h2 class="prayer-mary-title"><?php the_field('titleforfirstprayer'); ?></h2>
                    <p class="prayer-body mary-body"><?php the_field('textforfirstprayer'); ?></p>
                </div>
            </div>
            <div> </div>
        </div>
    </section>
    
    <div class="text-center our-lady">
    <h4 class="text-center our-lady-2"><?php the_field('religiousquote'); ?></h4>
    <p><?php the_field('quoteauthor'); ?></p>
    </div>
    
     <section class="container-fluid religious-top">
         <div>

        <div class="row prayer-mary-2">
            <div class="col-md-3"> </div>
            <div class="col-md-3">
                <div class="prayer-mary">
                    <h2 class="prayer-bottom prayer-mary-title"><?php the_field('titleforsecondprayer'); ?><div class="cf"><?php the_field('subheadingforsecondprayer'); ?></div></h2>
                    <p class="prayer-body"><?php the_field('textforsecondprayer'); ?></p>
                    
                </div>
            </div>
            
            <div class="col-md-1"> </div>
            <div class="col-md-3">
                <div class="prayer-mary">
                    <h2 class="prayer-bottom prayer-mary-title"><?php the_field('titleforsecondprayer'); ?></h2>
                    <p class="prayer-body"><?php the_field('textforthirdprayer'); ?></p>
                    
                </div>
            </div>
            
            
        </div>
        
        </div>
    </section>

    
<div class="text-center go-to">
    <h4 class="text-center our-lady-2 prayer-body"><?php the_field('textgotofacebook'); ?></h4>
   
</div>
</body>
<?php get_footer();?>