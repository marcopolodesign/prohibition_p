<?php /* Template Name: Services  */?>


<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if( get_field('header_bg_image') ): ?>
  <div class="w-100 cover no-repeat relative page-header" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>)">
    <div class="starter-div services-starter-div flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 mobile-padding" >

      <h1 class="white"><?php the_title(); ?></h1>
      <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

      
      </div>

      <div class="services-icons mobile-padding flex justify-between relative z-5 measure-wide center">
        <a href="#market" class="services-icons-link">
          <div class="market-service service">
            <div class="service-icon bg-white pp-shadow flex center mb2">
            <img class="icw-icon" src="/wp-content/uploads/2018/12/market.svg">
            </div>
            <h3 class="pp-blue tc">Market Data<br>& Insights</h3>
          </div>
        </a>

        <a href="#strategic" class="services-icons-link">
          <div class="market-service service">
            <div class="service-icon bg-white pp-shadow flex center mb2">
            <img class="icw-icon" src="/wp-content/uploads/2018/12/strategic.svg">

            </div>
            <h3 class="pp-blue tc">Strategic<br>Consultancy</h3>
          </div>
        </a>

        <a href="#content" class="services-icons-link">
          <div class="market-service service">
            <div class="service-icon content-icon bg-white pp-shadow flex center mb2">
            <img class="icw-icon" src="/wp-content/uploads/2018/12/content.svg">


            </div>
            <h3 class="pp-blue tc">Content &<br>Creative</h3>
          </div>
        </a>
    </div>
  </div>

  <h1 class=" service-quote mobile-padding pl7 pr7 mt6 mb0 pt5 pb0 pp-dark-blue tc">The international cannabis industry is a rapidly changing landscape that presents one of the biggest opportunities for investors and entrepreneurs globally.</h1>

  <div class="services-content w-80 center mv5 ">
    <div class="market-service-container" id="#market">
      <div class="market-service-inner center container pv4 flex justify-between items-center">

        <div class="service-info w-50">
            <div class="service-icon bg-white pp-shadow flex ml0 mb4">
            <img class="icw-icon" src="/wp-content/uploads/2018/12/market.svg">
            </div>
            <h2 class="pp-blue mb2">Market Data<br>& Insights</h2>
            <p class="pp-blue w-60 lh-copy">Detailed research and analysis for both regulators and investors interested in the potential of the International market.</p>
            <div class="services-links content-link flex flex-wrap justify-between w-30 pr3 mv4">
            <a class="fw3 mb3 mr3" href="reports">Reports</a>
             <a class="fw3 mb3" href="international-country-review">International<br>Country Review</a>
              <a class="fw3 mb3" href="international-cannabis-weekly">International<br>Cannabis Weekly</a>
            </div>
        </div>
        
        <div class="service-image w-50">
          <img class="service-image pl4" src="/wp-content/uploads/2018/11/services-image@2x.png">
        </div>


      </div>
        
            
    </div>

    <div class="strategic-service-container" id="strategic">
      <div class="strategic-service-inner center container pv4 flex justify-between items-center">


        <div class="service-image w-50">
          <img class="strategic-image" src="/wp-content/uploads/2018/11/strategic-image.svg">
        </div>


        <div class="service-info w-50 items-end">
            <div class="service-icon strategic-align bg-white pp-shadow flex mb4">
            <img class="icw-icon" src="/wp-content/uploads/2018/12/strategic.svg">
            </div>
            <h2 class="pp-blue mb2 tr">Strategic<br>Consultancy</h2>
            <p class="pp-blue w-60 lh-copy tr strategic-align">Market analysis and entry strategy including regulatory and competitor intelligence, regulatory relationships, licence applications and business development support.</p>
            <div class="services-links flex flex-column w-50 flex-wrap justify-end mv4">
              <a class="fw3 mb3" href="contact">Market Analysis</a>
              <a class="fw3 mb3" href="contact">Regulatory Analysis</a>
              <a class="fw3 mb3" href="contact">Market Entry Strategy</a>
              <a class="fw3 mb3" href="contact">Business Development Support</a>
              <a class="fw3 mb3" href="contact">Patient/Consumer Research</a>
              
            </div>
        </div>

      </div>
        
    </div>
    
    <div class="market-service-container" id="content">
      <div class="market-service-inner container pv4 flex justify-between items-center center">

        <div class="service-info w-50">
            <div class="service-icon content-icon bg-white pp-shadow flex mb4">
            <img class="icw-icon" src="/wp-content/uploads/2018/12/content.svg">

            </div>
            <h2 class="pp-blue mb2">Content &<br>Creative</h2>
            <p class="pp-blue w-60 lh-copy">Creative services that boost your business and brand. Grow your audience with cut-through content, marketing and design.</p>
            <div class="services-links content-link flex flex-wrap justify-between w-30 mv4">
              <a class="fw3 mb3 content-link-a" href="contact">Request a quote</a>
            </div>
        </div>
        
        <div class="service-image w-50">
          <img class="service-image pl5" src="/wp-content/uploads/2018/11/content-image@2x-1.png">
        </div>

      </div>
        
            
    </div>


  </div>


  <div class="clients mv6 center">
    <h1 class="tc mb4">We work with</h1>

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

                ?>                
                  <ul class="second-grid">
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



<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>




<?php get_footer();?>

