<?php /* Template Name: Reports  */?>

<?php get_header();?>

<div class="w-100 cover no-repeat bg-center relative bg-att-fixed" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>">
    <div class="starter-div flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 mobile-padding pb4" >

      <h1 class="white"><?php the_title(); ?></h1>
      <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

    

    </div>
</div>

<div class="flex">


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

<div id="<?php the_field('report_anchor'); ?>" class="flex flex-row items-start featured-report-container" >
          
          <div class="w-50 center report-cover-container pp-grey-press-bg flex  sticky top-0 h-100vh">

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
          </div>

          <div class="suscribe-pop-up pp-dark-blue-bg absolute left-0 w-100 h-100 flex pa4 overflow-scroll">
                  <div class="suscribe-inner pl4 pr4  margin-auto ">
                    <div class="w-100 flex pr3 mb4 pointer close-icon-container">
                      <img class="close-icon" src="/wp-content/uploads/2018/12/close-button-white.svg"><p class="white o-0 close-button-caption ml2">Close</p>
                    </div>
                    <h2 class="white mb2">Download our reports</h2>
                    <p class="white mb4">Please specify in the form below the mail to receive this report.</p>

                    <div class="form-container reports-form">
                      <form action="<?php the_field('form_action'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"  novalidate>
                          <div id="mc_embed_signup_scroll">
                            <div class="flex flex-row-ns">
                              <div class="mc-field-group w-45 mr2">
                                <input class="fw3 pb2 pa3 pl0 white mb3" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name...*">
                              </div>
                              <div class="mc-field-group w-45">
                                <input type="email" value="" name="EMAIL" class="fw3 pb2 pa3 pl0 white mb3 required email" id="mce-EMAIL" placeholder="Email...*">
                              </div>
                            </div>

                              <div class="mc-field-group pv3 ">
                                <select name="MMERGE4" class="fw3 pb2 pa3 pl0 white mb3 required w-100" id="mce-MMERGE4" placeholder="Choose an option...">
                                <option value="" disabled selected class="white fw3">Industry*</option>
                                  <option value="Licensed Producer">Licensed Producer</option>
                                  <option value="Distributor">Distributor</option>
                                  <option value="Investment">Investment</option>
                                  <option value="Legal">Legal</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="Entrepreneur">Entrepreneur</option>
                                  <option value="Journalist">Journalist</option>
                                  <option value="Government">Government</option>
                                  <option value="NGO">NGO</option>
                                  <option value="Other">Other</option>

                                </select>
                              </div>

                              <div class="mc-field-group">
                               <input type="text" value="" name="MMERGE3" class="fw3 pb2 pa3 pl0 white mb3 required" id="mce-MMERGE3" placeholder="Associated Company...*">
                              </div>

                              <div class="mc-field-group pv3">
                                <select name="MMERGE1" class="fw3 pb2 pa3 pl0 white mb3 required w-100" id="mce-MMERGE1" placeholder="Choose an option...">
                                  
                                   <option value="" disabled selected class="white fw3">Country*</option>
                                    <!-- <option value=""></option> -->
                                   
                                    <option value="United States of America">United States of America</option>
                                    <option value="Aaland Islands">Aaland Islands</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey  (Channel Islands)">Jersey (Channel Islands)</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Kosovo">Republic of Kosovo</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin">Saint Martin</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa (Independent)">Samoa (Independent)</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten">Sint Maarten</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>


                                </select>
                              </div>

                              <div class="mc-field-group input-group">
                                    <!-- <strong>Privacy Policy </strong> -->
                                    <ul class="form-checkboxes flex pv3"><li><input type="checkbox" value="1" name="group[6115][1]" id="mce-group[6115]-6115-0"><label class="white" for="mce-group[6115]-6115-0">I agree to the Privacy Policy*</label></li>
                                </ul>
                                </div>
                                <div class="mc-field-group input-group">
                                    <!-- <strong>International Cannabis Weekly </strong> -->
                                    <ul class="form-checkboxes flex pv3"><li><input type="checkbox" value="2" name="group[6123][2]" id="mce-group[6123]-6123-0"><label class="white" for="mce-group[6123]-6123-0">Join our newsletter - International Cannabis Weekly</label></li>
                                </ul>
                              </div>

                              <div class="clear mt3"><input type="submit" value="Send Reports" name="subscribe" id="mc-embedded-subscribe" class="button suscribe-btn pa3">
                              </div>
                          </div>
                      </form>

                    </div>

                    

                  </div>
              </div>
              
          </div>

          <div class="w-50 flex flex-column pv6 report-padding report-text center margin-auto">
            <p class="pp-grey fw3 mb4">Latest Release</p>
            <div class="mb5 report-title-div">
              <h1 class="mb3 pp-blue icr-title"><?php the_title(); ?></h1>
              <p class="pp-grey report-description"><?php the_field('report_description'); ?>
              </p>
            </div>
            <div>
            <?php if (get_field('report_bullets')): ?>
              <p class="mb2 pp-dark-blue fw3"><?php the_title(); ?> examines:</p>
              <p class="pp-grey"><?php the_field('report_bullets'); ?>
               <?php endif; ?>
              </p>
            </div>

            <a class="mt4 pp-blue-cta-bg white pa3 pl4 pr4 download-report">Download</a>

           
            <p class="pp-dark-blue mt5">Kindly Sponsored by: </p>
            <div>
              <div class="relative sponsors flex items-center">
                <div class="w-60 mt3">
                <img src="<?php the_field('featured_sponsor_image');?>">   
                </div>
              </div>
              <?php  $images = get_field('sponsors_logos');
                $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
                <ul class="first-grid sponsored-reports-logos flex flex-wrap items-center wrap w-100 mt3">
                <?php foreach( $images as $image ): ?>
                    <li>
                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>       
                    </li>
                <?php endforeach; ?>
                </ul>
              </div>
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
          'category__not_in' => 'Featured Report',
          'orderby' => 'date',
          'offset' => 1,
          'post__not_in' => array( $post->ID ),
          'order'=> 'DESC'
          
      );

      $post_query = new WP_Query($argsNew);
      if($post_query->have_posts() ) { while($post_query->have_posts() ) {
      $post_query->the_post(); ?>

        <div id="<?php the_field('report_anchor'); ?>" class="flex flex-row items-start" >
          
          <div class="w-50 center report-cover-container pp-grey-press-bg flex  sticky top-0 h-100vh">

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
          </div>

          <div class="suscribe-pop-up pp-dark-blue-bg absolute left-0 w-100 h-100 flex pa4 overflow-scroll">
                  <div class="suscribe-inner pl4 pr4 margin-auto ">
                    <div class="w-100 flex pr3 mb4 pointer close-icon-container">
                      <img class="close-icon" src="/wp-content/uploads/2018/12/close-button-white.svg"><p class="white o-0 close-button-caption ml2">Close</p>
                    </div>
                    <h2 class="white mb2">Download our reports</h2>
                    <p class="white mb4">Please specify in the form below the mail to receive this report.</p>

                    <div class="form-container reports-form ">
                      <form action="<?php the_field('form_action'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"  novalidate>
                      <div id="mc_embed_signup_scroll">
                      <div class="flex flex-row-ns">
                              <div class="mc-field-group w-45 mr2">
                                <input class="fw3 pb2 pa3 pl0 white mb3" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name...*">
                              </div>
                              <div class="mc-field-group w-45">
                                <input type="email" value="" name="EMAIL" class="fw3 pb2 pa3 pl0 white mb3 required email" id="mce-EMAIL" placeholder="Email...*">
                              </div>
                            </div>

                              <div class="mc-field-group pv3">
                                <select name="MMERGE4" class="fw3 pb2 pa3 pl0 white mb3 required w-100" id="mce-MMERGE4" placeholder="Choose an option...">
                                  
                                <option value="" disabled selected class="white fw3">Industry*</option>
                                  <option value="Licensed Producer">Licensed Producer</option>
                                  <option value="Distributor">Distributor</option>
                                  <option value="Investment">Investment</option>
                                  <option value="Legal">Legal</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="Entrepreneur">Entrepreneur</option>
                                  <option value="Journalist">Journalist</option>
                                  <option value="Government">Government</option>
                                  <option value="NGO">NGO</option>
                                  <option value="Other">Other</option>

                                </select>
                              </div>

                              <div class="mc-field-group">
                               <input type="text" value="" name="MMERGE3" class="fw3 pb2 pa3 pl0 white mb3 required" id="mce-MMERGE3" placeholder="Associated Company...*">
                              </div>

                              <div class="mc-field-group pv3">
                                <select name="MMERGE1" class="required fw3 pb2 pa3 pl0 white mb3 required w-100" id="mce-MMERGE1"  placeholder="Choose an option...">
                                  
                                   <option value="" disabled selected class="white fw3">Country*</option>
                                    <!-- <option value=""></option> -->
                                   
                                    <option value="United States of America">United States of America</option>
                                    <option value="Aaland Islands">Aaland Islands</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey  (Channel Islands)">Jersey (Channel Islands)</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Kosovo">Republic of Kosovo</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin">Saint Martin</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa (Independent)">Samoa (Independent)</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten">Sint Maarten</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>


                                </select>
                              </div>

                              <div class="mc-field-group input-group">
                                    <!-- <strong>Privacy Policy </strong> -->
                                    <ul class="form-checkboxes flex pv3"><li><input type="checkbox" value="1" name="group[6115][1]" id="mce-group[6115]-6115-0"><label class="white" for="mce-group[6115]-6115-0">I agree to the Privacy Policy*</label></li>
                                </ul>
                                </div>
                                <div class="mc-field-group input-group">
                                    <!-- <strong>International Cannabis Weekly </strong> -->
                                    <ul class="form-checkboxes flex pv3"><li><input type="checkbox" value="2" name="group[6123][2]" id="mce-group[6123]-6123-0"><label class="white" for="mce-group[6123]-6123-0">Join our newsletter - International Cannabis Weekly</label></li>
                                </ul>
                              </div>

                              <div class="clear mt3"><input type="submit" value="Send Reports" name="subscribe" id="mc-embedded-subscribe" class="button suscribe-btn pa3">
                              </div>
                          </div>
                      </form>

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
            <?php if (get_field('report_bullets')): ?>
              <p class="mb2 pp-dark-blue fw3"><?php the_title(); ?> examines:</p>
              <p class="pp-grey"><?php the_field('report_bullets'); ?>
               <?php endif; ?>
              </p>
            </div>

            <a class="mt4 pp-blue-cta-bg white pa3 pl4 pr4 download-report">Download</a>

           
            <p class="pp-dark-blue mt5">Kindly Sponsored by: </p>

            <div>
              <div class="relative sponsors flex items-center">
                <div class="w-60 mt3">
                <img src="<?php the_field('featured_sponsor_image');?>">   
                </div>
              </div>
              <?php  $images = get_field('sponsors_logos');
                $size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
                <ul class="first-grid sponsored-reports-logos flex flex-wrap items-center wrap w-100 mt3">
                <?php foreach( $images as $image ): ?>
                    <li>
                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>       
                    </li>
                <?php endforeach; ?>
                </ul>
              </div>
          </div>

        </div>
            
  
      <?php  wp_reset_postdata(); } }?>
</div>


<?php get_footer();?>
