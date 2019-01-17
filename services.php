<?php /* Template Name: Services  */?>


<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if( get_field('header_bg_image') ): ?>
  <div class="w-100 cover no-repeat relative page-header" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>)">
    <div class="starter-div services-starter-div flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 mobile-padding" >

      <h1 class="white "><?php the_title(); ?></h1>
      <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

      
      </div>

      <div class="services-icons mobile-padding flex justify-between items-center relative z-5 w-70 center mb3">
        <a href="#market" class="services-icons-link">
          <div class="market-service service">
            <div class="bg-white pp-shadow pp-corners flex center mb2">
            <h3 class="pp-dark-blue tc pa4 margin-auto ">Data /</h3>
            </div>
            
          </div>
        </a>

        <a href="#strategic" class="services-icons-link">
          <div class="market-service service">
            <div class="bg-white pp-shadow pp-corners flex center mb2">
              <h3 class="margin-auto pp-dark-blue tc pa4 w-100">Strategy /</h3>
            </div>
          </div>
        </a>

        <a href="#content" class="services-icons-link">
          <div class="market-service service">
            <div class="bg-white pp-shadow pp-corners flex center mb2">
            <h3 class="margin-auto pp-dark-blue tc pa4">Intelligence /</h3>
            </div>
            
          </div>
        </a>
      </div>

      
  </div>

 
  <h1 class=" service-quote mobile-padding pl7 pr7 mt5 mb0 pt5 pb0 pp-dark-blue tc">The international cannabis industry is a rapidly changing landscape that presents one of the biggest opportunities for investors and entrepreneurs globally.</h1>

  <div class="services-content container center mv5 ">
    <div class="market-service-container" id="market">

      <div class="market-service-inner center container pv4 flex flex-column justify-between items-center relative">

        <div class="service-info center mb5">
            <h2 class="pp-dark-blue tc mb2 f3">Data /</h2>
            <p class="pp-blue w-60 margin-auto tc lh-copy">Bespoke research and market data for politicians, investors and key stakeholders in the cannabis industry. Understand the potential of the emerging frontier.</p>
        </div>
        
        <div class="w-60 margin-auto">
          <img class="service-image" src="/wp-content/uploads/2019/01/market-chart.svg">
        </div>


      </div>
        
            
    </div>

    <div class="strategic-service-container mv5" id="strategic">
      <div class="strategic-service-inner center container pt4 flex justify-between flex-column items-center">

        <div class="service-info items-center ">
            <h2 class="pp-dark-blue mb2 tc f3">Strategy /</h2>
            <p class="pp-blue w-60 mb margin-auto lh-copy tc">We assist you in deepening your understanding, making decisions and implementation in this rapidly changing and opaque sector:</p>
            <div class="services-links flex flex-wrap justify-center mt4 pt2 mb3">
              <a class="fw3 mb3" href="/contact">Market Analysis</a>
              <a class="fw3 mb3" href="/contact">Regulatory Analysis</a>
              <a class="fw3 mb3" href="/contact">Market Entry Strategy</a>
              <a class="fw3 mb3" href="/contact">Business Development Support</a>
              <a class="fw3 mb3" href="/contact">Patient/Consumer Research</a>
              <a class="fw3 mb3" href="/contact">Licence application support</a>
              <a class="fw3 mb3" href="/contact">Expert interview phone consultation</a>

              
            </div>
        </div>
      </div>
      <div class="w-60 margin-auto">
          <img class="strategic-image" src="/wp-content/uploads/2018/11/strategic-image.svg">
        </div>
        
    </div>
    
    <div class="market-service-container" id="content">
      <div class="market-service-inner container pv4 flex justify-between items-center center flex-column">

        <div class="service-info ">
            <h2 class="pp-dark-blue f3 mb2 tc">Intelligence /</h2>
            <p class="pp-blue tc margin-auto w-60 lh-copy">Media, design and communications for international audiences. Create content that boosts your brand and grows your audience.</p>
            <div class="services-links flex flex-wrap justify-center mt4 pt2 mb3">
            <a class="fw3 mb3 mr3 content-link first-services-links items-center " href="reports">Reports</a>
             <a class="fw3 mb3 first-services-links content-link" href="news-insight">News + Insight</a>
              <a class="fw3 mb3 first-services-links" href="international-cannabis-weekly">International<br>Cannabis Weekly</a>
              <a class="fw3 mb3 content-link-a" href="contact">Request a quote</a>
            </div>
        </div>
        
        <div class="service-image w-70">
          <img class="service-image pl5" src="/wp-content/uploads/2018/11/services-image@2x.png">
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

