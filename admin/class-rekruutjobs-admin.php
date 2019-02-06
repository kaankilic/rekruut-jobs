<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       bl4cksta
 * @since      1.0.0
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/admin
 * @author     Kaan Kilic <bl4cksta@gmail.com>
 */
class Rekruutjobs_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rekruutjobs_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rekruutjobs_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rekruutjobs-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rekruutjobs_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rekruutjobs_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rekruutjobs-admin.js', array( 'jquery' ), $this->version, false );
	}
	public function setup_plugin_options_menu(){
		add_options_page( 'Rekruut Settings', 'Rekruut Settings', 'manage_options', 'rekruut', array($this,'render_settings_page_content'));
	}

	function  render_settings_page_content() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		if (isset($_POST['rekruut_client_id'])) {
			update_option('rekruut_client_id', $_POST['rekruut_client_id']);
		}
		if (isset($_POST['rekruut_client_secret'])) {
			update_option('rekruut_client_secret', $_POST['rekruut_client_secret']);
		}
		if (isset($_POST['rekruut_app'])) {
			update_option('rekruut_app', $_POST['rekruut_app']);
		} 
		include plugin_dir_path( __FILE__ ) . 'partials/rekruutjobs-admin-display.php';
	}
}
