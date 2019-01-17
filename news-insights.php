<?php /* Template Name: News And Insights  */?>

<?php get_header();?>

<div class='country-review-big-container absolute w-100 z-2'>
  <div class="w-40 center">        
  <h1 class="white center mb3 icr-title tc"><?php the_title(); ?></h1>
  <h2 class="white tc relative icr-featured-article">Featured article</h2>
  </div>
</div>


    <div class="featured-cr mb5 pp-dark-blue-bg">
    <?php
        $argsCR = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => 'International Country Review',
            'orderby' => 'date',
            'post__not_in' => array( $post->ID ),
            'order'=> 'DESC'
            
        );

        $post_query = new WP_Query($argsCR);
        if($post_query->have_posts() ) { while($post_query->have_posts() ) {
        $post_query->the_post(); ?>

          
            <div class="relative overflow-hidden">
              <div class="cover no-repeat bg-center cr-featured-div absolute w-100 top-0 left-0" style="background-image: url(<?php the_field ('header_bg_image'); ?>)"></div>
                  <a href="<?php the_permalink(); ?>" class="cr-featured-inner flex flex-row justify-center w-50 items-start pa4 relative z-2 w-50 ">
                    <div class="review-inner-title-featured ">
                      <h2 class="white tc mb3 country-review-h2"><?php the_title(); ?></h2>
                      <p class="white tc"><?php echo wp_trim_words( get_field('pp_header_text'), 20, '...' ); ?></p>
                      <div class="center w-max-c">
                        <p class="white center tc mv4 fw3 icr-featured-article-cta">Read More</p>
                      </div>
                    </div>
                      
                    </a>

             
              
            </div>
          
    
          <?php  } } ?>
    </div>

    <div class="masonry-container container">
    <?php
        $argsCR = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category_name' => 'International Country Review',
            'orderby' => 'date',
            'offset' => 1,
            'post__not_in' => array( $post->ID ),
            'order'=> 'DESC'
            
        );

        $post_query = new WP_Query($argsCR);
        if($post_query->have_posts() ) { while($post_query->have_posts() ) {
        $post_query->the_post(); ?>

          
            <a class="masonry-child overflow-hidden" href="<?php the_permalink(); ?>">
                
              
              <div class="review-inner-img-container overflow-hidden">
                <div class="review-inner-img cover no-repeat bg-center<?php the_field("icr_height"); ?>" style="background-image: url(<?php the_field ('header_bg_image'); ?>)"></div>
              </div>
              <div class="flex flex-row justify-between items-start pt3">
                  <div class="review-inner-title ">
                    <p class="pp-blue mb2 fw5 cr-title"><?php the_title(); ?></p>
                    <p class="pp-grey"><?php echo wp_trim_words( get_field('pp_header_text'), 30, '...' ); ?></p>
                  </div>
                  <!-- <div class="review-arrow ">
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
                  </div> -->
              </div>
            </a>
          
    
          <?php  } } ?>
    </div>
</div>
<?php get_footer();?>
