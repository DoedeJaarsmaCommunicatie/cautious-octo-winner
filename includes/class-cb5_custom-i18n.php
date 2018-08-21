<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       //doedejaarsma.nl
 * @since      1.0.0
 *
 * @package    Cb5_custom
 * @subpackage Cb5_custom/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cb5_custom
 * @subpackage Cb5_custom/includes
 * @author     Doede Jaarsma communicatie <mitch@doedejaarsma.nl>
 */
class Cb5_custom_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cb5_custom',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
