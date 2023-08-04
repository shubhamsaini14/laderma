<?php
/* Template Name: Home  */

get_header(); ?>
<section class="slider-section">
    <div class="owl-carousel owl-theme slider">
        <?php if (have_rows('slider')) : while (have_rows('slider')) : the_row(); ?>
        <div class="item" style="background: url('<?php the_sub_field('banner_image'); ?>');">
            <div class="home-banner-outer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <?php the_sub_field('content'); ?>
                                <a href="#" class="btn-page theme-btn mt-4">Book an Appointment !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
                endif; ?>
    </div>
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
<section class="py-80 content-grid about-section"
    style="background: url('<?php echo get_template_directory_uri(); ?>/library/images/section-banner.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pe-md-5">
                <div class="content-body">
                    <h6><?php the_field('about_sub_heading'); ?></h6>
                    <h3><?php the_field('about_heading'); ?></h3>
                    <?php the_field('about_content'); ?>
                    <ul class="expert-item">
                        <?php if (have_rows('about_list')) : while (have_rows('about_list')) : the_row(); ?>
                        <li>
                            <div class="icon">
                                <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('heading'); ?>" />
                            </div>
                            <div class="item-content">
                                <h4><?php the_sub_field('heading'); ?></h4>
                                <p><?php the_sub_field('small_text'); ?></p>
                            </div>
                        </li>
                        <?php endwhile;
                        endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-image about-image">
                    <img src="<?php $image = get_field('about_image'); echo $image['url']; ?>" alt="<?php $image = get_field('about_image'); 
                                  echo $image['alt']; ?>" />
                    <div class="experience-box">
                        <span><i class="ri-calendar-line"></i><?php the_field('total_experience'); ?>+</span>
                        <span>
                            years of <br />
                            experience
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr />
<section class="conditions-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="section-title">
                    <h6 class="sub-title"><?php the_field('conditions_sub_heading'); ?></h6>
                    <h3 class="title"><?php the_field('conditions_heading'); ?></h3>
                    <p><?php the_field('conditions_content'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('conditions_card')) : while (have_rows('conditions_card')) : the_row(); ?>
            <div class="col-md-3 mb-4">
                <div class="conditions-bax">
                    <div class="conditions-image"><img src="<?php the_sub_field('image'); ?>"
                            alt="<?php the_sub_field('heading'); ?>" /></div>
                    <h4><?php the_sub_field('heading'); ?></h4>
                    <p><?php the_sub_field('content'); ?></p>
                </div>
            </div>
            <?php endwhile;
                        endif; ?>
        </div>
    </div>
</section>
<section class="getintouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul>
                    <li>
                        <i class="ri-phone-line"></i>
                        <span>
                            <p>Call anytime</p>
                            <a
                                href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
                        </span>
                    </li>
                    <li>
                        <i class="ri-mail-line"></i>
                        <span>
                            <p>Write email</p>
                            <a
                                href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="rightside-content">
                    <h5>Book your Appointment Now</h5>
                    <hr>
                    <button class="btn-page">Book Appointment</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="treatment-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="section-title">
                    <h6 class="sub-title"><?php the_field('treatment_sub_heading'); ?></h6>
                    <h3 class="title"><?php the_field('treatment_heading'); ?></h3>
                    <p><?php the_field('treatment_content'); ?></p>
                </div>
            </div>
        </div>
        <div class="row d-md-block d-none">
            <div class="col-md-12">
                <div class="treatment-item">
                    <ul>
                        <?php if (have_rows('treatment_card')) : while (have_rows('treatment_card')) : the_row(); ?>
                        <li class="card-item">
                            <div class="image">
                                <img src="<?php the_sub_field('image'); ?>" alt=" <?php the_sub_field('heading'); ?>">
                            </div>
                            <div class="content">
                                <h6> <?php the_sub_field('heading'); ?></h6>
                                <div class="content-hide">
                                    <p> <?php the_sub_field('content'); ?></p>
                                    <a href=" <?php the_sub_field('link'); ?>" class="btn-page">Read More <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </li>
                        <?php endwhile;
                                        endif; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row d-md-none d-block">
            <div class="treatment-slider  owl-carousel owl-theme treatment-item">
                <?php if (have_rows('treatment_card')) : while (have_rows('treatment_card')) : the_row(); ?>
                <div class="card-item">
                    <div class="image">
                        <img src="<?php the_sub_field('image'); ?>" alt=" <?php the_sub_field('heading'); ?>">
                    </div>
                    <div class="content">
                        <h6> <?php the_sub_field('heading'); ?></h6>
                        <div class="content-hide">
                            <p> <?php the_sub_field('content'); ?></p>
                            <a href=" <?php the_sub_field('link'); ?>" class="btn-page">Read More <i
                                    class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                            endif; ?>
            </div>
        </div>
    </div>
