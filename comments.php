<?php if ( post_password_required() ) { return; } ?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) { ?>
        <h4 class="comments-title"><?php comments_number(__('Без коментарів', 'your-text-domain'), __('1 Коментарь', 'your-text-domain'), '% ' . __('Коментарі', 'your-text-domain') ); ?></h4>
        <span class="title-line"></span>
        <ol class="comment-list">
            <?php wp_list_comments( array( 'avatar_size' => 70, 'style' => 'ul', 'callback' => 'your_theme_slug_comments', 'type' => 'all' ) ); ?>
        </ol>
        <?php the_comments_pagination( array( 'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __( 'Попередній', 'your-text-domain') . '</span>', 'next_text' => '<span class="screen-reader-text">' . __( 'Наступний', 'your-text-domain') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>', ) ); ?>
    <?php } ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
        <p class="no-comments"><?php _e( 'Коментарі закриті.', 'your-text-domain'); ?></p>
    <?php } ?>
    <?php comment_form(); ?>
</div>