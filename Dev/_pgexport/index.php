<?php get_header(); ?>

        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md d-flex align-items-center">
                        <p class="mb-0 phone"><span class="mailus"><?php _e( 'Phone no:', 'alves' ); ?></span> <a href="#"><?php _e( '+00 1234 567', 'alves' ); ?></a> <?php _e( 'or', 'alves' ); ?> <span class="mailus"><?php _e( 'email us:', 'alves' ); ?></span> <a href="#"><?php _e( 'emailsample@email.com', 'alves' ); ?></a></p>
                    </div>
                    <div class="col-12 col-md d-flex justify-content-md-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex"> <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only"><?php _e( 'Facebook', 'alves' ); ?></i></span></a> <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only"><?php _e( 'Twitter', 'alves' ); ?></i></span></a> <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only"><?php _e( 'Instagram', 'alves' ); ?></i></span></a> <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only"><?php _e( 'Dribbble', 'alves' ); ?></i></span></a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="bg-dark ftco-navbar-light navbar navbar-dark navbar-expand-lg" id="ftco-navbar">
            <div class="container">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo%20completo.png" style="height: 70px; margin-top: 10px; margin-bottom: 10px;"/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> 
                    <?php _e( 'Menu', 'alves' ); ?>
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="index.html" class="nav-link"><?php _e( 'Home', 'alves' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link"><?php _e( 'About', 'alves' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="services.html" class="nav-link"><?php _e( 'Services', 'alves' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="cases.html" class="nav-link"><?php _e( 'Case Study', 'alves' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.html" class="nav-link"><?php _e( 'Blog', 'alves' ); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link"><?php _e( 'Contact us', 'alves' ); ?></a>
                        </li>
                        <li class="nav-item cta">
                            <a href="#" class="nav-link"><?php _e( 'Free Consultation', 'alves' ); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
        <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
</section>
        <section class="ftco-section bg-light">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2><?php _e( 'Conheça nosso Blog', 'alves' ); ?></h2>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_1.jpg');"> </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day"><?php _e( '29', 'alves' ); ?></span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr"><?php _e( '2020', 'alves' ); ?></span>
                                        <span class="mos"><?php _e( 'June', 'alves' ); ?></span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#"><?php _e( 'Why Lead Generation is Key for Business Growth', 'alves' ); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_2.jpg');"> </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day"><?php _e( '29', 'alves' ); ?></span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr"><?php _e( '2020', 'alves' ); ?></span>
                                        <span class="mos"><?php _e( 'June', 'alves' ); ?></span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#"><?php _e( 'Why Lead Generation is Key for Business Growth', 'alves' ); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_3.jpg');"> </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day"><?php _e( '29', 'alves' ); ?></span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr"><?php _e( '2020', 'alves' ); ?></span>
                                        <span class="mos"><?php _e( 'June', 'alves' ); ?></span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#"><?php _e( 'Why Lead Generation is Key for Business Growth', 'alves' ); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_4.jpg');"> </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day"><?php _e( '29', 'alves' ); ?></span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr"><?php _e( '2020', 'alves' ); ?></span>
                                        <span class="mos"><?php _e( 'June', 'alves' ); ?></span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#"><?php _e( 'Why Lead Generation is Key for Business Growth', 'alves' ); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_5.jpg');"> </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day"><?php _e( '29', 'alves' ); ?></span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr"><?php _e( '2020', 'alves' ); ?></span>
                                        <span class="mos"><?php _e( 'June', 'alves' ); ?></span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#"><?php _e( 'Why Lead Generation is Key for Business Growth', 'alves' ); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/image_6.jpg');"> </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day"><?php _e( '29', 'alves' ); ?></span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr"><?php _e( '2020', 'alves' ); ?></span>
                                        <span class="mos"><?php _e( 'June', 'alves' ); ?></span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#"><?php _e( 'Why Lead Generation is Key for Business Growth', 'alves' ); ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li>
                                    <a href="#">&lt;</a>
                                </li>
                                <li class="active">
                                    <span><?php _e( '1', 'alves' ); ?></span>
                                </li>
                                <li>
                                    <a href="#"><?php _e( '2', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php _e( '3', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php _e( '4', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php _e( '5', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#">&gt;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="ftco-footer ftco-footer-2 ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-footer-logo"><?php _e( 'IT', 'alves' ); ?><span><?php _e( 'solution', 'alves' ); ?></span></h2>
                            <p><?php _e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'alves' ); ?></p>
                            <ul class="ftco-footer-social list-unstyled mt-2">
                                <li class="ftco-animate">
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                </li>
                                <li class="ftco-animate">
                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2"><?php _e( 'Explore', 'alves' ); ?></h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'About', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Contact', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'What We Do', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Plans &amp; Pricing', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Refund Policy', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Call Us', 'alves' ); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php _e( 'Legal', 'alves' ); ?></h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Join Us', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Blog', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Privacy &amp; Policy', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Terms &amp; Conditions', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Careers', 'alves' ); ?></a>
                                </li>
                                <li>
                                    <a href="#" class="py-2 d-block"><?php _e( 'Contact', 'alves' ); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php _e( 'Have a Questions?', 'alves' ); ?></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li>
                                        <span class="icon fa fa-map marker"></span>
                                        <span class="text"><?php _e( '203 Fake St. Mountain View, San Francisco, California, USA', 'alves' ); ?></span>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon fa fa-phone"></span><span class="text"><?php _e( '+2 392 3929 210', 'alves' ); ?></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><?php _e( 'info@yourdomain.com', 'alves' ); ?></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <?php _e( 'Copyright &copy;', 'alves' ); ?> <?php _e( 'All rights reserved | This template is made with', 'alves' ); ?> <i class="fa fa-heart" aria-hidden="true"></i> <?php _e( 'by', 'alves' ); ?> <a href="https://colorlib.com" target="_blank"><?php _e( 'Colorlib', 'alves' ); ?></a> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>        

<?php get_footer(); ?>