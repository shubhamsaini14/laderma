<?php
/* Template Name: Treatment */

get_header(); ?>
<section class="banner-section treatment-banner" style="background: url(<?php the_field('banner_image');?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="banner-content">
                    <h6><?php the_field('banner_sub_heading'); ?></h6>
                    <h1><?php the_field('banner_heading'); ?></h1>
                    <?php the_field('banner_content'); ?>
                    <div class="btn-group">
                        <a class="btn-page theme-btn" href="">Book Appointment</a>
                        <a class="btn-page" href="<?php the_field('banner_content_link'); ?>">Content Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-grid about-grid" style="background: url('<?php the_field('about_overview_background'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="content-body">
                    <h6> <?php the_field('about_sub_heading'); ?></h6>
                    <h3> <?php the_field('about_heading'); ?></h3>
                    <?php the_field('about_content'); ?>
                </div>
            </div>
            <div class="col-md-5 ms-auto">
                <div class="grid-image">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="image-first">
                                <img src=" <?php the_field('about_image'); ?>"
                                    alt=" <?php the_field('procedures_sub_heading'); ?>" />
                                <div class="experience-card">
                                    <i class="ri-calendar-line"></i>
                                    <h6> <?php the_field('total_experience'); ?>+</h6>
                                    <p>Year of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                              <div class="image-sec">
                                <img src=" <?php the_field('about_image_1'); ?>"
                                    alt=" <?php the_field('procedures_sub_heading'); ?>" />
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appointment-section" style="background: url('<?php echo get_template_directory_uri(); ?>/library/images/appointment-background.jpg');">
    <div class="banner-appointment">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h4>Make an Appointment !</h4>
                    </div>
                </div>
            </div>
            <div class="outer-box">
                <form action="">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <label class="form-label">Name - </label>
                                <input type="Name" class="form-control" placeholder="Your Name">
                                <span class="input-group-text" id="basic-addon1"><i class="ri-user-3-line"></i></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label class="form-label">Email - </label>
                                <input type="Name" class="form-control" placeholder="Your Email">
                                <span class="input-group-text" id="basic-addon1"><i class="ri-mail-line"></i></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label class="form-label">Phone - </label>
                                <input type="Name" class="form-control" placeholder="+91 12345 54321">
                                <span class="input-group-text" id="basic-addon1"><i class="ri-phone-line"></i></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn-page theme-btn">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="content-section" id="has-ug" style="background: url(<?php echo get_template_directory_uri(); ?>/library/images/section-banner.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="scroll-item">
                    <nav class="tab-nav">
                        <?php $t = 1;
                        if (have_rows('tab_content')): while (have_rows('tab_content')):the_row();
                                if ($t == 1) {
                                    $active = "active";
                                } else {
                                    $active = "";

                                }
                                ?>
                                <a class="tab-link <?php echo $active; ?>" href="#list-item-<?php echo $t; ?>">
                                    <?php the_sub_field('title') ?>
                                </a>
                                <?php $t++;
                            endwhile;
                        endif; ?>
                    </nav>
                </div>
            </div>
            <div class="col-md-8">
                <div class="rightside-content">
                    <?php $t = 1; if (have_rows('tab_content')): while (have_rows('tab_content')): the_row(); ?>
                        <div id="list-item-<?php echo $t; ?>" class="tab-content">
                            <h3><?php the_sub_field('heading') ?></h3>
                            <?php the_sub_field('content') ?>
                        </div>
                            <?php $t++;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-grid video-tutorial" style="background: url('<?php the_field('explained_background'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="content-body">
                    <h6>
                        <?php the_field('explained_sub_heading'); ?>
                    </h6>
                    <h3>
                        <?php the_field('explained_heading'); ?>
                    </h3>
                    <p>
                        <?php the_field('explained_content'); ?>
                    </p>
                    <a href="<?php the_field('explained_link'); ?>" class="btn-page theme-btn mt-4 ">View More
                        Videos</a>
                </div>
            </div>
            <div class="col-md-4 ms-auto">
                <div class="video-box">
                    <img src="<?php the_field('explained_video'); ?>">
                    <a data-fancybox="gallery" href="<?php the_field('explained_video'); ?>">
                        <span> <i class="ri-play-mini-fill"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="extraordinary-section" id="prevention">
    <div class="container">
        <div class="entraordinary-outer" style="background: url('<?php the_field('why_choose_image'); ?>');">
            <div class="row">
                <div class="col-md-7 ms-auto">
                    <div class="inner-content">
                        <h6>
                            <?php the_field('whychoose_sub_heading'); ?>
                        </h6>
                        <h3>
                            <?php the_field('whychoose_heading'); ?>
                        </h3>
                        <p>
                            <?php the_field('whychoose_content'); ?>
                        </p>
                        <ul class="list-item">
                            <?php if (have_rows('whychoose')):
                                while (have_rows('whychoose')):
                                    the_row(); ?>
                                    <li>
                                        <span class="icon">
                                            <img src=" <?php the_sub_field('icon'); ?>"
                                                alt=" <?php the_sub_field('heading'); ?>" />
                                        </span>
                                        <span class="item-content">
                                            <h4>
                                                <?php the_sub_field('heading'); ?>
                                            </h4>
                                            <p>
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </span>
                                    </li>
                                <?php endwhile;
                            endif; ?>
                        </ul>
                    </div>
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
<section class="appointment-area" id="appointment-area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5">
                <div class="work-shedule">
                    <h6>
                        <?php the_field('appointment_sub_heading', 'option') ?>
                    </h6>
                    <h3>
                        <?php the_field('appointment_heading', 'option') ?>
                    </h3>
                    <p>
                        <?php the_field('appointment_content', 'option') ?>
                    </p>
                    <div class="time-date">
                        <ul>
                            <?php if (have_rows('appointment_timing', 'option')):
                                while (have_rows('appointment_timing', 'option')):
                                    the_row(); ?>
                                    <li><span>
                                            <?php the_sub_field('days') ?>
                                        </span> <span class="time">
                                            <?php the_sub_field('timing') ?>
                                        </span></li>
                                <?php endwhile;
                            endif; ?>
                        </ul>
                    </div>
                    <p>
                        <?php the_field('appointment_heading_2', 'option') ?>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-appointment">
                    <div class="form-heading">
                        <h4>Make An Appointment</h4>
                        <p>Contact us for any Rheumatologist Help</p>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label>Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-user-line"></i></span>
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label>Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                    <input type="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label>Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-phone-line"></i></span>
                                    <input type="text" class="form-control" placeholder="+91 12345 54321" />
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn-page" value="Confirm Appointment" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-60" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="section-title">
                    <h3 class="title ">
                        <?php the_field('faq_heading') ?>
                    </h3>
                    <p>
                        <?php the_field('faq_content') ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-10 m-auto">
                <div class="accordion-faq">
                    <div class="accordion" id="accordionExample-1">
                        <?php $a = 1;
                        if (have_rows('faq')):
                            while (have_rows('faq')):
                                the_row();
                                if ($a == 1) {
                                    $show = "show";
                                    $collapsed = "";
                                } else {
                                    $show = "";
                                    $collapsed = "collapsed";
                                }
                                ?>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button <?php echo $collapsed; ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $a; ?>">
                                            <?php the_sub_field('question') ?>
                                        </button>
                                    </h2>
                                    <div id="collapse-<?php echo $a; ?>"
                                        class="accordion-collapse  collapse  <?php echo $show; ?> "
                                        data-bs-parent="#accordionExample-1">
                                        <div class="accordion-body">
                                            <?php the_sub_field('answer') ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $a++;
                            endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>