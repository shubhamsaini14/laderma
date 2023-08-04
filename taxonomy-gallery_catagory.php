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
<section class="imageGallery">
    <div class="container">       
        <div class="row">            
            <?php                   
            $args = array(
                'post_type' => 'gallery',
                'tax_query' => array( array(
                    'taxonomy'	=> 'gallery_catagory',
                    'field'		=> 'slug',
                    'terms'		=> $term->slug,
                ) ),
            );
            $customPostQuery = new WP_Query($args); if ($customPostQuery->have_posts()) : while ($customPostQuery->have_posts()) : $customPostQuery->the_post() ?>
                  <div class="col-md-3 mb-3">
                        <div class="galleryCard">                       
                            <figure style="background:url(<?php the_field('after_image') ?>);">
                                <div  class="handleimage"></div>
                                <div  class="handledivisor" style="background:url(<?php the_field('before_image') ?>);"></div>
                            </figure>   
                            <input type="range" min="0" max="100" value="50" class="handleslider"  oninput="moveDivisor(this)">      
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