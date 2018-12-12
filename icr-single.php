<?php 
/*
 * Template Name: ICR Post
 * Template Post Type: post
 */

?>


<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="w-100 relative overflow-hidden">
    <div class="w-100 country-review-image h-100 absolute cover bg-center no-repeat relative page-header icr-header" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>">
    </div>

  <div class="starter-div icr-starter large-cover flex flex-column wrap center justify-center measure-wide lh-copy relative z-5" >

    <h1 class="white mb4 icr-title"><?php the_title(); ?></h1>
    <h2 class="fw3 white">19/6/2018</h2>
    </div>

</div>

<div class="icr-content">
  <div class="icr-subheader center ">
    <h2 class=" pp-grey lh-copy mv5 pb5 center text-width"><?php the_field('pp_header_text'); ?></h2>

      <?php if( have_rows('cannabis_review_body') ): while ( have_rows('cannabis_review_body') ) : the_row();

            if( get_row_layout() == 'cr_quote' ): ?>
                <div class="cr-quote-container center w-70 tc mv6">
                  <h1 class="pp-dark-blue tc cr-quote relative">
                    <?php the_sub_field('cr_quote'); ?>
                  </h1>

                  <h2 class="mt6 pt3 w-50 center pp-blue">
                    <?php the_sub_field('cr_quote_author'); ?>
                  </h2>
                </div> 
                
                        
                <?php elseif ( get_row_layout() == 'cr_text' ): ?>
                  <div class="lh-copy mv5 center text-width cr-text ">
                   <?php the_sub_field('cr_text'); ?>
                  </div>
                  
                
                <?php elseif (get_row_layout() == 'cr_gallery' ): 
                    $images = get_sub_field('cr_gallery');

                    foreach($images as $image) : ?>
                    <div class="center gallery-image mv5">
                      <?php echo wp_get_attachment_image( $image['id'], 'full' );?>
                      <p class="pp-grey mt-3 tc "> <?php echo wp_get_attachment_caption( $image['id']);?></p>
                    </div>

                <?php endforeach; ?>

                <?php elseif (get_row_layout() == 'cr_video'): ?>
										<div class=" w-100 w-100-s flex container-mobile container center black pv5-ns video-embed">
											<?php the_sub_field('cr_video'); ?>
										</div>

                <?php elseif (get_row_layout() == 'cr_gallery_full' ): 
                    $imagesFull = get_sub_field('cr_gallery_full');

                    foreach($imagesFull as $imageFull) : ?>
                    <div class="center full-gallery mv5">
                      <?php echo wp_get_attachment_image( $imageFull['id'], 'full' );?>
                      <p class="pp-grey mt-3 tc"> <?php echo wp_get_attachment_caption( $image['id']);?></p>
                    </div>

                    <?php endforeach; ?>

            <?php endif;

          endwhile; ?>
     
      <div class="article-title fixed left-0 top-0 bg-white pp-shadow pp-shadow-not-hover w-100 z-5">
        <div class="icw-bar">
          <h3 class="platform ttu pp-dark-blue"><?php the_title(); ?></h3>
        </div>

      </div>
<?php endif; ?>
  </div>


  <div class="previous-reviews mt7">
    <p class="pp-grey tc center w-20 mb4">Catch up on our newest articles that you might have missed</p>

      <div class="previous-issues-inner justify-center center mt5 flex flex-wrap w-70">
        <?php
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 2,
              'category_name' => 'International Country Review',
              'orderby' => 'date',
              'post__not_in' => array( $post->ID ),
              'order'=> 'DESC'
              
          );

          $post_query = new WP_Query($args);
          if($post_query->have_posts() ) { while($post_query->have_posts() ) {
          $post_query->the_post(); ?>

            
                <a class="previous-review pp-shadow mb5 center flex flex-column" href="<?php the_permalink(); ?>">
                
                <div class="review-inner-img pa2 pl4 cover no-repeat bg-center pp-corners-image" style="background-image: url(<?php the_field ('header_bg_image'); ?>)">
                  </div>
                  <div class="flex flex-row justify-between items-start">
                    <div class="review-inner-title pa3 w-70">
                          <?php the_title(); ?>
                    </div>
                    <div class="review-arrow pa3">
                      <svg class="arrow-icon" viewBox="0 0 6.175 6.283">
                        <defs>
                          <style>
                            .cls-1, .cls-2 {
                              fill: none;
                              stroke: #a2bed0;
                            }

                            .cls-2 {
                              stroke-miterlimit: 10;
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <g id="Group_457" data-name="Group 457" transform="translate(-212.071 -382.126)">
                          <path id="Path_444" data-name="Path 444" class="cls-1" d="M209.162,388.4l3.537-3.7" transform="translate(3.27 -0.332)"/>
                          <path id="Path_445" data-name="Path 445" class="cls-2" d="M62.1,42.2l2.234,2.234a.11.11,0,0,1,0,.15L62.1,46.819" transform="translate(139.025 398.402) rotate(-45)"/>
                        </g>
                      </svg>
                    </div>
                  </div>
                
              </a>  
            
      
          <?php  } } ?>
      </div>
  </div>




</div>


<div class="progress fixed left-0 top-0">
</div>



<a href="international-country-review" class="arrow-back o-0 fixed left-0 bottom-0 flex items-center">
  <div class="arrow mr3 flex ">
    <svg viewBox="0 0 9.783 8.002">
      <defs>
        <style>
          .arrow-svg {
            fill: none;
            stroke: #6f9ab7;
          }
        </style>
      </defs>
      <g id="Group_1219" data-name="Group 1219" transform="translate(-131.954 -858.537)">
        <path id="Path_11800" data-name="Path 11800" class="arrow-svg" d="M7421.312,892.861h9" transform="translate(-7288.58 -30.33)"/>
        <path id="Path_11801" data-name="Path 11801" class="arrow-svg" d="M7424.176,886.561l-3.647,3.648,3.647,3.648" transform="translate(-7287.869 -27.671)"/>
      </g>
    </svg>
  </div>

    <div class="arrow-caption o-0">
      <h3 class="pp-dark-blue fw3 platform ttu">View All</h3>
    </div>

</a>

<?php endwhile; ?>
<?php endif; ?>




<?php get_footer();?>
