<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );


/**
 * Claims Grid Shortcode
 * Usage: [claims_grid posts="6"]
 */
function claims_grid_shortcode($atts) {
    $atts = shortcode_atts(array(
        'posts' => 6,
    ), $atts, 'claims_grid');

    $args = array(
        'post_type'      => 'claim',        // your CPT slug
        'posts_per_page' => intval($atts['posts']),
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $claims = new WP_Query($args);

    if ($claims->have_posts()) {

        // Start the grid
        $output = '<h2 class="claims-header">Key Claims</h2><div class="claims-grid">';

        while ($claims->have_posts()) {
            $claims->the_post();
            $output .= '<div class="claim-item">';
        
            if (has_post_thumbnail()) {
                $output .= '<a href="' . get_permalink() . '" class="claim-image">';
                $output .= get_the_post_thumbnail(get_the_ID(), 'medium');
                $output .= '</a>';
            }
        
            $output .= '<h3 class="claim-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            $output .= '<div class="claim-excerpt">' . get_the_excerpt() . '</div>';
            $output .= '<a href="' . get_permalink() . '" class="claim-button">Read More</a>';
        
            $output .= '</div>'; // .claim-item
        }

        /*while ($claims->have_posts()) {
            $claims->the_post();
            $output .= '<div class="claim-item">';

            if (has_post_thumbnail()) {
                $output .= '<a href="' . get_permalink() . '">';
                $output .= get_the_post_thumbnail(get_the_ID(), 'medium');
                $output .= '</a>';
            }

            $output .= '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            $output .= '<div class="claim-excerpt">' . get_the_excerpt() . '</div>';
            $output .= '<a href="' . get_permalink() . '">Read more →</a>';

            $output .= '</div>'; // .claim-item
        }*/

        $output .= '</div>'; // .claims-grid

        wp_reset_postdata();
        return $output;
    } else {
        return '<p>No claims found.</p>';
    }
}
add_shortcode('claims_grid', 'claims_grid_shortcode');

/**
 * Claims Grid CSS
 */
function claims_grid_styles() {
    echo '<style>
    .claims-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        justify-content: center;
    }
    h2.claims-header {
        text-align: center;
    }
    @media (max-width: 1024px) {
        .claims-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 768px) {
        .claims-grid {
            grid-template-columns: 1fr;
        }
    }
    .claim-item {
        background: #fbfbfb;
        border: 1px solid #eee;
        border-radius: 6px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .claim-image img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        margin-bottom: 15px;
    }
    .claim-title {
        font-size: 1.25rem;
        margin: 10px 0;
        color: #602C90;
    }
    .claim-title a {
        text-decoration: none;
        color: inherit;
    }
    .claim-excerpt {
        font-size: 0.95rem;
        margin-bottom: 20px;
        color: #555;
    }
    .claim-button {
        display: inline-block;
        padding: 10px 20px;
        background: #6a1b9a; /* adjust purple shade */
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.2s ease;
        margin: 20px;
    }
    .claim-button:hover {
        background: #4a148c;
    }
    </style>';
}
add_action('wp_head', 'claims_grid_styles');



/**
 * Resources Grid Shortcode
 * Usage: [resources_grid posts="6"]
 */
function resources_grid_shortcode($atts) {
    $atts = shortcode_atts(array(
        'posts' => 6,
    ), $atts, 'resources_grid');

    $args = array(
        'post_type'      => 'resource',     // your CPT slug
        'posts_per_page' => intval($atts['posts']),
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $resources = new WP_Query($args);

    if ($resources->have_posts()) {

        // Start the grid
        $output = '<h2 class="resources-header">Resources</h2><div class="resources-grid">';

        while ($resources->have_posts()) {
            $resources->the_post();
            $output .= '<div class="resource-item">';
            
            // Wrap the whole item content in a link for better UX
            $output .= '<a href="' . get_permalink() . '" class="resource-card-link">';

            if (has_post_thumbnail()) {
                // The image itself is part of the card, not a separate link
                $output .= '<div class="resource-image">';
                $output .= get_the_post_thumbnail(get_the_ID(), 'medium');
                $output .= '</div>';
            }
            
            $output .= '<div class="resource-content">';
            $output .= '<h3 class="resource-title">' . get_the_title() . '</h3>';
            $output .= '<span class="download-button">Download here</span>';
            $output .= '</div>'; // .resource-content

            $output .= '</a>'; // .resource-card-link
            $output .= '</div>'; // .resource-item
        }

        $output .= '</div>'; // .resources-grid

        wp_reset_postdata();
        return $output;
    } else {
        return '<p>No resources found.</p>';
    }
}
// Note: It's good practice to remove the old shortcode before adding the new one if you're editing it.
// remove_shortcode('resources_grid'); // Uncomment if you have issues with the shortcode not updating.
add_shortcode('resources_grid', 'resources_grid_shortcode');


/**
 * Resources Grid CSS
 * Adjusted to match the style of https://betterunis.nteu.au/election25/
 */
function resources_grid_styles() {
    echo '<style>
    .resources-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 32px; /* Increased gap for better spacing */
        max-width: 1200px; /* Constrain max-width for large screens */
        margin: 40px auto; /* Add vertical margin */
        padding: 0 20px; /* Add horizontal padding for smaller screens */
        padding-bottom: 80px;
    }
    h2.resources-header {
        text-align: center;
    }

    .resource-item {
        text-align: center;
    }

    .resource-card-link {
        display: flex;
        flex-direction: column;
        height: 100%; /* Make flex items equal height */
        text-decoration: none;
        color: inherit;
    }
    
    .resource-image img {
        width: 100%;
        height: auto;
        border-radius: 6px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    
    .resource-content {
        display: flex;
        flex-direction: column;
        flex-grow: 1; /* Allows the content area to grow */
        padding-top: 20px;
    }

    .resource-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin: 0 0 15px 0;
        color: #333;
    }

    .download-button {
        display: inline-block;
        padding: 12px 24px;
        background: #602c90; /* Purple color from the example site */
        color: #ffffff;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.2s ease;
        margin-top: auto; /* Pushes the button to the bottom of the card */
    }

    .download-button:hover {
        background: #4c2373; /* Darker purple on hover */
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .resources-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
    }
    </style>';
}
add_action('wp_head', 'resources_grid_styles');

