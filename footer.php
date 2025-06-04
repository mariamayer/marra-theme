			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="footer-custom bg-maroon text-light pt-5 pb-0">
			<div class="container">
				<div class="row gy-5">
					<!-- Left Column -->
					<div class="col-lg-5 col-md-12 d-flex flex-column justify-content-between">
						<div>
							<!-- Heading -->
							<h2 class="footer-heading mb-2" style="font-size:2.5rem; font-weight:400;">
								Here When You <em style="font-style:italic; font-weight:500;">Need</em> Us
							</h2>
							<!-- Subtext -->
							<p class="footer-subtext mb-4">Learn how Marra can support you on your mental health journey.</p>
							<!-- Gravity Form -->
							<div class="footer-form mb-3">
								<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
							</div>
							<!-- Consent Checkbox -->
							<div class="form-check mb-4">
								<input class="form-check-input" type="checkbox" value="" id="footerConsent">
								<label class="form-check-label small" for="footerConsent">
									I agree to receive emails from Marra and accept the terms outlined in <a href="#" class="text-decoration-underline text-light">Client Email Consent</a> and <a href="#" class="text-decoration-underline text-light">Privacy Policy</a>.
								</label>
							</div>
						</div>
						<!-- Copyright -->
						<div class="footer-copyright small mt-auto mb-3">
							&copy;MARRA <?php echo date('Y'); ?> ALL RIGHTS RESERVED<br>
							DESIGN AND DEVELOPMENT BY STUDIO MURNANE
						</div>
					</div>

					<!-- Right Column -->
					<div class="col-lg-7 col-md-12">
						<div class="row h-100">
							<!-- Links -->
							<div class="col-md-6 mb-4 mb-md-0">
								<hr class="d-md-none mb-4 mt-0" style="border-color: #fff; opacity: 0.2;">
								<?php
									if ( has_nav_menu( 'footer-menu' ) ) {
										wp_nav_menu([
											'theme_location' => 'footer-menu',
											'container' => false,
											'menu_class' => 'footer-menu list-unstyled',
											'items_wrap' => '<ul class="footer-menu list-unstyled">%3$s</ul>',
											'depth' => 1,
										]);
									}
								?>
							</div>
							<div class="col-md-6 mb-4 mb-md-0">
								<ul class="footer-menu list-unstyled">
									<li><a href="#" class="text-light text-decoration-underline">BOOK A CONSULTATION</a></li>
									<li><a href="#" class="text-light">OUR THERAPISTS</a></li>
									<li><a href="#" class="text-light">ABOUT US</a></li>
									<li><a href="#" class="text-light">JOURNAL</a></li>
									<li><a href="#" class="text-light">FAQ</a></li>
									<li><a href="#" class="text-light">CONTACT US</a></li>
									<li><a href="#" class="text-light">FEES AND INSURANCE</a></li>
									<li><a href="#" class="text-light">PRIVACY POLICY</a></li>
								</ul>
							</div>
							<!-- Address & Social -->
							<div class="col-12 mt-4">
								<div class="row align-items-center">
									<div class="col-md-6 mb-3 mb-md-0">
										<address class="footer-address mb-0">
											700 N GREEN ST,<br>CHICAGO, IL<br>312-620-8836
										</address>
									</div>
									<div class="col-md-6 text-md-end">
										<!-- Social Icons -->
										<a href="#" class="me-2"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
										<a href="#" class="me-2"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
										<a href="#" class="me-2"><i class="bi bi-linkedin" style="font-size: 1.5rem;"></i></a>
									</div>
								</div>
							</div>
							<!-- Large Logo -->
							<div class="col-12 text-center mt-5 mb-3">
								<div class="footer-logo">
									<!-- SVG LOGO -->
									<svg width="273" height="57" viewBox="0 0 273 57" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_330_4556)">
									<path d="M110.724 50.231L90.6334 0L82.815 3.80925C84.1143 4.80876 84.503 6.54125 84.6141 7.65182C84.6807 8.26263 84.5808 8.87344 84.3364 9.43983L66.956 49.387C65.8233 52.019 63.9908 54.3068 62.1028 55.9727V56.5502H71.4205V55.9616C69.2438 54.0514 67.7334 51.697 69.3438 48.0321L72.731 40.2692H100.351L103.472 48.0321C104.704 51.1195 103.938 53.7182 101.284 55.9505V56.5613H104.693H112.711H115.288V55.9838C113.456 54.4734 111.767 52.852 110.724 50.231ZM73.4751 38.6145L87.1351 7.35196L99.6956 38.6145H73.4751Z" fill="#EA5948"/>
									<path d="M55.3396 49.1102V13.1611V8.47453C55.3396 5.72032 56.7612 4.34322 58.0383 3.16602H55.0509H54.6289H47.7211L29.7743 43.1576L11.6388 3.16602H4.86429H4.74213H1.44374C2.72089 4.34322 4.14242 5.72032 4.14242 8.47453V17.5257V49.8543C3.93141 52.3642 2.39883 54.5742 0 55.8958V56.5733H9.63974V55.9069C6.99658 54.4299 5.91933 52.6196 5.67501 50.3874V6.80868H6.40798L26.4204 51.0204H28.5971L47.9655 6.80868H48.7873V49.4101C48.7095 51.9977 47.6101 53.9301 45.6666 55.8958V56.5733H58.4937V55.9069C56.4724 53.8635 55.3507 51.8756 55.3507 49.1213L55.3396 49.1102Z" fill="#EA5948"/>
									<path d="M268.436 50.231L248.334 0L240.516 3.80925C241.815 4.80876 242.204 6.54125 242.315 7.65182C242.382 8.26263 242.282 8.87344 242.037 9.43983L229.344 38.6145V38.6367L224.668 49.387C223.535 52.019 221.703 54.3068 219.815 55.9727V56.5502H229.133V55.9616C226.956 54.0514 225.445 51.697 227.056 48.0321L230.443 40.2692H258.063L261.184 48.0321C262.416 51.1195 261.65 53.7182 258.996 55.9505V56.5613H262.405H270.423H273V55.9838C271.168 54.4734 269.479 52.852 268.436 50.231ZM231.176 38.6145L244.836 7.35196L257.396 38.6145H231.176Z" fill="#EA5948"/>
									<path d="M160.544 50.7311L148.217 29.7413C156.923 28.6752 161.954 24.0885 161.954 16.9031C161.954 9.05142 154.247 3.1543 144.663 3.1543H120.574C121.807 4.3315 123.173 5.7086 123.173 8.46282V50.2979C123.195 52.9189 122.607 54.8291 120.13 55.8397V56.5504H132.635V55.8397C130.581 54.9068 129.615 52.7967 129.581 50.1091V34.0725C131.491 32.6843 134.046 30.9407 141.409 30.1855L154.913 53.2743C155.646 54.7624 155.457 55.24 154.38 55.9618V56.5393H156.823H163.987H166.097V55.5398C163.976 54.7624 162.809 54.1516 160.555 50.7089L160.544 50.7311ZM129.57 32.2623V4.60914H144.107C151.171 4.60914 155.413 10.0842 155.413 17.0697C155.413 21.1233 153.214 24.9992 149.616 26.9094C148.861 27.3092 148.072 27.6201 147.261 27.8533C145.329 28.4197 143.286 28.6085 141.287 28.8195C138.432 29.1083 135.589 29.5525 132.902 30.5853C131.813 31.0074 130.558 31.6404 129.559 32.2734L129.57 32.2623Z" fill="#EA5948"/>
									<path d="M212.43 50.7317L200.102 29.753C208.809 28.6869 213.84 24.1002 213.84 16.9149C213.84 9.06313 206.133 3.16602 196.549 3.16602H172.46C173.693 4.34322 175.059 5.72032 175.059 8.47453V50.3097C175.081 52.9306 174.493 54.8408 172.016 55.8514V56.5622H184.521V55.8514C182.466 54.9185 181.5 52.8084 181.467 50.1209V34.0842C183.377 32.696 185.931 30.9524 193.295 30.1973L206.788 53.286C207.521 54.7741 207.332 55.2517 206.255 55.9736V56.551H208.698H215.861H217.971V55.5515C215.85 54.7741 214.684 54.1633 212.43 50.7206V50.7317ZM181.456 32.2629V4.60976H195.993C203.056 4.60976 207.299 10.0849 207.299 17.0703C207.299 21.1239 205.1 24.9998 201.502 26.91C200.746 27.3098 199.958 27.6207 199.147 27.854C197.215 28.4203 195.171 28.6091 193.172 28.8202C190.318 29.1089 187.475 29.5531 184.788 30.586C183.699 31.008 182.444 31.641 181.445 32.274L181.456 32.2629Z" fill="#EA5948"/>
									</g>
									<defs>
									<clipPath id="clip0_330_4556">
									<rect width="273" height="56.5613" fill="white"/>
									</clipPath>
									</defs>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
