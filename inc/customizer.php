<?php
/**
 * City Limitless Theme Customizer
 *
 * Contains methods for customizing the theme customization screen.
 *
 * @link 		http://codex.wordpress.org/Theme_Customization_API
 * @since 		1.0.0
 * @package  	DocBlock
 */
class city_limitless_Customize {

   /**
	* This hooks into 'customize_register' (available as of WP 3.4) and allows
	* you to add new sections and controls to the Theme Customize screen.
	*
	* Note: To enable instant preview, we have to actually write a bit of custom
	* javascript. See live_preview() for more.
	*
	* @access 		public
	* @see 			add_action( 'customize_register', $func )
	* @param 		WP_Customize_Manager 		$wp_customize 		Theme Customizer object.
	* @link 		http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
	* @since 		1.0.0
	*/
	public static function register( $wp_customize ) {

		// Theme Options Panel
		$wp_customize->add_panel( 'city_limitless_options',
			array(
				'capability' 		=> 'edit_theme_options',
				'description' 		=> __( 'Options for the City Limitless theme', 'city-limitless' ),
				'priority' 			=> 10,
				'theme_supports' 	=> '',
				'title' 			=> __( 'Theme Options', 'city-limitless' ),
			)
		);



		// Default Header Image Section
		$wp_customize->add_section( 'city_limitless_header',
			array(
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Default Header Image', 'city-limitless' ),
				'panel' 		=> 'city_limitless_options',
				'priority' 		=> 10,
				'title' 		=> __( 'Default Header Image', 'city-limitless' ),
			)
		);

		// Background Image Upload Field
		$wp_customize->add_setting(
			'default_header_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'default_header_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Default Header Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_header',
					'settings' 		=> 'default_header_image'
				)
			)
		);



		// Homepage Boxes Section
		$wp_customize->add_section( 'city_limitless_homepage_boxes',
			array(
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Homepage Boxes', 'city-limitless' ),
				'panel' 		=> 'city_limitless_options',
				'priority' 		=> 10,
				'title' 		=> __( 'Homepage Boxes', 'city-limitless' ),
			)
		);

		// Live Box Background Image
		$wp_customize->add_setting(
			'live_box_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'live_box_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Live Box Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_boxes',
					'settings' 		=> 'live_box_bg_image'
				)
			)
		);

		// Work Box Background Image
		$wp_customize->add_setting(
			'work_box_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'work_box_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Work Box Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_boxes',
					'settings' 		=> 'work_box_bg_image'
				)
			)
		);

		// Develop Box Background Image
		$wp_customize->add_setting(
			'develop_box_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'develop_box_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Develop Box Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_boxes',
					'settings' 		=> 'develop_box_bg_image'
				)
			)
		);

		// Engage Box Background Image
		$wp_customize->add_setting(
			'engage_box_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'engage_box_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Engage Box Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_boxes',
					'settings' 		=> 'engage_box_bg_image'
				)
			)
		);



		// Homepage Strips Section
		$wp_customize->add_section( 'city_limitless_homepage_strips',
			array(
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Homepage Strips', 'city-limitless' ),
				'panel' 		=> 'city_limitless_options',
				'priority' 		=> 10,
				'title' 		=> __( 'Homepage Strips', 'city-limitless' ),
			)
		);

		// Live Strip Background Image
		$wp_customize->add_setting(
			'live_strip_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'live_strip_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Live Strip Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_strips',
					'settings' 		=> 'live_strip_bg_image'
				)
			)
		);

		// Work Strip Background Image
		$wp_customize->add_setting(
			'work_strip_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'work_strip_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Work Strip Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_strips',
					'settings' 		=> 'work_strip_bg_image'
				)
			)
		);

		// Develop Strip Background Image
		$wp_customize->add_setting(
			'develop_strip_bg_image',
			array(
				'default' 	=> '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'develop_strip_bg_image',
				array(
					'capability' 	=> 'edit_theme_options',
					'label' 		=> __( 'Develop Strip Background Image', 'city-limitless' ),
					'section' 		=> 'city_limitless_homepage_strips',
					'settings' 		=> 'develop_strip_bg_image'
				)
			)
		);


