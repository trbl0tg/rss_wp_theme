<?php
/*
Template Name: Архіви
*/
?>

<?php get_header(); ?>


<div id="content ">
	
	<div class="container my-4">
	<h2><?php the_title(); ?></h2>

	<?php query_posts('showposts=-1'); ?>

	<ul>
		<?php while (have_posts()) : the_post(); ?>
			<li>
				<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<?php the_time('M d Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
			</li>
		<?php endwhile;?>
	</ul>
</div>
</div>

<?php get_footer(); ?>
