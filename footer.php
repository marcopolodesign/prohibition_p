<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prohibition_Partners
 */

?>

	</div><!-- #content -->
	<div class="flex justify-between center w-50 pp-shadow shadow-nohover pp-border pa5 mv6 newsletter-box">
		<div class="w-45">
			<p class="pp-blue fw5 mb4">Your fix of news, 
				intelligence and insight into 
				the international market.</p>

				<p class="pp-grey">We will only ever send you 
				one email per week.</p>
		</div>
		<div class="w-45">

			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://prohibitionpartners.us15.list-manage.com/subscribe/post?u=5a2dd9817b07bc76598d3f9ba&amp;id=071b37cd13" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
					
				<div class="mc-field-group">
					<input class="pp-blue fw3 pb2 mb3" type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name...">
				</div>
				<div class="mc-field-group">
					<input class="pp-blue fw3 pb2 mb3"  type="email" value="" name="EMAIL" class="required email" placeholder="Email..." id="mce-EMAIL">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7f06e54313fcea286eff9626f_1882eb7814" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button suscribe-btn pa3"></div>
						</div>
				</form>
				</div>

				<!--End mc_embed_signup-->
		</div>
	</div>


	<footer id="colophon" class="site-footer pp-light-blue-bg pa5">
			<div class="flex justify-between">
				<div class="footer-logo-social flex flex-column justify-between w-30">
					<a class="footer-logo" href="index"><img src="/wp-content/uploads/2018/11/footer-logo.svg"></a>
					<div class="footer-social">
					<a href="http://twitter.com/prohibition_p" class="footer-social-icon di mr2"href="index"><img src="/wp-content/uploads/2018/11/Twitter_IconOnly_Black.svg"></a>
					<a href="https://www.instagram.com/prohibitionpartners" class="footer-social-icon di mr2"href="index"><img src="/wp-content/uploads/2018/11/instagram_icon_inline.svg"></a>
					<a href="mailto:info@prohibitionpartners.com"class="footer-social-icon di mr2"href="index"><img src="/wp-content/uploads/2018/11/UYZR8j_1_.svg"></a>
					</div>
				</div>

				<div class="first-footer-links footer-links flex flex-column justify-between">
					<a href="/">Home</a>
					<a href="/#about">About Us</a>
					<a href="reports">Reports</a>
					<a href="contact#team">The Team</a>
					<a href="services">Our Services</a>
				</div>

				<div class="second-footer-links footer-links flex flex-column justify-between">
					<!-- <a>International Deal Tracker</a> -->
					<a href="international-country-review">European Country Review</a>
					<a href="international-cannabis-weekly">European Cannabis Weeklky</a>
					<!-- <a>European Cannabis Events</a> -->
					<a target="_blank" href="http://cannabis-europa.com">Cannabis Europa</a>
					<a href="press">Press Kit</a>
					<a href="press#sponsorship">Sponsorship</a>
				</div>

				<div class="third-footer-links footer-links flex flex-column justify-end min-height">
					<!-- <a href="press">Press Kit</a>
					<a href="press#sponsorship">Sponsorship</a> -->
					<a href="privacy-policy">Privacy Policy</a>
					<a href="contact">Contact Us</a>
					<!-- <a target="_blank" href="http://marcopolo.agency">Made by Marco Polo</a> -->
				</div>

			</div>
			
		</div>
<!-- .site-info -->
	</footer>
	<!-- <script type="text/javascript" src="/wp-content/themes/prohibition_partners/js/vanilla-tilt.js"></script>"#colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
