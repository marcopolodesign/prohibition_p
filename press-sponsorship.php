<?php /* Template Name: Press & Sponsorship  */?>
<?php get_header();?>


<div class="flex flex-row general-container starter-div press-starter">
  <div class="w-30 sticky press-header-container"> 

    <div class="press-header pp-shadow  pa4">
      <h1 class="pp-blue"><?php the_title(); ?></h1>
      <h2 class="pp-blue mb2">Are you a member of the media?</h2>
      <?php if( get_field('press_header_text') ): ?>
        <div class="mv2"><?php the_field('press_header_text'); ?></div>
    </div>

      <!-- <div class="mediakit-container pp-blue-bg pp-corners mt4 mb2">
        <div class="mediakit-inner pa3 flex justify-center items-center">
          <svg class="mediakit-icon" viewBox="0 0 45.231 37.666">
            <defs>
              <style>
                .cls-1, .cls-2, .cls-4 {
                  fill: none;
                }

                .cls-1, .cls-2, .cls-3, .cls-4 {
                  stroke: #fff;
                  stroke-miterlimit: 10;
                }

                .cls-1 {
                  stroke-width: 1.072px;
                }

                .cls-2, .cls-3, .cls-4 {
                  stroke-width: 1.046px;
                }

                .cls-3 {
                  fill: #fff;
                  stroke-linejoin: round;
                }

                .cls-3, .cls-4 {
                  stroke-linecap: round;
                }
              </style>
            </defs>
            <g id="Group_1069" data-name="Group 1069" transform="translate(-0.064 0.023)">
              <path id="Path_2368" data-name="Path 2368" class="cls-1" d="M6.026,36.7h0A1.53,1.53,0,0,1,4.5,35.177V7.026A1.53,1.53,0,0,1,6.026,5.5h0A1.53,1.53,0,0,1,7.552,7.026V35.177A1.53,1.53,0,0,1,6.026,36.7Z" transform="translate(-0.925 -1.948)"/>
              <path id="Path_2369" data-name="Path 2369" class="cls-1" d="M2.812,39.907A3.3,3.3,0,0,1,.6,36.779V14.426A1.53,1.53,0,0,1,2.126,12.9a1.506,1.506,0,0,1,1.068.458,1.433,1.433,0,0,1,.387,1.068" transform="translate(0 -2.94)"/>
              <path id="Path_2370" data-name="Path 2370" class="cls-2" d="M8.5,37.12H43.365a3.256,3.256,0,0,0,3.281-3.281V1.95A1.449,1.449,0,0,0,45.2.5H9.95A1.449,1.449,0,0,0,8.5,1.95Z" transform="translate(-1.873 0)"/>
              <rect id="Rectangle_513" data-name="Rectangle 513" class="cls-3" width="11.444" height="11.444" transform="translate(11.967 13.469)"/>
              <line id="Line_1" data-name="Line 1" class="cls-4" x2="28.991" transform="translate(11.586 5.459)"/>
              <line id="Line_2" data-name="Line 2" class="cls-4" x2="28.991" transform="translate(11.967 9.273)"/>
              <line id="Line_3" data-name="Line 3" class="cls-4" x2="14.495" transform="translate(26.463 13.088)"/>
              <line id="Line_4" data-name="Line 4" class="cls-4" x2="14.495" transform="translate(26.463 16.903)"/>
              <line id="Line_5" data-name="Line 5" class="cls-4" x2="14.495" transform="translate(26.463 20.717)"/>
              <line id="Line_6" data-name="Line 6" class="cls-4" x2="14.495" transform="translate(26.463 24.532)"/>
              <line id="Line_7" data-name="Line 7" class="cls-4" x2="28.991" transform="translate(11.967 29.109)"/>
              <line id="Line_8" data-name="Line 8" class="cls-4" x2="14.495" transform="translate(26.463 33.687)"/>
              <path id="Path_2371" data-name="Path 2371" class="cls-4" d="M39.357,48.453H4.568A4.5,4.5,0,0,1,3.5,48.3" transform="translate(-0.688 -11.333)"/>
              <line id="Line_9" data-name="Line 9" class="cls-2" x1="29.219" transform="translate(8.077 0.5)"/>
            </g>
          </svg>
          <p class="white di ml3">Download our media kit <span><a href="#" style="font-size: 18px;"class="white underline">here</a></span></p>
        </div>
      </div>

       <a class="sponsorship-lightbox" href="#">
        <div class="sponsorship-opp-container pp-light-blue-bg pp-corners">
          <div class="mediakit-inner pa3 flex justify-center items-center">
          <svg class="mediakit-icon" viewBox="0 0 44.173 32.685">
              <defs>
                <style>
                  .cls-3 {
                    fill: #fff;
                    stroke-width: 1;
                  }
                </style>
              </defs>
              <g id="RCTsUh_2_" transform="translate(0 0)">
                <g id="Group_1127" data-name="Group 1127" transform="translate(0 0)">
                  <path id="Path_2713" data-name="Path 2713" class="cls-3" d="M43.69,8.674Q39.7,4.724,35.791.748C35.133.089,34.632.142,34.027.8c-1.053,1.106-2.133,2.212-3.265,3.265-.737.685-1.185,1.29-.29,2.107C28.813,7.963,28.6,7.963,26.39,7.357a8.085,8.085,0,0,0-2.976-.184c-1.659.184-3.318.579-4.977.869-.922.158-3.607-1.5-3.476-2.317.105-.711.158-1.185-.395-1.712C13.356,2.881,12.2,1.748,11.091.563c-.658-.685-1.185-.685-1.87,0C6.325,3.513,3.4,6.409.48,9.306c-.632.632-.711,1.106-.026,1.764,1.238,1.185,2.423,2.423,3.634,3.607.237.237.658.527.869.474,1.685-.553,2.186.922,2.423,1.791a13.875,13.875,0,0,0,3.344,6.214c-.974,2.107-.395,3.4,1.132,4.266,1.422.79,2.212,2.5,3.607,3.449.026.026.026.079.053.132a2.572,2.572,0,0,0,3.765,1.369c.263-.132.553-.448.79-.395a2.766,2.766,0,0,0,2.87-1.343c1.791,1.027,2.554.9,3.792-.579a10.388,10.388,0,0,0,2.238-.026c2-.5,1.29-3.186,3.107-3.976.29-.132.369-1.185.211-1.712a1.653,1.653,0,0,1,.448-1.58A17.465,17.465,0,0,0,35.212,18.5a8.84,8.84,0,0,1,3.134-4.476c.711.764,1.29.448,1.922-.211,1.106-1.185,2.265-2.317,3.423-3.449C44.322,9.727,44.27,9.279,43.69,8.674ZM4.824,13.308q-1.422-1.5-3-3.16Q5.93,6.041,10.091,1.854c1,1.053,2.028,2.159,3.028,3.212C10.486,7.7,7.668,10.517,4.824,13.308Zm7.794,13.271c-.527-.764-1.08-1.238-1.027-1.554a1.677,1.677,0,0,1,1.106-1.08c.29-.053,1,.632,1,1C13.751,25.368,13.172,25.816,12.619,26.579Zm2.844,2.107c-.448-.053-.816-.632-1.238-1,.342-.369.658-1.027,1.027-1.053.448-.026.922.474,1.738.922C16.253,28.133,15.8,28.712,15.463,28.686Zm2.554,3.16c-.553-.711-1.185-1.132-1.106-1.475a1.7,1.7,0,0,1,1.027-1.132c.29-.079,1.053.553,1.08.922C19.044,30.582,18.517,31.056,18.017,31.846Zm11.165-6.5c-2.028-1.9-3.95-3.871-5.9-5.819-.211-.211-.395-.527-.658-.606a3.5,3.5,0,0,0-1.053-.079c.026.342-.053.816.132,1.027.816.922,1.712,1.764,2.581,2.633,1.369,1.369,2.739,2.712,4.081,4.081.527.527,1.264,1.106.527,1.87-.816.843-1.4.026-1.949-.527-1.949-1.975-3.871-3.95-5.872-5.846-.342-.342-1-.369-1.5-.527a5.094,5.094,0,0,0,.579,1.5c1.475,1.58,3.028,3.055,4.529,4.582.553.553,1.343,1.159.527,1.975-.764.764-1.343-.026-1.843-.553-1.791-1.764-3.528-3.555-5.319-5.266-.29-.29-.869-.263-1.317-.395.105.448.079,1,.342,1.29,1.29,1.4,2.66,2.66,3.976,4.029.869.9.711,1.422-.5,1.87a2.811,2.811,0,0,0-2.238-2.844.823.823,0,0,1-.448-.527A2.663,2.663,0,0,0,15.331,25.1c-.342-1.633-1.159-2.66-2.949-2.66a1.232,1.232,0,0,1-.843-.5A17.581,17.581,0,0,1,9.248,18.18a7.767,7.767,0,0,0-2.475-4.213c2.4-2.4,4.74-4.74,7.136-7.11,1.448,1.475,2.87,3.423,5.635,2.344.053.105.132.237.184.342-1.29,1.211-2.581,2.4-3.818,3.66a4.1,4.1,0,0,0-1.027,1.633,2.654,2.654,0,0,0,1.185,3.081,2.912,2.912,0,0,0,3.423-.342,11.227,11.227,0,0,0,1.132-1.106,15.907,15.907,0,0,0,1-1.422c3.186,3.212,6.109,6.109,8.953,9.085.263.29.132.974.184,1.475C30.235,25.5,29.5,25.631,29.182,25.342Zm6.53-10.717a9.342,9.342,0,0,0-1.5,2.686,10.588,10.588,0,0,1-3.028,5.056c-1.422-1.448-2.791-2.87-4.055-4.134.395-.316.922-.764,1.475-1.211-.658-.132-1.317-.316-2-.395a6.218,6.218,0,0,1-3.765-2.317,2.383,2.383,0,0,0,.474-.606,4.388,4.388,0,0,0,.132-1.027c-.395.026-.9-.079-1.132.132-1.159,1.053-2.265,2.212-3.37,3.318-.711.737-1.527,1.185-2.37.316s-.369-1.659.369-2.37c1.475-1.448,2.9-2.923,4.4-4.345a4.023,4.023,0,0,1,4.239-1.132c2.344.9,4.266.685,5.74-1.29,1.949,1.949,3.818,3.844,5.9,5.9A12.425,12.425,0,0,0,35.712,14.625ZM39.4,12.6,31.946,5.066c.869-.843,1.949-1.843,3-2.844,2.317,2.37,4.766,4.9,7.32,7.5C41.373,10.649,40.346,11.676,39.4,12.6Z" transform="translate(0.028 -0.05)"/>
                </g>
              </g>
          </svg>

          <p class="white di ml3">Sponsorship opportunities</p>
          </div>
        </div>
      </a> -->

    <?php endif; ?>

  </div> 

  <div class="press-content w-70 ml4 flex flex-column">
    <h2 class="fw5 pp-blue mb3 press-section-title">Press Releases</h2>          
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
            <a class="previous-review press-release pp-shadow mb5 center flex flex-column" href="<?php the_field ('press_release_link') ?>">
                
                <div class="review-inner-img pa2 pl4 cover bg-center no-repeat" style="background-image: url(<?php the_field ('header_bg_image'); ?>)"></div>
                <div class="flex flex-row justify-between items-start margin-auto">
                  <div class="review-inner-title pa3 w-70">
                    <h5 class="pp-blue-cta"><?php the_title(); ?></h5>
                  </div>
                  <div class="review-arrow pa3">
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

   
    <h2 class="fw5 pp-blue mt6 mb3 press-section-title">Prohibition Partners in the media</h2>                     
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

              <?php if (get_field('header_bg_image')): ?>
              <a class="w-50 previous-review mb5 center flex flex-row" href="<?php the_field('press_release_link'); ?>">
                  
                <div class="media-logo w-20 pa2 cover no-repeat pp-grey-press-bg ">
                  <img src="<?php the_field ('channel_logo'); ?>">
                </div>
              
                <div class="flex flex-column no-wrap pp-shadow pp-corners">
                  <div class="review-inner-img pa2 pl4 cover no-repeat" style="<?php image_background('header_bg_image'); ?>)">
                  </div>
                  <div class="flex flex-row justify-between items-start margin-auto">
                    <div class="review-inner-title pa3 w-70">
                          <h5 class="pp-blue-cta"><?php the_title(); ?></h5>
                    </div>
                    <div class="review-arrow pa3">
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
                </div>
              </a>  
              
        
     <?php endif; wp_reset_postdata(); } } ?>

    </div>

  </div>