/*
		// New Panel
		$wp_customize->add_panel( 'panel_id',
			array(
				'capability' 		=> 'edit_theme_options',
				'description' 		=> __( 'Panel description', 'city-limitless' ),
				'priority' 			=> 10,
				'theme_supports' 	=> '',
				'title' 			=> __( 'Theme Options', 'city-limitless' ),
			)
		);



		// New Section
		$sectargs['title'] 			= __( 'New Section', 'city-limitless' );
		$sectargs['capability'] 	= 'edit_theme_options';
		$sectargs['description'] 	= __( 'New Customizer Section', 'city-limitless' );
		$wp_customize->add_section( 'new_section', $sectargs );



		// Add Fields & Controls

		// Text Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'text_field', $settingargs );

		$controlargs['label'] 				= __( 'Text Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'text_field';
		$controlargs['type'] 				= 'text';
		$wp_customize->add_control( 'text_field', $controlargs );



		// URL Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'url_field', $settingargs );

		$controlargs['label'] 				= __( 'URL Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'url_field';
		$controlargs['type'] 				= 'url';
		$wp_customize->add_control( 'url_field', $controlargs );



		// Email Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'email_field', $settingargs );

		$controlargs['label'] 				= __( 'URL Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'email_field';
		$controlargs['type'] 				= 'email';
		$wp_customize->add_control( 'email_field', $controlargs );



		// Password Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'password_field', $settingargs );

		$controlargs['label'] 				= __( 'Password Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'password_field';
		$controlargs['type'] 				= 'password';
		$wp_customize->add_control( 'password_field', $controlargs );



		// Date Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'date_field', $settingargs );

		$controlargs['label'] 				= __( 'Date Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'date_field';
		$controlargs['type'] 				= 'date';
		$wp_customize->add_control( 'date_field', $controlargs );



		// Checkbox Field
		$settingargs['default'] 			= 'true';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'checkbox_field', $settingargs );

		$controlargs['label'] 				= __( 'Checkbox Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'checkbox_field';
		$controlargs['type'] 				= 'checkbox';
		$wp_customize->add_control( 'checkbox_field', $controlargs );



		// Radio Field
		$settingargs['default'] 			= 'choice1';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'radio_field', $settingargs );

		$controlargs['choices']['choice1'] 	= 'Choice 1';
		$controlargs['choices']['choice2'] 	= 'Choice 2';
		$controlargs['choices']['choice3'] 	= 'Choice 3';
		$controlargs['label'] 				= __( 'Radio Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'radio_field';
		$controlargs['type'] 				= 'radio';
		$wp_customize->add_control( 'radio_field', $controlargs );



		// Select Field
		$settingargs['default'] 			= 'choice1';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'select_field', $settingargs );

		$controlargs['choices']['choice1'] 	= 'Choice 1';
		$controlargs['choices']['choice2'] 	= 'Choice 2';
		$controlargs['choices']['choice3'] 	= 'Choice 3';
		$controlargs['label'] 				= __( 'Select Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'select_field';
		$controlargs['type'] 				= 'select';
		$wp_customize->add_control( 'select_field', $controlargs );



		// Textarea Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'textarea_field', $settingargs );

		$controlargs['label'] 				= __( 'Textarea Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'textarea_field';
		$controlargs['type'] 				= 'textarea';
		$wp_customize->add_control( 'textarea_field', $controlargs );



		// Range Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'range_field', $settingargs );

		$controlargs['input_attrs]['class'] = 'range-field';
		$controlargs['input_attrs]['max'] 	= 100;
		$controlargs['input_attrs]['min'] 	= 0;
		$controlargs['input_attrs]['step'] 	= 1;
		$controlargs['input_attrs]['style'] = 'color: #020202';
		$controlargs['label'] 				= __( 'Range Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'range_field';
		$controlargs['type'] 				= 'range';
		$wp_customize->add_control( 'range_field', $controlargs );



		// Page Select Field
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'select_page_field', $settingargs );

		$controlargs['label'] 				= __( 'Select Page', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'select_page_field';
		$controlargs['type'] 				= 'dropdown-pages';
		$wp_customize->add_control( 'select_page_field', $controlargs );



		// Color Chooser Field
		$settingargs['default'] 			= '#ffffff';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'color_setting', $settingargs );

		$controlargs['label'] 				= __( 'Color Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'color_setting';
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_setting', $controlargs ) );



		// File Upload Field
		$wp_customize->add_setting( 'file_upload' );

		$controlargs['label'] 				= __( 'File Upload', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'file_upload';
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'file_upload', $controlargs ) );



		// Image Upload Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'image_upload', $settingargs );

		$controlargs['label'] 				= __( 'Image Field', 'city-limitless' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'image_upload';
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_upload', $controlargs ) );
*/


		// Enable live preview JS
		$wp_customize->get_setting( 'blogname' )->transport 		= 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport 	= 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	} // register()

	/**
	 * This will output the custom WordPress settings to the live theme's WP head.
	 *
	 * Used by hook: 'wp_head'
	 *
	 * @access 		public
	 * @see 		add_action( 'wp_head', $func )
	 * @since 		1.0.0
	 */
	public static function header_output() {

		if ( is_front_page() ) {

			?><!--Customizer CSS-->
			<style type="text/css"><?php

				city_limitless_Customize::generate_css( '.feat-live', 'background-image', 'live_box_bg_image', 'url(', ')' );
				city_limitless_Customize::generate_css( '.feat-work', 'background-image', 'work_box_bg_image', 'url(', ')' );
				city_limitless_Customize::generate_css( '.feat-develop', 'background-image', 'develop_box_bg_image', 'url(', ')' );
				city_limitless_Customize::generate_css( '.feat-engage', 'background-image', 'engage_box_bg_image', 'url(', ')' );
				city_limitless_Customize::generate_css( '.section-live', 'background', 'live_strip_bg_image', 'url(', ') no-repeat center center' );
				city_limitless_Customize::generate_css( '.section-work', 'background', 'work_strip_bg_image', 'url(', ') no-repeat center center' );
				city_limitless_Customize::generate_css( '.section-develop', 'background', 'develop_strip_bg_image', 'url(', ') no-repeat center center' );

			?></style><!--/Customizer CSS--><?php

		}

	} // header_output()

	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 *
	 * Used by hook: 'customize_preview_init'
	 *
	 * @access 		public
	 * @see 		add_action( 'customize_preview_init', $func )
	 * @since 		1.0.0
	 * @uses		wp_enqueue_script()
	 * @uses		get_template_directory_uri()
	 */
	public static function live_preview() {

		wp_enqueue_script( 'city_limitless_customizer', get_template_directory_uri() . '/assets/js/customizer.min.js', array( 'jquery', 'customize-preview' ), '20130508', true );

	} // live_preview()

	/**
	 * This will generate a line of CSS for use in header output. If the setting
	 * ($mod_name) has no defined value, the CSS will not be output.
	 *
	 * @access 		public
	 * @since 		1.0.0
	 * @param 		string 		$selector 		CSS selector
	 * @param 		string 		$style 			The name of the CSS *property* to modify
	 * @param 		string 		$mod_name 		The name of the 'theme_mod' option to fetch
	 * @param 		string 		$prefix 		Optional. Anything that needs to be output before the CSS property
	 * @param 		string 		$postfix 		Optional. Anything that needs to be output after the CSS property
	 * @param 		bool 		$echo 			Optional. Whether to print directly to the page (default: true).
	 * @uses 		get_theme_mod()
	 * @return 		string 						Returns a single line of CSS with selectors and a property.
	 */
	public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {

		$return = '';
		$mod 	= get_theme_mod( $mod_name );

		if ( ! empty( $mod ) ) {

			$return = sprintf('%s { %s:%s; }',
				$selector,
				$style,
				$prefix . $mod . $postfix
			);

			if ( $echo ) {

				echo $return;

			}

		}

		return $return;

	} // generate_css()

} // class

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'city_limitless_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'city_limitless_Customize' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'city_limitless_Customize' , 'live_preview' ) );
