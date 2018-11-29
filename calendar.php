<?php
/*
Template Name: calendar
*/
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header( 'embed' );

?>
<div id="tribe-events-content" <?php post_class( 'wp-embed tribe-embed' ); ?>>
	<?php do_action( 'tribe_events_embed_before_the_event_feature_image' ); ?>
	<?php tribe_get_template_part( 'embed/image' ); ?>
	<?php do_action( 'tribe_events_embed_after_the_event_feature_image' ); ?>

	<?php do_action( 'tribe_events_embed_before_the_event_title' ) ?>
	<h2 class="wp-embed-heading tribe-events-list-event-title">
		<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			<?php the_title() ?>
		</a>
	</h2>
	<?php do_action( 'tribe_events_embed_after_the_event_title' ) ?>

	<?php tribe_get_template_part( 'embed/meta' ); ?>

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php do_action( 'tribe_events_embed_before_the_content' ) ?>
			<?php tribe_get_template_part( 'embed/content' ); ?>
			<?php do_action( 'tribe_events_embed_after_the_content' ) ?>
		</div>
	<?php endwhile; ?>

	<?php do_action( 'tribe_events_embed_before_the_event_footer' ); ?>
	<?php tribe_get_template_part( 'embed/footer' ); ?>
	<?php do_action( 'tribe_events_embed_after_the_event_footer' ); ?>
</div><!-- #tribe-events-content -->
<?php

get_footer( 'embed' );
?>