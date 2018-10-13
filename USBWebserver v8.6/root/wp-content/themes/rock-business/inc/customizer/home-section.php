<?php
/**
 * Home Page Options.
 *
 * @package Rock Business
 */

$default = rock_business_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'rock-business' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
require get_template_directory() . '/inc/customizer/home-sections/slider.php';
require get_template_directory() . '/inc/customizer/home-sections/additional-info.php';
require get_template_directory() . '/inc/customizer/home-sections/cta.php';
require get_template_directory() . '/inc/customizer/home-sections/gallery.php';
require get_template_directory() . '/inc/customizer/home-sections/blog.php';