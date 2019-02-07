<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       bl4cksta
 * @since      1.0.0
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Rekruutjobs
 * @subpackage Rekruutjobs/public
 * @author     Kaan Kilic <bl4cksta@gmail.com>
 */
class Rekruutjobs_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rekruutjobs-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rekruutjobs-public.js', array( 'jquery' ), $this->version, false );

	}
	public function create_posts_page(){
	}
	public function register_shortcodes(){
		$has_post_id = $_GET['post_id'];
		add_shortcode('job-posts',function(){
			$endpoint = get_option("rekruut_app");
			if (!is_null($has_post_id)) {
				$response = wp_remote_get($endpoint."/api/positions");
				$posts = json_decode($response["body"]);
				include plugin_dir_path( __FILE__ ) . 'partials/rekruutjobs-public-display.php';
			}else{
				$response = wp_remote_get($endpoint."/api/position/view/".$has_post_id);
				$post = json_decode($response["body"]);
				include plugin_dir_path( __FILE__ ) . 'partials/rekruutjobs-public-detail.php';
			}
		});
	}
}
