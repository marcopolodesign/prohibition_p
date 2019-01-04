<?php /* Template Name: Press & Sponsorship  */?>
<?php get_header();?>


<div class="flex flex-row general-container starter-div press-starter">
  <div class="w-30 sticky press-header-container"> 

    <div class="press-header pp-shadow  pa4">
      <h1 class="pp-blue mb0"><?php the_title(); ?></h1>
      <h2 class="pp-blue mb2">Are you a member of the media?</h2>
      <?php if( get_field('press_header_text') ): ?>
        <div class="mv2"><?php the_field('press_header_text'); ?></div>
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

<div id="sponsorship" class="sponsorship-starter pp-blue-light pv5">
  <div class="flex flex-column wrap center justify-center measure-wide lh-copy mobile-padding" >

  <h1 class="pp-blue mb4 icr-title">Sponsorship<br>opportunities</h1>
  <h2 class="pp-blue"><?php the_field("sponsorship_opportunities_text"); ?></h2>
  
  </div>
</div>

<div class="sponsorship-resources flex flex-row justify-center items-center container center pt5">
  <div class="w-50">
    <h2 class="fw5 w-50 mb5 pp-dark-blue platform ttu">Essential resources for the International Cannabis Industry</h2>

    <h5 class="pp-blue mb4 fw3">As featured in</h5>
    <div class="featured-logos clients-grid flex wrap w-80">
    
    <?php 

      $images = get_field('press_featured_logos');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li>
                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
    <?php endif; wp_reset_postdata(); ?>
        
    </div>
    

  </div>
  <div class="w-30 sponsorship-featured-reports">
    <img src="/wp-content/uploads/2018/12/essential-resources-img@2x.png">
  </div>

</div>

<div class="sponsorship-numbers relative pv6 mt3 center flex flex-row items-center justify-between container">
  <div class="absolute w-100 h-100 pp-patern-bg overlay-pattern-sponsorship o-0"></div>
  <div class="numbers-investors pp-shadow  shadow-nohover  bg-white tc">
    <svg class="numbers-icon mb2" data-name="Group 1540" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157.188 59.7">
      <defs>
        <style>
          .cls-1-120 {
            fill: none;
            stroke: #6f9ab7;
          }
        </style>
      </defs>
      <path id="Path_13374" data-name="Path 13374" class="cls-1-120" d="M19.2,58.1H5.6V15.3L.5,17.1V4.2l6-2.6H19.2Z"/>
      <path id="Path_13375" data-name="Path 13375" class="cls-1-120" d="M24.8,58.1V46.2L42.2,29c3.5-3.5,6-6.3,6-10.1,0-3.5-2-5.4-5.2-5.4-4,0-5,3.4-5,5.5H24.5C24.3,11.4,27.9.5,43,.5,55.8.5,62.2,8.3,62.2,18.2c0,8-3.8,12.6-9,17.6L42.7,45.9H62.6V58.1H24.8Z"/>
      <path id="Path_13376" data-name="Path 13376" class="cls-1-120" d="M105.2,39.8c0,11.7-6.7,19.4-19.1,19.4-13,0-18.8-7.5-18.8-19.4V19.7c0-11.6,6-19.2,19-19.2,12.5,0,19,7.7,19,19.2V39.8Zm-19-26.3c-3.9,0-5.3,2.8-5.3,6.2V40c0,3.4,1.4,6.2,5.3,6.2s5.3-2.8,5.3-6.2V19.7C91.5,16.3,90.2,13.5,86.2,13.5Z"/>
      <path id="Path_13377" data-name="Path 13377" class="cls-1" d="M125,23.7,140.4,1.6h15.8L136.3,28.7l19.8,29.5H140.2L125,35V58.1H111.4V1.6H125Z"/>
    </svg>

      <p class="pp-grey">Global Cannabis investors and entrepreneurs</p>
  </div>

   <div class="numbers-social pp-shadow shadow-nohover bg-white  tc">
    <svg class="numbers-icon mb2" data-name="Group 1540" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114.3 57.6">
    <defs>
      <style>
        .cls-1-4 {
          fill: none;
          stroke: #6f9ab7;
        }
      </style>
    </defs>
    <g id="Group_1541" data-name="Group 1541" transform="translate(-0.2 -105)">
      <path id="Path_13378" data-name="Path 13378" class="cls-1-4" d="M38,147.3v14.8H24.8V147.3H.7V136.1l23.9-30.6H38v30.1h5.7v11.7ZM14.6,135.6H24.8V122.7Z"/>
      <path id="Path_13379" data-name="Path 13379" class="cls-1-4" d="M87.5,162.1H74.6L61.2,122.4v39.7H48.6V105.5H69l12.5,38.3L94,105.5h20v56.6H100.8V122.4Z"/>
    </g>
  </svg>
      <p class="pp-grey">Social<br>impressions
      anually</p>
  </div>

  
</div>


<div class="clients mv6 relative height-min">
    <h1 class="tc mb4 pp-blue">Previous Sponsors</h1>

    <div class="  height-min relative">
    <div class="clients-grid container relative sponsors flex wrap center">
    <?php
            $argsClients = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'category_name' => 'Clients',
                'orderby' => 'date',
                'order'=> 'DESC'
                
            );

            $post_query = new WP_Query($argsClients);
            if($post_query->have_posts() ) { while($post_query->have_posts() ) {
            $post_query->the_post(); 

              $images = get_field('client_logos');
              $size = 'full'; // (thumbnail, medium, large, full or custom size)

              ?>
                <ul class="first-grid">
                    <?php foreach( $images as $image ): ?>
                        <li>
                          <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
          

          
              <?php 
                $imagesNew = get_field('clients_logos_2');

                ?>                  <ul class="second-grid">
                      <?php foreach( $imagesNew as $imageNew ): ?>
                          <li>
                            <?php echo wp_get_attachment_image( $imageNew['ID'], $size ); ?>
                          </li>
                      <?php endforeach; ?>
                  </ul>
              <?php  wp_reset_postdata();  } }?>
            
        
           
      </div>
    
    
    
    
    
    
    
    </div>

   
  </div>




<?php get_footer();?>
