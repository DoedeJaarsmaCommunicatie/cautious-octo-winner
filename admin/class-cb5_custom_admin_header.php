<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 25/07/2018
 * Time: 13:56
 */

class Cb5_custom_header_customizer {
	
	/**
	 * The ID of this plugin
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     string      $plugin_name        The ID of this plugin
	 */
	private $plugin_name;
	
	/**
	 * The version of this plugin
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     string      $version            The current version of this plugin
	 */
	private $version;
	
	/**
	 * Initialize this class and set its properties.
	 *
	 * @since   1.0.0
	 * @param   string      $plugin_name        The name of this plugin
	 * @param   string      $version            The current version of this plugin
	 */
	public function __construct( $plugin_name, $version){
		
		$this->plugin_name = $plugin_name;
		$this->version = $version;
		
	}
	
	/**
	 * Register the JavaScript for the admin area.
	 *
	 * TODO: Check error
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cb5_custom_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cb5_custom_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		wp_enqueue_script(
			$this->plugin_name . 'customizer',
			plugin_dir_url( __FILE__ ) . 'js/cb5_custom-customizer.js',
			array( 'jquery'	),
			$this->version,
			false
		);
		
	}
	
	/**
	 * Run customizer functions
	 *
	 * @since   1.0.0
	 * @param   $wp_customize
	 */
	public function customizeThis($wp_customize){
		$wp_customize->add_section(
			'cb5_custom_header',
			array(
				'title'     => __('Header', 'cb5_custom'),
				'priority'  => 30
			)
		);
		/*
		 * Light logo for a dark background
		 */
		$wp_customize->add_setting(
			'logo_light' ,
			array(
				'default'   => '',
				'transport' => 'postMessage',
			)
		);

		
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo_light',
				array(
					'label'     => __('Upload a logo for a light background', 'cb5_custom'),
					'section'   => 'cb5_custom_header',
					'settings'  => 'logo_light',
				)
			)
		);
		

		/*
		 * Dark logo for a light background
		 */
		$wp_customize->add_setting(
			'logo_dark' ,
			array(
				'default'   => '',
				'transport' => 'postMessage',
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo_dark',
				array(
					'label'     => __('Upload a logo for a dark background', 'cb5_custom'),
					'section'   => 'cb5_custom_header',
					'settings'  => 'logo_dark'
				)
			)
		);
		/*
		 * Fallback hero image
		 */
		$wp_customize->add_setting(
			'hero_fallback',
			array(
				'default'   => '',
				'transport' => 'postMessage'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'default_hero',
				array(
					'label'     => __('Upload a fallback to show if there is no header image supplied'),
					'section'   => 'cb5_custom_header',
					'settings'  => 'hero_fallback'
				)
			)
		);
	}
}