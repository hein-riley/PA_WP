<?php
/**
 *
 * Template Name: Sub-Page
 *
 * This template is used for the subpages of the travis harley Template. 
 *
 * @link https://travisharley.com
 *
 * @package WordPress
 * @subpackage Travis Harley
 * @since Travis Harley 1.0
 */
get_header(); ?>
    <body>
        <header>
            <?php get_template_part('/includes/page-header'); ?>
        </header>
        <div class="body-content">
            <div class="container-fluid banner-services-top wrap push">
                <div class="banner-services-top-wrapper">
                    <!-- loop the pages, get title -->
                     <?php while (have_posts()) : the_post(); ?>
                        <h1 class="subpage-heading"><?php the_title(); ?></h1>  
                    <?php endwhile; ?>
                </div>
            </div><!-- banner-top -->
            
            <!--------------------- LOOP PAGE CONTENT --------------------->
            <div class="container page-content wrap push">
                <div class="col-md-9 page-content-left">
                    <img src="<?php the_field('subpage-img'); ?>" class="subpage-header-img">

                    <!-- loop page, get content -->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content('[...]'); ?> 
                    <?php endwhile; ?>
         
                    
                    <div class="services-cta">
                        <h3>Contact us today</h3>
                        <p>If you have any questions regarding our services, please contact us today. We cater to both residential and commercial clients. Call us today at <a href="tel:888-445-5731">888-445-5731</a>, or visit our Contact us page to send us an email.</p>
                        <div class="service-btn-zone">
                            <a href="<?php echo WORDPRESS_URL; ?>/contact/" class="services-cta-ln btn">Contact Us</a>
                        </div><!-- service-btn-zone -->
                    </div><!-- services-cta -->
                </div><!-- page-content-left -->
                
                <!--------------------- SIDEBAR NAVI --------------------->
                <div class="col-md-3 page-content-right">
                    <div class="side-nav">                        
                        <?php get_template_part('/includes/sidebar'); ?>                    
                    </div><!-- side-nav -->
                </div><!-- page-content-right -->                
            </div><!-- page content -->

        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>
