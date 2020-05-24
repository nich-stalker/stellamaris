<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

    <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800&display=swap" rel="stylesheet">



<?php wp_head(); ?>
</head>

<body>

    <!--NAVIGATION BAR-->
    <header class="container-fluid">

        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Index.html"> <img src="assets/logo_stellamaris.png" alt="Stella Maris Logo"> </a>
                </div>
                <!--NAVBAR-HEADER-->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a class="navigation-text" href="index.html">Stella Maris</a></li>
                        <li><a class="navigation-text" href="our-services.html">Our Services</a></li>
                        <li><a class="navigation-text" href="directions.html">Directions</a></li>
                        <li><a class="navigation-text" href="rights.html">Rights</a></li>
                        <li><a class="navigation-text" href="health.html">Health</a></li>
                        <li><a class="navigation-text" href="religious-resources.html">Religious Resources</a></li>
                        <li><a class="navigation-text" href="about-us.html">About Us</a></li>
                        <li><a class="navigation-text" href="contact-us.html">Contact</a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-left" action="/action_page.php">
                                <a class="btn btn-default header" href="support-us.html">Support Us</a>
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Search">
                                </div>

                            </form>
                        </li>
                    </ul>
                    <!--NAVBAR-->
                </div>
                <!--COLLAPSE NAVBAR-COLLAPSE-->
            </div>
            <!--CONTAINER FLUID-->
        </nav><!-- NAVBAR -->
    </header>