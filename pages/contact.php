<?php
/* Template Name: Contact  Us  */

get_header(); ?>
<section class="banner-section" style="background: url( <?php the_field('banner_image'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="banner-content">
                    <h6>
                        <?php the_field('banner_sub_heading'); ?>
                    </h6>
                    <h1>
                        <?php the_field('banner_heading'); ?>
                    </h1>
                    <?php the_field('banner_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-80 content-grid" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/section-banner.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="grid-image">
                    <img src=" <?php the_field('procedures_image'); ?>"
                        alt=" <?php the_field('procedures_sub_heading'); ?>" />
                </div>
            </div>
            <div class="col-md-7 ps-lg-5 align-self-center">
                <div class="content-body">
                    <h6>
                        <?php the_field('procedures_sub_heading'); ?>
                    </h6>
                    <h3>
                        <?php the_field('procedures_heading'); ?>
                    </h3>
                    <p>
                        <?php the_field('procedures_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="branch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card-branch">
                    <h4>Salt Lake · Kolkata</h4>
                    <ul>
                        <li><i class="ri-phone-line"></i> <a href="#">(+91) 12345 00000</a></li>
                        <li><i class="ri-whatsapp-line"></i> <a href="#">(+91) 12345 00000</a></li>
                        <li><i class="ri-mail-line"></i><a href="#">admin@youremail.com</a></li>
                    </ul>
                    <a href="#" class="btn-page">Get Directions <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-md-6 px-md-4">
                <div class="branch-slider owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/slider-1.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-branch">
                    <h4>Salt Lake · Kolkata</h4>
                    <ul>
                        <li><i class="ri-phone-line"></i> <a href="#">(+91) 12345 00000</a></li>
                        <li><i class="ri-whatsapp-line"></i> <a href="#">(+91) 12345 00000</a></li>
                        <li><i class="ri-mail-line"></i><a href="#">admin@youremail.com</a></li>
                    </ul>
                    <a href="#" class="btn-page">Get Directions <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="inner-box">
                    <div class="heading">
                        <h3>How can we help you?</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type
                            and scrambled.</p>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="ri-user-3-line"></i></span>
                                    <input type="text" class="form-control" placeholder="Name*">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                    <input type="email" class="form-control" placeholder="Email Address*">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="tel" class="form-control" placeholder="Phone*">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-send-plane-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Subject*">
                                </div>
                            </div>
                            <div class="col-12 mb-3 ">
                                <div class="input-group align-items-start">
                                    <span class="input-group-text"><i class="ri-chat-4-line"></i></span>
                                    <textarea class="form-control" rows="6" placeholder="Comments*"></textarea>
                                </div>
                            </div>
                            <button class="btn-page theme-btn" type="submit">Submit <i class="ri-arrow-right-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">
                    <h6 class="sub-title">
                        <?php the_field('testimonial_sub_heading', 'option') ?>
                    </h6>
                    <h3 class="title">
                        <?php the_field('testimonial_heading', 'option') ?>
                    </h3>
                    <p>
                        <?php the_field('testimonial_content', 'option') ?>
                    </p>
                    <div class="review-button">
                        <a href="<?php the_field('google_rating', 'option'); ?>" class="countGoogle" target="_blank">
                            <img alt="google" src="<?php the_field('google_rating_icon', 'option'); ?>" />
                            <h4>186 Reviews</h4>
                        </a>
                        <a href="<?php the_field('google_review', 'option'); ?>" class="googleViewbtn" target="_blank">
                            <img alt="google" src="<?php the_field('google_icon', 'option'); ?>" /> View All Review </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <?php if (have_rows('testimonial_card', 'option')):
                        while (have_rows('testimonial_card', 'option')):
                            the_row(); ?>
                            <div class="testimonial-items">
                                <h4>
                                    <?php the_sub_field('user_name'); ?>
                                </h4>
                                <p class="more">
                                    <?php the_sub_field('description'); ?>
                                </p>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>