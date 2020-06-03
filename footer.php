<footer class="footer">
        <div class="container-fluid footer">
            <div class="row">
                <div class="col-sm-6">
            <ul class="footer-text left" id="horizontal-list">
<?php wp_nav_menu(array(
        'menu' => 'Bottom menu left',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
                </ul>
                </div>
                <div class="col-sm-6">
                     <ul class="footer-text right" id="horizontal-list"> 
                <li><a class="footer-text footer-logo" href="<?php echo get_permalink(234); ?>"> <img class="footer-logo-center" img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo_stellamaris.png" alt="Stella Maris Logo" href="<?php echo get_permalink(234); ?>"> </a></li>
                <?php wp_nav_menu(array(
        'menu' => 'Bottom menu right',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
                <li><a class="footer-text facebook-logo" href="https://www.facebook.com/stellamarisfremantle"> <img class="facebook-logo-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/facebook_logo.png" alt="Facebook Logo"> </a></li>
                <li><a class="btn btn-default footer supportus-btn" href="<?php echo get_permalink(158); ?>">Support Us</a></li>
            </ul>
                </div>
                </div>
            <div class="footer-text copyright">
            <small>&copy; Copyright <?php echo date("Y"); ?>, Stella Maris Seafarers' Centre Fremantle</small>
        </div> <!--COPYRIGHT-->
        </div>
        <!--footer-->
    </footer>

</body>

</html>
<?php wp_footer(); ?>