<?php 
if (class_exists('ACF')) {
    $pricing_plan_title = get_field('pricing_plan_title', 'options');
    $pricing_plan_subtitle = get_field('pricing_plan_subtitle', 'options');
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase"><?php echo $pricing_plan_title; ?></h5>
            <h1 class="mb-0"><?php echo $pricing_plan_subtitle; ?></h1>
        </div>
        <div class="row g-0">
            <?php
            $args = array(
                'post_type' => 'startup_prices',
                'order'     => 'ASC'

            );
            $query = new WP_Query($args);
            $i = 0;
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $i++;

                    $price_tagline = get_field('price_tagline');
                    $currency = get_field('currency');
                    $amount = get_field('amount');
                    $date_line = get_field('date_line');
                    $feature_items = get_field('feature_items');
                    $price_button_text = get_field('price_button_text');
                    $price_button_url = get_field('price_button_url');
                    ?>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="<?php if(($i % 2) == 0){echo 'bg-white rounded shadow position-relative';}else{echo 'bg-light';}?> rounded">
                            <div class="border-bottom py-4 px-5 mb-4">
                                <h4 class="text-primary mb-1"><?php the_title(); ?></h4>
                                <small class="text-uppercase"><?php echo $price_tagline; ?></small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="display-5 mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $currency; ?></small><?php echo $amount; ?><small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ <?php echo $date_line; ?></small>
                                </h1>
                                <?php 
                                  foreach ($feature_items as $feature_item) :
                                ?>
                                 <div class="d-flex justify-content-between mb-3"><span><?php echo $feature_item['feature_title']; ?></span><i
                                        class="<?php if($feature_item['feature_active']['value']=='show'){echo 'fa fa-check text-primary'; }else{echo 'fa fa-times text-danger';}?>  pt-1"></i></div>
                                <?php endforeach; ?>
                               
                                <a href="<?php echo $price_button_url; ?>" class="btn btn-primary py-2 px-4 mt-4"><?php echo $price_button_text; ?></a>
                            </div>
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