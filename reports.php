<?php /* Template Name: Reports  */?>

<?php get_header();?>

<div class="w-100 cover no-repeat bg-center relative" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>">
    <div class="starter-div flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 mobile-padding" >

      <h1 class="white"><?php the_title(); ?></h1>
      <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

      <div class="flex flex-row no-wrap mt5 ">
        <a href="contact" class="fw5 third-cta white mr2 platform">Request Publication</a>
          <svg class="arrow-icon white-arrow" viewBox="0 0 6.175 6.283">
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

    </div>
</div>

<div class="starter-div flex">


<?php
  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 1,
      'category_name' => 'Featured Report',
      'orderby' => 'date',
      'post__not_in' => array( $post->ID ),
      'order'=> 'DESC'
      
  );

  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) { while($post_query->have_posts() ) {
  $post_query->the_post(); ?>

    <div id="<?php the_field('report_anchor'); ?>" class="flex flex-row featured-report mobile-padding w-80 center ">
            
            <div class="w-40 pa3 center relative slides-area featured flex margin-auto">

              <?php if(get_field("report_cover")) : ?>
              <img class="pp-borders absolute top-0 left-0 pp-shadow margin-auto" src="<?php the_field('report_cover'); ?>">
              <?php endif; ?>

              <?php if(get_field("report_inner_image_1")) : ?>

              <img class="pp-borders absolute top-0 left-0 pp-shadow margin-auto" src="<?php the_field('report_inner_image_1'); ?>">
              <?php endif; ?>

              <?php if(get_field("report_inner_image_2")) : ?>

              <img class="pp-borders absolute top-0 left-0 pp-shadow margin-auto" src="<?php the_field('report_inner_image_2'); ?>">
              <?php endif; ?>

              <?php if(get_field("report_inner_image_3")) : ?>

              <img class="pp-borders absolute top-0 left-0 pp-shadow margin-auto" src="<?php the_field('report_inner_image_3'); ?>">
              <?php endif; ?>

              <?php if(get_field("report_inner_image_4")) : ?>

              <img class="pp-borders absolute top-0 left-0 pp-shadow margin-auto" src="<?php the_field('report_inner_image_4'); ?>">

              <?php endif; ?>

              <div class="suscribe-pop-up pp-dark-blue-bg absolute top-0 left-0 w-100 h-100 flex ">
                <div class="suscribe-inner pa4 height-min margin-auto ">
                  <div class="w-100 flex pr3 mb4 pointer close-icon-container">
                    <img class="close-icon" src="/wp-content/uploads/2018/12/close-button-white.svg"><p class="white o-0 close-button-caption ml2">Close</p>
                  </div>
                  <h2 class="white mb2">Download our reports</h2>
                  <p class="white mb4">Please specify in the form below the mail to receive this report.</p>

                  <div class="form-container reports-form ">
                  <form action="<?php the_field('form_action'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						        <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                          <input class="fw3 pb2 pa3 pl0 white mb3" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name...">
                        </div>
                        <div class="mc-field-group">
                          <input class="fw3 pb2 pa3 pl0 white mb3"  type="email" value="" name="EMAIL" class="required email" placeholder="Email..." id="mce-EMAIL">
                        </div>

                        <div class="clear"><input type="submit" value="Send Reports" name="subscribe" id="mc-embedded-subscribe" class="button suscribe-btn pa3">
                        </div>
                    </div>
                  </form>

                  </div>

                  

                </div>
              </div>
      </div>

            <div class="w-50 flex flex-column  pa4 desktop-padding margin-auto">
              <p class="pp-grey fw5 mb4">Latest Release</p>
              <div class="mb5">
                <h1 class="mb3 pp-blue icr-title"><?php the_title(); ?></h1>
                <p class="pp-grey"><?php the_field('report_description'); ?>
                </p>
              </div>
              <div>
                <p class="mb2 pp-blue ttu fw5">OUR INVESTOR BASICS REPORTS EXAMINES:</p>
                <p class="pp-grey"><?php the_field('report_bullets'); ?>
                </p>
              </div>

              <a class="mt4 pp-blue-cta-bg white pa3 pl4 pr4 download-report">Download</a>
            </div>

          </div>
        

  <?php  wp_reset_postdata(); } }?>

    </div>