</div>

<div id="sponsorship" class="sponsorship-starter pp-blue-light mt6 pb6">
  <div class="starter-div  flex flex-column wrap center justify-center measure-wide lh-copy mobile-padding" >

  <h1 class="pp-blue mb4 icr-title">Sponsorship<br>opportunities</h1>
  <h2 class="pp-blue"><?php the_field("sponsorship_opportunities_text"); ?></h2>
  
  </div>
</div>

<div class="sponsorship-resources flex flex-row justify-center items-center container center">
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
  <div class="w-50">
    <img src="/wp-content/uploads/2018/12/essential-resources-img@2x.png">
  </div>

</div>

<div class="sponsorship-numbers mv6 center flex flex-row items-center justify-between container">
  <div class="numbers-investors pp-shadow  shadow-nohover  tc">
      <h1 class="mb1 pp-dark-blue h1-big">120k</h1>
      <p class="pp-grey">Global Cannabis investors and entrepreneurs</p>
  </div>

   <div class="numbers-social pp-shadow shadow-nohover  tc">
      <h1 class="pp-dark-blue mb1 h1-big">4M</h1>
      <p class="pp-grey">Social impressions
      anually</p>
  </div>

  
</div>


<div class="clients mv6">
    <h1 class="tc mb5 pp-blue">Previous Sponsors</h1>

    <div class="clients-grid container flex wrap center ">
      <?php 
        $imagesNew = get_field('clients_gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        

          if( $imagesNew ): ?>
          <ul>
              <?php foreach( $imagesNew as $imageNew ): ?>
                  <li>
                    <?php echo wp_get_attachment_image( $imageNew['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
    <?php endif; wp_reset_postdata(); ?>

           
        
    </div>
  </div>




<?php get_footer();?>
