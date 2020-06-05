<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid maincontainer text-center">
    <div class="container">
        <div>
            <section class="maintext text-center">				
    <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page text-center">

		<div class="postcontent text-center">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'aligncenter')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
</section>
           
     </div>
    </div>
  </div>
<?php get_footer(); ?>