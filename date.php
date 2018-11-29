<?php
get_header();

$query = new WP_Query(array('orderby' => 'post_date', 'order' => 'DESC')); //Orders posts by post_date in descending order

// The Loop
if ($query->have_posts()) {
	echo '<div class="day-posts">';
	while ($query->have_posts()) {
		$query->the_post();
		echo '<div class="day">';
        the_date('l jS F Y', '<div class="title">', '</div>'); //Formats date, before echo, after echo
        echo '<div class="posts">';
        echo '<div class="post">';
        the_title('<div class="title">', '</div>'); //echo title
        echo '<div class="content">';
        the_content(); //echo content
        echo '</div></div></div></div>';
    }
    echo '</div>';
}

get_footer();
?>