<?php
/* Template Name: Image Gallery  */

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
                   <p> <?php the_field('banner_content'); ?></p>
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
            $terms = get_terms( array(
                'taxonomy'   => 'gallery_catagory',
                'hide_empty' => true,
            ) );
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

<?php 
    $terms = get_terms( array(
        'taxonomy'   => 'gallery_catagory',
        'hide_empty' => true,
        
    ) );
    if( $terms ): ?>
        <?php foreach( $terms as $term ): ?>
<section class="imageGallery">
    <div class="container">   
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="section-title">
                    <?php $sub_heading = get_field('sub_heading', $term);?>
                    <?php $heading = get_field('heading', $term);?>
                    <?php $description = get_field('description', $term);?>

                    <h6 class="sub-title"><?php echo $sub_heading; ?></h6>
                    <h3 class="title"><?php echo $heading; ?></h3>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-slider owl-carousel owl-theme">
                <?php                   
                    $args = array(
                        'post_type' => 'gallery',
                        'tax_query' => array( array(
                            'taxonomy'	=> 'gallery_catagory',
                            'field'		=> 'term_id',
                            'terms'		=> $term->term_id,
                        ) ),
                    );
                     $customPostQuery = new WP_Query($args); if ($customPostQuery->have_posts()) : while ($customPostQuery->have_posts()) : $customPostQuery->the_post() ?>
                        <div class="galleryCard">                       
                            <figure style="background:url(<?php the_field('after_image') ?>);">
                            <div  class="handleimage"></div>
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
<?php endforeach; ?>
        <?php
        endif; ?>
<?php get_footer(); ?>