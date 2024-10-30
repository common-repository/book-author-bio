<?php
namespace Creativeauthorbio;

use Creativeauthorbio\PageSettings\Page_Settings;
define( "BWDAB_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "BWDAB_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class Classbwdabauthorbio {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function bwdab_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'bwdab_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function bwdab_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'bwdab_the_pricing_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/bwdab-authorbio.php' );
	}

	public function bwdab_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\bwdabAuthorBio() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/bwdab-author-bio-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function bwdab_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bwdab-author-bio-category',
			[
				'title' => esc_html__( 'Book Author Bio', 'book-author-bio' ),
				'icon' => 'eicon-person',
			]
		);
	}
	public function bwdab_all_assets_for_the_public(){
		wp_enqueue_script( 'bwdab_author_bio_min_js', plugin_dir_url( __FILE__ ) . 'assets/public/js/min.js', array('jquery'), '1.3', true );
		$all_css_js_file = array(
            'bwdab_author_bio_font_awesome_css' => array('bwdab_path_define'=>BWDAB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/all.min.css'),
            'bwdab_author_bio_bootstrap_css' => array('bwdab_path_define'=>BWDAB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/bootstrap.min.css'),
            'bwdab_author_bio_style_css' => array('bwdab_path_define'=>BWDAB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
        
			'bwdab_author_bio_jquery_js' => array('bwdab_path_define'=>BWDAB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/jquery-3.6.0.min.js'),
			'bwdab_author_bio_jquery_js_bootstrap' => array('bwdab_path_define'=>BWDAB_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/js/bootstrap.bundle.min.js'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdab_path_define'], null, '1.3', 'all');
			wp_enqueue_script( $handle, $fileinfo['bwdab_path_define'], ['jquery'], '1.3', true);
        }
	}
	public function bwdab_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'bwdab_author_bio_admin_icon_css' => array('bwdab_path_admin_define'=>BWDAB_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['bwdab_path_admin_define'], null, '1.3', 'all');
        }
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'bwdab_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'bwdab_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'bwdab_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'bwdab_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'bwdab_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
Classbwdabauthorbio::instance();