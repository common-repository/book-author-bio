<?php
namespace Creativeauthorbio\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdab_author_bio_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdab_author_bio_register_document_controls' ] );
	}

	public function bwdab_author_bio_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Author Bio', 'book-author-bio' ) );
	}

	public function bwdab_author_bio_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdab_author_bio_new_section',
			[
				'label' => esc_html__( 'Settings', 'book-author-bio' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdab_author_bio_text',
			[
				'label' => esc_html__( 'Title', 'book-author-bio' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'book-author-bio' ),
			]
		);

		$document->end_controls_section();
	}
}
