<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cloudatos Bootstrap
 */

?>



<?php wp_footer(); ?>
<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Contact Us</h2>
				<h3 class="section-subheading text-muted">Feel free to send us your thoughts.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="copyright">Copyright &copy; Maxi Trade 2015</span>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					</li>
					<li><a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
					</li>
					<li><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<span class="copyright">Developed By &copy; <a href="http://cloudatos.com">Cloudatos Solutions</a></span>
			</div>
		</div>
	</div>
	<!-- -->
	<div class="row lang-switcher" >
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<a href="index.php?lang=fr">English</a>
			<div style="display: inline-block;color:#8693a7;">|</div>
			<a href="index.php?lang=ar"> ????</a>

		</div>
		<div class="col-md-4">
		</div>
	</div>
	</div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Project Name</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
						<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
						<p>
							<strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
						<ul class="list-inline">
							<li>Date: July 2014</li>
							<li>Client: Round Icons</li>
							<li>Category: Graphic Design</li>
						</ul>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Project Heading</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
						<p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
						<p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Project Name</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
						<p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Product</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Project Name</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
						<p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Project Details Go Here -->
						<h2>Project Name</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
						<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<!-- Products Details Go Here -->
						<h2>Product Name</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
						<p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It�s a beautiful template that�s designed with the Bootstrap framework in mind.</p>
						<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Product</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Bootstrap and JAVASCRIPT and JQUERY
 placed at the end of the document so the pages
 load faster
 ==============================================-->
<!-- jQuery -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/classie.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/agency.js"></script>


</body>
</html>
