<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package experimentor
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="site-header">
            <div class="container">
                <div class="site_header_content">
                    <div class = "site_logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_new.png" alt="">
					</div>
                    <nav class="experimentor_navbar">
                        <?php wp_nav_menu(
                            array(
                            'theme_location' => 'headerMenuLocation'
                            )
                        ); ?>
                    </nav>
                    <div class="hamburger" id="hamburger" onclick="navFunction()">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </header>
