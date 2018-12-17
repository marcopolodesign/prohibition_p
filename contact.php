<?php
  // Checks if form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from = $_POST['email']; 
    $nombre = $_POST['personName'];
    $company = $_POST['companyname'];
    $phone = $_POST['phone'];
    $budget = $_POST['budget'];
    $clientmessage = $_POST['message'];
    $message = "$nombre at $company left this message mensaje:\n\n$clientmessage\n\nFrom: $from\n\nBudget: $budget\nPhone: $phone".PHP_EOL;

    mail(
      "info@prohibitionpartners.com", 
      "Contact via website of Prohibition Partners", 
      $message,
      "From: website@prohibitionpartners.com"
    );

    header('Location: /thank-you'); 
  }
?>
<?php /* Template Name: Contact */?>

<?php get_header();?>

<div class="content-area contact-template pp-dark-blue-bg min-height-100vh flex">

    <div class="starter-div flex justify-between center general-container margin-auto">

      <div class="form-intro w-30 flex flex-column justify-between">
        <div>
          <h1 class="white">Contact Us</h1>
          <h2 class="white">Request publications, investment consultancy or any other doubts and our team will get in contact as soon as posible.</h2>
        </div>

        <div>
         

          <p class="white"><a href="mailto:info@prohibitionpartners.com" class="white pb4">info@prohibitionpartners.com</a><br>+44 020 7409 5042</p>
        </div>
      </div>
      
        <div class="form-container flex flex-column center w-60 bg-white pa5 pp-corners">
          <form action="" method="POST" id="subForm" class="sign-up form-inner justify-start no-smoothState">
            <div class="flex justify-between ">
                <input placeholder="Name*" id="fieldName" name="personName" type="text" class="mail-input w-45 " required="">
                <input placeholder="Company Name" id="companyName" name="companyname" type="text" class="mail-input w-45">
            </div>
              <div class="flex justify-between mt5">
                <input placeholder="Email*" id="fieldEmail" name="email" type="mail" class="mail-input w-45" required="">
                <input placeholder="Phone*" id="phone" name="phone" type="text" class="mail-input w-45"  >
              </div>
              <textarea placeholder="Leave us a message"  id="fieldMessage" name="message" type="text" class="mail-input message-input w-100 mt5"></textarea>
            
              <div class="w-100 button-container flex mt5">
                <button class="no-smoothState suscribe-btn pa3 w-20 send-btn"type="submit" class="ttu submit align-end " name="submit">Send</button>
              </div>
          </form>
        </div>


    </div>


  
    
</div>

<div class="offices-locations-container flex">
  <a class="pp-dark-blue-bg w-50 london-loc cover no-repeat bg-center" href="https://goo.gl/maps/F5pg6L1z1YT2"> 
    <div class="london-office pa6 flex margin-auto">
      <div class="london-off tc margin-auto">
        <p class="white mb4"><span class="fw5">London<br></span>
        3 Hill Street, W1J 5AL,<br>
        London, United Kingdom</p>
      </div>
    </div>
  </a> 

   <a class="w-50  bcn-loc cover no-repeat bg-center" href="https://goo.gl/maps/e1uruY5nDL82"> 
    <div class="bcn-office pa6 flex margin-auto">
      <div class="bcn-off tc margin-auto">
          <p class="white mb4"><span class="fw5">Barcelona<br></span>Carrer d'Estruc 9, 08002,<br>
            Barcelona, Spain</p>
        </div>
    </div>
  </a> 
 
</div>

