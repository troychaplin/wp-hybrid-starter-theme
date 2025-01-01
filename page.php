<?php
// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

// Ensure Timber is available
if (class_exists('Timber\Timber')) {
    $context = Timber\Timber::context();
    Timber\Timber::render('templates/index.twig', $context);
} else {
    get_header();

    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
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
}
