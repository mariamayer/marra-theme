<?php
/**
 * Template Name: Homepage Template
 * Description: A custom template for the homepage
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php get_template_part('template-parts/home'); ?>
    </div>
</main>

<?php
get_footer(); 