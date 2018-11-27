<?php get_header(); ?>

<?php 
echo do_shortcode('[smartslider3 slider=1]');
?>
<!-- content -->

<div class="container-fluid" id="content">
	<div class="row mt-4">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">

			<!-- останні новини -->
			
			<div class="row">
				<div class="col mb-5">
					<h2 class="sepLine" style="background-color: #f3f3f3;">Важливі новини</h2>
					<div class="line mb-1"></div>
				</div>
			</div>





			<div class="row">



				<?php query_posts( array(
					'category_name' => 'hot_news',
					'posts_per_page' => 3,
				)); ?>

				<!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="d-flex align-items-stretch col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4 mb-3">

						<div class="post post-hover"> <!-- post begin -->

							<a href="<?php the_permalink(); ?>">
								<div class="pinImage" style="height: auto;">
									
									<? if( has_post_thumbnail( $post_id ) ): ?>
										<img title="image title" alt="thumb image" class="wp-post-image" 
										src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="height: 100%; width: 100%;">
									<? endif; ?>
								</div>
							</a>

							<div class="row">
								<div class="col my-3">
									<h3 class="prewText" style="margin: 0 2%;">
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
								</div>
							</div>

							<div class="row">
								<div class="description col">
									<div class="entry" style="padding: 1%; margin-bottom: 10%;">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							
							<div class="" style="width: 100%; position: absolute; bottom: 0; background-color: #f3f3f3;">
								<div class="media" style="float: left; margin-left: 3%;">
									<img class="mr-3" style="opacity: .55" src="<?php echo get_stylesheet_directory_uri().'/img/time_icon.png'; ?>">
									
									<span class="post-month">
										<?php the_time('M') ?>
									</span>
									<span  class="post-day ml-1">
										<?php the_time('j') ?>
									</span>
								</div>

								<div class="media" style="float: right; margin-right: 10%;">
									<img class="mr-3" style="opacity: .55" src="<?php echo get_stylesheet_directory_uri().'/img/planet_icon.png'; ?>">
									<div class="media-body">
										<p class="postmetadata" >
											<?php the_category(', '); ?>
										</p>
									</div>
								</div>
							</div>
							
						</div> <!-- post end -->
					</div>


				<?php endwhile; else : ?>


				<!-- The very first "if" tested to see if there were any Posts to -->
				<!-- display.  This "else" part tells what do if there weren't any. -->
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


				<!-- REALLY stop The Loop. -->
			<?php endif; ?>


		</div>



		<div class="navigation">
			<span class="previous-entries"><?php next_posts_link('Попередні новини') ?></span>
			<span class="next-entries"><?php previous_posts_link('Свіжіші новини') ?></span>
		</div>

		<!-- анонси -->

		<div class="row">
			<div class="col mb-4">
				<h2 class="sepLine" style="">Анонси <?php get_featured_posts(); ?> </h2>
				<div class="line mb-1"></div>
			</div>
		</div>




		<div class="row mb-2">




<!-- 
			<?php query_posts( array(
				'post_status' => 'future',
				'posts_per_page' => 3,
				'orderby' => 'date',
				'order' => 'ASC'
			)); ?>


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4">
					<a href="<?php the_permalink();?>">
						<div class="row" >
							<div class="col" style="background-color: gray; height: 6vw; min-height: 100px; margin-right: 7%;">
								<span class="prevText" style="color: #fff;">
									<h3 class="my-auto pt-3">
										<?php echo get_the_title() ?>
									</h3>
								</span>
								<div class="row ml-auto" style="width: 27%; background-color: #ff6262; position: absolute; height: 100%; right: 0; top: 0;">
									<div class="text-center my-auto mx-auto">
										<p class="" style="color: #fff; font-size: 3rem; position: relative; top: 5px; margin-bottom: 0; padding-bottom: 0;">
											<?php echo get_the_date('d') ?>
										</p>
										<p class="date" style="padding-top: 0; margin-top: 0; position: relative; bottom: 5px; color: #fff;">
											<?php echo get_the_date('F') ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>

			<?php endwhile; else : ?>

			<p><?php esc_html_e( 'Майбутніх подій не заплановано.' ); ?></p>

		<?php endif; ?>  -->
	</div>
</div>

<!-- content zone -->





