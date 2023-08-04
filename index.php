<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<section class="banner-section" style="background: url( <?php echo get_template_directory_uri(); ?>/library/images/blog-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="banner-content">
                    <h6>Topics</h6>
                    <h1>Search By Topics</h1>
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php 
            $terms = get_categories();
            if( $terms ): ?>
                <ul class="category-list">
                    <?php foreach( $terms as $term ): ?>
                        <li>
                            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a>
                        </li>                   
                    <?php endforeach; ?>
                </ul>
                <?php
                    endif; ?>
            </div>
        </div>
    </div>
  
</section>
<hr>
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
<section class="article-blogs" style="background: url(<?php echo get_template_directory_uri(); ?>/library/images/section-banner.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="section-title">
                    <h6 class="sub-title">Health Tips</h6>
                    <h3 class="title">Popular Post</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-slider owl-carousel owl-theme">
                    <?php
                        $args = array(
                        'posts_per_page' =>8,
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
<?php 
    $terms = get_terms( array(
        'taxonomy'   => 'category',
        'hide_empty' => true,
        
    ) );
    if( $terms ): ?>
        <?php foreach( $terms as $term ): ?>
<section class="article-blogs" style="background: url(<?php echo get_template_directory_uri(); ?>/library/images/section-banner.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="section-title">
                <?php $sub_heading = get_field('sub_heading', $term);?>
                    <?php $heading = get_field('heading', $term);?>
                    <?php $description = get_field('description', $term);?>
                    <h6 class="sub-title"><?php echo $sub_heading; ?></h6>
                    <h3 class="title"><?php echo $heading; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-slider owl-carousel owl-theme">
                    <?php
                        $args = array(
                        'posts_per_page' => 8,
                        'post_type' => 'post',
                        'tax_query' => array( array(
                            'taxonomy'	=> 'category',
                            'field'		=> 'term_id',
                            'terms'		=> $term->term_id,
                        ) ),
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
<?php endforeach; ?>
<?php
    endif; ?>
<?php get_footer(); ?>
