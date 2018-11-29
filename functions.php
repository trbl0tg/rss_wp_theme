<?php



add_theme_support( 'post-thumbnails' );



wp_enqueue_script('my-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/js/slick.min.js');
wp_enqueue_style( 'bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js');

wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css');
wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
wp_enqueue_style( 'style', get_stylesheet_uri() );

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_action('get_header', 'remove_admin_login_header');



    // Add shortcode
add_shortcode('upcoming_posts', 'wpb_upcoming_posts'); 
    // Enable shortcode execution inside text widgets
add_filter('widget_text', 'do_shortcode');



function get_featured_posts(){
    $counter=0;
    $stack = array();
    query_posts( array('post_status' => 'future'));
    if( have_posts() ){
       while( have_posts() ){ 
        the_post();
        array_push($stack, array('feature_date' => get_the_date(), 'feature_permalink' => get_the_permalink()));
    }
    wp_reset_query();
} 
}

// Custom Callback

function your_theme_slug_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        
        <div class="comment-wrap">
            <div class="comment-img">
                <?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
            </div>
            <div class="comment-body">
                <h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
                <span class="comment-date"><?php printf(__('%1$s at %2$s', 'your-text-domain'), get_comment_date(),  get_comment_time()) ?></span>
                <?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment awaiting approval', 'your-text-domain'); ?></em><br /><?php } ?>
                <?php comment_text(); ?>
                <span class="comment-reply"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'your-text-domain'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
            </div>
        </div>
    <?php }

// Enqueue comment-reply

    add_action('wp_enqueue_scripts', 'your_theme_slug_public_scripts');

    function your_theme_slug_public_scripts() {
        if (!is_admin()) {
            if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
        }
    }

// Enqueue fontawesome

    add_action('wp_enqueue_scripts', 'your_theme_slug_public_styles');

    function your_theme_slug_public_styles() {
        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
    }


    ?>

