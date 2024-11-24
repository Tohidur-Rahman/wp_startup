<?php 
/*
Template Name: Template Contact
*/    

get_header();

?>
<?php get_template_part( 'template-parts/content', 'breadcumb' ); ?>

<?php 
if (class_exists('ACF')) {
    $contact_title = get_field('contact_title', 'options');
    $contact_subtitle = get_field('contact_subtitle', 'options');
    $contact_infos = get_field('contact_info', 'options');
    $contact_form = get_field('contact_form', 'options');
    $contact_map = get_field('contact_map', 'options');
?>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $contact_title; ?></h5>
                <h1 class="mb-0"><?php echo $contact_subtitle; ?></h1>
            </div>
            <div class="row g-5 mb-5">
                <?php if($contact_infos){
                          foreach ($contact_infos as $contact_info) :
                        ?>
                        <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="<?php echo $contact_info['contact_info_icon']; ?> text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo $contact_info['contact_info_title']; ?></h5>
                            <h4 class="text-primary mb-0"><?php echo $contact_info['contact_info_subtitle']; ?></h4>
                        </div>
                    </div>
                </div>
                        <?php endforeach; 
                    } ?>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <?php echo do_shortcode($contact_form); ?>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="<?php echo $contact_map; ?>"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

<?php get_footer(); ?>