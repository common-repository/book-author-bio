<?php
namespace Creativeauthorbio\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class bwdabAuthorBio extends \Elementor\Widget_Base {


	public function get_name() {
		return 'BWDABAuthorBio';
	}

	public function get_title() {
		return esc_html__( 'Book Author Bio', 'book-author-bio' );
	}

	public function get_icon() {
		return 'eicon-history bwdab-author-bio';
	}

	public function get_categories() {
		return [ 'bwdab-author-bio-category' ];
	}

	public function get_keywords() {
		return [ 'author bio', 'author', 'bio', 'auhtor history', 'book' ];
	}

	public function get_script_depends() {
		return [ 'bwdab-author-bio-category' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'bwdab_author_bio_choose_style',
		    [
		        'label' => esc_html__('Choose Style','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_bio_style_layout',
			[
				'label' => esc_html__( 'Choose Style', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'book-author-bio' ),
					'style2' => esc_html__( 'Style 2', 'book-author-bio' ),
					'style3' => esc_html__( 'Style 3', 'book-author-bio' ),
					'style4' => esc_html__( 'Style 4', 'book-author-bio' ),
					'style5' => esc_html__( 'Style 5', 'book-author-bio' ),
					'style6' => esc_html__( 'Style 6 (Pro)', 'book-author-bio' ),
					'style7' => esc_html__( 'Style 7 (Pro)', 'book-author-bio' ),
					'style8' => esc_html__( 'Style 8 (Pro)', 'book-author-bio' ),
					'style9' => esc_html__( 'Style 9 (Pro)', 'book-author-bio' ),
					'style10' => esc_html__( 'Style 10 (Pro)', 'book-author-bio' ),
					'style11' => esc_html__( 'Style 11 (Pro)', 'book-author-bio' ),
					'style12' => esc_html__( 'Style 12 (Pro)', 'book-author-bio' ),
					'style13' => esc_html__( 'Style 13 (Pro)', 'book-author-bio' ),
					'style14' => esc_html__( 'Style 14 (Pro)', 'book-author-bio' ),
					'style15' => esc_html__( 'Style 15 (Pro)', 'book-author-bio' ),
					'style16' => esc_html__( 'Style 16 (Pro)', 'book-author-bio' ),
				],
			]
		);
		$this->add_control(
			'bwdab_author_bio_get_prssosafsf',
			[
				'label'       => __('Unlock more possibilities', 'book-author-bio'),
				'type'        => Controls_Manager::CHOOSE,
				'options'     => [
					'1' => [
						'title' => '',
						'icon'  => 'eicon-lock',
					],
				],
				'default'     => '1',
				'description' => '<span class="pro-feature">Ohh! Only available in   <a href="https://bwdplugins.com/book-author-bio-pro" target="_blank">pro version!</a></span>',
				'condition' => [
					'bwdab_author_bio_style_layout' => ['style6', 'style7', 'style8', 'style9', 'style10', 'style11', 'style12', 'style13', 'style14', 'style15', 'style16', 'style17', 'style18', 'style19', 'style20', 'style21', 'style22', 'style23', 'style24', 'style25', 'style26', 'style27', 'style28', 'style29', 'style30', 'style31'],
				]
			]
		);
        $this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_bio_header',
		    [
		        'label' => esc_html__('Bio Header','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_bio_header_image',
			[
				'label' => esc_html__( 'Choose Image', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/image/member.jpg',
				],
			]
		);
		$this->add_control(
			'bwdab_author_name',
			[
				'label' => esc_html__( 'Author Name', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Edward Shine',
				'placeholder' => esc_html__( 'Type your title here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdab_author_birth_date',
			[
				'label' => esc_html__( 'Author Birth Date', 'book-author-bio' ),
				'default' => 'August 28, 1980',
				'type' => \Elementor\Controls_Manager::DATE_TIME,
				'picker_options' => [
					'enableTime' => false,
					'enableSeconds' => false,
					'dateFormat' => "F d, Y",

				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_details',
		    [
		        'label' => esc_html__('Author Details','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdab_author_bio_category_title',
			[
				'label' => esc_html__( 'Category Title', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Type category title here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdab_author_bio_category_details',
			[
				'label' => esc_html__( 'Category Details', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Type category details here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'bwdab_author_bio_list',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdab_author_bio_category_title' => esc_html__( 'Published Book', 'book-author-bio' ),
						'bwdab_author_bio_category_details' => esc_html__( 'Ulysses, Don Quixote, War and Peace', 'book-author-bio' ),
					],
					[
						'bwdab_author_bio_category_title' => esc_html__( 'Book Category', 'book-author-bio' ),
						'bwdab_author_bio_category_details' => esc_html__( "NOVEL, CHILDREN'S BOOKS, SCIENCE FICTION", 'book-author-bio' ),
					],
					[
						'bwdab_author_bio_category_title' => esc_html__( 'Hobby', 'book-author-bio' ),
						'bwdab_author_bio_category_details' => esc_html__( 'Story-Writer.', 'book-author-bio' ),
					],
					[
						'bwdab_author_bio_category_title' => esc_html__( 'Language', 'book-author-bio' ),
						'bwdab_author_bio_category_details' => esc_html__( 'Eniglish, Spanish', 'book-author-bio' ),
					],
				],
				'title_field' => '{{{ bwdab_author_bio_category_title }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_social_media',
		    [
		        'label' => esc_html__('Social','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdab_author_social_name',
			[
				'label' => esc_html__( 'Social Name', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Type social name here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdab_author_social_icon',
			[
				'label' => esc_html__( 'Icon', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'fa4compatibility' => 'icon',
			]
		);
		$repeater->add_control(
			'bwdab_author_social_icon_link',
			[
				'label' => esc_html__( 'Link', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'book-author-bio' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdab_author_social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-author-social' => 'color: {{VALUE}}!important',
				],
			]
		);
		$repeater->add_control(
			'bwdab_author_social_icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .bwd-author-social:hover' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdab_author_bio_social_icon_list',
			[
				'label' => esc_html__( 'Social Icon', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdab_author_social_name' => esc_html__( 'Facebook', 'book-author-bio' ),
						'bwdab_author_social_icon' => [
							'value' => 'fab fa-facebook-f',
							'library' => 'solid',
						],
					],
					[
						'bwdab_author_social_name' => esc_html__( 'Linkedin', 'book-author-bio' ),
						'bwdab_author_social_icon' => [
							'value' => 'fab fa-linkedin-in',
							'library' => 'solid',
						],
					],
					[
						'bwdab_author_social_name' => esc_html__( 'Twitter', 'book-author-bio' ),
						'bwdab_author_social_icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'solid',
						],
					],
				],
				'title_field' => '{{{ bwdab_author_social_name }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_award_head',
		    [
		        'label' => esc_html__('Award','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_award_name',
			[
				'label' => esc_html__( 'Award Name Or Education', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Award Name Or Education', 'book-author-bio' ),
				'label_block' => true,
				'placeholder' => esc_html__( 'Type award title here', 'book-author-bio' ),
			]
		);
		$this->add_control(
			'bwdab_author_award_year',
			[
				'label' => esc_html__( 'Year', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Year', 'book-author-bio' ),
				'label_block' => true,
				'separator' => 'after',
				'placeholder' => esc_html__( 'Type year here', 'book-author-bio' ),
			]
		);
		// Award Head Repeater
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdab_author_award_name_body_part',
			[
				'label' => esc_html__( 'Award Name', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Type award name here', 'book-author-bio' ),
			]
		);
		$repeater->add_control(
			'bwdab_author_award_name_body_part2',
			[
				'label' => esc_html__( 'Year', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Type award year here', 'book-author-bio' ),
			]
		);
		$this->add_control(
			'bwdab_author_award_body_list',
			[
				'label' => esc_html__( 'Award Body', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdab_author_award_name_body_part' => esc_html__( 'Hugo Award', 'book-author-bio' ),
						'bwdab_author_award_name_body_part2' => esc_html__( '2000', 'book-author-bio' ),
					],
					[
						'bwdab_author_award_name_body_part' => esc_html__( 'Jnanpith Award', 'book-author-bio' ),
						'bwdab_author_award_name_body_part2' => esc_html__( '2008', 'book-author-bio' ),
					],
					[
						'bwdab_author_award_name_body_part' => esc_html__( 'Costa Award', 'book-author-bio' ),
						'bwdab_author_award_name_body_part2' => esc_html__( '2015', 'book-author-bio' ),
					],
					[
						'bwdab_author_award_name_body_part' => esc_html__( 'Pulitzer Prize', 'book-author-bio' ),
						'bwdab_author_award_name_body_part2' => esc_html__( '2017', 'book-author-bio' ),
					],
				],
				'title_field' => '{{{ bwdab_author_award_name_body_part }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_best_selling_book',
		    [
		        'label' => esc_html__('Best Selling Book','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_best_selling_book_title',
			[
				'label' => esc_html__( 'Selling Book Title', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Best Selling Book', 'book-author-bio' ),
				'placeholder' => esc_html__( 'Type here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'bwdab_author_best_selling_book_item_title',
			[
				'label' => esc_html__( 'Title', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Type your title here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bwdab_author_best_selling_book_gallery',
			[
				'label' => esc_html__( 'Choose Image', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/image/best-selling-1.jpg',
				],
			]
		);
		$repeater->add_control(
			'bwdab_author_best_selling_book_gallery_link',
			[
				'label' => esc_html__( 'Link', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'book-author-bio' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdab_author_best_selling_book_gallery_list',
			[
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdab_author_best_selling_book_item_title' => esc_html__( 'Book Image 1', 'book-author-bio' ),	
					],
					[
						'bwdab_author_best_selling_book_item_title' => esc_html__( 'Book Image 2', 'book-author-bio' ),
					],
					[
						'bwdab_author_best_selling_book_item_title' => esc_html__( 'Book Image 3', 'book-author-bio' ),
					],
				],
				'title_field' => '{{{ bwdab_author_best_selling_book_item_title }}}',
			]
		);
		// $this->add_control(
		// 	'bwdab_author_best_selling_book_gallery',
		// 	[
		// 		'label' => esc_html__( 'Add Images', 'book-author-bio' ),
		// 		'description' => esc_html__( '', 'book-author-bio' ),
		// 		'type' => \Elementor\Controls_Manager::GALLERY,
		// 		'default' => [
		// 			[
		// 				'id' => 0,
		// 				'url' => plugin_dir_url(__DIR__).'assets/public/image/best-selling-1.jpg',
		// 			],
		// 			[
		// 				'id' => 1,
		// 				'url' => plugin_dir_url(__DIR__).'assets/public/image/best-selling-2.jpg',
		// 			],
		// 			[
		// 				'id' => 2,
		// 				'url' => plugin_dir_url(__DIR__).'assets/public/image/best-selling-3.jpg',
		// 			],
		// 		],
		// 	]
		// );
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_rating',
		    [
		        'label' => esc_html__('Author Rating','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_rating_show',
			[
				'label' => esc_html__( 'Show Rating', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'book-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'book-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdab_author_rating_number', [
				'label' => esc_html__( 'Star Rating', 'book-author-bio' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5,
				'default' => 4,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdab_author_rating_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_description_tab',
		    [
		        'label' => esc_html__('Author Description','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_description_show',
			[
				'label' => esc_html__( 'Show Description', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'book-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'book-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdab_author_description',
			[
				'label' => esc_html__( 'Description', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore autem fugiat at ea ad repellat, aperiam dicta sequi ipsum necessitatibus hic voluptatem, sint cupiditate soluta incidunt quos mollitia quasi harum.', 'book-author-bio' ),
				'placeholder' => esc_html__( 'Type your description here', 'book-author-bio' ),
				'condition' => [
					'bwdab_author_description_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_footer',
		    [
		        'label' => esc_html__('Footer','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_video_type_show',
			[
				'label' => esc_html__( 'Show Video', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'book-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'book-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdab_author_video_type',
			[
				'label' => esc_html__( 'Source', 'book-author-bio' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'youtube',
				'options' => [
					'youtube' => esc_html__( 'YouTube', 'book-author-bio' ),
					'hosted' => esc_html__( 'Self Hosted', 'book-author-bio' ),
				],
				'condition' => [
					'bwdab_author_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdab_author_video_youtube_url',
			[
				'label' => esc_html__( 'Link', 'book-author-bio' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'url' => 'https://youtu.be/r3MsHwhnx2k',
				],
				'placeholder' => esc_html__( 'Enter your URL', 'book-author-bio' ) . ' (YouTube)',
				'label_block' => true,
				'condition' => [
					'bwdab_author_video_type' => 'youtube',
					'bwdab_author_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdab_author_video',
			[
				'label' => esc_html__( 'Choose video', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'media_type' => 'video',
				'condition' => [
					'bwdab_author_video_type' => 'hosted',
					'bwdab_author_video_type_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdab_author_signature_upload_show',
			[
				'label' => esc_html__( 'Show Signature', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'book-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'book-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdab_author_signature_upload',
			[
				'label' => esc_html__( 'Upload Signature', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__).'assets/public/image/sign-white.png',
				],
				'condition' => [
					'bwdab_author_signature_upload_show' => 'yes',
				],
				
			]
		);
		$this->add_control(
			'bwdab_author_footer_btn_show',
			[
				'label' => esc_html__( 'Show Button', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'book-author-bio' ),
				'label_off' => esc_html__( 'Hide', 'book-author-bio' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdab_author_footer_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Contact Me', 'book-author-bio' ),
				'placeholder' => esc_html__( 'Type button text here', 'book-author-bio' ),
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdab_author_footer_btn_show' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdab_author_footer_btn_link',
			[
				'label' => esc_html__( 'Link', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'book-author-bio' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'bwdab_author_footer_btn_show' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_bio_header_style',
		    [
		        'label' => esc_html__('Bio Header','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_responsive_control(
			'bwdab_author_bio_header_image_width',
			[
				'label' => esc_html__( 'Width', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-bio-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_bio_header_image_height',
			[
				'label' => esc_html__( 'Height', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-bio-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdab_author_bio_header_image_shape_color',
			[
				'label' => esc_html__( 'Image Shape Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-image-shape-colorb::before, {{WRAPPER}} .bwd-image-shape-colora::after, {{WRAPPER}} .bwd-image-shape-color' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_name_typography',
				'label' => esc_html__( 'Name Typography', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-profile .bwd-author-name',
			]
		);
		$this->add_control(
			'bwdab_author_name_color',
			[
				'label' => esc_html__( 'Name Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-profile .bwd-author-name' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdab_author_name_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-profile .bwd-author-name',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_birthdate_typography',
				'label' => esc_html__( 'Birthdate Typography', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-profile .bwd-author-birthday',
			]
		);
		$this->add_control(
			'bwdab_author_birth_date_color',
			[
				'label' => esc_html__( 'Birthdate Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-profile .bwd-author-birthday' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_name_content_bg_color',
			[
				'label' => esc_html__( 'Content Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .header-content-bg-color, {{WRAPPER}} .header-content-bg-colorb::before, {{WRAPPER}} .header-content-bg-colora::after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_details_style',
		    [
		        'label' => esc_html__('Author Details','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_details_category_typography',
				'label' => esc_html__('Title Typography','book-author-bio'),
				'selector' => '{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle',
			]
		);
		$this->add_control(
			'bwdab_author_details_category_color',
			[
				'label' => esc_html__( 'Title Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle' => 'color: {{VALUE}}; border-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle::after' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdab_author_details_category_text_shadow',
				'label' => esc_html__( 'Title Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle',
			]
		);
		$this->add_control(
			'bwdab_author_details_category_bg_color',
			[
				'label' => esc_html__( 'Title Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle, {{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle::before, {{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle::after' => 'background-color: {{VALUE}}!important',
				],
				'condition' => [
					'bwdab_author_bio_style_layout!' => ['style1', 'style2', 'style5', 'style6', 'style9', 'style15'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_details_category_text_align',
			[
				'label' => esc_html__( 'Text Alignment', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'book-author-bio' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'book-author-bio' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'book-author-bio' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_details_category_border',
				'label' => esc_html__( 'Title Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle',
				'condition' => [
					'bwdab_author_bio_style_layout!' => ['style1', 'style2', 'style5', 'style6', 'style9', 'style15'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_details_category_border_radius',
			[
				'label' => esc_html__( 'Title Border Radius', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdab_author_bio_style_layout!' => ['style1', 'style2', 'style5', 'style6', 'style9', 'style15'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_details_category_margin',
			[
				'label' => esc_html__( 'Title Margin', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdab_author_bio_style_layout!' => ['style1', 'style2', 'style5', 'style6', 'style9', 'style15'],
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_details_category_padding',
			[
				'label' => esc_html__( 'Title Padding', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-subtitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
					'bwdab_author_bio_style_layout!' => ['style1', 'style2', 'style5', 'style6', 'style9', 'style15'],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_details_category_details_typography',
				'label' => esc_html__('Description Typography','book-author-bio'),
				'selector' => '{{WRAPPER}} .bwd-author-book-name .bwd-author-details',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdab_author_details_category_details_color',
			[
				'label' => esc_html__( 'Description Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-details' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_details_category_details_margin',
			[
				'label' => esc_html__( 'Description Margin', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-details' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_details_category_details_text_align',
			[
				'label' => esc_html__( 'Text Alignment', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'book-author-bio' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'book-author-bio' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'book-author-bio' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-name .bwd-author-details' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_details_category_details_wrapper_bg_color',
			[
				'label' => esc_html__( 'Details Wrapper Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-details-wrapper-bg, {{WRAPPER}} .bwd-details-wrapper-bgb::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_social_style_tab',
		    [
		        'label' => esc_html__('Social','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->start_controls_tabs(
			'bwdab_author_social_style_tabs'
		);
		$this->start_controls_tab(
			'bwdab_author_social_style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'book-author-bio' ),
			]
		);
		$this->add_control(
			'bwdab_author_social_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social' => 'font-size: {{SIZE}}{{UNIT}}!important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_icon_box_size',
			[
				'label' => esc_html__( 'Icon Box Size', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social' => 'height: {{SIZE}}{{UNIT}}!important; width: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_icon_box_gap',
			[
				'label' => esc_html__( 'Icon Box Gap', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social' => 'margin-right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_icon_box_border-radius',
			[
				'label' => esc_html__( 'Border radius', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdab_author_social_icon_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-social',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_icon_box_margin',
			[
				'label' => esc_html__( 'Margin', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-bio-item .bwdab-social-icon-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdab_author_social_style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'book-author-bio' ),
			]
		);
		$this->add_control(
			'bwdab_author_social_hover_icon_bg_color',
			[
				'label' => esc_html__( 'Icon Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social:hover' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_hover_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social:hover' => 'font-size: {{SIZE}}{{UNIT}}!important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_social_icon_box_hover_border-radius',
			[
				'label' => esc_html__( 'Border radius', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-social:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdab_author_social_icon_box_hover_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-social:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_award_head_style',
		    [
		        'label' => esc_html__('Award','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_award_head_part',
			[
				'label' => esc_html__( 'Head Part', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_award_head_typography',
				'selector' => '{{WRAPPER}} .bwd-author-award .bwd-award-head',
			]
		);
		$this->add_control(
			'bwdab_author_award_head_color',
			[
				'label' => esc_html__( 'Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-award .bwd-award-head' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_head_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-award .bwd-award-head' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdab_author_award_head_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-award .bwd-award-head',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_award_head_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-award .bwd-award-head',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_award_head_padding',
			[
				'label' => esc_html__( 'Padding', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-award .bwd-award-head' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_award_head_alignment',
			[
				'label' => esc_html__( 'Text Alignment', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'book-author-bio' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'book-author-bio' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'book-author-bio' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-award .bwd-award-head' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_body_part',
			[
				'label' => esc_html__( 'Body Part', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->start_controls_tabs(
			'bwdab_author_award_body_style_tabs'
		);
		$this->start_controls_tab(
			'bwdab_author_award_body_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'book-author-bio' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_award_body_normal_typography',
				'selector' => '{{WRAPPER}} .bwd-award-body',
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_odd_color',
			[
				'label' => esc_html__( 'Odd Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(even) .bwd-award-body' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_even_color',
			[
				'label' => esc_html__( 'Even Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(odd) .bwd-award-body' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_odd_bg_color',
			[
				'label' => esc_html__( 'Odd Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(even)' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_even_bg_color',
			[
				'label' => esc_html__( 'Even Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(odd)' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_award_name_body_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-award-body',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_award_name_body_padding',
			[
				'label' => esc_html__( 'Padding', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-award-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_award_name_body_alignment',
			[
				'label' => esc_html__( 'Text Alignment', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'book-author-bio' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'book-author-bio' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'book-author-bio' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}} .bwd-award-body' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdab_author_award_body_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'book-author-bio' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_award_body_hover_typography',
				'selector' => '{{WRAPPER}} .bwd-award-body:hover',
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_odd_hover_color',
			[
				'label' => esc_html__( 'Odd Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(even):hover .bwd-award-body' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_even_hover_color',
			[
				'label' => esc_html__( 'Even Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(odd):hover .bwd-award-body' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_odd_hover_bg_color',
			[
				'label' => esc_html__( 'Odd Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(even):hover' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_control(
			'bwdab_author_award_name_body_even_hover_bg_color',
			[
				'label' => esc_html__( 'Even Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-table-row-bg:nth-child(odd):hover' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_award_name_body_hover_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-award-body:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_best_selling_book_style',
		    [
		        'label' => esc_html__('Best Selling Book','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_best_selling_book_typography',
				'selector' => '{{WRAPPER}} .bwd-author-best-book .bwd-author-subtitle',
			]
		);
		$this->add_control(
			'bwdab_best_selling_book_color',
			[
				'label' => esc_html__( 'Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-best-book .bwd-author-subtitle' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_best_selling_book_bg_color',
			[
				'label' => esc_html__( 'Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-best-book .bwd-author-subtitle' => 'background-color: {{VALUE}}!important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bwdab_best_selling_book_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-best-book .bwd-author-subtitle',
			]
		);
		$this->add_responsive_control(
			'bwdab_best_selling_book_image_gap',
			[
				'label' => esc_html__( 'Image Gap', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'default' => [
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-book-img img' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_rating_style',
		    [
		        'label' => esc_html__('Author Rating','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_rating_color',
			[
				'label' => esc_html__( 'Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-review' => 'color: {{VALUE}}!important',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_rating_size',
			[
				'label' => esc_html__( 'Size', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-review' => 'font-size: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_rating_spacing',
			[
				'label' => esc_html__( 'Spacing', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-review i' => 'margin-right: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_description_style',
		    [
		        'label' => esc_html__('Author Description','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_description_typography',
				'selector' => '{{WRAPPER}} .bwd-author-dic',
			]
		);
		$this->add_control(
			'bwdab_author_description_color',
			[
				'label' => esc_html__( 'Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-dic' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdab_author_description_align',
			[
				'label' => esc_html__( 'Alignment', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'book-author-bio' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'book-author-bio' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'book-author-bio' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-dic' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'bwdab_author_footer_style',
		    [
		        'label' => esc_html__('Footer','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_control(
			'bwdab_author_footer_video_icon_part',
			[
				'label' => esc_html__( 'Video Icon', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdab_author_footer_video_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-meta .bwd-author-vedio' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_footer_video_icon_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-meta .bwd-author-vedio',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_video_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'rem', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-meta .bwd-author-vedio' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_video_icon_round_size',
			[
				'label' => esc_html__( 'Round Size', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'rem', 'em' ],
				'default' => [
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-meta .bwd-author-vedio' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdab_author_footer_btn_part',
			[
				'label' => esc_html__( 'Button Part', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->start_controls_tabs(
			'bwdab_author_footer_btn_tabs'
		);
		$this->start_controls_tab(
			'bwdab_author_footer_btn_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'book-author-bio' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_typography',
				'selector' => '{{WRAPPER}} .bwd-author-button',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_btn_color',
			[
				'label' => esc_html__( 'Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-button' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_background',
				'label' => esc_html__( 'Background', 'book-author-bio' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwd-author-button',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-button',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-button',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_btn_margin',
			[
				'label' => esc_html__( 'Margin', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', "rem" ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_btn_padding',
			[
				'label' => esc_html__( 'Padding', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdab_author_footer_btn_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'book-author-bio' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_hover_typography',
				'selector' => '{{WRAPPER}} .bwd-author-button:hover',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_btn_hover_color',
			[
				'label' => esc_html__( 'Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_hover_background',
				'label' => esc_html__( 'Background', 'book-author-bio' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwd-author-button:hover, {{WRAPPER}} .bwd-author-buttonb:hover::before, {{WRAPPER}} .bwd-author-buttona:hover::after',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_footer_btn_hover_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-button:hover',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_footer_btn_hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->add_control(
			'bwdab_author_footer_bg_color',
			[
				'label' => esc_html__( 'Footer Bg Color', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwd-author-meta' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdab_author_pro_text_content_section',
			[
				'label' => esc_html__( 'Go Premium plugin', 'book-author-bio' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdab_author_eael_control_get_prsso',
			[
				'label'       => __('Unlock more possibilities', 'book-author-bio'),
				'type'        => Controls_Manager::CHOOSE,
				'options'     => [
					'1' => [
						'title' => '',
						'icon'  => 'eicon-lock',
					],
				],
				'default'     => '1',
				'description' => '<span class="pro-feature"> Get the  <a href="https://bwdplugins.com/book-author-bio-pro" target="_blank">Pro version</a> for more stunning elements and customization options.</span>',
			]
		);
		$this->end_controls_section();
		
		$this->start_controls_section(
			'bwdab_author_wrapper_box_style',
		    [
		        'label' => esc_html__('Wrapper Box','book-author-bio'),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		   
		    ]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdab_author_wrapper_box_background',
				'label' => esc_html__( 'Background', 'book-author-bio' ),
				'types' => [ 'classic', 'gradient'],
				'exclude' => ['image'],
				'selector' => '{{WRAPPER}} .bwd-author-information',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdab_author_wrapper_box_border',
				'label' => esc_html__( 'Border', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-information',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_wrapper_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-information' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdab_author_wrapper_box_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'book-author-bio' ),
				'selector' => '{{WRAPPER}} .bwd-author-information',
			]
		);
		$this->add_responsive_control(
			'bwdab_author_wrapper_box_margin',
			[
				'label' => esc_html__( 'Margin', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', "rem" ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-information' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdab_author_wrapper_box_padding',
			[
				'label' => esc_html__( 'Padding', 'book-author-bio' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors' => [
					'{{WRAPPER}} .bwd-author-information' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		
    }

	protected function render() {
		$settings = $this->get_settings_for_display();
		$author_layout = $settings['bwdab_author_bio_style_layout'];
		$author_image = $settings['bwdab_author_bio_header_image']['url'];
		$author_name = $settings['bwdab_author_name'];
		$award_name = $settings['bwdab_author_award_name'];
		$award_year = $settings['bwdab_author_award_year'];
		$award_list = $settings['bwdab_author_award_body_list'];
		$author_birth_date = $settings['bwdab_author_birth_date'];
		$author_social = $settings['bwdab_author_bio_social_icon_list'];
		$author_category = $settings['bwdab_author_bio_list'];
		$author_rating = $settings['bwdab_author_rating_number'];
		$rating_show = $settings['bwdab_author_rating_show'];
		$selling_book_title = $settings['bwdab_author_best_selling_book_title'];
		$best_selling_book = $settings['bwdab_author_best_selling_book_gallery_list'];
		$show_description = $settings['bwdab_author_description_show'];
		$author_description = $settings['bwdab_author_description'];
		$show_video = $settings['bwdab_author_video_type_show'];
		$video = $settings['bwdab_author_video_type'];
		$signature_show = $settings['bwdab_author_signature_upload_show'];
		$author_signature = $settings['bwdab_author_signature_upload']['url'];
		$button_show = $settings['bwdab_author_footer_btn_show'];
		$author_button_text = $settings['bwdab_author_footer_btn_text'];
		$author_button_url = $settings['bwdab_author_footer_btn_link']['url'];
		$author_video_youtube = $settings['bwdab_author_video_youtube_url']['url'];
		$author_video_hosted = $settings['bwdab_author_video']['url'];
		
		
		if ( ! empty( $settings['bwdab_author_best_selling_book_gallery_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdab_author_best_selling_book_gallery_link', $settings['bwdab_author_best_selling_book_gallery_link'] );
		}
		if ( ! empty( $settings['bwdab_author_footer_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdab_author_footer_btn_link', $settings['bwdab_author_footer_btn_link'] );
		}

		if ( ! empty( $settings['bwdab_author_social_icon_link']['url'] ) ) {
			$this->add_link_attributes( 'bwdab_author_social_icon_link', $settings['bwdab_author_social_icon_link'] );
		}

		if ('style1' === $author_layout) { 
		?>	
		<div class="bwd-author-bio-1-area">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-sm-12">
						<div class="bwd-author-information">
							<div class="bwd-author-bio-img">
								<img src="<?php echo esc_attr($author_image); ?>" width="300px" height="300px" alt="">
							</div>
							<div class="bwd-author-profile">
								<div class="bwd-author-name"><?php echo esc_html($author_name); ?></div>
								<div class="bwd-author-birthday"><?php echo esc_html($author_birth_date); ?></div>
							</div>
							<div class="bwd-author-bio-item d-flex">
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-left-content">
										<?php   
										if( $author_category ) {
											foreach( $author_category as $item ) { ?>
										<div class="bwd-author-book-name"> 
											<div class="bwd-author-subtitle"><?php echo esc_html($item['bwdab_author_bio_category_title']); ?></div>
											<div class="bwd-author-details"><?php echo esc_html($item['bwdab_author_bio_category_details']); ?></div>
										</div>
										<?php }
										} ?>
										<div class="bwdab-social-icon-wrapper">
											<?php if( $author_social ) {
												foreach( $author_social as $item ) { ?>
											<?php echo '<span class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<a href="<?php echo esc_url($item['bwdab_author_social_icon_link']['url']); ?>" class="bwd-author-social"><i class="<?php echo esc_attr($item['bwdab_author_social_icon']['value']); ?>"></i></a>
											</span>
											<?php }
											} ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-right-content">
										<div class="bwd-author-award">
											<table>
												<tr>
													<th class="bwd-award-head"><?php echo esc_html($award_name); ?></th>
													<th class="bwd-award-head"><?php echo esc_html($award_year); ?></th>
												</tr>
											<?php   
												if( $award_list ) {
													foreach( $award_list as $item ) { ?>
												<?php echo '<tr class="bwd-table-row-bg elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part']); ?></td>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part2']); ?></td>
												</tr>
												<?php }
												} ?>
											</table>
										</div>
										<div class="bwd-author-best-book">
											<div class="bwd-author-subtitle"><?php echo esc_html($selling_book_title); ?></div>
											<div class="bwd-author-book-img">
											<?php 
											 if( $best_selling_book ) {
												foreach ( $best_selling_book as $image ) { ?>
												<?php echo '<span class="elementor-repeater-item-' . esc_attr( $image['_id'] ) . '">'; ?>
												<a href="<?php echo esc_url( $image['bwdab_author_best_selling_book_gallery_link']['url'] ); ?>"><img src="<?php echo esc_attr($image['bwdab_author_best_selling_book_gallery']['url']); ?>" alt=""></a>
												</span>
											<?php } 
											}?>
											</div>
										</div>
										<?php if( $rating_show === 'yes' ) { ?>
										<div class="bwd-author-review">
											<div class="bwd-author-rating bwd_author_star_rating">
												<?php if( 0 >= $author_rating ){
												} elseif( 1 === $author_rating ){ ?>
												<i class="fas fa-star"></i>
												<?php } elseif( 2 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 3 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 4 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } else { ?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php } ?>
											</div>
											<div class="bwd_author_rating_gray bwd_author_star_rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php if( $show_description === 'yes' ) { ?>
							<div class="bwd-author-dic"><?php echo esc_html($author_description); ?></div><?php } ?>
							<div class="bwd-author-meta d-flex align-items-center">
								<?php if($show_video === 'yes') { ?>
								<div class="bwd-author-vedio ripple-white " <?php if('youtube' === $video) { ?> data-popup-youtube-url="<?php echo esc_url($author_video_youtube); ?>" <?php } elseif('hosted' === $video) { ?> data-popup-custom-url="<?php echo esc_url($author_video_hosted); ?>" <?php } ?>>
								<i class="fas fa-play"></i></div><?php } ?>
								<?php if( $signature_show === 'yes' ) { ?>
								<div class="bwd-author-signature">
									<img src="<?php echo esc_attr($author_signature); ?>" alt="">
								</div><?php } ?>
								<?php if( $button_show === 'yes' ) {?>
								<a href="<?php echo esc_url($author_button_url); ?>" class="bwd-author-button"><?php echo esc_html($author_button_text); ?></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style2' === $author_layout) { 
		?>
		<div class="bwd-author-bio-2-area">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-10 col-sm-12">
						<div class="bwd-author-information">
							<div class="bwd-author-bio-img">
								<img src="<?php echo esc_attr($author_image); ?>" alt="">
							</div>
							<div class="bwd-author-profile">
								<div class="bwd-author-name header-content-bg-color header-content-bg-colora header-content-bg-colorb"><?php echo esc_html($author_name); ?></div>
								<div class="bwd-author-birthday"><?php echo esc_html($author_birth_date); ?></div>
							</div>
							<div class="bwd-author-bio-item d-flex">
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-left-content">
										<div class="bwd-author-award">
											<table>
												<tr>
													<th class="bwd-award-head"><?php echo esc_html($award_name); ?></th>
													<th class="bwd-award-head"><?php echo esc_html($award_year); ?></th>
												</tr>
												<?php   
												if( $award_list ) {
													foreach( $award_list as $item ) { ?>
												<?php echo '<tr class="bwd-table-row-bg elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part']); ?></td>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part2']); ?></td>
												</tr>
												<?php }
												} ?>
											</table>
										</div>
										<div class="bwd-author-best-book">
											<div class="bwd-author-subtitle"><?php echo esc_html($selling_book_title); ?></div>
											<div class="bwd-author-book-img">
												<?php 
												if( $best_selling_book ) {
													foreach ( $best_selling_book as $image ) { ?>
													<?php echo '<span class="elementor-repeater-item-' . esc_attr( $image['_id'] ) . '">'; ?>
													<a href="<?php echo esc_url( $image['bwdab_author_best_selling_book_gallery_link']['url'] ); ?>"><img src="<?php echo esc_attr($image['bwdab_author_best_selling_book_gallery']['url']); ?>" alt=""></a>
													</span>
												<?php } 
												}?>
											</div>
										</div>
										<?php if( $rating_show === 'yes' ) { ?>
										<div class="bwd-author-review">
											<div class="bwd-author-rating bwd_author_star_rating">
												<?php if( 0 >= $author_rating ){
												} elseif( 1 === $author_rating ){ ?>
												<i class="fas fa-star"></i>
												<?php } elseif( 2 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 3 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 4 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } else { ?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php } ?>
											</div>
											<div class="bwd_author_rating_gray bwd_author_star_rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-right-content">
									<?php   
									if( $author_category ) {
										foreach( $author_category as $item ) { ?>
									<div class="bwd-author-book-name"> 
										<div class="bwd-author-subtitle"><?php echo esc_html($item['bwdab_author_bio_category_title']); ?></div>
										<div class="bwd-author-details"><?php echo esc_html($item['bwdab_author_bio_category_details']); ?></div>
									</div>
									<?php }
									} ?>
									<div class="bwdab-social-icon-wrapper">
										<?php if( $author_social ) {
											foreach( $author_social as $item ) { ?>
										<?php echo '<span class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
											<a href="<?php echo esc_url($item['bwdab_author_social_icon_link']['url']); ?>" class="bwd-author-social"><i class="<?php echo esc_attr($item['bwdab_author_social_icon']['value']); ?>"></i></a>
										</span>
										<?php }
										} ?>
									</div>
								</div>
							</div>
							<?php if( $show_description === 'yes' ) { ?>
							<div class="bwd-author-dic"><?php echo esc_html($author_description); ?></div><?php } ?>
							<div class="bwd-author-meta d-flex align-items-center">
								<?php if( $signature_show === 'yes' ) { ?>
								<div class="bwd-author-signature">
									<img src="<?php echo esc_attr($author_signature); ?>" alt="">
								</div><?php } ?>
								<?php if($show_video === 'yes') { ?>
								<div class="bwd-author-vedio ripple-white "  <?php if('youtube' === $video) { ?> data-popup-youtube-url="<?php echo esc_url($author_video_youtube); ?>" <?php } elseif('hosted' === $video) { ?> data-popup-custom-url="<?php echo esc_url($author_video_hosted); ?>" <?php } ?>><i class="fas fa-play"></i></div><?php } ?>
								<?php if( $button_show === 'yes' ) {?>
								<a href="<?php echo esc_url($author_button_url); ?>" class="bwd-author-button bwd-author-buttonb bwd-author-buttona"><?php echo esc_html($author_button_text); ?></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		} elseif ('style3' === $author_layout) {
		?>
		<div class="bwd-author-bio-3-area">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-10 col-sm-12">
						<div class="bwd-author-information">
							<div class="bwd-author-bio-img bwd-image-shape-colorb bwd-image-shape-colora">
								<img src="<?php echo esc_attr($author_image); ?>" alt="">
							</div>
							<div class="bwd-author-profile">
								<div class="bwd-author-name"><?php echo esc_html($author_name); ?></div>
								<div class="bwd-author-birthday"><?php echo esc_html($author_birth_date); ?></div>
							</div>
							<div class="bwd-author-bio-item d-flex">
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-left-content">
										<?php   
										if( $author_category ) {
											foreach( $author_category as $item ) { ?>
										<div class="bwd-author-book-name"> 
											<div class="bwd-author-subtitle"><?php echo esc_html($item['bwdab_author_bio_category_title']); ?></div>
											<div class="bwd-author-details"><?php echo esc_html($item['bwdab_author_bio_category_details']); ?></div>
										</div>
										<?php }
										} ?>
										<div class="bwdab-social-icon-wrapper">
											<?php if( $author_social ) {
												foreach( $author_social as $item ) { ?>
											<?php echo '<span class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<a href="<?php echo esc_url($item['bwdab_author_social_icon_link']['url']); ?>" class="bwd-author-social"><i class="<?php echo esc_attr($item['bwdab_author_social_icon']['value']); ?>"></i></a>
											</span>
											<?php }
											} ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-right-content">
										<div class="bwd-author-award">
											<table>
												<tr>
													<th class="bwd-award-head"><?php echo esc_html($award_name); ?></th>
													<th class="bwd-award-head"><?php echo esc_html($award_year); ?></th>
												</tr>
												<?php   
												if( $award_list ) {
													foreach( $award_list as $item ) { ?>
												<?php echo '<tr class="bwd-table-row-bg elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part']); ?></td>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part2']); ?></td>
												</tr>
												<?php }
												} ?>
											</table>
										</div>
										<div class="bwd-author-best-book">
											<div class="bwd-author-subtitle"><?php echo esc_html($selling_book_title); ?></div>
											<div class="bwd-author-book-img">
												<?php 
												if( $best_selling_book ) {
													foreach ( $best_selling_book as $image ) { ?>
													<?php echo '<span class="elementor-repeater-item-' . esc_attr( $image['_id'] ) . '">'; ?>
													<a href="<?php echo esc_url( $image['bwdab_author_best_selling_book_gallery_link']['url'] ); ?>"><img src="<?php echo esc_attr($image['bwdab_author_best_selling_book_gallery']['url']); ?>" alt=""></a>
													</span>
												<?php } 
												}?>
											</div>
										</div>
										<?php if( $rating_show === 'yes' ) { ?>
										<div class="bwd-author-review">
											<div class="bwd-author-rating bwd_author_star_rating">
												<?php if( 0 >= $author_rating ){
												} elseif( 1 === $author_rating ){ ?>
												<i class="fas fa-star"></i>
												<?php } elseif( 2 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 3 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 4 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } else { ?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php } ?>
											</div>
											<div class="bwd_author_rating_gray bwd_author_star_rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php if( $show_description === 'yes' ) { ?>
							<div class="bwd-author-dic"><?php echo esc_html($author_description); ?></div><?php } ?>
							<div class="bwd-author-meta d-flex align-items-center">
								<?php if( $signature_show === 'yes' ) { ?>
								<div class="bwd-author-signature">
									<img src="<?php echo esc_attr($author_signature); ?>" alt="">
								</div><?php } ?>
								<?php if( $show_video === 'yes' ) { ?>
								<div <?php if('youtube' === $video) { ?> data-popup-youtube-url="<?php echo esc_url($author_video_youtube); ?>" <?php } elseif('hosted' === $video) { ?> data-popup-custom-url="<?php echo esc_url($author_video_hosted); ?>" <?php } ?> class="bwd-author-vedio ripple-white " data-toggle="tooltip" data-placement="top" title="vedio"><i class="fas fa-play"></i></div><?php } ?>
								<?php if( $button_show === 'yes' ) {?>
								<a href="<?php echo esc_url($author_button_url); ?>" class="bwd-author-button"><?php echo esc_html($author_button_text); ?></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		} elseif ('style4' === $author_layout) {
		?>
		<div class="bwd-author-bio-4-area">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-10 col-sm-12">
						<div class="bwd-author-information">
							<div class="bwd-author-profile header-content-bg-color">
								<div class="bwd-author-name"><?php echo esc_html($author_name); ?></div>
								<div class="bwd-author-birthday"><?php echo esc_html($author_birth_date); ?></div>
							</div>
							<div class="bwd-author-bio-item d-flex">
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-left-content bwd-details-wrapper-bg">
										<div class="bwd-author-bio-img">
											<img src="<?php echo esc_attr($author_image); ?>" alt="">
										</div>
										<?php   
										if( $author_category ) {
											foreach( $author_category as $item ) { ?>
										<div class="bwd-author-book-name"> 
											<div class="bwd-author-subtitle"><?php echo esc_html($item['bwdab_author_bio_category_title']); ?></div>
											<div class="bwd-author-details"><?php echo esc_html($item['bwdab_author_bio_category_details']); ?></div>
										</div>
										<?php }
										} ?>
										<div class="bwdab-social-icon-wrapper">
											<?php if( $author_social ) {
												foreach( $author_social as $item ) { ?>
											<?php echo '<span class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<a href="<?php echo esc_url($item['bwdab_author_social_icon_link']['url']); ?>" class="bwd-author-social"><i class="<?php echo esc_attr($item['bwdab_author_social_icon']['value']); ?>"></i></a>
											</span>
											<?php }
											} ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-right-content">
										<div class="bwd-author-award">
											<table>
												<tr>
													<th class="bwd-award-head"><?php echo esc_html($award_name); ?></th>
													<th class="bwd-award-head"><?php echo esc_html($award_year); ?></th>
												</tr>
												<?php   
												if( $award_list ) {
													foreach( $award_list as $item ) { ?>
												<?php echo '<tr class="bwd-table-row-bg elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part']); ?></td>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part2']); ?></td>
												</tr>
												<?php }
												} ?>
											</table>
										</div>
										<div class="bwd-author-best-book">
											<div class="bwd-author-subtitle"><?php echo esc_html($selling_book_title); ?></div>
											<div class="bwd-author-book-img">
												<?php 
												if( $best_selling_book ) {
													foreach ( $best_selling_book as $image ) { ?>
													<?php echo '<span class="elementor-repeater-item-' . esc_attr( $image['_id'] ) . '">'; ?>
													<a href="<?php echo esc_url( $image['bwdab_author_best_selling_book_gallery_link']['url'] ); ?>"><img src="<?php echo esc_attr($image['bwdab_author_best_selling_book_gallery']['url']); ?>" alt=""></a>
													</span>
												<?php } 
												}?>
											</div>
										</div>
										<?php if( $rating_show === 'yes' ) { ?>
										<div class="bwd-author-review">
											<div class="bwd-author-rating bwd_author_star_rating">
												<?php if( 0 >= $author_rating ){
												} elseif( 1 === $author_rating ){ ?>
												<i class="fas fa-star"></i>
												<?php } elseif( 2 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 3 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 4 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } else { ?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php } ?>
											</div>
											<div class="bwd_author_rating_gray bwd_author_star_rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php if( $show_description === 'yes' ) { ?>
							<div class="bwd-author-dic"><?php echo esc_html($author_description); ?></div><?php } ?>
							<div class="bwd-author-meta d-flex align-items-center">
								<?php if( $signature_show === 'yes' ) { ?>
								<div class="bwd-author-signature">
									<img src="<?php echo esc_attr($author_signature); ?>" alt="">
								</div><?php } ?>
								<?php if( $show_video === 'yes' ) { ?>
								<div <?php if('youtube' === $video) { ?> data-popup-youtube-url="<?php echo esc_url($author_video_youtube); ?>" <?php } elseif('hosted' === $video) { ?> data-popup-custom-url="<?php echo esc_url($author_video_hosted); ?>" <?php } ?> class="bwd-author-vedio ripple-white " data-toggle="tooltip" data-placement="top" title="vedio"><i class="fas fa-play"></i></div><?php } ?>
								<?php if( $button_show === 'yes' ) {?>
								<a href="<?php echo esc_url($author_button_url); ?>" class="bwd-author-button bwd-author-buttonb"><?php echo esc_html($author_button_text); ?></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php	
		} elseif ('style5' === $author_layout) {
		?>
		<div class="bwd-author-bio-5-area">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-10 col-sm-12">
						<div class="bwd-author-information">
							<div class="bwd-author-bio-img bwd-image-shape-colorb">
								<img src="<?php echo esc_attr($author_image); ?>" alt="">
							</div>
							<div class="bwd-author-profile header-content-bg-color">
								<div class="bwd-author-name"><?php echo esc_html($author_name); ?></div>
								<div class="bwd-author-birthday"><?php echo esc_html($author_birth_date); ?></div>
							</div>
							<div class="bwd-author-bio-item d-flex">
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-left-content">
									<?php   
										if( $author_category ) {
											foreach( $author_category as $item ) { ?>
										<div class="bwd-author-book-name"> 
											<div class="bwd-author-subtitle"><?php echo esc_html($item['bwdab_author_bio_category_title']); ?></div>
											<div class="bwd-author-details"><?php echo esc_html($item['bwdab_author_bio_category_details']); ?></div>
										</div>
										<?php }
										} ?>
										<div class="bwdab-social-icon-wrapper">
											<?php if( $author_social ) {
												foreach( $author_social as $item ) { ?>
											<?php echo '<span class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
												<a href="<?php echo esc_url($item['bwdab_author_social_icon_link']['url']); ?>" class="bwd-author-social"><i class="<?php echo esc_attr($item['bwdab_author_social_icon']['value']); ?>"></i></a>
											</span>
											<?php }
											} ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="bwd-author-bio-right-content">
										<div class="bwd-author-award">
											<table>
												<tr>
													<th class="bwd-award-head"><?php echo esc_html($award_name); ?></th>
													<th class="bwd-award-head"><?php echo esc_html($award_year); ?>r</th>
												</tr>
												<?php   
												if( $award_list ) {
													foreach( $award_list as $item ) { ?>
												<?php echo '<tr class="bwd-table-row-bg elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part']); ?></td>
													<td class="bwd-award-body"><?php echo esc_html($item['bwdab_author_award_name_body_part2']); ?></td>
												</tr>
												<?php }
												} ?>
											</table>
										</div>
										<div class="bwd-author-best-book">
											<div class="bwd-author-subtitle"><?php echo esc_html($selling_book_title); ?></div>
											<div class="bwd-author-book-img">
												<?php 
												if( $best_selling_book ) {
													foreach ( $best_selling_book as $image ) { ?>
													<?php echo '<span class="elementor-repeater-item-' . esc_attr( $image['_id'] ) . '">'; ?>
													<a href="<?php echo esc_url( $image['bwdab_author_best_selling_book_gallery_link']['url'] ); ?>"><img src="<?php echo esc_attr($image['bwdab_author_best_selling_book_gallery']['url']); ?>" alt=""></a>
													</span>
												<?php } 
												}?>
											</div>
										</div>
										<?php if( $rating_show === 'yes' ) { ?>
										<div class="bwd-author-review">
											<div class="bwd-author-rating bwd_author_star_rating">
												<?php if( 0 >= $author_rating ){
												} elseif( 1 === $author_rating ){ ?>
												<i class="fas fa-star"></i>
												<?php } elseif( 2 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 3 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } elseif( 4 === $author_rating ){ ?>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												<?php } else { ?>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<?php } ?>
											</div>
											<div class="bwd_author_rating_gray bwd_author_star_rating">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php if( $show_description === 'yes' ) { ?>
							<div class="bwd-author-dic"><?php echo esc_html($author_description); ?></div><?php } ?>
							<div class="bwd-author-meta d-flex align-items-center">
								<?php if( $signature_show === 'yes' ) { ?>
								<div class="bwd-author-signature">
									<img src="<?php echo esc_attr($author_signature); ?>" alt="">
								</div><?php } ?>
								<?php if($show_video === 'yes') { ?>
								<div <?php if('youtube' === $video) { ?> data-popup-youtube-url="<?php echo esc_url($author_video_youtube); ?>" <?php } elseif('hosted' === $video) { ?> data-popup-custom-url="<?php echo esc_url($author_video_hosted); ?>" <?php } ?> class="bwd-author-vedio ripple-white " data-toggle="tooltip" data-placement="top" title="vedio"><i class="fas fa-play"></i></div><?php } ?>
								<?php if( $button_show === 'yes' ) {?>
								<a href="<?php echo esc_url($author_button_url); ?>" class="bwd-author-button"><?php echo esc_html($author_button_text); ?></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		 
	}
}



