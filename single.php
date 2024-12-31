<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <p>Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile;
else :
    echo '<p>No content found.</p>';
endif;

get_footer();