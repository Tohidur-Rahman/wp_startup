<?php 
if (class_exists('ACF')) {
    $feature_title = get_field('feature_title', 'options');
    $feature_subtitle = get_field('feature_subtitle', 'options');
    $feature_items = get_field('feature_items', 'options');
    $feature_items_col = get_field('feature_items_column', 'options');
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase"><?php echo $feature_title ; ?></h5>
            <h1 class="mb-0"><?php echo $feature_subtitle ; ?></h1>
        </div>
        <div class="row g-5">
        <?php if($feature_items){
                          foreach ($feature_items as $feature_item) :
                        ?>
                        <div class="col-lg-<?php echo $feature_items_col ; ?>">
                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="<?php echo $feature_item['feature_items_icon'] ; ?> text-white"></i>
                    </div>
                    <h4><?php echo $feature_item['feature_items_title'] ; ?></h4>
                    <p class="mb-0"><?php echo $feature_item['feature_items_description'] ; ?></p>
                </div>
            </div>
                        <?php endforeach; 
                    } ?>
            
        </div>
    </div>
</div>
<?php }?>