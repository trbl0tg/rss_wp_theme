<?php get_header(); ?>

<div class="container" style="margin-bottom: 1.5%;"> 

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">

				
				<div class="container" ">
					<div class="row">
						<?php if (has_post_thumbnail($post_id)) { ?>
							<div class="the_post_thumbnail" style="width: 100%; height: auto; min-height: 30vh; background-color: gray; margin: 2% 0;">					
								<div class="post-image">
									<img title="image title" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width: 100%; height:auto;">
								</div>
							</div>
						<?php } else {

							?>
							<div class="row mt-4"></div>
							<?php 

						} ?>
					</div>
				</div>



				<div class="post-date">
					<span class="post-month"><?php the_time('M') ?></span> <span class="post-day"><?php the_time('j') ?></span>
				</div>
				<div class="post-title">
					<span class="display-4" style="color: black; border-left: 10px solid rgba(255, 98, 98, .7); padding-left: 3%; font-size: 2.8rem;"><b><?php the_title(); ?></b></span>
				</div>
				<div class="row px-5">
					<div class="col mb-5">
						<div class="line mb-1"></div>
					</div>
				</div>
				<div class="entry" style="max-height: none;">

					<?php the_content('Дізнатися більше &raquo;'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				</div>
				
				<div class="row px-5">
					<div class="col mb-5">
						<div class="line mb-1"></div>
					</div>
				</div>

				<?php comments_template(); ?>
				
			</div>

		<?php endwhile; ?>

		<div class="row">
			<div class="navigation" style="width: 100%; margin-top: 2%"> 
				<?php
				$prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
					<span class="previous-entries"> <span class="post_arrow"><</span> <?php previous_post_link(' %link') ?></span> 
				<?php endif; ?>
				<?php
				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
					<span class="next-entries" style="float: right;"> <?php next_post_link('%link') ?> <span class="post_arrow">></span></span> 
				<?php endif; ?>
			</div>
		</div>	
		


		<style>

		.next-entries span.post_arrow{
			margin-left: 20px;
		}

		.previous-entries span.post_arrow{
			margin-right: 20px;
		}
		span.post_arrow {
			
			cursor: pointer;
			color: #fff;
			background-color: rgba(255, 98, 98, 1);
			padding: 10px;
			
		}

	</style>
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

</div>
<!--/content -->
</div>

<?php get_footer(); ?>
