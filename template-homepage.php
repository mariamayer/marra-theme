<?php
/**
 * Template Name: Homepage Template
 * Description: A custom template for the homepage
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', 'page');
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer(); 