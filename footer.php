<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?> 
        <footer>
            <div class="footer-section">
                <div class="container">
                    <div class="row border-dotss pb-4">
                        <div class="col-md-6">
                            <div class="footer-logo">
                            <a href="<?php echo site_url(); ?>">
                            <img src="<?php $image = get_field('logo', 'option'); echo $image['url']; ?>"
                                alt="<?php $image = get_field('logo', 'option'); 
                                echo $image['alt']; ?>">
                            </a>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="f-social-media">
                                <h4>follow Us On -</h4>

                                <ul>
                                <?php if (have_rows('social_links', 'option')) : while (have_rows('social_links', 'option')) : the_row(); ?>
                                    <li><a href="<?php the_sub_field('social_url');?>"><i class="<?php the_sub_field('social_icon');?>"></i></a></li>					
                                    <?php endwhile;
                                    endif; ?> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="footer-heading">About Us</h4>
                            <div class="footer-about">
                                <p> <?php the_field('footer_about_us', 'option'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h4 class="footer-heading">Contact Info</h4>
                            <div class="contact-info">
                                <ul>
                                    <li><i class="ri-map-pin-line"></i> <a href="<?php the_field('address_url', 'option'); ?>"><span>Address :</span> <?php the_field('address', 'option'); ?></a></li>
                                    <li><i class="ri-phone-line"></i> <a href="tel:<?php the_field('phone_number', 'option'); ?>"><span>Phone No. :</span> <?php the_field('phone_number', 'option'); ?></a></li>
                                    <li><i class="ri-whatsapp-line"></i> <a href="tel:<?php the_field('whatsapp', 'option'); ?>"><span>Whats App</span> <?php the_field('whatsapp', 'option'); ?></a></li>
                                    <li><i class="ri-mail-line"></i> <a href="mailto:<?php the_field('email', 'option'); ?>"><span>Email :</span> <?php the_field('email', 'option'); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8">
                            <h4 class="footer-heading">Explore</h4>
                            <div class="quick-links">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'menu'              => 'Quick Link',
                                        'theme_location'    => '',
                                        'depth'             => 3,
                                        'container'         => '',
                                        'container_class'   => '',
                                        'container_id'      => '',
                                        'menu_class'        => ''
                                    )
                                );
                            ?>  
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <h4 class="footer-heading">Other Pages</h4>
                            <div class="quick-links otherpage">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'menu'              => 'Other Page',
                                            'theme_location'    => '',
                                            'depth'             => 3,
                                            'container'         => '',
                                            'container_class'   => '',
                                            'container_id'      => '',
                                            'menu_class'        => ''
                                        )
                                    );
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">Copyright © 2023 <a href="/">La Derma</a> All Rights Reserved Design & Developed by <a href="#">Kadam Technologies pvt.</a></div>
            </div>
        </footer>
    </div>  
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery-min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.fancybox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/mmenu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/main.js"></script>
	<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/library/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

</body>

</html>
