<?php 
if (class_exists('ACF')) {
    $services_title = get_field('services_title', 'options');
    $services_subitle = get_field('services_subtitle', 'options');
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase"><?php echo $services_title; ?></h5>
            <h1 class="mb-0"><?php echo $services_subitle; ?></h1>
        </div>
        <div class="row g-5">
            <?php
            $args = array(
                'post_type' => 'startup_services',

            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    $service_icon = get_field('service_icon');
                    $service_url = get_field('service_url');
                    ?>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($service_icon); ?> text-white"></i>
                            </div>
                            <h4 class="mb-3">
                                <?php the_title(); ?>
                            </h4>
                            <?php the_content(); ?>
                            <a class="btn btn-lg btn-primary rounded" href="<?php echo esc_url($service_url); ?>">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
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
<?php }?>