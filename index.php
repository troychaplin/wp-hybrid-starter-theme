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

    echo '<p>Timber is not activated. Please activate Timber to use this theme.</p>';

    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;

    get_footer();
}
