<?php get_header(); ?>

<div id="content" style="min-height: 70vh;">

	
	<div class="container">
		<h2 class="my-4"><?php single_cat_title(); ?></h2>
	
<?php 
	foreach (get_the_category() as $category) {
} 

 ?>

<?php
$categories = get_the_terms( $post->ID, 'taxonomy' );
if ($categories != null || $categories !="") 
	{ 

	query_posts( array(
   'category_name' => $category->slug,
   'posts_per_page' => 6,
)); ?>

<!-- Start the Loop. -->


 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post mb-2" style="background-color: rgba(1,1,1,.025); border-radius: 10px; padding: 1%">

	<div class="post"> <!-- post begin -->
		<a href="<?php the_permalink(); ?>">
		     <?php if (has_post_thumbnail($post_id)) { ?>
                <div class="img-responsive"">
                    <img class="wp-post-image" style="border-radius: 5px;" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="height: 100%; width: 100%;">
                </div>
             <?php } ?>
		</a>

		<div class="row">
			<div class="col my-3">
				<h3 class="prewText">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="description col">
			 	<div class="entry">
			 		<?php the_content(); ?>
			 	</div>
			</div>
		</div>


		<div class="row mt-4" style="">
			<div class="col-4 ">
				<div class="media">
						<img class="mr-3" style="opacity: .55" src="<?php echo get_stylesheet_directory_uri().'/img/time_icon.png'; ?>">
 						<span class="post-month">
 							<?php the_time('M') ?>
 						</span>
 						<span  class="post-day ml-1">
 							<?php the_time('j') ?>
 						</span>
				</div>
			</div>
		</div>
	</div> <!-- post end -->
        	</div>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Вибачте, записи не знайдено. Спробуйте, будь ласка, пізніше.' ); ?></p>
	<?php endif; ?>
	
<?php } else {?>
		<p><?php esc_html_e( 'Вибачте, записи не знайдено. Спробуйте, будь ласка, пізніше.' ); ?></p>
<?php } ?>


</div>


</div>

 <?php get_footer();?>
