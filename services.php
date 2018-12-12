<?php /* Template Name: Services  */?>


<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if( get_field('header_bg_image') ): ?>
  <div class="w-100 cover no-repeat relative page-header" style="background-color:<?php the_field('header_bg_color'); ?>; <?php image_background('header_bg_image'); ?>)">
    <div class="starter-div flex flex-column wrap center justify-center measure-wide lh-copy relative z-5 mobile-padding" >

      <h1 class="white"><?php the_title(); ?></h1>
      <h2 class="white"><?php the_field('pp_header_text'); ?></h2>

      
      </div>

      <div class="services-icons mobile-padding flex justify-between relative z-5 measure-wide center">
        <a href="#market" class="services-icons-link">
          <div class="market-service service">
            <div class="service-icon bg-white pp-shadow flex center mb2">
              <svg class="icw-icon " viewBox="0 0 40.013 24.806">
                <defs>
                  <style>
                    .cls-1 {
                      fill: none;
                      stroke: #1fa5ff;
                      stroke-linecap: round;
                      stroke-width: 1.3px;
                    }
                  </style>
                </defs>
                <g id="Group_574" data-name="Group 574" transform="translate(-0.05 -0.037)">
                  <path id="Path_15347_1_" class="cls-1" d="M4.4,18.249l5.544-7.785c.126-.212.315-.212.567.071l3.465,5.449a.3.3,0,0,0,.441.142c.063,0,.063-.071.063-.071L21.85.839c.126-.142.315-.212.441-.071l.063.071L28.591,14.5c.189.212.378.212.567-.142L34.7,4.024" transform="translate(-1.081 0)"/>
                  <path id="Path_15348_1_" class="cls-1" d="M5.1,23.559l7.735-10.111c.067-.138.2-.138.333-.069L17.3,16.2a.2.2,0,0,0,.267,0l8.6-7.222a.2.2,0,0,1,.267,0l5.468,4.609a.2.2,0,0,0,.267,0l5.668-3.508" transform="translate(0.722 -2.407)"/>
                  <path id="Path_15349_1_" class="cls-1" d="M.7,5.6V25.628H39.412" transform="translate(0 -1.435)"/>
                </g>
              </svg>
            </div>
            <h3 class="pp-blue tc">Market Data<br>& Insights</h3>
          </div>
        </a>

        <a href="#strategic" class="services-icons-link">
          <div class="market-service service">
            <div class="service-icon bg-white pp-shadow flex center mb2">
            <svg class="icw-icon" viewBox="0 0 41.7 41.7">
              <defs>
                <style>
                  .cls-1, .cls-2 {
                    fill: none;
                    stroke: #1fa5ff;
                    stroke-miterlimit: 10;
                    stroke-width: 1.3px;
                  }

                  .cls-1 {
                    stroke-linecap: round;
                    stroke-linejoin: round;
                  }

                  .cls-3 {
                    fill: #1fa5ff;
                  }
                </style>
              </defs>
              <g id="Group_576" data-name="Group 576" transform="translate(-895.35 -3379.35)">
                <g id="Group_576-2" data-name="Group 576" transform="translate(895.5 3379.5)">
                  <path id="Path_2282" data-name="Path 2282" class="cls-1" d="M40.9,20.7A20.126,20.126,0,0,1,24,40.6h0a18.412,18.412,0,0,1-3.3.3c-1,0-2-.1-3-.2a20.228,20.228,0,0,1,0-40c1-.1,2-.2,3-.2A18.412,18.412,0,0,1,24,.8h0A20.126,20.126,0,0,1,40.9,20.7Z"/>
                  <path id="Path_2283" data-name="Path 2283" class="cls-1" d="M40.9,20.7A20.126,20.126,0,0,1,24,40.6h0c-1-.2-2-.4-3-.7A20.166,20.166,0,0,1,21,1.5h0a16.276,16.276,0,0,1,3-.7h0A20.126,20.126,0,0,1,40.9,20.7Z"/>
                  <path id="Path_2284" data-name="Path 2284" class="cls-1" d="M35,20.7A20.177,20.177,0,0,1,21,39.9a31.845,31.845,0,0,1-3.3.8,20.228,20.228,0,0,1,0-40,15.944,15.944,0,0,1,3.3.8A20.177,20.177,0,0,1,35,20.7Z"/>
                  <path id="Path_2285" data-name="Path 2285" class="cls-2" d="M20.8.6S16,7.7,16,20.8,20.8,41,20.8,41"/>
                  <path id="Path_2286" data-name="Path 2286" class="cls-2" d="M20.8.6s4.8,7.1,4.8,20.2S20.8,41,20.8,41"/>
                  <path id="Path_2287" data-name="Path 2287" class="cls-2" d="M41,20.2s-7.1-4.8-20.2-4.8S.6,20.2.6,20.2"/>
                  <path id="Path_2288" data-name="Path 2288" class="cls-2" d="M41,20.2S33.9,25,20.8,25,.6,20.2.6,20.2"/>
                </g>
                <circle id="Ellipse_50" data-name="Ellipse 50" class="cls-3" cx="3" cy="3" r="3" transform="translate(924.8 3407.7)"/>
                <circle id="Ellipse_51" data-name="Ellipse 51" class="cls-3" cx="3" cy="3" r="3" transform="translate(924.8 3386.7)"/>
                <circle id="Ellipse_52" data-name="Ellipse 52" class="cls-3" cx="3" cy="3" r="3" transform="translate(901.8 3407.7)"/>
              </g>
            </svg>

            </div>
            <h3 class="pp-blue tc">Strategic<br>Consultancy</h3>
          </div>
        </a>

        <a href="#content" class="services-icons-link">
          <div class="market-service service">
            <div class="service-icon content-icon bg-white pp-shadow flex center mb2">
            <svg class="icw-icon content-svg" viewBox="0 0 45 45">
                <defs>
                  <style>
                    .cls-1, .cls-2, .cls-4, .cls-5 {
                      fill: none;
                    }

                    .cls-1, .cls-2, .cls-4 {
                      stroke: #1fa5ff;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                    }

                    .cls-1 {
                      stroke-linejoin: round;
                    }

                    .cls-1, .cls-2 {
                      stroke-width: 1.3px;
                    }

                    .cls-3 {
                      fill: #1fa5ff;
                    }

                    .cls-4 {
                      stroke-width: 0.8px;
                    }
                  </style>
                </defs>
                <g id="Group_1208" data-name="Group 1208" transform="translate(-633 -4486)">
                  <g id="Group_1207" data-name="Group 1207" transform="translate(639.5 4486.5)">
                    <path id="Path_11769" data-name="Path 11769" class="cls-1" d="M41.927,96.7A8.156,8.156,0,0,1,40.6,95" transform="translate(-31.785 -74.905)"/>
                    <path id="Path_11770" data-name="Path 11770" class="cls-1" d="M51.945,41.5a8.369,8.369,0,0,1-1.2,4.354c-.539.643-.975,1.2-1.327,1.7h0A9.235,9.235,0,0,0,47.8,50.6v.021h0c-.228.726-1.991,1.244-4.375,1.389-2.405-.145-4.168-.664-4.375-1.389a9.235,9.235,0,0,0-1.617-3.048h0c-.353-.5-.788-1.058-1.327-1.7a8.424,8.424,0,0,1-1.2-4.354A8.522,8.522,0,0,1,51.945,41.5Z" transform="translate(-27.267 -25.761)"/>
                    <path id="Path_11771" data-name="Path 11771" class="cls-1" d="M106.227,95a8.156,8.156,0,0,1-1.327,1.7" transform="translate(-82.752 -74.905)"/>
                    <path id="Path_11772" data-name="Path 11772" class="cls-1" d="M63.65,118c-.041.228-.643,3.566-2.053,5.142a2.069,2.069,0,0,1-.29.228,3.493,3.493,0,0,1-2.032.643h0a3.712,3.712,0,0,1-2.032-.643,2.069,2.069,0,0,1-.29-.228C55.481,121.525,54.9,118,54.9,118c.228.746,1.991,1.244,4.375,1.389C61.639,119.244,63.4,118.746,63.65,118Z" transform="translate(-43.12 -93.136)"/>
                    <path id="Path_11773" data-name="Path 11773" class="cls-1" d="M97.1,118h0" transform="translate(-76.57 -93.136)"/>
                    <line id="Line_18" data-name="Line 18" class="cls-1" transform="translate(14.123 30.235)"/>
                    <path id="Path_11774" data-name="Path 11774" class="cls-1" d="M62.834,143.562a31.973,31.973,0,0,1,1.763,4.873c0,.643-3.173,6.926-3.836,8.253l-.062.124a.69.69,0,0,1-.062-.124c-.664-1.306-3.836-7.61-3.836-8.253a33,33,0,0,1,1.8-4.935" transform="translate(-44.626 -113.348)"/>
                    <line id="Line_19" data-name="Line 19" class="cls-1" transform="translate(18.167 30.235)"/>
                    <path id="Path_11777" data-name="Path 11777" class="cls-1" d="M58.9,74.9c.391,0,1.068,1.922,1.485,1.922S61.427,74.9,61.9,74.9s.7,1.922,1.146,1.922.912-1.922,1.329-1.922.886,1.922,1.3,1.922,1.042-1.953,1.355-1.922" transform="translate(-47.12 -59.27)"/>
                    <line id="Line_20" data-name="Line 20" class="cls-2" x2="3.11" transform="translate(28.431 15.264)"/>
                    <line id="Line_21" data-name="Line 21" class="cls-2" x2="3.11" transform="translate(0.5 15.264)"/>
                    <line id="Line_22" data-name="Line 22" class="cls-2" x2="1.472" y2="1.327" transform="translate(6.285 5.311)"/>
                    <line id="Line_23" data-name="Line 23" class="cls-2" x1="1.472" y2="1.327" transform="translate(24.678 5.311)"/>
                    <line id="Line_24" data-name="Line 24" class="cls-2" y2="3.193" transform="translate(16.072 0.5)"/>
                    <line id="Line_25" data-name="Line 25" class="cls-2" x1="3.11" transform="translate(28.431 15.264)"/>
                    <line id="Line_26" data-name="Line 26" class="cls-2" x2="3.11" transform="translate(28.431 15.264)"/>
                    <circle id="Ellipse_69" data-name="Ellipse 69" class="cls-3" cx="1.058" cy="1.058" r="1.058" transform="translate(15.077 36.73)"/>
                    <line id="Line_27" data-name="Line 27" class="cls-4" y1="3.567" transform="translate(16.135 38.865)"/>
                  </g>
                  <rect id="Rectangle_637" data-name="Rectangle 637" class="cls-5" width="45" height="45" transform="translate(633 4486)"/>
                </g>
            </svg>


            </div>
            <h3 class="pp-blue tc">Content &<br>Creative</h3>
          </div>
        </a>
    </div>
  </div>

  <h1 class=" service-quote mobile-padding pl7 pr7 mv6 pt5 pb2 pp-dark-blue tc">The international cannabis industry is a rapidly changing landscape that presents one of the biggest opportunities for investors and entrepreneurs globally.</h1>

  <div class="services-content mv-5 ">
    <div class="market-service-container" id="#market">
      <div class="market-service-inner center container pv4 flex justify-between items-center">

        <div class="service-info w-50">
            <div class="service-icon bg-white pp-shadow flex ml0 mb4">
                <svg class="icw-icon" viewBox="0 0 41.7 41.7">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: none;
                        stroke: #1fa5ff;
                        stroke-linecap: round;
                        stroke-width: 1.3px;
                      }
                    </style>
                  </defs>
                  <g id="Group_574" data-name="Group 574" transform="translate(-0.05 -0.037)">
                    <path id="Path_15347_1_" class="cls-1" d="M4.4,18.249l5.544-7.785c.126-.212.315-.212.567.071l3.465,5.449a.3.3,0,0,0,.441.142c.063,0,.063-.071.063-.071L21.85.839c.126-.142.315-.212.441-.071l.063.071L28.591,14.5c.189.212.378.212.567-.142L34.7,4.024" transform="translate(-1.081 0)"/>
                    <path id="Path_15348_1_" class="cls-1" d="M5.1,23.559l7.735-10.111c.067-.138.2-.138.333-.069L17.3,16.2a.2.2,0,0,0,.267,0l8.6-7.222a.2.2,0,0,1,.267,0l5.468,4.609a.2.2,0,0,0,.267,0l5.668-3.508" transform="translate(0.722 -2.407)"/>
                    <path id="Path_15349_1_" class="cls-1" d="M.7,5.6V25.628H39.412" transform="translate(0 -1.435)"/>
                  </g>
                </svg>
            </div>
            <h2 class="pp-blue mb2">Market Data<br>& Insights</h2>
            <p class="pp-blue w-60 lh-copy">Detailed research and analysis for both regulators and investors interested in the potential of the International market.</p>
            <div class="services-links flex flex-wrap justify-between w-30 pr3 mv4">
            <a class="fw5 mb3 mr3" href="reports">Reports</a>
             <a class="fw5 mb3" href="international-country-review">International<br>Country Review</a>
              <a class="fw5 mb3" href="international-cannabis-weekly">International<br>Cannabis Weekly</a>
            </div>
        </div>
        
        <div class="service-image w-50">
          <img class="service-image" src="/wp-content/uploads/2018/11/services-image@2x.png">
        </div>


      </div>
        
            
    </div>

    <div class="strategic-service-container" id="strategic">
      <div class="strategic-service-inner center container pv6 flex justify-between items-center">


        <div class="service-image w-50">
          <img class="strategic-image" src="/wp-content/uploads/2018/11/strategic-image.svg">
        </div>


        <div class="service-info w-50 items-end">
            <div class="service-icon strategic-align bg-white pp-shadow flex mb4">
                <svg class="icw-icon" viewBox="0 0 41.7 41.7">
                  <defs>
                    <style>
                      .cls-1, .cls-2 {
                        fill: none;
                        stroke: #1fa5ff;
                        stroke-miterlimit: 10;
                        stroke-width: 1.3px;
                      }

                      .cls-1 {
                        stroke-linecap: round;
                        stroke-linejoin: round;
                      }

                      .cls-3 {
                        fill: #1fa5ff;
                      }
                    </style>
                  </defs>
                  <g id="Group_576" data-name="Group 576" transform="translate(-895.35 -3379.35)">
                    <g id="Group_576-2" data-name="Group 576" transform="translate(895.5 3379.5)">
                      <path id="Path_2282" data-name="Path 2282" class="cls-1" d="M40.9,20.7A20.126,20.126,0,0,1,24,40.6h0a18.412,18.412,0,0,1-3.3.3c-1,0-2-.1-3-.2a20.228,20.228,0,0,1,0-40c1-.1,2-.2,3-.2A18.412,18.412,0,0,1,24,.8h0A20.126,20.126,0,0,1,40.9,20.7Z"/>
                      <path id="Path_2283" data-name="Path 2283" class="cls-1" d="M40.9,20.7A20.126,20.126,0,0,1,24,40.6h0c-1-.2-2-.4-3-.7A20.166,20.166,0,0,1,21,1.5h0a16.276,16.276,0,0,1,3-.7h0A20.126,20.126,0,0,1,40.9,20.7Z"/>
                      <path id="Path_2284" data-name="Path 2284" class="cls-1" d="M35,20.7A20.177,20.177,0,0,1,21,39.9a31.845,31.845,0,0,1-3.3.8,20.228,20.228,0,0,1,0-40,15.944,15.944,0,0,1,3.3.8A20.177,20.177,0,0,1,35,20.7Z"/>
                      <path id="Path_2285" data-name="Path 2285" class="cls-2" d="M20.8.6S16,7.7,16,20.8,20.8,41,20.8,41"/>
                      <path id="Path_2286" data-name="Path 2286" class="cls-2" d="M20.8.6s4.8,7.1,4.8,20.2S20.8,41,20.8,41"/>
                      <path id="Path_2287" data-name="Path 2287" class="cls-2" d="M41,20.2s-7.1-4.8-20.2-4.8S.6,20.2.6,20.2"/>
                      <path id="Path_2288" data-name="Path 2288" class="cls-2" d="M41,20.2S33.9,25,20.8,25,.6,20.2.6,20.2"/>
                    </g>
                    <circle id="Ellipse_50" data-name="Ellipse 50" class="cls-3" cx="3" cy="3" r="3" transform="translate(924.8 3407.7)"/>
                    <circle id="Ellipse_51" data-name="Ellipse 51" class="cls-3" cx="3" cy="3" r="3" transform="translate(924.8 3386.7)"/>
                    <circle id="Ellipse_52" data-name="Ellipse 52" class="cls-3" cx="3" cy="3" r="3" transform="translate(901.8 3407.7)"/>
                  </g>
                </svg>
            </div>
            <h2 class="pp-blue mb2 tr">Strategic<br>Consultancy</h2>
            <p class="pp-blue w-60 lh-copy tr strategic-align">Market entry and expansion strategy including regulatory relationships, licensing applications and cross-border commerce.</p>
            <div class="services-links flex flex-wrap justify-end mv4">
              <a class="fw5 mb3" href="contact">Request a quote</a>
            </div>
        </div>

      </div>
        
    </div>
    
    <div class="market-service-container" id="content">
      <div class="market-service-inner container pv6 flex justify-between items-center center">

        <div class="service-info w-50">
            <div class="service-icon content-icon bg-white pp-shadow flex mb4">
              <svg class="icw-icon content-svg" viewBox="0 0 45 45">
                <defs>
                  <style>
                    .cls-1, .cls-2, .cls-4, .cls-5 {
                      fill: none;
                    }

                    .cls-1, .cls-2, .cls-4 {
                      stroke: #a2bed0;
                      stroke-linecap: round;
                      stroke-miterlimit: 10;
                    }

                    .cls-1 {
                      stroke-linejoin: round;
                    }

                    .cls-1, .cls-2 {
                      stroke-width: 1.3px;
                    }

                    .cls-3 {
                      fill: #1fa5ff;
                    }

                    .cls-4 {
                      stroke-width: 0.8px;
                    }
                  </style>
                </defs>
                <g id="Group_1208" data-name="Group 1208" transform="translate(-633 -4486)">
                  <g id="Group_1207" data-name="Group 1207" transform="translate(639.5 4486.5)">
                    <path id="Path_11769" data-name="Path 11769" class="cls-1" d="M41.927,96.7A8.156,8.156,0,0,1,40.6,95" transform="translate(-31.785 -74.905)"/>
                    <path id="Path_11770" data-name="Path 11770" class="cls-1" d="M51.945,41.5a8.369,8.369,0,0,1-1.2,4.354c-.539.643-.975,1.2-1.327,1.7h0A9.235,9.235,0,0,0,47.8,50.6v.021h0c-.228.726-1.991,1.244-4.375,1.389-2.405-.145-4.168-.664-4.375-1.389a9.235,9.235,0,0,0-1.617-3.048h0c-.353-.5-.788-1.058-1.327-1.7a8.424,8.424,0,0,1-1.2-4.354A8.522,8.522,0,0,1,51.945,41.5Z" transform="translate(-27.267 -25.761)"/>
                    <path id="Path_11771" data-name="Path 11771" class="cls-1" d="M106.227,95a8.156,8.156,0,0,1-1.327,1.7" transform="translate(-82.752 -74.905)"/>
                    <path id="Path_11772" data-name="Path 11772" class="cls-1" d="M63.65,118c-.041.228-.643,3.566-2.053,5.142a2.069,2.069,0,0,1-.29.228,3.493,3.493,0,0,1-2.032.643h0a3.712,3.712,0,0,1-2.032-.643,2.069,2.069,0,0,1-.29-.228C55.481,121.525,54.9,118,54.9,118c.228.746,1.991,1.244,4.375,1.389C61.639,119.244,63.4,118.746,63.65,118Z" transform="translate(-43.12 -93.136)"/>
                    <path id="Path_11773" data-name="Path 11773" class="cls-1" d="M97.1,118h0" transform="translate(-76.57 -93.136)"/>
                    <line id="Line_18" data-name="Line 18" class="cls-1" transform="translate(14.123 30.235)"/>
                    <path id="Path_11774" data-name="Path 11774" class="cls-1" d="M62.834,143.562a31.973,31.973,0,0,1,1.763,4.873c0,.643-3.173,6.926-3.836,8.253l-.062.124a.69.69,0,0,1-.062-.124c-.664-1.306-3.836-7.61-3.836-8.253a33,33,0,0,1,1.8-4.935" transform="translate(-44.626 -113.348)"/>
                    <line id="Line_19" data-name="Line 19" class="cls-1" transform="translate(18.167 30.235)"/>
                    <path id="Path_11777" data-name="Path 11777" class="cls-1" d="M58.9,74.9c.391,0,1.068,1.922,1.485,1.922S61.427,74.9,61.9,74.9s.7,1.922,1.146,1.922.912-1.922,1.329-1.922.886,1.922,1.3,1.922,1.042-1.953,1.355-1.922" transform="translate(-47.12 -59.27)"/>
                    <line id="Line_20" data-name="Line 20" class="cls-2" x2="3.11" transform="translate(28.431 15.264)"/>
                    <line id="Line_21" data-name="Line 21" class="cls-2" x2="3.11" transform="translate(0.5 15.264)"/>
                    <line id="Line_22" data-name="Line 22" class="cls-2" x2="1.472" y2="1.327" transform="translate(6.285 5.311)"/>
                    <line id="Line_23" data-name="Line 23" class="cls-2" x1="1.472" y2="1.327" transform="translate(24.678 5.311)"/>
                    <line id="Line_24" data-name="Line 24" class="cls-2" y2="3.193" transform="translate(16.072 0.5)"/>
                    <line id="Line_25" data-name="Line 25" class="cls-2" x1="3.11" transform="translate(28.431 15.264)"/>
                    <line id="Line_26" data-name="Line 26" class="cls-2" x2="3.11" transform="translate(28.431 15.264)"/>
                    <circle id="Ellipse_69" data-name="Ellipse 69" class="cls-3" cx="1.058" cy="1.058" r="1.058" transform="translate(15.077 36.73)"/>
                    <line id="Line_27" data-name="Line 27" class="cls-4" y1="3.567" transform="translate(16.135 38.865)"/>
                  </g>
                  <rect id="Rectangle_637" data-name="Rectangle 637" class="cls-5" width="45" height="45" transform="translate(633 4486)"/>
                </g>
              </svg>

            </div>
            <h2 class="pp-blue mb2">Content &<br>Creative</h2>
            <p class="pp-blue w-60 lh-copy">Creative services that boost your business and brand. Grow your audience with cut-through content, marketing and design.</p>
            <div class="services-links flex flex-wrap justify-between w-30 mv4">
              <a class="fw5 mb3" href="contact">Request a quote</a>
            </div>
        </div>
        
        <div class="service-image w-50">
          <img class="service-image" src="/wp-content/uploads/2018/11/content-image@2x-1.png">
        </div>

      </div>
        
            
    </div>


  </div>


  <div class="clients mv6 center">
    <h1 class="tc mb4">We work with</h1>

    <div class="clients-grid container flex wrap ">
      <?php 

        $images = get_field('clients_gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
  </div>



<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>




<?php get_footer();?>

