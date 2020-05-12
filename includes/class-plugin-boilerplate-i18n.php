<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://andregagnon.com
 * @since      1.0.0
 *
 * @package    Plugin_Boilerplate
 * @subpackage Plugin_Boilerplate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Boilerplate
 * @subpackage Plugin_Boilerplate/includes
 * @author     Andre Gagnon <andy@andregagnon.com>
 */
class Plugin_Boilerplate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-boilerplate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
