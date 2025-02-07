<?php
/*
Template Name: Template Home
*/

get_header();
?>
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $args = array(
            'post_type' => 'startup_slider',

        );
        $query = new WP_Query($args);
        $i = 0;
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $i++;
                ?>
                <div class="carousel-item <?php if ($i == 1) {
                    echo 'active';
                    } ?>">
                    <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                <?php the_title(); ?>
                            </h5>
                            <?php
                            if (class_exists('ACF')) {
                                $slider_subtitle = get_field('sub_title');
                                $slider_btn_1_text = get_field('button_1');
                                $slider_btn_1_url = get_field('button_1_url');
                                $slider_btn_2_text = get_field('button_2');
                                $slider_btn_2_url = get_field('button_2_url');
                                ?>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                                    <?php echo $slider_subtitle; ?>
                                </h1>
                                <a href="<?php echo $slider_btn_1_url; ?>"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                    <?php echo $slider_btn_1_text; ?>
                                </a>
                                <a href="<?php echo $slider_btn_2_url; ?>"
                                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">
                                    <?php echo $slider_btn_2_text; ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                }
            wp_reset_postdata();
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo esc_html__('Previous', ' startup'); ?></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo esc_html__('Next', ' startup'); ?></span>
    </button>
</div>
</div>
<?php
if (class_exists('ACF')) {
    ?>
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <?php
                    $counters = get_field('counter', 'options');
                    $i = 0;
                    if($counters){
                    foreach($counters as $counter) {
                    $i++;    
                ?>
                <div class="col-lg-4 wow <?php echo $counter['counter_animation'];?>" data-wow-delay="<?php echo $counter['animation_duration'];?>">
                    <div class="<?php if(($i%2) == 0 ){ echo 'bg-light'; }else{ echo 'bg-primary';} ?> shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="<?php if(($i%2) == 0 ){ echo 'bg-primary'; }else{ echo 'bg-white';} ?> d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="<?php echo $counter['counter_icons']; if(($i%2) == 0 ){ echo ' text-white'; }?>"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="<?php if(($i%2) == 0 ){ echo 'text-primary'; }else{ echo 'text-white';} ?> mb-0"><?php echo $counter['counter_text'];?></h5>
                            <h1 class="<?php if(!($i%2) == 0 ){ echo 'text-white'; }?> mb-0" data-toggle="counter-up"><?php echo $counter['count_number'];?></h1>
                        </div>
                    </div>
                </div>
                <?php }} ?>

            </div>
        </div>
    </div>
    <!-- Facts Start -->
<?php } ?>

<?php get_template_part('template-parts/content', 'about'); ?>

<?php get_template_part('template-parts/content', 'features'); ?>

<?php get_template_part('template-parts/content', 'service'); ?>

<?php get_template_part('template-parts/content', 'price'); ?>

<?php get_template_part('template-parts/content', 'quote'); ?>

<?php get_template_part('template-parts/content', 'testimonial'); ?>

<?php get_template_part('template-parts/content', 'team'); ?>

<?php get_template_part('template-parts/content', 'blog'); ?>

<?php get_footer(); ?>