<div class="team flex flex-wrap container justify-center mt5" id="team">
          <?php
            $argsTeam = array(
                'post_type' => 'post',
                'post_per_page' => -1,
                'category_name' => 'Team',
                'orderby' => 'date',
                
                'order'=> 'DESC'
                
            );

            $post_query = new WP_Query($argsTeam);
            if($post_query->have_posts() ) { while($post_query->have_posts() ) {
            $post_query->the_post(); ?>

              
              <div class="team-member flex flex-coulmn">
                <div class="pa4" >
                    
                  <div class="team-photo mb3 cover no-repeat bg-center pp-corners" style="<?php image_background('header_bg_image'); ?>)">
                  </div>
                  <h2 class="pp-blue fw5"><?php the_title(); ?></h2>
                  <p width="69" class="pp-grey mb2 pb2"><?php the_field('pp_header_text'); ?></p>
                  <div class="flex flex-row no-wrap items-center ">
                    <!-- social icons here -->
                    <?php if ( get_field('mail_adress') ): ?>
                      <a href="mailto:<?php the_field('mail_adress'); ?>" class="mr3">
                        <svg class="mail-icon" viewBox="0 0 18.61 18.711">
                          <defs>
                            <style>
                              .mail-1, .mail-2 {
                                fill: none;
                                stroke: #ccc;
                                stroke-linejoin: round;
                                stroke-width: 1.5px;
                              }

                              .mail-1 {
                                stroke-linecap: round;
                              }

                              .mail-3 {
                                fill: #ccc;
                              }
                            </style>
                          </defs>
                          <g id="Group_1206" data-name="Group 1206" transform="translate(-0.05 0.261)">
                            <path id="Path_11767" data-name="Path 11767" class="mail-1" d="M16.9,7.5V17.7H.8V1.6H10.9"/>
                            <line id="Line_16" data-name="Line 16" class="mail-2" x1="8.4" y2="8.3" transform="translate(9.2 0.8)"/>
                            <path id="Path_11768" data-name="Path 11768" class="mail-3" d="M9.8,9.7H8.7V8.6Z"/>
                            <line id="Line_17" data-name="Line 17" class="mail-1" x1="6" y2="5.9" transform="translate(11.6 0.8)"/>
                          </g>
                        </svg>

                      </a>  
                    <?php endif; ?>


                    <?php if ( get_field('twitter_adress') ): ?>
                      <a class="mr3 ml3" href="<?php the_field('twitter_adress'); ?>">
                        <svg class=" social-icon" viewBox="0 0 21.205 17.287">
                          <defs>
                            <style>
                              .cls-1 {
                                fill: #ccc;
                              }
                            </style>
                          </defs>
                          <path id="Twitter_IconOnly_Black" class="cls-1" d="M47.282,35.356a8.885,8.885,0,0,1-1.6,1.531c-.065.033-.065.1-.065.163A12.644,12.644,0,0,1,43.5,44.444a11.742,11.742,0,0,1-5.635,4.626,11.088,11.088,0,0,1-3.062.749,13.352,13.352,0,0,1-3.225,0,12.725,12.725,0,0,1-5.016-1.792c-.033,0-.033-.033-.065-.065a8.87,8.87,0,0,0,6.417-1.792,4.435,4.435,0,0,1-4.072-3.062,5.312,5.312,0,0,0,1.433.033l.489-.1a4.367,4.367,0,0,1-2.508-1.564,4.481,4.481,0,0,1-.977-2.769,4.644,4.644,0,0,0,1.954.554,4.4,4.4,0,0,1-1.824-2.671,4.159,4.159,0,0,1,.489-3.16,12.576,12.576,0,0,0,8.991,4.56,3.589,3.589,0,0,1-.065-.586,4.328,4.328,0,0,1,1.14-3.388A3.977,3.977,0,0,1,40.7,32.652a4.389,4.389,0,0,1,3.616,1.27.191.191,0,0,0,.163.065,8.185,8.185,0,0,0,2.606-1.01c.033,0,.033,0,.065-.033a4.494,4.494,0,0,1-1.889,2.41,7.559,7.559,0,0,0,1.238-.228c.391-.13.814-.261,1.205-.391A2.332,2.332,0,0,1,47.282,35.356Z" transform="translate(-26.5 -32.629)"/>
                        </svg>
                      </a>  
                    <?php endif; ?>

                    <?php if ( get_field('linkedin_adress') ): ?>
                      <a href="<?php the_field('linkedin_adress'); ?>">
                      <svg class="social-icon" viewBox="0 0 17.336 17.287">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: #ccc;
                            }
                          </style>
                        </defs>
                        <path id="Path_2358" data-name="Path 2358" class="cls-1" d="M15.991,0H1.3A1.282,1.282,0,0,0,0,1.249v14.79a1.282,1.282,0,0,0,1.3,1.249H16.039a1.282,1.282,0,0,0,1.3-1.249V1.249A1.359,1.359,0,0,0,15.991,0ZM5.138,14.742H2.545V6.483H5.09v8.259ZM3.842,5.33A1.5,1.5,0,0,1,2.353,3.842,1.456,1.456,0,0,1,3.842,2.4,1.5,1.5,0,0,1,5.33,3.89,1.456,1.456,0,0,1,3.842,5.33Zm10.9,9.412H12.2V10.708c0-.96,0-2.209-1.345-2.209S9.316,9.556,9.316,10.612v4.082H6.723V6.483H9.172v1.1H9.22a2.687,2.687,0,0,1,2.449-1.345c2.593,0,3.073,1.729,3.073,3.938Z" transform="translate(0 0)"/>
                      </svg>

                      </a>  
                    <?php endif; ?>
                            
                  </div>
                </div>
              </div>  
          
    
        <?php  wp_reset_postdata(); } } ?>
</div>


<?php get_footer(); ?>
