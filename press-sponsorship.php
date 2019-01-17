<?php /* Template Name: Press & Sponsorship  */?>
<?php get_header();?>

<div class="w-100 cover no-repeat bg-center relative bg-att-fixed" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>">
    <div class="starter-div flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 mobile-padding pb4" >

      <h1 class="white icr-title"><?php the_title(); ?></h1>
      <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

    </div>
</div>

<div class="voice-of-industry mv4 container">
  <h2 class="center pp-dark-blue measure-wide tc-ns">Our research is often an industry-first, pushing regulators, investors and entrepreneurs into new territories of the emerging cannabis marketplace. We’re delighted to have our work regularly recognised in some of the world’s most well-respected publications:</h2>

  <div class="center voice-industry-logos flex wrap w-80 mv5-ns">
    
    <?php  the_field('voice_industry_logos'); wp_reset_postdata(); ?>
        
    </div>

</div>

<div class="flex flex-row general-container press-starter">
  <div class="w-30 sticky press-header-container"> 

    <div class="press-header pp-shadow  pa4">
      <h1 class="pp-dark-blue mb0">Press</h1>
      <h2 class="pp-blue mb2">Are you a member of the media?</h2>
      <?php if( get_field('press_header_text') ): ?>
        <div class="mv3"><?php the_field('press_header_text'); ?></div>
    </div>


    <?php endif; ?>

  </div> 

  <div class="press-content w-70 ml5 flex flex-column">
    <h2 class="pp-blue mb3 press-section-title">Press Releases</h2>          
    <div class="press-content-inner flex flex-row flex-wrap center justify-center">
     

      <?php
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => -1,
              'category_name' => 'Press Release',
              'orderby' => 'date',
              'post__not_in' => array( $post->ID ),
              'order'=> 'DESC'
              
          );

          $post_query = new WP_Query($args);
          if($post_query->have_posts() ) { while($post_query->have_posts() ) {
          $post_query->the_post(); ?>

            <?php if (get_field('header_bg_image')): ?>
            <a class="press-release mb5 center flex" href="<?php the_field ('press_release_link') ?>">
                
                <div class="relative w-100 h-100 overflow-hidden">
                  <div class="review-inner-img press-release-img cover bg-center no-repeat" style="background-image: url(<?php the_field ('header_bg_image'); ?>)"></div>
                </div>
                <div class="flex flex-column justify-center items-center margin-auto press-release-info pa4">
                  <div class="review-inner-title">
                  <h2 class="pp-blue-cta tc mb2">December 2018</h2>

                    <h5 class="pp-blue-cta tc"><?php the_title(); ?></h5>
                  </div>
                  <div class="review-arrow mt3">
                    <svg class="arrow-icon" viewBox="0 0 6.175 6.283">
                      <defs>
                        <style>
                          .cls-1, .cls-2 {
                            fill: none;
                            stroke: #a2bed0;;
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
            
          <?php endif; wp_reset_postdata(); } } ?>
    
    
    </div>

   
    <h2 class="pp-blue mt6 mb4 press-section-title">Prohibition Partners in the media</h2>                     
    <div class="pp-media flex flex-row flex-wrap  justify-around">
      <?php
            $argsNew = array(
              'post_type' => 'post',
              'posts_per_page' => -1,
              'category_name' => 'PP in the Media',
              'orderby' => 'date',
              'post__not_in' => array( $post->ID ),
              'order'=> 'DESC'
                
            );

            $post_query = new WP_Query($argsNew);
            if($post_query->have_posts() ) { while($post_query->have_posts() ) {
            $post_query->the_post(); ?>

              <?php if (get_field('press_release_link')): ?>
              <a class="w-100 pv3 center flex flex-row justify-between items-center pp-media-container" href="<?php the_field('press_release_link'); ?>">
                <div class="flex items-center">  
                  <img class="media-logo mr4" src="<?php the_field ('channel_logo'); ?>">
                  <h5 class="pp-blue-cta mr4 fw3"><?php the_time("d | m | Y"); ?></h5>
                  <h5 class="pp-blue fw3"><?php the_title(); ?></h5>
                  </div>
                  <div class="review-arrow pp-media-arrow pa3 flex no-wrap items-center">
                    <h5 class="fw3 mr2">Read</h5>
                    <svg class="arrow-icon" viewBox="0 0 6.175 6.283">
                      <defs>
                        <style>
                          .cls-1, .cls-2 {
                            fill: none;
                            stroke: #a2bed0;;
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
              
        
     <?php endif; wp_reset_postdata(); } } ?>

    </div>

  </div>

</div>


<div class="voice-of-industry speaking-opp-container mv5 container pt5 pb3">
  <h1 class="pp-dark-blue center tc-ns mt5">Speaking Opportunities</h1>
  <h2 class="center pp-blue measure-wide tc-ns">Representatives of Prohibition Partners often speak at the industry’s leading events from Berlin to San Francisco. If you’re interested in recruiting a speaker for your next event, please email us at <span><a href="mailto:media@prohibitionpartners.com">media@prohibitionpartners.com</a></span></h2>

  <div class="center voice-industry-logos flex wrap w-80 mv5-ns">
    
    <?php  the_field('speaking_opp_logos'); wp_reset_postdata(); ?>
        
    </div>

</div>





<?php get_footer();?>
