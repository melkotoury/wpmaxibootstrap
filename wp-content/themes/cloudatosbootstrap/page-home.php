<?php
/**
 * Template Name: Home Page
 */


/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cloudatos Bootstrap
 */

get_header(); ?>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted">This is a list of Our Services.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">E-Commerce</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Responsive Design</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Web Security</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Products</h2>
                <h3 class="section-subheading text-muted">Here Are Our List Of Products.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portfolio/luffa.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Luffa Products</h4>
                    <p class="text-muted">Health And Beauty</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portfolio/salsa.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Salsa Products</h4>
                    <p class="text-muted">Food Products</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portfolio/Cheese.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Cheese Products</h4>
                    <p class="text-muted">Food Products</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portfolio/chicken.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Chicken Products</h4>
                    <p class="text-muted">Food Products</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portfolio/Juice.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Juice Products</h4>
                    <p class="text-muted">Beverages Products</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portfolio/dreams.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Dreams</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Here's our timeline at a glance.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2013-2015</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">We Started working with Our First Product, Luffa Planet , locally in Egypt!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2015</h4>
                                <h4 class="subheading">Maxi Trade is Born</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">After our Luffa products was tested by our local customer, we decided to go worldwide and Maxi Trade was born for this to export and deliver our products to all the our beloved customers worldwide!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about/3.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>August 2015</h4>
                                <h4 class="subheading">Salsa Products is Born</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">After the success story of our Luffa products locally and worldwide, It was time to explore the world with our famous Salsa Products!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Meet Maxi's Trade Team.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/team/1.jpg" class="img-responsive img-circle" alt="">
                    <h4>Mahmoud El Kotoury</h4>
                    <p class="text-muted">CEO and CO-Founder</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/melkotoury"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://facebook.com/melkotoury"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://eg.linkedin.com/in/melkotoury"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/team/2.jpg" class="img-responsive img-circle" alt="">
                    <h4>Mostafa El Kotoury</h4>
                    <p class="text-muted">CEO and CO-Founder</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/Katooo1983"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/Mostafa.elkotoury"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/mostafaelkotoury"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/team/3.jpg" class="img-responsive img-circle" alt="">
                    <h4>Shaymaa El Ansary</h4>
                    <p class="text-muted">Lead Administrator</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/shaymaa.elansary.1?fref=ts"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/pub/shaymaa-el-ansary/11/346/5a3"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/juhayna.png" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/kraft.png" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/three_chefs.png" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>


<?php get_footer(); ?>

