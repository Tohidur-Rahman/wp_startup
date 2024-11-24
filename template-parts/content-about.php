<?php 
if (class_exists('ACF')) {
    $about_image = get_field('about_image', 'options');
    $about_title = get_field('about_title', 'options');
    $about_subtitle = get_field('about_subtitle', 'options');
    $about_des = get_field('about_description', 'options');
    $about_features = get_field('about_feature', 'options');
    $about_info_icon = get_field('about_info_icon', 'options');
    $about_info_title = get_field('about_info_title', 'options');
    $about_info_subtitle = get_field('about_info_subtitle', 'options');
    $about_btn_text = get_field('about_button_text', 'options');
    $about_btn_url = get_field('about_button_url', 'options');
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $about_title ; ?></h5>
                    <h1 class="mb-0"><?php echo $about_subtitle; ?></h1>
                </div>
                <p class="mb-4"><?php echo $about_des; ?></p>
                <div class="row g-0 mb-3">
                    <?php if($about_features){
                          foreach ($about_features as $about_feature) :
                        ?>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="<?php echo $about_feature['about_feature_icon']; ?> text-primary me-3"></i><?php echo $about_feature['about_feature_text']; ?></h5>
                    </div>
                        <?php endforeach; 
                    } ?>                 
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="<?php echo $about_info_icon ; ?> text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2"><?php echo $about_info_title ; ?></h5>
                        <h4 class="text-primary mb-0"><?php echo $about_info_subtitle ; ?></h4>
                    </div>
                </div>
                <a href="<?php echo $about_btn_url ; ?>" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s"><?php echo $about_btn_text ; ?></a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="<?php echo $about_image['url'] ; ?>"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>