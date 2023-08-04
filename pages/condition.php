<?php
/* Template Name: Condition */

get_header(); ?>
<section class="banner-section" style="background: url(<?php the_field('banner_image');?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="banner-content">
                    <h6><?php the_field('banner_sub_heading'); ?></h6>
                    <h1><?php the_field('banner_heading'); ?></h1>
                    <?php the_field('banner_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="getintouch-section" style="background-color: #f54991;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul>
                    <li>
                        <i class="ri-phone-line"></i>
                        <span>
                            <p>Call anytime</p>
                            <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
                        </span>
                    </li>
                    <li>
                        <i class="ri-mail-line"></i>
                        <span>
                            <p>Write email</p>
                            <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="rightside-content">
                    <h5>Book your Appointment Now</h5>
                    <hr />
                    <button class="btn-page">Book Appointment</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-80 content-grid" style="background: url('<?php the_field('overview_background'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="grid-image">
                    <img src=" <?php the_field('overview_image'); ?>" alt=" <?php the_field('overview_sub_heading'); ?>" />
                </div>
            </div>
            <div class="col-md-8 ps-md-5">
                <div class="content-body">
                    <h6><?php the_field('overview_sub_heading'); ?></h6>
                    <h3><?php the_field('overview_heading'); ?></h3>
                    <?php the_field('overview_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<hr />
<section class="condition-grid">
    <div class="container">
        <div class="row">
            <div class="grid-list">
                <?php if (have_rows('content_section')) : while (have_rows('content_section')) : the_row(); ?>
                <a class="item-condition" href="#<?php the_sub_field('sub_heading');?>"><?php the_sub_field('sub_heading');?></a>

                <?php endwhile;
                    endif; ?>
                <a class="item-condition" href="#prevention">Prevention</a>
                <a class="item-condition" href="#appointment">Appointment</a>
                <a class="item-condition" href="#faq">FAQ’s</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php if (have_rows('content_section')) : while (have_rows('content_section')) : the_row(); ?>
                <div class="condition-content" id="<?php the_sub_field('sub_heading');?>">
                    <h6><?php the_sub_field('sub_heading');?></h6>
                    <h3><?php the_sub_field('heading');?></h3>
                    <?php the_sub_field('content');?>
                </div>
                <?php endwhile;
                    endif; ?>
            </div>
            <div class="col-md-4">
                <div class="card-ourdoctor">
                    <div class="content">
                        <h3><?php the_field('our_doctor_heading');?></h3>
                        <p><?php the_field('our_doctor_content');?></p>
                    </div>
                    <div class="ourdoctor owl-carousel owl-theme">
                        <?php if (have_rows('card_ourdoctor')) : while (have_rows('card_ourdoctor')) : the_row(); ?>
                            <div class="item">
                                <div class="ourdoctor-content">
                                <img
                                    src="<?php $image = get_sub_field('image'); echo $image['url']; ?>"
                                    alt="<?php $image = get_sub_field('image'); 
                                        echo $image['alt']; ?>"
                                 />                       
                                    <div class="experience-box">
                                        <span><i class="ri-calendar-line"></i><?php the_sub_field('experience');?>+</span>
                                        <span>
                                            years of <br>
                                            experience
                                        </span>
                                     </div>
                                </div>                            
                            </div>
                        <?php endwhile;
                        endif; ?>
                    </div>                    
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
                        <h6><?php the_field('whychoose_sub_heading'); ?></h6>
                        <h3><?php the_field('whychoose_heading'); ?></h3>
                        <p><?php the_field('whychoose_content'); ?></p>
                        <ul class="list-item">
                            <?php if (have_rows('whychoose')) : while (have_rows('whychoose')) : the_row(); ?>
                            <li>
                                <span class="icon">
                                    <img src=" <?php the_sub_field('icon'); ?>" alt=" <?php the_sub_field('heading'); ?>" />
                                </span>
                                <span class="item-content">
                                    <h4><?php the_sub_field('heading'); ?></h4>
                                    <p><?php the_sub_field('content'); ?></p>
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
                    <h6 class="sub-title"><?php the_field('testimonial_sub_heading', 'option') ?></h6>
                    <h3 class="title"><?php the_field('testimonial_heading', 'option') ?></h3>
                    <p><?php the_field('testimonial_content', 'option') ?></p>
                    <div class="review-button">
                        <a href="<?php the_field('google_rating', 'option'); ?>" class="countGoogle" target="_blank">
                            <img alt="google" src="<?php the_field('google_rating_icon', 'option'); ?>" />
                            <h4>186 Reviews</h4>
                        </a>
                        <a href="<?php the_field('google_review', 'option'); ?>" class="googleViewbtn" target="_blank"> <img alt="google" src="<?php the_field('google_icon', 'option'); ?>" /> View All Review </a>
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
<section class="appointment-area" id="appointment">
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
                            <li>
                                <span><?php the_sub_field('days') ?></span> <span class="time"><?php the_sub_field('timing') ?></span>
                            </li>
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
<section class="py-60" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="section-title">
                    <h3 class="title "><?php the_field('faq_heading') ?></h3>
                    <p><?php the_field('faq_content') ?></p>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-10 m-auto">
                <div class="accordion-faq">
                    <div class="accordion" id="accordionExample-1">
                        <?php $a = 1;
                                if (have_rows('faq')) : while (have_rows('faq')) : the_row(); 
                                if($a == 1){
                                    $show = "show";
                                    $collapsed = "";
                                }else{
                                    $show = "";
                                    $collapsed = "collapsed";
                                }
                                ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?php echo $collapsed;?>" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $a; ?>">
                                    <?php the_sub_field('question') ?>
                                </button>
                            </h2>
                            <div id="collapse-<?php echo $a; ?>"
                                class="accordion-collapse  collapse  <?php echo $show;?> "
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
