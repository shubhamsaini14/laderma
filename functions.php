<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/library/inc/' );
		require_once dirname( __FILE__ ) . '/library/inc/options-framework.php';
	}

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'html5reset_setup' );

	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_scripts_styles() {
		global $wp_styles;

		// Load Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		// Load Stylesheets
//		wp_enqueue_style( 'html5reset-reset', get_template_directory_uri() . '/reset.css' );
//		wp_enqueue_style( 'html5reset-style', get_stylesheet_uri() );

		// Load IE Stylesheet.
//		wp_enqueue_style( 'html5reset-ie', get_template_directory_uri() . '/css/ie.css', array( 'html5reset-style' ), '20130213' );
//		$wp_styles->add_data( 'html5reset-ie', 'conditional', 'lt IE 9' );

		// Modernizr
		// This is an un-minified, complete version of Modernizr. Before you move to production, you should generate a custom build that only has the detects you need.
		// wp_enqueue_script( 'html5reset-modernizr', get_template_directory_uri() . '/library/js/modernizr-2.6.2.dev.js' );

	}
	add_action( 'wp_enqueue_scripts', 'html5reset_scripts_styles' );

	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'html5reset' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );




//OLD STUFF BELOW


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	//	function removeHeadLinks() {
	//    	remove_action('wp_head', 'rsd_link');
	//    	remove_action('wp_head', 'wlwmanifest_link');
	//    }
	//    add_action('init', 'removeHeadLinks');

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );

	// Widgets
	if ( function_exists('register_sidebar' )) {
		function html5reset_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'html5reset' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'html5reset_widgets_init' );
	}

	// Navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
		echo '</div>';
	}

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}
	//  Custom post type pagination function 

function cpt_pagination($pages = '', $range = 4)
{
	$showitems = ($range * 2) + 1;
	global $paged;
	if (empty($paged)) $paged = 1;
	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if (!$pages) {
			$pages = 1;
		}
	}
	if (1 != $pages) {

		if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) . "'>&laquo; First</a>";
		if ($paged > 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo; Previous</a>";
		for ($i = 1; $i <= $pages; $i++) {
			if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
				echo ($paged == $i) ? "<li class=\"page-item active\"><a class='page-link'>" . $i . "</a></li>" : "<li class='page-item'> <a href='" . get_pagenum_link($i) . "' class=\"page-link\">" . $i . "</a></li>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"" . get_pagenum_link($paged + 1) . "\">i class='flaticon flaticon-back'></i></a></li>";
		if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='" . get_pagenum_link($pages) . "'><i class='flaticon flaticon-arrow'></i></a></li>";
	}
}






/* Custom callback function for Trackbacks/Pings, see comments.php */
function custom_pings($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author vcard">

				<?php printf(__('<cite class="fn">%s</cite> <span class="saysaaaaaaaaaaa">wrote:</span>'), get_comment_author_link()) ?>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.') ?></em>
				<br />
			<?php endif; ?>

			<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '') ?></div>

			<?php comment_text() ?>

		</div>
	<?php
}



$args = array(
	'walker'            => null,
	'max_depth'         => 100,
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'page'              => 100,
	'per_page'          => 100,
	'avatar_size'       => 32,
	'reverse_top_level' => null,
	'reverse_children'  =>  100
);

wp_list_comments($args);

// Start Custome Tab Menu In WP-Sidenav
if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

function display_custom_comments($comment, $args, $depth)
{
	$isByAuthor = false;

	if ($comment->comment_author_email == get_the_author_meta('email')) {
		$isByAuthor = true;
	}

	$GLOBALS['comment'] = $comment; ?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div class="comment-author vcard">
			<div class="comment-box">
				<div class="comment">
					<div class="author-thumb">
						<?php echo get_avatar($comment, $args['avatar_size']); ?>
					</div>
					<div class="comment-info">
						<div class="name"><?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?></div>
						<div class="date"><?php printf(__('%1$s'), get_comment_date('M d, Y')) ?></div>
					</div>
					<div class="text"><?php comment_text() ?></div>
				</div>
			</div>
		</div>
		<div class="reply  reply-btn">
			<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>

	<?php
}
add_action('init', 'video_gallery');
function video_gallery()
{

	$labels = array(

		'name'               => _x('Video', 'post type general name'),
		'singular_name'      => _x('Video Item', 'post type singular name'),
		'add_new'            => _x('Add New', 'Video'),
		'add_new_item'       => __('Add New Video'),
		'edit_item'          => __('Edit Video'),
		'new_item'           => __('New Video'),
		'all_items'          => __('All Video'),
		'view_item'          => __('View Video'),
		'search_items'       => __('Search Video'),
		'not_found'          => __('No Video found'),
		'not_found_in_trash' => __('No Video found in the Trash'),
		'parent_item_colon' => '',
		'menu_name'          => 'Videos'

	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'video', 'with_front' => false),
		'hierarchical' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies'          => array( 'genres' ),

        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 13,
		'menu_icon'           => 'dashicons-video-alt3',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
	);

	register_post_type('video', $args);

	register_taxonomy("video-categories", array("video"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Category", "rewrite" => array('slug' => 'video', 'with_front' => false)));
};
add_action('init', function() {
	register_post_type('gallery', [
		'label' => __('Gallery', 'txtdomain'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-book',
		'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'gallery', 'with_front' => false],
		'query_var'=> 'gallery',
		'taxonomies' => ['gallery_catagory'],
		'labels' => [
			'singular_name' => __('Gallery', 'txtdomain'),
			'add_new_item' => __('Add new Gallery', 'txtdomain'),
			'new_item' => __('New Gallery', 'txtdomain'),
			'view_item' => __('View Gallery', 'txtdomain'),
			'not_found' => __('No Gallery found', 'txtdomain'),
			'not_found_in_trash' => __('No Gallery found in trash', 'txtdomain'),
			'all_items' => __('All Gallery', 'txtdomain'),
			'insert_into_item' => __('Insert into Gallery', 'txtdomain')
		],		
	]);
	register_taxonomy('gallery_catagory', ['gallery'], [
		'label' => __('Categories', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'gallery'],
		'show_admin_column' => true,
		'exclude_from_search' => true,		
		'labels' => [
			'singular_name' => __('Categories', 'txtdomain'),
			'all_items' => __('All Categories', 'txtdomain'),
			'edit_item' => __('Edit Categories', 'txtdomain'),
			'view_item' => __('View Categories', 'txtdomain'),
			'update_item' => __('Update Categories', 'txtdomain'),
			'add_new_item' => __('Add New Categories', 'txtdomain'),
			'new_item_name' => __('New Categories Name', 'txtdomain'),
			'search_items' => __('Search Categories', 'txtdomain'),
			'popular_items' => __('Popular Categories', 'txtdomain'),
			'separate_items_with_commas' => __('Separate Gallery with comma', 'txtdomain'),
			'choose_from_most_used' => __('Choose from most used Categories', 'txtdomain'),
			'not_found' => __('No Categories found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('gallery_catagory', 'gallery');
});
function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');
    
    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {
	    
            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {
                
                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->name) {
		    
                    // get category objects
                    $terms = get_terms(array('taxonomy' => $taxonomy->name, 'hide_empty' => false));
		    
                    // make rules
                    foreach ($terms as $term) {
						$rules[$post_type->rewrite['slug'] . '/' . $term->slug . '/?$'] = 'index.php?' . $taxonomy->name . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');
?>

