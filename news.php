<?php
/*
Template Name: News
*/
?>



<?php get_header(); ?>

<!-- content -->

<div class="container" id="content" style="min-height: 70vh;">
    <div class="row my-4">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">

            <!-- останні новини -->

            <div class="row">
                <div class="col mb-5">
                    <h2 class="sepLine">Всі новини</h2>
                    <div class="line mb-1"></div>
                </div>
            </div>



            <?php 

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
    'posts_per_page' => 6, // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
    'paged'          => $current_page // текущая страница
);
query_posts( $args );

$wp_query->is_archive = true;
$wp_query->is_home = false;

?>

<!-- Start the Loop. -->
<?php if ( have_posts() ) : ?>
   
    <!-- Add the pagination functions here. -->
    
    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post(); ?>

       <div class="col">

        <div class="post mb-2" style="background-color: rgba(1,1,1,.025); border-radius: 10px; padding: 1%">
            <?php if (has_post_thumbnail($post_id)) { ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="img-responsive"">
                        <img class="wp-post-image" style="border-radius: 5px;" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="height: 100%; width: 100%;">
                    </div>
                </a>
            <?php } ?>
            
            <div class="row">
                <div class="col my-3">
                    <h3 class="prewText"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                    </div>
                </div>
                <div class="row">
                    <div class="description col">
                        <div class="entry" style="padding: 10px;">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">


                    <div class="col ">
                        <div class="media">
                            <img class="mr-3" src="<?php echo get_stylesheet_directory_uri().'/img/planet_icon.png'; ?>">
                            <div class="media-body">
                                <small><?php the_time('F j, Y'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media">
                            <img class="mr-3" src="<?php echo get_stylesheet_directory_uri().'/img/time_icon.png'; ?>">
                            <div class="media-body">
                                <p class="postmetadata"><?php the_category( ', ' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>


    <?php endwhile; ?>
    <!-- End of the main loop -->
    
    <!-- Add the pagination functions here. -->
    
    
    <?php echo the_posts_pagination(); ?>

    <style>
    .pagination{
        margin-top: 2%;
        padding: 1% 2%;
    }

    .page-numbers { 
        display: inline-block;
        padding: 5px 10px;
        margin: 0 2px 0 0;
        border: 1px solid #eee;
        line-height: 1;
        text-decoration: none;
        border-radius: 2px;
        font-weight: 600;
    }
    .page-numbers.current,
    a.page-numbers:hover {
        color: #fff;
        background: #ff6262;
    }
    .screen-reader-text{
        display: none;
    }
</style>


<?php else : ?>
   
    <?php _e('Sorry, no posts matched your criteria.'); ?>
    
<?php endif; ?>


</div>

<div class="col" style="max-height: 40vw;">
    <?php get_sidebar(); ?>
</div>


</div>


<?php get_footer(); ?>

