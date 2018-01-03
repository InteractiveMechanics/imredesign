<?php
/**
 * Template for displaying a Webinar
 * @package imredesign
 * @since imredesign 1.0
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
?>

<h1>This is single webinar</h1>

<?php endwhile; ?>

<?php get_footer(); ?>