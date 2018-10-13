<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rock Business
 */

/**
 *
 * @hooked rock_business_footer_start
 */
do_action( 'rock_business_action_before_footer' );

/**
 * Hooked - rock_business_footer_top_section -10
 * Hooked - rock_business_footer_section -20
 */
do_action( 'rock_business_action_footer' );

/**
 * Hooked - rock_business_footer_end. 
 */
do_action( 'rock_business_action_after_footer' );

wp_footer(); ?>

</body>  
</html>