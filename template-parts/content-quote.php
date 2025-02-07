<?php 
if (class_exists('ACF')) {
    $quote_title = get_field('quote_title', 'options');
    $quote_subtitle = get_field('quote_subtitle', 'options');
    $quote_features = get_field('quote_feature', 'options');
    $quote_description = get_field('quote_description', 'options');
    $quote_info_icon = get_field('quote_info_icon', 'options');
    $quote_info_title = get_field('quote_info_title', 'options');
    $quote_info_subtitle = get_field('quote_info_subtitle', 'options');
    $quote_form = get_field('quote_form', 'options');
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $quote_title; ?></h5>
                    <h1 class="mb-0"><?php echo $quote_subtitle; ?></h1>
                </div>
                <div class="row gx-3">
                    <?php 
                      foreach ($quote_features as $qt_feature) :
                    ?>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="<?php echo $qt_feature['quote_feature_icon'];?> text-primary me-3"></i><?php echo $qt_feature['quote_feature_text'];?></h5>
                    </div>
                    <?php endforeach; ?>
                </div>
                <p class="mb-4"><?php echo $quote_description; ?></p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="<?php echo $quote_info_icon; ?> text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2"><?php echo $quote_info_title; ?></h5>
                        <h4 class="text-primary mb-0"><?php echo $quote_info_subtitle; ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                <?php echo do_shortcode($quote_form); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>