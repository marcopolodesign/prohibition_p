<?php /* Template Name: Sponsorship  */?>
<?php get_header();?>

<?php if( get_field('sponsorship_opportunities_text') ): ?>
<div id="sponsorship" class="starter-div pp-dark-blue-bg pp-blue-light pv5">
  <div class="flex flex-column wrap center justify-center measure-wide lh-copy mobile-padding">

      <h1 class="white mb2 icr-title">Sponsorship<br>opportunities</h1>
      <h2 class="white"><?php the_field("sponsorship_opportunities_text"); ?></h2>
 
  </div>
</div>
<?php endif; wp_reset_postdata(); ?>

<div class="container">
  <div class="center mt5 mb5 ">
  <h1 class="pp-dark-blue tc w-70-ns center mb4">"The number one source for data and information into this burgeoning market"</h1>
  <p class="tc pp-blue w-70-ns center">A unique opportunity to be promote your business in some of the cannabis industry’s most important publications. <span class="pp-dark-blue">Your potential reach in numbers:</span></p>

  <div class="flex sponsorship-potential-numbers mt5 container w-100 justify-between items-start relative">
  <div class="absolute w-100 h-100 pp-patern-bg overlay-pattern-sponsorship o-0"></div>
    <div class="flex flex-column ">
    <h1 class="h1-biggest pp-blue-cta center sponsorship-potential-h1">120K</h1>
    <p class="pp-blue tc">Global Cannabis investors and entrepreneurs</p>
    </div>

    <div class="flex flex-column">
    <h1 class="h1-biggest pp-blue-cta center sponsorship-potential-h1">6M</h1>
    <p class="pp-blue tc">Impressions across Twitter and LinkedIn</p>
    </div>

    <div class="flex flex-column">
    <h1 class="h1-biggest pp-blue-cta center sponsorship-potential-h1">60k</h1>
    <p class="pp-blue tc">Single report readership</p>
    </div>

    <div class="flex flex-column">
    <h1 class="h1-biggest pp-blue-cta center sponsorship-potential-h1">15k</h1>
    <p class="pp-blue tc">Single reports readers weekly</p>
    </div>

    
  
  </div>


  <div class="mv4 sponsors-audience-container flex justify-bewteen items-center ">
    <div class="w-40-ns mb3">
      <img src="/wp-content/uploads/2019/01/sponsors-audience-img@2x.png">
    </div>

    <div class="w-50-ns margin-auto pl5-ns flex flex-column">
      <h1 class="pp-dark-blue mb3">Your brand will be seen by decision makers and industry leaders across the globe.</h1>
      <p class="pp-blue">Our audience are market-makers and decision-makers. As a corporate sponsor you’ll get your brand in front of industry leaders, investment titans and policy controllers.</p>
    </div>
  </div>


  

</div>

<div class="sponsorship-resources  justify-center items-center container center pt5">
    <h1 class="center pp-dark-blue measure-wide tc-ns">As featured in</>
    <div class="center voice-industry-logos flex wrap w-80 mv4-ns">
      <?php  the_field('as_featured_logos'); wp_reset_postdata(); ?>
    </div>
</div>


<div class="clients mv6 relative height-min">
    <h1 class="tc mb4 pp-blue">Previous Sponsors</h1>
    <div class="height-min relative">
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

    <div class="center flex justify-center contact-us-home w-100 mt6">
    <a class="pa3 tc white cta-sections-inner pp-blue-cta-bg height-min" href="contact">Contact Us</a>
    </div>

   
</div>

<?php get_footer();?>
