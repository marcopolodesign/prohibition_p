<?php /* Template Name: International Cannabis Weekly  */?>


<?php get_header();?>



<div class="w-100 cover bg-center no-repeat relative page-header icw-header" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>)">
  <div class="starter-div icw-starter flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 bg-center" >

    <h1 class="white mb4 icr-title"><?php the_title(); ?></h1>
    <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

    <!-- <div class="flex flex-row no-wrap mt5 arrow-container ">
      <a href="contact" class="fw5 third-cta white platform flex no-wrap">Request Publication 
        <svg class="ml2 arrow-icon white-arrow" viewBox="0 0 6.175 6.283">
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
      </a>
    </div> -->
  </div>

</div>




<div class="flex flex-column">
  <div class="sticky top-0 left-0 icw-bar pp-light-grey-bg pp-shadow pp-shadow-not-hover w-100 flex justify-center items-center mb4 z-5">
      <div class="flex flex-row no-wrap arrow-container">
          <?php
              $args = array( 'numberposts' => '1', 'category' => 3 );
              $recent_posts = wp_get_recent_posts( $args );
              foreach( $recent_posts as $recent ){
              echo '<a class="fw5 third-cta ttu platform flex no-wrap" href="' . get_permalink($recent["ID"]) . '">View latest publication
              <svg class="arrow-icon ml2" viewBox="0 0 6.175 6.283">
                  <defs>
                    <style>
                      .cls-1-arrow, .cls-2-arrow {
                        fill: none;
                        stroke: #a2bed0;
                        transition: all 0.3s ease;
                      }

                      .cls-1-arrow::hover, .cls-2-arrow::hover {
                        stroke: #6f9ab7;
                      }

                      .cls-2-arrow {
                        stroke-miterlimit: 10;
                        fill-rule: evenodd;
                      }
                    </style>
                  </defs>
                  <g id="Group_457" data-name="Group 457" transform="translate(-212.071 -382.126)">
                    <path id="Path_444" data-name="Path 444" class="cls-1-arrow" d="M209.162,388.4l3.537-3.7" transform="translate(3.27 -0.332)"/>
                    <path id="Path_445" data-name="Path 445" class="cls-2-arrow" d="M62.1,42.2l2.234,2.234a.11.11,0,0,1,0,.15L62.1,46.819" transform="translate(139.025 398.402) rotate(-45)"/>
                  </g>
              </svg>
          </a>';
              }
          ?>
        
          
      </div>
      <!-- <a href="" class="third-cta ttu platform">International Cannabis Weekly</a> -->
  </div>

  <div class="previous-issues mv5 container-icw center ">
    <div class="previous-issues-inner justify-between center flex flex-wrap">

    <?php
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 8,
          'category_name' => 'International Cannabis Weekly',
          'orderby' => 'date',
          'post__not_in' => array( $post->ID ),
          'order'=> 'DESC'
          
      );

      $post_query = new WP_Query($args);
      if($post_query->have_posts() ) { while($post_query->have_posts() ) {
      $post_query->the_post(); ?>

        
            <a class="previous-issue icw-featured overflow-hidden relative issue-inner pa4 pp-light-blue-bg pp-shadow flex flex-column justify-between center mb4" href="<?php the_permalink(); ?>">
              
            
              <div class="issue-inner relative">
                <h6 class="mb2 white"><?php the_time("d | m | Y"); ?></h6>
                <h2 class="white fw5">Issue</h2>
                <h1 class="h1-big issue-n white previous-issue-n"><?php the_title(); ?> </h1>
                <img class="mv2 pv3 icw-icon-big" src="<?php the_field('featured_icon'); ?>">
                <p width="69" class="pr2 white icw-card-t"><?php echo wp_trim_words( get_field('short_description'), 15, '...' ); ?></p>
              </div>
              <div class="pp-chemical-pattern absolute"></div>
          </a>  
        
  
        <?php  wp_reset_postdata();} } ?>

    </div>
  </div>

  

  <div class="overflow-hidden">

    <div class="container flex flex-wrap flex-row justify-between center mv4">
      <h1 class="tc w-100 pp-dark-blue" style="font-size: 24px;">Older Issues</h1>
    <div class="previous-issues-nf-container flex flex-wrap flex-row justify-between center mv4">
        <?php
            $argsNF = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'category_name' => 'International Cannabis Weekly',
                ‘nopaging’ => true,
                'orderby' => 'date',
                'offset' => 8,
                'order'=> 'DESC',
                
            );

            $post_query = new WP_Query($argsNF);
            if($post_query->have_posts() ) { while($post_query->have_posts() ) {
            $post_query->the_post(); ?>

              
              <a class="previous-issue-nf weekly-not-featured" href="<?php the_permalink(); ?>">
                <div class="pa4 mb5 previous-issue-nf-container pp-shadow" >
                   
            
                    <p class="pp-blue fw5 mb2">Issue <?php the_title(); ?></p>
                    <p width="69" class="pr2 pp-grey mb4"><?php echo wp_trim_words( get_field('short_description'), 30, '...' ); ?></p>
                    <div class="flex flex-row no-wrap">
                        <p class="fw5 third-cta mr2 pp-blue-cta">Read more</p>
                        <svg class="arrow-icon" viewBox="0 0 6.175 6.283">
                            <defs>
                              <style>
                                .cls-1, .cls-2 {
                                  fill: none;
                                  stroke: #6f9ab7;
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
          
    
        <?php wp_reset_postdata(); } } ?>
    </div>
  </div>
</div>

<!-- <div class="mv6 center tc measure further-info ">
<p class="pp-grey center di">For further information on any of our Weekly Issues, please contact <span><a style="font-size:18px;" class="underline">info@prohibitionpartners.com</a></span></p>
</div> -->




<?php get_footer();?>
