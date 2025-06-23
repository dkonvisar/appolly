<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
<main>
    <?php get_template_part('parts/sections/section', 'hero'); ?>
    <?php get_template_part('parts/sections/section', 'about'); ?>
    <?php get_template_part('parts/sections/section', 'features'); ?>
    <?php get_template_part('parts/sections/section', 'checkout'); ?>
    <?php get_template_part('parts/sections/section', 'download'); ?>
    <?php // get_template_part('parts/sections/section', 'contacts'); ?>
</main>
<?php
get_footer();