<div class="col d-xl-block d-lg-none d-sm-none d-xs-none d-md-none">

	<?php get_sidebar(); ?>

	<div class="row px-5">
		<div class="col mb-5">
			<div class="line mb-1"></div>
		</div>
	</div>


	<div class="cf1 container-fluid" style="padding: 0 .9%">

		<div class="row mb-3">



			<?php query_posts( array(
				'category_name' => 'news',
				'posts_per_page' => 3,
			)); ?>

			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



				<div class="d-flex align-items-stretch col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4 mb-3">

					<div class="post" style="border-radius: 1%; overflow: hidden; background-color: #f7f7f7"> <!-- post begin -->
						<a style="color: #fff;" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<h3 class="prewText" style="position: absolute; top: 5%; background-color: #ff62628a; padding: 3% 10% 3% 3%;">
								
								<?php the_title(); ?>
								
							</h3>
						</a>
						<a href="<?php the_permalink(); ?>">
							<div class="pinImage" style="height: 60%; min-height: 300px;">			
								<? if( has_post_thumbnail( $post_id ) ): ?>
									<img class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="height: 100%; width: 100%;">
								<? endif; ?>
							</div>
						</a>

						<div class="row">
							<div class="col my-3">
								
							</div>
						</div>

						<div class="row">
							<div class="description col">
								<div class="entry" style="padding: 0 3%">
									<?php the_content(); ?>
								</div>
							</div>
						</div>


						<div class="row mt-4" style="position: absolute; top: 97.7%; padding: 0 2%;">
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
							<div class="col" style="position: relative; left: 40%;">
								<div class="media">
									<img class="mr-3" style="opacity: .55" src="<?php echo get_stylesheet_directory_uri().'/img/planet_icon.png'; ?>">
									<div class="media-body">
										<p class="postmetadata" >
											<?php the_category(', '); ?>
										</p>
									</div>
								</div>
							</div>
						</div>

						
					</div> <!-- post end -->
				</div>


			<?php endwhile; else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>


	</div>





</div>




<!-- all news button -->


<div class="all_news_button mt-2">
	<div class="row justify-content-center">
		<div class="col mt-5">
			<div style="margin-top: 0; width: 20%; margin: 0 auto; height: 50px;" class="ctaButton">
				<a class="all_news_button" href="<?php echo get_site_url(); ?>/news/">
					<p style="mar-top: 1%;" class="text-center">
						Всі новини
					</p>
				</a>
			</div>
		</div>
	</div>
</div>



</div>


<div class="container-fluid mt-5 py-4" style="background-color: #6a6a6a; color: #fff;">
	<div class="container" id="content">

		

		
		<!-- Section: Team v.1 -->
		<section class="team-section text-center my-5">

			<!-- Section heading -->
			<h2 class="h1-responsive font-weight-bold my-5">    
				<div class="display-4 p-2">
					 Наша команда
				</div>
			</h2>
			<!-- Section description -->
			<p class="grey-text w-responsive mx-auto mb-5" style="opacity: .7;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
			eum porro a pariatur veniam.</p>





			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5 member">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle z-depth-1"
						alt="Sample avatar">
					</div>
					<h5 class="font-weight-bold mt-4 mb-3 member-name">Anna Williams</h5>
					<p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
					<p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
					adipisci sed quia non numquam modi tempora eius.</p>
					
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle z-depth-1"
						alt="Sample avatar">
					</div>
					<h5 class="font-weight-bold mt-4 mb-3 member-name">John Doe</h5>
					<p class="text-uppercase blue-text"><strong>Web developer</strong></p>
					<p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
					doloremque rem laudantium totam aperiam.</p>
					
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-lg-3 col-md-6 mb-md-0 mb-5">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-1"
						alt="Sample avatar">
					</div>
					<h5 class="font-weight-bold mt-4 mb-3 member-name">Maria Smith</h5>
					<p class="text-uppercase blue-text"><strong>Photographer</strong></p>
					<p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
					mollit anim est fugiat nulla id eu laborum.</p>
					
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-lg-3 col-md-6">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
						alt="Sample avatar">
					</div>
					<h5 class="font-weight-bold mt-4 mb-3 member-name">Tom Adams</h5>
					<p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
					<p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
					totam officia voluptates perferendis voluptatibus aut.</p>
					
				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</section>
		<!-- Section: Team v.1 -->

	</div>

</div>

<?php get_footer(); ?>


