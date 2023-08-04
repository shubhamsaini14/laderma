<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 <?php $term = get_queried_object();  ?>
<section class="banner-section" style="background: url( <?php echo get_template_directory_uri(); ?>/library/images/blog-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="banner-content">
                    <h6>Topics</h6>
                    <h1><?php echo $term->name;?></h1>
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="article-blogs" style="background:transparent;">
    <div class="container">       
        <div class="row">
                    <?php
                        $args = array(
                        'posts_per_page' => -1,
                        'category_name' => $term->slug, 
                        'post_type' => 'post'
                        );
                     $customPostQuery = new WP_Query($args); if ($customPostQuery->have_posts()) : while ($customPostQuery->have_posts()) : $customPostQuery->the_post() ?>
                    <div class="col-md-3 mb-3">
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
</section>
<?php get_footer(); ?>
