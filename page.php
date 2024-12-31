<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile;
else :
    echo '<p>No content found.</p>';
endif;

get_footer();
