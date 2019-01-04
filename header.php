<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prohibition_Partners
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,500,500i" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header header-inner flex no-wrap justify-between items-center general-container z-9999 fixed center ">
		<div class="site-branding">
			<a href="/index.php">
			<svg class="logo" viewBox="0 0 419.936 98.774">
				<defs>
							<style>
						.cls-1-white {
							fill: #fff;
						}

						.cls-2-blue {
							fill: #748693	;
						}

						.cls-3-grey {
							fill: #54585A;
						}

						.cls-4-lightgrey {
							fill: #B6CFD1;
						}
					</style>
				</defs>
				<g id="Group_1273" data-name="Group 1273" transform="translate(-0.188)">
					<path id="Path_12932" data-name="Path 12932" class="cls-1-white" d="M254.956,65.853V89.559l-3.763,2.07V74.319l-17.121-9.6-17.309,9.783V91.817L213,89.559V65.853L233.884,54Z" transform="translate(-209.049 -48.732)"/>
					<path id="Path_12933" data-name="Path 12933" class="cls-4-lightgrey" d="M217.516,96.252V70.99L235.605,60.33l16.9,9.659v6.316l1,1V96.438L236.419,106.1ZM210.9,65.532V93.395l24.519,13.932,24.52-13.932V65.532L235.419,51.6Z" transform="translate(-210.712 -50.489)"/>
					<g id="Group_1262" data-name="Group 1262" transform="translate(0.188)">
						<g id="Group_1260" data-name="Group 1260">
							<path id="Path_12934" data-name="Path 12934" class="cls-3-grey" d="M254.55,86.407H247.4V51.6h11.1c8.278,0,12.794,3.951,12.794,11.1,0,7.338-4.7,11.665-12.418,11.665h-4.516V86.407Zm3.01-17.874c4.139,0,6.585-2.07,6.585-5.456s-2.446-5.644-6.4-5.644h-3.2v11.1Z" transform="translate(-178.916 -50.847)"/>
							<path id="Path_12935" data-name="Path 12935" class="cls-3-grey" d="M272.649,86.407H265.5V51.6h10.724c8.655,0,13.17,3.763,13.17,10.912,0,5.456-2.822,9.219-8.278,10.536l9.6,13.358h-8.654l-9.6-13.734V86.407Zm3.2-18.062c4.139,0,6.4-2.07,6.4-5.456s-2.258-5.456-5.832-5.456h-3.951V68.345Z" transform="translate(-162.962 -50.847)"/>
							<path id="Path_12936" data-name="Path 12936" class="cls-3-grey" d="M314.72,57.032a17.7,17.7,0,0,1,4.515,12.417A17.97,17.97,0,1,1,301.55,51.2a17.535,17.535,0,0,1,13.17,5.832M290.449,69.45c0,6.4,4.7,11.477,10.725,11.477S311.9,76.035,311.9,69.638c0-6.773-4.515-11.665-10.724-11.665s-10.725,4.7-10.725,11.477" transform="translate(-147.272 -51.2)"/>
							<path id="Path_12937" data-name="Path 12937" class="cls-3-grey" d="M315.249,86.407H308.1V51.6h7.149V66.275h13.17V51.6h7.15V86.407h-7.15v-14.3h-13.17Z" transform="translate(-125.413 -50.847)"/>
							<rect id="Rectangle_683" data-name="Rectangle 683" class="cls-3-grey" width="7.149" height="34.807" transform="translate(223.326 0.753)"/>
							<path id="Path_12938" data-name="Path 12938" class="cls-3-grey" d="M351.2,51.6c4.327,0,6.961.564,8.843,2.07a9.4,9.4,0,0,1,3.387,7.338,8.545,8.545,0,0,1-2.258,6.021A7.2,7.2,0,0,1,357.6,69.1a9.432,9.432,0,0,1,4.139,1.881,7.82,7.82,0,0,1,2.446,6.209,8.866,8.866,0,0,1-3.575,7.526c-1.881,1.129-3.951,1.693-7.714,1.693H340.1V51.6Zm-3.951,14.675h2.822c4.139,0,6.209-1.505,6.209-4.7a4.432,4.432,0,0,0-2.07-3.951,12.284,12.284,0,0,0-4.515-.753h-2.446Zm0,14.863h3.575c2.446,0,3.575-.188,4.7-.941a4.909,4.909,0,0,0-.376-7.714c-1.129-.564-2.258-.753-4.892-.753h-3.011Z" transform="translate(-97.207 -50.847)"/>
							<rect id="Rectangle_684" data-name="Rectangle 684" class="cls-3-grey" width="7.149" height="34.807" transform="translate(277.888 0.753)"/>
							<path id="Path_12939" data-name="Path 12939" class="cls-3-grey" d="M382.628,86.407h-7.149V57.432H367.2V51.6h23.706v5.832h-8.278Z" transform="translate(-73.32 -50.847)"/>
							<rect id="Rectangle_685" data-name="Rectangle 685" class="cls-3-grey" width="7.149" height="34.807" transform="translate(326.617 0.753)"/>
							<path id="Path_12940" data-name="Path 12940" class="cls-3-grey" d="M425.52,57.032a17.7,17.7,0,0,1,4.516,12.417A17.97,17.97,0,1,1,412.35,51.2a17.534,17.534,0,0,1,13.17,5.832M401.438,69.45c0,6.4,4.7,11.477,10.724,11.477s10.724-4.892,10.724-11.289c0-6.773-4.516-11.665-10.724-11.665s-10.724,4.7-10.724,11.477" transform="translate(-49.61 -51.2)"/>
							<path id="Path_12941" data-name="Path 12941" class="cls-3-grey" d="M426.05,86.407H418.9V51.6h7.15l14.487,21.636V51.6h7.149V86.407h-6.961L426.05,64.394Z" transform="translate(-27.75 -50.847)"/>
							<path id="Path_12942" data-name="Path 12942" class="cls-3-grey" d="M285.927,112.607H281.6V77.8h9.219c8.278,0,12.794,3.763,12.794,10.724a10.578,10.578,0,0,1-3.763,8.466c-2.07,1.693-4.7,2.446-8.655,2.446h-5.456v13.17Zm4.516-17.121a13.389,13.389,0,0,0,4.327-.564,6.574,6.574,0,0,0,4.327-6.4,6.5,6.5,0,0,0-4.515-6.4,16.7,16.7,0,0,0-4.892-.753h-3.951V95.3h4.7Z" transform="translate(-148.771 -27.754)"/>
							<path id="Path_12943" data-name="Path 12943" class="cls-3-grey" d="M305.914,104.516l-3.2,8.09H298.2L311.37,77.8h5.268l12.794,34.807H324.54l-2.822-8.09Zm7.9-21.26-6.585,17.5h12.982Z" transform="translate(-134.139 -27.754)"/>
							<path id="Path_12944" data-name="Path 12944" class="cls-3-grey" d="M326.827,112.607H322.5V77.8h9.407c7.338,0,11.853,3.763,11.853,10.16a9.481,9.481,0,0,1-5.08,8.843c-1.693.941-3.2,1.317-6.4,1.505l13.547,14.487h-5.644L326.639,98.119v14.487Zm4.327-17.5c5.268,0,8.09-2.446,8.09-6.773s-2.634-6.585-7.338-6.585h-5.08V95.109Z" transform="translate(-112.72 -27.754)"/>
							<path id="Path_12945" data-name="Path 12945" class="cls-3-grey" d="M354.158,112.607h-4.516V81.563H340.8V77.8H363v3.763h-8.843Z" transform="translate(-96.59 -27.754)"/>
							<path id="Path_12946" data-name="Path 12946" class="cls-3-grey" d="M364.627,112.607H360.3V77.8h3.951l18.626,26.152V77.8H387.2v34.807h-3.763L364.627,86.078Z" transform="translate(-79.402 -27.754)"/>
							<path id="Path_12947" data-name="Path 12947" class="cls-3-grey" d="M388.627,93.228h13.735v3.763H388.627v11.853h13.735v3.763H384.3V77.8h18.062v3.763H388.627Z" transform="translate(-58.248 -27.754)"/>
							<path id="Path_12948" data-name="Path 12948" class="cls-3-grey" d="M407.227,112.607H402.9V77.8h9.407c7.337,0,11.853,3.763,11.853,10.16a9.481,9.481,0,0,1-5.08,8.843c-1.693.941-3.2,1.317-6.4,1.505l13.546,14.487h-5.644L407.039,98.119v14.487Zm4.516-17.5c5.268,0,8.09-2.446,8.09-6.773s-2.634-6.585-7.337-6.585h-5.08V95.109Z" transform="translate(-41.853 -27.754)"/>
							<path id="Path_12949" data-name="Path 12949" class="cls-3-grey" d="M426.262,103.552c.188,3.951,2.258,6.021,6.209,6.021s6.585-2.446,6.585-5.832c0-3.01-1.505-4.515-6.961-6.209-4.139-1.317-5.456-2.07-6.962-3.575a9.08,9.08,0,0,1-2.634-6.585c0-5.832,4.139-9.972,10.348-9.972s10.16,3.951,10.348,9.972h-4.327a6.322,6.322,0,0,0-.753-3.575,6.074,6.074,0,0,0-5.08-2.446A5.483,5.483,0,0,0,427.2,87a4.431,4.431,0,0,0,2.07,3.951c1.129.753,2.069,1.129,5.644,2.446,3.763,1.317,5.456,2.258,6.961,3.763a9.011,9.011,0,0,1,2.258,6.209c0,6.021-4.515,10.16-10.912,10.16-4.515,0-7.525-1.505-9.219-4.7a8.938,8.938,0,0,1-1.129-4.515v-.753Z" transform="translate(-24.577 -28.106)"/>
						</g>
						<g id="Group_1261" data-name="Group 1261">
							<g id="Group_1272" data-name="Group 1272">
								<path id="Path_12950" data-name="Path 12950" class="cls-2-blue" d="M247.335,130.143,222.5,116.032V87.811L247.335,73.7,272.17,87.811v28.222ZM230.026,111.7l17.309,9.783,17.309-9.783V92.326l-17.309-9.783-17.309,9.783Z" transform="translate(-200.864 -31.368)"/>
								<path id="Path_12951" data-name="Path 12951" class="cls-2-blue" d="M269.935,130.143,245.1,116.032V87.811L269.935,73.7,294.77,87.811v28.222ZM252.626,111.7l17.309,9.783,17.309-9.783V92.326l-17.309-9.783-17.309,9.783Z" transform="translate(-180.943 -31.368)"/>
								<path id="Path_12952" data-name="Path 12952" class="cls-2-blue" d="M260.67,69.111l-3.763-2.07L235.835,55,214.763,66.853,211,68.923V97.144l24.835,14.111L260.67,97.144V69.111Zm-7.714,23.706L235.647,102.6l-17.309-9.783V73.626l17.309-9.783,17.121,9.783h0V92.817Z" transform="translate(-211 -47.851)"/>
							</g>
						</g>
					</g>
				</g>
			</svg>

			</a>
			
		</div><!-- .site-branding -->

		<div class="menu">
			<div class="menu-trigger">
			<svg class="menu-trigger" viewBox="0 0 30.2 17">
				<defs>
					<style>
						.menu-trigger-color {
							fill: none;
							stroke: #6f9ab7;
							stroke-width: 3px;
						}
					</style>
				</defs>
				<g id="Group_1482_1_" transform="translate(-1159.4 -54.048)">
					<g id="Group_11_1_" transform="translate(-5 5.948)">
						<path id="Path_83_1_" class="menu-trigger-color" d="M1194.6,49.6h-30.2"/>
						<path id="Path_84_1_" class="menu-trigger-color" d="M1194.6,56.6h-30.2"/>
						<path id="Path_13230_1_" class="menu-trigger-color" d="M1194.6,63.6h-30.2"/>
					</g>
				</g>
			</svg>

			</div>
		</div>
		
	</header><!-- #masthead -->
	<!-- Hay que cambiar display none por flex!!! -->
	<div class="menu-container fixed top-0 left-0 pp-dark-blue-bg hidden ">
		<div class="absolute pp-patern-bg w-100 h-100"></div>
		<div class="menu-inner hidden flex general-container justify-between items-end w-90">
			<div class="first-menu-col mr6"> 
		
			<div class="london-off">
            <p class="white mb4"><span class="fw5">London<br>PP Inteligence Ltd</span><br>3 Hill Street, W1J 5AL,<br>
           London, United Kingdom</p>
					</div>
					
			 <div class="bcn-off">
            <p class="white mb4"><span class="fw5">Barcelona<br>PP Inteligence Ltd</span><br>Carrer d'Estruc 9, 08002,<br>
            Barcelona, Spain</p>
					</div>
			
					<p class="white mb4"><a href="#" class="white">info@prohibitionpartners.com</a><br>+44 20 7409 5042</p>
						<div class="footer-social flex justify-between w-80">
								<a href="http://twitter.com/prohibition_p" class="footer-social-icon di mr2"href="/"><img src="/wp-content/uploads/2018/11/Twitter_IconOnly_Black.svg"></a>
								<a href="https://www.instagram.com/prohibitionpartners"  class="footer-social-icon di mr2"href="/"><img src="/wp-content/uploads/2018/11/instagram_icon_inline.svg"></a>
								<a href="mailto:info@prohibitionpartners.com" class="footer-social-icon di mr2"href="/"><img src="/wp-content/uploads/2018/11/UYZR8j_1_.svg"></a>
						</div>

			</div>
		
			<div class="second-menu-col ">
				<a class="white fw3 mb4 f1 db" href="/">Home</a>
				<a class="white fw3 mb4 f1 db" href="reports">Reports</a>
				<a class="white fw3 mb4 f1 db" href="services">Services</a>
				<a class="white fw3 mb4 f1 db" href="international-country-review">International <br>Country Review</a>
				<a class="white fw3  f1 db" href="international-cannabis-weekly">International <br>Cannabis Weekly</a>
			</div>

			<div class="third-menu-col ">
				<a class="white fw3 mb4 f1 db" href="contact#team">Team</a>
				<a class="white fw3 mb4 f1 db" href="press">Press</a>
				<a class="white fw3 mb4 f1 db" href="press#sponsorship">Sponsorship</a>
				<a class="white fw3 mb4 f1 db flex no-wrap" href="http://cannabis-europa.com" target="_blank">Cannabis<br>Europa
					<svg class="menu-arrow-icon pl2" viewBox="0 0 6.175 6.283">
						<defs>
							<style>
								.menu-1, .menu-2 {
									fill: none;
									stroke: #fff;
								}

								.menu-2 {
									stroke-miterlimit: 10;
									fill-rule: evenodd;
								}
							</style>
						</defs>
						<g id="Group_457" data-name="Group 457" transform="translate(-212.071 -382.126)">
							<path id="Path_444" data-name="Path 444" class="menu-1" d="M209.162,388.4l3.537-3.7" transform="translate(3.27 -0.332)"/>
							<path id="Path_445" data-name="Path 445" class="menu-2" d="M62.1,42.2l2.234,2.234a.11.11,0,0,1,0,.15L62.1,46.819" transform="translate(139.025 398.402) rotate(-45)"/>
						</g>
					</svg>
				</a>
				<a class="white fw3 f1 db" href="contact">Contact</a>
			
			</div>

			
		
		</div>
	</div>

	<div id="content" class="site-content">
