<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Cleaning Specialists of Virginia, LLC</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/fav-icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body>
<header class="main_header">
        <div class="top">
            <div class="contact_info">
                <ul>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/Icon-Mail.png" alt=""></span>
                        <a href="mailto: <?php  dynamic_sidebar('contact_email'); ?>"><?php  dynamic_sidebar('contact_email'); ?></a>
                    </li>
                    <li>
                        <span><img src="<?php bloginfo('template_url'); ?>/img/Icon-Phone.png" alt=""></span>
                        <a href="tel: <?php  dynamic_sidebar('contact_phone'); ?>"><?php  dynamic_sidebar('contact_phone'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="side_wapper">
                <div class="login_sec">
                <ul>
                <?php if (is_user_logged_in()) : ?>
                        <li>
                          <a href="<?php echo site_url('/my-account'); ?>" >My Account</a>
                        </li>
                        <?php endif; ?>
                       <?php if (!is_user_logged_in()) : ?>
                        <li>
                         <a href="<?php echo site_url('/login'); ?>" >Login</a>
                        </li>
                        <li>
                         <a href="<?php echo site_url('/register'); ?>" >Register</a>
                        </li>
                        <?php endif; ?>
                   
                        
                    </ul>
                </div>
                <div class="social_media">
                    <ul>
                        <li><a href="<?php  dynamic_sidebar('social_facebook'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/Icon-Facebook.png" alt=""></a></li>
                        <li><a href="<?php  dynamic_sidebar('social_instagram'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/Icon-insta.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="main_nav">
            <div class="container">
                <div class="nav_wapper">
                    <div class="logo_wapper">
                        <span class="pull_mob_nav"><img src="<?php bloginfo('template_url'); ?>/img/main-menu-icon.png" alt=""></span>
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                            <?php 
  
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                            
                            ?>
                            </a>
                        </div>
                    </div>
                    <div class="nav_list_wapper">
                        <div class="nav_list">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );?>
                        </div>
                    </div>
                    <div class="left_side_wapper">
                        <div class="contact_btn">
                            <a href="<?php echo site_url('/contact-us'); ?>" class="a_btn">Contact us</a>
                        </div>
                        <div class="search_wapper_main">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                                     
                                     <input type="text" class="search-field" placeholder="Search ..."value="<?php echo get_search_query(); ?>" name="s" required>
                                     <button type="submit"  class="top_search_btn"></button>
                                 </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
