<?php
$args = array(
    'post_type'=>'testimonial',
    'order'=>'ASC'
);
$testimonials = new Wp_Query($args);
if($testimonials->have_posts()):
    ?>
    <section class="testimonial-wrapper section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 pe-xl-5 col-lg-6 mt-5 mt-lg-0 order-2 order-lg-1">
                    <div class="testimonial-carousel-list owl-carousel me-xl-5">
                        <?php
                        while ( $testimonials->have_posts() ) : $testimonials->the_post();
                            $person_name = get_field('name',get_the_ID());
                            $comment = get_field('comment',get_the_ID());
                            $designation = get_field('designation',get_the_ID());
                            ?>
                            <div class="single-testimonial-carousel">
                                <div class="icon">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" height="100">
                                </div>
                                <p><?php echo $comment; ?></p>
                                <span><b><?php echo $person_name; ?></b> <?php echo $designation; ?></span>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2">
                    <div class="testimonial-img-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

endif;
?>