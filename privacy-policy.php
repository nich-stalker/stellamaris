<?php
/*
Template Name: Privacy Policy
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid privacy-policy">
    <div class="privacy-policy-text">
        <div class="privacy-policy-title">
<h2><?php the_field('titleforprivacypolicy'); ?></h2>
            </div>
        <div class="privacy-policy-body">
            <p>
            <?php the_field('textforprivacypolicy'); ?>
            </p>
        </div>
    </div>
    </section>
<?php get_footer();?>