<div class="reports-text cr-text mobile-padding mobile-mv center w-60 tc mv6">
  <?php the_field("reports_page_text"); ?>
</div>

<div class="reports flex flex-wrap reports-collection mv6 pt5">
<?php
      $argsNew = array(
          'post_type' => 'post',
          
          'category_name' => 'Report',
          'orderby' => 'date',
          'offset' => 1,
          'post__not_in' => array( $post->ID ),
          'order'=> 'DESC'
          
      );

      $post_query = new WP_Query($argsNew);
      if($post_query->have_posts() ) { while($post_query->have_posts() ) {
      $post_query->the_post(); ?>

        <div id="<?php the_field('report_anchor'); ?>" class="flex flex-row" >
          
          <div class="w-50 h-100  center report-cover-container pp-grey-press-bg flex margin-auto">

          <div class="reports-normal-container relative pp-borders">
            <div class="relative slides-area reports-area-nf">
              <?php if(get_field("report_cover")) : ?>
              
                <img class="pp-borders absolute top-0 left-0 margin-auto pp-shadow" src="<?php the_field('report_cover'); ?>">
                <?php endif; ?>
             
                <?php if(get_field("report_inner_image_1")) : ?>
                
                <img class="pp-borders absolute top-0 left-0  margin-auto pp-shadow" src="<?php the_field('report_inner_image_1'); ?>">
                <?php endif; ?>
            

                <?php if(get_field("report_inner_image_2")) : ?>
                <img class="pp-borders absolute top-0 left-0 margin-auto pp-shadow" src="<?php the_field('report_inner_image_2'); ?>">
                <?php endif; ?>
                
                <?php if(get_field("report_inner_image_3")) : ?>
                
                <img class="pp-borders absolute top-0 left-0  margin-auto pp-shadow" src="<?php the_field('report_inner_image_3'); ?>">
                <?php endif; ?>
               
                <?php if(get_field("report_inner_image_4")) : ?>
                
                <img class="pp-borders  absolute top-0 left-0 margin-auto pp-shadow" src="<?php the_field('report_inner_image_4'); ?>">
               
                <?php endif; ?>
          </div>

               <div class="suscribe-pop-up pp-dark-blue-bg absolute top-0 left-0 w-100 h-100 flex ">
                <div class="suscribe-inner pa4 height-min margin-auto ">
                  <div class="w-100 flex pr3 mb4 pointer close-icon-container">
                    <img class="close-icon" src="/wp-content/uploads/2018/12/close-button-white.svg"><p class="white o-0 close-button-caption ml2">Close</p>
                  </div>
                  <h2 class="white mb2">Download our reports</h2>
                  <p class="white mb4">Please specify in the form below the mail to receive this report.</p>

                  <div class="form-container reports-form ">
                    <form action="<?php the_field('form_action'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                              <input class="fw3 pb2 pa3 pl0 white mb3" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name...">
                            </div>
                            <div class="mc-field-group">
                              <input class="fw3 pb2 pa3 pl0 white mb3"  type="email" value="" name="EMAIL" class="required email" placeholder="Email..." id="mce-EMAIL">
                            </div>

                            <div class="clear"><input type="submit" value="Send Reports" name="subscribe" id="mc-embedded-subscribe" class="button suscribe-btn pa3">
                            </div>
                        </div>
                    </form>

                  </div>

                  

                </div>
              </div>
          </div>

          </div>

          <div class="w-50 flex flex-column pv6 report-padding report-text center margin-auto">
            <!-- <p class="pp-grey fw5 mb4">Latest Release</p> -->
            <div class="mb5 report-title-div">
              <h1 class="mb3 pp-blue icr-title"><?php the_title(); ?></h1>
              <p class="pp-grey report-description"><?php the_field('report_description'); ?>
              </p>
            </div>
            <div>
              <p class="mb2 pp-blue ttu fw5">OUR INVESTOR BASICS REPORTS EXAMINES:</p>
              <p class="pp-grey"><?php the_field('report_bullets'); ?>
              </p>
            </div>

            <a class="mt4 pp-blue-cta-bg white pa3 pl4 pr4 download-report">Download</a>
          </div>

        </div>
            
  
  <?php  } }?>
</div>


<?php get_footer();?>
