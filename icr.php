<?php /* Template Name: International Country Review  */?>

<?php get_header();?>

<div class='country-review-big-container'>
    <div class="starter-div container country-review-starter">
      <div class="flex justify-between country-review-title ">
        <h1 class="w-50 pp-blue mv-0 icr-title"><?php the_title(); ?></h1>
        <div class="flex flex-column justify-between pv3">
          <p class="pp-blue-cta mb2">Search</p>
          <p class="pp-blue-cta mb2">Order by date</p>
        </div>
      </div>
    </div>


    <div class="featured-cr mt2 mv5 container">
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

          
            <div class="pp-corners pp-shadow" >
              <div class="cover no-repeat bg-center pp-corners pa4 pp-shadow cr-featured-div" style="background-image: url(<?php the_field ('header_bg_image'); ?>)">
                  <!-- <div class="pa4">
                    <h6 class="mb2 white"><?php echo date("d | m | Y"); ?></h6>
                  <h2 class="white fw5">Europe</h2>
                  </div> -->
                  <a href="<?php the_permalink(); ?>"class="cr-featured-inner flex flex-row justify-between items-start pa4 bg-white pp-corners">
                      <div class="review-inner-title ">
                        <h2 class="pp-blue mb3 fw5 country-review-h2 w-70"><?php the_title(); ?></h2>
                        <p class="pp-grey"><?php echo wp_trim_words( get_field('pp_header_text'), 20, '...' ); ?></p>
                      </div>
                      <div class="review-arrow ">
                        <svg class="arrow-icon" viewBox="0 0 6.175 6.283">
                          <defs>
                            <style>
                              .cls-1, .cls-2 {
                                fill: none;
                                stroke: #1fa5ff;
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
                    </a>

              </div>
              
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

          
            <a class="masonry-child pp-corners pp-shadow pp-shadow-nohover" href="<?php the_permalink(); ?>">
                
              
              <div class="review-inner-img cover no-repeat bg-center pp-corners-image <?php the_field("icr_height"); ?>" style="background-image: url(<?php the_field ('header_bg_image'); ?>)"></div>
              <div class="flex flex-row justify-between items-start pa4">
                  <div class="review-inner-title ">
                    <p class="pp-blue mb2 fw5 cr-nf-title w-70 cr-title"><?php the_title(); ?></p>
                    <p class="pp-grey"><?php echo wp_trim_words( get_field('pp_header_text'), 30, '...' ); ?></p>
                  </div>
                  <div class="review-arrow ">
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
<?php get_footer();?>
