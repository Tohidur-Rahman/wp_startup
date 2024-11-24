<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                <?php
                    if(class_exists('ACF')) {
                        $header_infos = get_field('header_info', 'options');
                        if($header_infos){
                        foreach($header_infos as $info) {
                    ?>
                        <small class="me-3 text-light"><i class="<?php echo $info['header_info_icons'];?> me-2"></i><?php echo $info['header_info_text'];?></small>
                    <?php
                        }
                        }
                    }
                ?>
                    
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                <?php
                    if(class_exists('ACF')) {
                        $header_socials = get_field('header_social', 'options');
                        if($header_socials){
                    foreach($header_socials as $social) {
                    ?>
                       <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php echo $social['header_social_icon_url'];?>"><i class="<?php echo $social['header_social_icon'];?>"></i></a>
                    <?php
                        }
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <?php
                  $logo = get_field('header_logo', 'option');
                  if($logo):
                ?>
                <img src="<?php echo $logo['url']; ?>" >
                <?php 
                  
                else:
                ?>
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                <?php endif;?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'startup-menu',
                            
                        ));             
                    ?>
                                       
                </div>
            </div>
        </nav>


    <!-- Navbar & Carousel End -->