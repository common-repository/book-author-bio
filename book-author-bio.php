<?php
/**
 * Plugin Name: Book Author Bio
 * Description: <a href="https://bestwpdeveloper.com/" target="_blank">Book Author Bio</a> is a Elementor plugin eye-cathing style with 15+ preset design.
 * Plugin URI:  https://bestwpdeveloper.com
 * Version:     1.3
 * Author:      Best WP Developer
 * Requires Plugins: elementor
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: book-author-bio
 * Elementor tested up to: 5.8.0
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit;

final class FinalBWDABAuthorBio{
	const VERSION = '1.3';
	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';
	const MINIMUM_PHP_VERSION = '7.0';
	public function __construct() {
		add_action( 'bwdab_init', array( $this, 'bwdab_loaded_textdomain' ) );
		add_action( 'plugins_loaded', array( $this, 'bwdab_init' ) );
	}

	public function bwdab_loaded_textdomain() {
		load_plugin_textdomain( 'book-author-bio' );
	}

	public function bwdab_init() {
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdab_admin_notice_minimum_elementor_version' ) );
			return;
		}
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdab_admin_notice_minimum_php_version' ) );
			return;
		}
		require_once( 'bwdab-boots.php' );
		require_once( 'includes/admin-notice.php' );
		$this->bwdab_book_author_bio();
	}

	public function bwdab_book_author_bio(){
		require __DIR__ . '/vendor/autoload.php';
		function appsero_init_tracker_book_author_bio() {
			if ( ! class_exists( 'Appsero\Client' ) ) {
			require_once __DIR__ . '/appsero/src/Client.php';
			}
			$client = new Appsero\Client( 'e70bb718-336b-4887-a916-6b05406da790', 'Book Author Bio', __FILE__ );
			$client->insights()->init();
		}
		appsero_init_tracker_book_author_bio();
	}

	public function bwdab_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'book-author-bio' ),
			'<strong>' . esc_html__( 'Book Author Bio', 'book-author-bio' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'book-author-bio' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'book-author-bio') . '</p></div>', $message );
	}

	public function bwdab_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'book-author-bio' ),
			'<strong>' . esc_html__( 'Book Author Bio', 'book-author-bio' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'book-author-bio' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'book-author-bio') . '</p></div>', $message );
	}
}
new FinalBWDABAuthorBio();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );