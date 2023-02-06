<?php
/*$menu_name = 'top-menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );*/
$email= "info@example.com";
$address= "USA";
$phone= "+1 9867345345";
?>
<footer class="footer-2 footer-wrap">
    <div class="footer-widgets-wrapper text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 pe-xl-0 col-sm-6 col-12">
                    <div class="single-footer-wid site_info_widget">
                        <div class="wid-title">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="contact-us">
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a> </p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p><a href="mailto:<?php echo $email ?>" target="_blank"><?php echo $email ?></a> </p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <p><?php echo $address ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 offset-xl-1 col-xl-3 ps-xl-5 col-12">
                    <div class="single-footer-wid">
                        <div class="wid-title">
                            <h3>Quick Links</h3>
                        </div>
                        <?php
                        /*
                         * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                         * */
                        wp_nav_menu(array(
                            'theme_location'=>'quick-links',
                            'menu_class'=>''
                        ))
                        ?>
                    </div>
                </div> <!-- /.col-lg-3 - single-footer-wid -->

                <div class="col-sm-6 col-xl-4 offset-xl-1 col-12">
                    <div class="single-footer-wid newsletter_widget">
                        <div class="wid-title">
                            <h3>Resources</h3>
                        </div>
                        <?php
                        /*
                         * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                         * */
                        wp_nav_menu(array(
                            'theme_location'=>'resources',
                            'menu_class'=>''
                        ))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <div class="copyright-info">
                        <p>&copy; <?php echo date('Y') ?> Copyright By <a href="<?php echo bloginfo('url') ?>"><?php
                                bloginfo( 'name' );
                                ?></a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="footer-menu mt-3 mt-md-0 text-center text-md-end">
                        <a href="https://coxalert.com" target="_blank">Cox Enterprises</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>