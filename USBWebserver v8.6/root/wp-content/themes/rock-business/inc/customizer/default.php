<?php
/**
 * Default theme options.
 *
 * @package Rock Business
 */

if ( ! function_exists( 'rock_business_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function rock_business_get_default_theme_options() {

	$defaults = array();

	$defaults['show_header_contact_info'] 	= true;
    $defaults['header_email']             	= __( 'info@creativthemes.com','rock-business' );
    $defaults['header_phone' ]            	= __( '+1-541-754-3010','rock-business' );
    $defaults['header_location' ]           = __( 'London, UK','rock-business' );
    $defaults['show_header_social_links'] 	= true;
    $defaults['header_social_links']		= array();

	// Featured Slider Section
	$defaults['disable_featured_slider']	= true;
	$defaults['number_of_sr_items']			= 3;
	$defaults['sr_content_type']			= 'sr_page';

	// Our Services Section
	$defaults['disable_additional_info_section']	= true;
	$defaults['additional_info_section_title']	   	= esc_html__( 'Our Services', 'rock-business' );
	$defaults['additional_info_section_subtitle']	= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'rock-business' );
	$defaults['number_of_column']					= 3;
	$defaults['number_of_items']					= 3;
	$defaults['ad_content_type']					= 'ad_page';

	//Cta Section	
	$defaults['disable_cta_section']	   	= true;
	$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['cta_small_description']	   	= esc_html__( 'Need More features?', 'rock-business' );
	$defaults['cta_description']	   	 	= esc_html__( 'Get Accesss To All Features of Rock Business', 'rock-business' );
	$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'rock-business' );
	$defaults['cta_button_url']	   	 		= '#';

	// Gallery Section
	$defaults['disable_gallery_section']	= true;
	$defaults['gallery_title']	   	 		= esc_html__( 'Amazing Projects', 'rock-business' );
	$defaults['gallery_subtitle']	   	 	= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'rock-business' );
	$defaults['number_of_gy_column']		= 3;
	$defaults['number_of_gy_items']			= 6;
	$defaults['gy_content_type']			= 'gy_page';

	// Blog Section
	$defaults['disable_blog_section']		= true;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest News', 'rock-business' );
	$defaults['blog_subtitle']	   	 		= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.', 'rock-business' );
	$defaults['blog_category']	   			= 0; 
	$defaults['blog_number']				= 3;

	//General Section
	$defaults['readmore_text']				= esc_html__('Read More','rock-business');
	$defaults['excerpt_length']				= 40;
	$defaults['layout_options']				= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'rock-business' );

	// Pass through filter.
	$defaults = apply_filters( 'rock_business_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'rock_business_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function rock_business_get_option( $key ) {

		$default_options = rock_business_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;