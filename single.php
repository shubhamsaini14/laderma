<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div class="blog-page">
    <div class="blog-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/blogdetails-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <div class="inner-content">
                        <h6>Topics</h6>
                        <h1><?php the_title(); ?></h1>
                        <ul class="post-meta">
                            <li><i class="far fa-user"></i> BY Admin</li>
                            <li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
                        </ul>
                        <p>If you are trying to achieve that gorgeous mane of your dreams, this article will help you. We provide hair regrowth tips and tricks that have come straight from the top dermatologists in the country.</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-5">
                <div class="blog-single-post">
                    <div class="inner-box">                       
                        <div class="text">
                        <?php echo the_content(); ?>
                        </div>                                                                                                         
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>  
        </div>
    </div>
</div>
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
<section class="article-blogs" style="background: url(<?php echo get_template_directory_uri(); ?>/library/images/section-banner.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="section-title">
                    <h6 class="sub-title">Health Tips</h6>
                    <h3 class="title">Latest News & Blogs</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-slider owl-carousel owl-theme">
                    <?php
                        $args = array(
                        'posts_per_page' =>8,
                        // 'category_name' => 'acne', 
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
<?php get_sidebar(); ?>

<?php get_footer(); ?>