<?php

/**
 * Fired during plugin activation
 *
 * @link       bl4cksta
 * @since      1.0.0
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/includes
 * @author     Kaan Kilic <bl4cksta@gmail.com>
 */
class Rekruutjobs_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option('rekruut_client_id');
		add_option('rekruut_client_secret');
		add_option('rekruut_app');
	}

}
