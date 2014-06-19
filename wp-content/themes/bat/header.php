<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    <link rel="stylesheet" href="<?php echo THEME_DIR_URI ?>css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_URI ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_URI ?>css/main.css">
    <script src="<?php echo THEME_DIR_URI ?>scripts/vendor/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo THEME_DIR_URI ?>scripts/vendor/jquery-1.11.0.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <header class="t-header">
    <div class="navbar-fixed-top">
        <div class="container">
            <div class="brand pull-left">
                <a href="index.php">
                    <img src="<?php echo THEME_DIR_URI ?>images/logo.png" alt="">
                </a>
            </div>
            <div class="nav-top pull-right">
                <ul class="nav navbar-nav">
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Shipping Policy</a></li>
                </ul>
                <ul class="nav navbar-nav contact pull-left">
                    <li><span>Dallas, Texas</span></li>
                    <li><a href="tel:866-690-3272">866-690-3272</a></li>
                    <li><a href="tel:972-475-0092">972-475-0092</a></li>
                </ul>
            </div>
            <nav class="navbar navbar-default navbar-right" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav cl-effect-5','link_before' => '<span data-hover="%s">','link_after'=>'</span>', 'walker' => new Nav_Walker_Nav_Menu()   ) ); ?>
                <!--<ul class="nav navbar-nav cl-effect-5">
                  <li class="current-menu-item"><a href="index.php"><span data-hover="Home">Home</span></a></li>
                  <li><a href="company.php"><span data-hover="Company">Company</span></a></li>
                  <li><a href="trampolines.php"><span data-hover="Trampolines">Trampolines</span></a></li>
                  <li><a href="replacement.php"><span data-hover="Replacement Parts">Replacement Parts</span></a></li>
                  <li><a href="contact.php"><span data-hover="Contacts">Contacts</span></a></li>
                </ul>-->
            </nav>
        </div>
    </div>

 </header>