</section>

<hr />
<section class="doctor-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pe-md-5">
                <div class="doctor-information">
                    <h6> <?php the_field('doctor_sub_heading'); ?></h6>
                    <h3> <?php the_field('doctor_name'); ?></h3>
                    <h4> <?php the_field('doctor_heading'); ?></h4>
                    <?php the_field('doctor_content'); ?>
                    <div class="row mt-4">
                        <?php if (have_rows('doctor_list')) : while (have_rows('doctor_list')) : the_row(); ?>
                        <div class="col-md-6 mb-3">
                            <div class="list-card">
                                <div class="icon">
                                    <img src="<?php the_sub_field('icon'); ?>"
                                        alt=" <?php the_sub_field('heading'); ?>" />
                                </div>
                                <div class="content">
                                    <h5> <?php the_sub_field('heading'); ?></h5>
                                    <p> <?php the_sub_field('content'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <a class="btn-page mt-3" href="#">Book an Appointment</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="doctor-image">
                    <img src="<?php the_field('doctor_image'); ?>" alt=" <?php the_field('doctor_name'); ?>" />
                    <div class="experience-card">
                        <i class="ri-calendar-line"></i>
                        <h6> <?php the_field('doctor_experience'); ?>+</h6>
                        <p>Year of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr />
<section class="doctor-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="doctor-image">
                    <img src="<?php the_field('doctor_2_image'); ?>" alt="<?php the_field('ddoctor_2_name'); ?>" />
                    <div class="experience-card custm-card">
                        <i class="ri-calendar-line"></i>
                        <h6><?php the_field('doctor_2_experience'); ?>+</h6>
                        <p>Year of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 ps-md-5">
                <div class="doctor-information">
                    <h6><?php the_field('doctor_2_sub_heading'); ?></h6>
                    <h3><?php the_field('doctor_2_name'); ?></h3>
                    <h4><?php the_field('doctor_2_heading'); ?>)</h4>
                    <?php the_field('doctor_2_content'); ?>
                    <div class="row mt-4">
                        <?php if (have_rows('doctor_2_list')) : while (have_rows('doctor_2_list')) : the_row(); ?>
                        <div class="col-md-6 mb-3">
                            <div class="list-card">
                                <div class="icon">
                                    <img src="<?php the_sub_field('icon'); ?>"
                                        alt=" <?php the_sub_field('heading'); ?>" />
                                </div>
                                <div class="content">
                                    <h5> <?php the_sub_field('heading'); ?></h5>
                                    <p> <?php the_sub_field('content'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
                <a class="btn-page mt-3" href="#">Book an Appointment</a>
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
<section class="py-80 content-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-body">
                    <h6> <?php the_field('procedures_sub_heading'); ?></h6>
                    <h3> <?php the_field('procedures_heading'); ?></h3>
                    <?php the_field('procedures_content'); ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="grid-image">
                    <img src=" <?php the_field('procedures_image'); ?>"
                        alt=" <?php the_field('procedures_sub_heading'); ?>" />
                </div>
            </div>
        </div>
    </div>
</section>
<hr />
<section class="imageGallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h6 class="sub-title"><?php the_field('gallery_sub_heading') ?></h6>
                    <h3 class="title"><?php the_field('gallery_heading') ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-slider owl-carousel owl-theme">
                    <?php
                    $args = array('posts_per_page' => 8, 'post_type' => 'gallery');
                     $customPostQuery = new WP_Query($args); if ($customPostQuery->have_posts()) : while ($customPostQuery->have_posts()) : $customPostQuery->the_post() ?>
                        <div class="galleryCard">                       
                            <figure style="background:url(<?php the_field('after_image') ?>);">
                                <div class="handleimage"></div>
                                <div  class="handledivisor" style="background:url(<?php the_field('before_image') ?>);"></div>
                            </figure>   
                            <input type="range" min="0" max="100" value="50" class="handleslider"  oninput="moveDivisor(this)">      
                        </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appointment-area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5">
                <div class="work-shedule">
                    <h6><?php the_field('appointment_sub_heading', 'option') ?></h6>
                    <h3><?php the_field('appointment_heading', 'option') ?></h3>
                    <p><?php the_field('appointment_content', 'option') ?></p>
                    <div class="time-date">
                        <ul>
                            <?php if (have_rows('appointment_timing', 'option')) : while (have_rows('appointment_timing', 'option')) : the_row(); ?>
                            <li><span><?php the_sub_field('days') ?></span> <span
                                    class="time"><?php the_sub_field('timing') ?></span></li>
                            <?php endwhile;
                                        endif; ?>
                        </ul>
                    </div>
                    <p><?php the_field('appointment_heading_2', 'option') ?></p>
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
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">
                    <h6 class="sub-title"><?php the_field('testimonial_sub_heading', 'option') ?></h6>
                    <h3 class="title"><?php the_field('testimonial_heading', 'option') ?></h3>
                    <p><?php the_field('testimonial_content', 'option') ?></p>
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
                    <?php if (have_rows('testimonial_card', 'option')) : while (have_rows('testimonial_card', 'option')) : the_row(); ?>
                    <div class="testimonial-items">
                        <h4><?php the_sub_field('user_name');?></h4>
                        <p class="more"><?php the_sub_field('description');?></p>
                    </div>
                    <?php endwhile;
                                        endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="extraordinary-section">
    <div class="container">
        <div class="entraordinary-outer">
            <div class="row">
                <div class="col-md-7 ms-auto">
                    <div class="inner-content">
                        <h6> <?php the_field('why_choose_sub_heading'); ?></h6>
                        <h3> <?php the_field('why_choose_heading'); ?></h3>
                        <p> <?php the_field('why_choose_content'); ?></p>
                        <ul class="list-item">
                            <?php if (have_rows('why_choose')) : while (have_rows('why_choose')) : the_row(); ?>
                            <li>
                                <span class="icon">
                                    <img src=" <?php the_sub_field('icon'); ?>"
                                        alt=" <?php the_sub_field('heading'); ?>" />
                                </span>
                                <span class="item-content">
                                    <h4> <?php the_sub_field('heading'); ?></h4>
                                    <p> <?php the_sub_field('content'); ?></p>
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
<section class="article-blogs">
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="section-title">
                    <h6 class="sub-title"><?php the_field('blogs_sub_heading') ?></h6>
                    <h3 class="title"><?php the_field('blogs_heading') ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-slider owl-carousel owl-theme">
                    <?php
                        $args = array(
                        'posts_per_page' => 8,
                        'post_type' => 'post'
                        );
                     $customPostQuery = new WP_Query($args); if ($customPostQuery->have_posts()) : while ($customPostQuery->have_posts()) : $customPostQuery->the_post() ?>
                    <div class="item">
                        <div class="blogs-card"
                            style="background-image: url('<?php the_post_thumbnail_url('blog-thumb'); ?>');">
                            <div class="body-content">
                                <a href="<?php the_permalink(); ?>"></a>
                                <div class="tips-tricks">
                                    <h6>Tips &amp; Tricks</h6>
                                </div>
                                <div class="ft-content">
                                    <h4><?php the_title(); ?></h4>
                                    <ul>
                                        <li><i class="ri-user-3-line"></i> By Admin</li>
                                        <li><i class="ri-calendar-line"></i><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            endwhile;
                            wp_reset_query();
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>