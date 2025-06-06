<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebBandits
 */

?>
<!--
                                  ****************                    
                              ***********************                 
                            ****************************              
                           ******************************             
                          *********************************           
                       *************************************   *      
                     ****************************************  **     
                    ********** ****************************** ***     
                   ******  **************************************     
********          ****  *****************************************     
  *********      *** ****************         ****************** *    
    *********    * *********                          ************    
       *******    *****                                   ******      
  ****** ******  **                                                   
  *****************                                          *******  
   ***********************                            ****************
    *******************************          *************************
      ************* **************************************************
          **********   **********************************   **********
           *********      ****************************      ********* 
            *********        **********************        ********** 
             *********           **************           **********  
              **********    ***********************     **********    
               ***********************    ***********************     
                  *****************         ******************        
                      **********                ***********          
					  
							    WebBandits - 2025
 -->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#4285f4" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/114162b040.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'webbandits' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-9">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<div class="line"></div>
							<div class="line"></div>
							<div class="line"></div>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
