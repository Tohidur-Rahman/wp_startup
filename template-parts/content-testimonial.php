<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
            <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
        <?php
            $args = array(
                'post_type' => 'startup_testimonials',
                'post_per_page' => 6

            );
            $query = new WP_Query($args);
            $i = 0;
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $i++;

                    $testimonial_designation = get_field('testimonial_designation');
                    $testimonial_description = get_field('testimonial_description');
                    $testimonial_photo = get_field('testimonial_photo');
                    ?>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
               <?php 
                  if( !empty( $testimonial_photo ) ): ?>
                    <img class="img-fluid rounded"
                        src="<?php echo esc_url($testimonial_photo['url']); ?>"
                        alt="<?php echo esc_attr($testimonial_photo['alt']); ?>"
                        style="width: 60px; height: 60px;">
                <?php endif; ?>
                    <div class="ps-4">
                        <h4 class="text-primary mb-1"><?php the_title(); ?></h4>
                        <small class="text-uppercase"><?php echo $testimonial_designation; ?></small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                <?php echo $testimonial_description; ?>
                </div>
            </div>
            <?php
                    }
                wp_reset_postdata();
                }
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->