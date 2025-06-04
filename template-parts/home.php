<?php
// Home custom template part
?>
<section class="home-hero-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="hero-subtitle-top text-uppercase small mb-2" style="letter-spacing:2px; color:#6d5c4d;">
                <?php if(function_exists('get_field')) echo esc_html(get_field('home_hero_subtitle')); ?>
            </div>
            <h1 class="hero-title display-4 mb-3" style="color:#4a2320; font-family:serif; font-weight:400;">
                <?php if(function_exists('get_field')) echo esc_html(get_field('home_hero_title')); ?>
            </h1>
        </div>
        <div class="therapists-scroll-wrapper" style="overflow-x:auto; white-space:nowrap; padding-bottom:2rem;">
            <div class="d-flex flex-row flex-nowrap gap-4">
                <?php
                $therapists = new WP_Query([
                    'post_type' => 'therapists',
                    'posts_per_page' => -1
                ]);
                if($therapists->have_posts()):
                    while($therapists->have_posts()): $therapists->the_post();
                        $meta1 = get_post_meta(get_the_ID(), 'meta1', true); // Replace with actual meta keys
                        $meta2 = get_post_meta(get_the_ID(), 'meta2', true);
                        $meta3 = get_post_meta(get_the_ID(), 'meta3', true);
                ?>
                <div class="therapist-card bg-white rounded-4 shadow-sm p-3 text-center" style="min-width:270px; max-width:270px; display:inline-block;">
                    <div class="therapist-img mb-3">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium_large', ['class'=>'img-fluid rounded-4 w-100', 'style'=>'aspect-ratio:1/1; object-fit:cover;']); ?>
                        <?php endif; ?>
                    </div>
                    <h3 class="therapist-name h5 mb-2" style="color:#4a2320; font-family:serif; font-weight:400;"><?php the_title(); ?></h3>
                    <div class="therapist-meta d-flex flex-wrap justify-content-center gap-2">
                        <?php if($meta1): ?><span class="badge rounded-pill bg-light text-dark px-3 py-2" style="font-size:1rem; background:#d2ddfb; color:#4a2320;"> <?php echo esc_html($meta1); ?> </span><?php endif; ?>
                        <?php if($meta2): ?><span class="badge rounded-pill bg-light text-dark px-3 py-2" style="font-size:1rem; background:#d2ddfb; color:#4a2320;"> <?php echo esc_html($meta2); ?> </span><?php endif; ?>
                        <?php if($meta3): ?><span class="badge rounded-pill bg-light text-dark px-3 py-2" style="font-size:1rem; background:#d2ddfb; color:#4a2320;"> <?php echo esc_html($meta3); ?> </span><?php endif; ?>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="home-services-section py-5" style="background:#ecd8c7;">
    <div class="container">
        <div class="text-center mb-5">
            <?php if ($section_title = get_field('home_services_section_title')): ?>
                <div class="services-section-title text-uppercase small mb-2" style="letter-spacing:2px; color:#6d5c4d;">
                    <?php echo esc_html($section_title); ?>
                </div>
            <?php endif; ?>
            <?php if ($heading = get_field('home_services_heading')): ?>
                <div class="services-section-heading mb-3" style="color:#4a2320; font-family:serif; font-size:2.2rem; font-weight:400;">
                    <?php echo wp_kses_post($heading); ?>
                </div>
            <?php endif; ?>
            <?php if ($desc = get_field('home_services_description')): ?>
                <div class="services-section-desc mx-auto mb-4" style="max-width:600px; color:#6d5c4d;">
                    <?php echo esc_html($desc); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if (have_rows('home_services_cards')): ?>
        <div class="row justify-content-center g-4">
            <?php while (have_rows('home_services_cards')): the_row();
                $card_title = get_sub_field('title');
                $card_img = get_sub_field('image');
                $card_btn_text = get_sub_field('button_text');
                $card_btn_link = get_sub_field('button_link');
            ?>
            <div class="col-md-4">
                <div class="service-card bg-light rounded-4 p-4 h-100 d-flex flex-column align-items-center text-center" style="background:#fcf7ed;">
                    <?php if ($card_img): ?>
                        <img src="<?php echo esc_url($card_img['url']); ?>" alt="<?php echo esc_attr($card_img['alt']); ?>" class="mb-3" style="max-height:160px; width:auto;" />
                    <?php endif; ?>
                    <h3 class="service-card-title mb-3" style="color:#4a2320; font-family:serif; font-size:2rem; font-weight:400;">
                        <?php echo esc_html($card_title); ?>
                    </h3>
                    <div class="mt-auto">
                        <?php if ($card_btn_text): ?>
                            <?php if ($card_btn_link): ?>
                                <a href="<?php echo esc_url($card_btn_link); ?>" class="btn btn-light rounded-pill px-4 py-2" style="background:#d2ddfb; color:#4a2320; font-weight:400; font-size:1rem;">
                                    <?php echo esc_html($card_btn_text); ?>
                                </a>
                            <?php else: ?>
                                <span class="btn btn-light rounded-pill px-4 py-2" style="background:#d2ddfb; color:#4a2320; font-weight:400; font-size:1rem;">
                                    <?php echo esc_html($card_btn_text); ?>
                                </span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
