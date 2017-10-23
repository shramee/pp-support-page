<?php
/**
 * Plugin Name: Pootlepress support page template
 * Description: Adds page template for support page
 * Plugin URI: http://www.shramee.me/
 * Version: 1.0.0
 * Author: Shramee
 * Author URI: http://www.shramee.me/
 */

class PP_Support_Page_Template {

	/** @var PP_Support_Page_Template Instance */
	private static $instance;

	/**
	 * Returns an instance of this class.
	 * @return PP_Support_Page_Template Instance
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new PP_Support_Page_Template();
		}

		return self::$instance;
	}

	/** @var array Templates */
	protected $templates = array(
		'page-template.php' => 'Pootle animation template',
	);

	/**
	 * Initializes the plugin by setting filters and administration functions.
	 */
	private function __construct() {

		// Add template to available templates
		add_filter( 'theme_page_templates', array( $this, 'add_new_template' ) );

		// Override template
		add_filter( 'template_include', array( $this, 'view_project_template' ) );

	}

	public function enqueue() {
		wp_enqueue_script( 'support-page-js', plugin_dir_url( __FILE__ ) . 'assets/front.min.js', '', '' );
		wp_enqueue_style( 'support-page-css', plugin_dir_url( __FILE__ ) . 'assets/front.css', '', '' );
		wp_enqueue_style( 'google-lobster', 'https://fonts.googleapis.com/css?family=Lobster', '', '' );
	}

	public function in_tpl() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	/**
	 * Adds our template to the page dropdown for v4.7+
	 *
	 */
	public function add_new_template( $posts_templates ) {

		foreach ( $this->templates as $file => $name ) {
			$posts_templates[ plugin_dir_path( __FILE__ ) . $file ] = $name;
		}

		return $posts_templates;
	}

	/**
	 * Checks if the template is assigned to the page
	 */
	public function view_project_template( $template ) {
		global $post;

		if ( $post ) {
			$file = get_post_meta( $post->ID, '_wp_page_template', true );

			if ( file_exists( $file ) ) {
				$template = $file;
			}
		}

		return $template;
	}

}

add_action( 'plugins_loaded', array( 'PP_Support_Page_Template', 'get_instance' ) );
