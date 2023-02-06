<?php
    get_header();
?>

<?php query_posts( array(
    'posts_per_page' => 3,
)); ?>

    <main>
        <?php
        if(have_posts()):
            ?>
            <section class="news-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <div class="block-contents">
                                <div class="section-title">
                                    <h5>blog</h5>
                                    <span>Our Blog Post</span>
                                    <h2>Latest Blog</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                            <?php  get_template_part('template-parts/content','article'); ?>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </section>
        <?php
        endif;
        ?>
        <?php echo the_content(); ?>

    </main>



<?php
    get_footer();
?>