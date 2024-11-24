<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'breadcumb' ); ?>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <?php
                        while(have_posts()) {
                            the_post();
                        ?>
                        <?php the_content();?>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>