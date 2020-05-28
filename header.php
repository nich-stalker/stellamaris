<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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
                    <a class="navbar-brand" href="http://206.189.45.97/~mesh21/sub/?page_id=234"> <img src="http://206.189.45.97/~mesh21/sub/wp-content/themes/stellamaris/assets/logo_stellamaris.png" alt="Stella Maris Logo"> </a>
                </div>
                <!--NAVBAR-HEADER-->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
          <ul class="nav navbar-nav navbar-right">
<?php wp_nav_menu(array(
        'menu' => 'Top menu',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
</ul>


                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-left" action="/action_page.php">
                                <a class="btn btn-default header" href="http://206.189.45.97/~mesh21/sub/?page_id=158">Support Us</a>
                                <div class="form-group">
                                    <ivory-search id="619" title="Default Search Form">
                                    <input type="text" class="form-control search-bar" placeholder="Search">
                                  </ivory-search>
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