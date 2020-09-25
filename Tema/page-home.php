<?php get_header(); ?>

        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md d-flex align-items-center">
                        <?php echo get_theme_mod( 'pre_menu_contato' ); ?>
                    </div>
                    <div class="col-12 col-md d-flex justify-content-md-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex"> <a href="<?php echo get_theme_mod( 'pre_menu_facebook_link', '#' ); ?>" class="d-flex align-items-center justify-content-center"><?php echo get_theme_mod( 'pre_menu_facebook', '<span class="fa fa-facebook"><i class="sr-only">Facebook</i></span>' ); ?></a> <a href="<?php echo get_theme_mod( 'pre_menu_instagram_link', '#' ); ?>" class="d-flex align-items-center justify-content-center"><?php echo get_theme_mod( 'pre_menu_instagram', '<span class="fa fa-instagram"><i class="sr-only">Instagram</i></span>' ); ?></a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'menu_logo', esc_url( get_template_directory_uri() . '/images/logo%20completo.png' ) ), 'large' ) ?>" style="height: 70px; margin-top: 10px; margin-bottom: 10px;" href="<?php echo esc_url( home_url() ); ?>"/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> 
                    <?php _e( 'Menu', 'alves' ); ?>
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                                                        <a class="nav-link" {ATTRS}>{TITLE}</a>
                                                    </li>';
                            PG_Smart_Walker_Nav_Menu::$options['current_class'] = 'active';
                            wp_nav_menu( array(
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul class="%2$s ml-auto navbar-nav" id="%1$s">%3$s</ul>',
                                'walker' => new PG_Smart_Walker_Nav_Menu()
                        ) ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <!-- END nav -->
        <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/topo.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 ftco-animate mt-5 pt-md-5" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="row">
                            <div class="col-md-7">
                                <p class="mb-4 pl-md-5 line" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php _e( 'A small river named Duden flows by their place and supplies', 'alves' ); ?></p>
                            </div>
                        </div>
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php _e( 'Segurança, Ética e Transparência', 'alves' ); ?></h1>
                        <p><a href="#" class="btn btn-primary px-4 py-3"><?php _e( 'Nossa História', 'alves' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <section class="ftco-intro">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-12" style="padding-bottom: 0px;">
                        <div class="row d-flex no-gutters">
                            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="line"></div>
                                    <div class="icon">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk001-limpar.png" width="75px"/>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3"><?php _e( 'Limpeza e conservação', 'alves' ); ?></h3>
                                        <p> <?php _e( '203 Fake St. Mountain View, San Francisco, California, USA', 'alves' ); ?></p>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="line"></div>
                                    <div class="icon">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk002-ferramentas-de-jardinagem.png" width="75px"/>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3"><?php _e( 'Jardinagem e manutenção', 'alves' ); ?></h3>
                                        <p><?php _e( 'A small river named Duden flows by their place and supplies.', 'alves' ); ?></p>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="line"></div>
                                    <div class="icon">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk003-piscina.png" width="75px"/>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3"><?php _e( 'Manutenção de Piscina', 'alves' ); ?></h3>
                                        <p><?php _e( 'A small river named Duden flows by their place and supplies.', 'alves' ); ?></p>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block">
                                    <div class="line"></div>
                                    <div class="icon">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk004-saida.png" width="75px"/>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading mb-3"><?php _e( 'Manutenção hidráulica e Eletrica', 'alves' ); ?></h3>
                                        <p><?php _e( 'A small river named Duden flows by their place and supplies.', 'alves' ); ?></p>
                                    </div>
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-lg-6 heading-section text-center ftco-animate">
                        <h2 class="mb-4"><?php _e( 'Há&nbsp;', 'alves' ); ?><span><?php _e( '5 anos', 'alves' ); ?></span> <?php _e( 'trabalhando para a segurança do seu condomínio.', 'alves' ); ?></h2>
                        <p><?php _e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', 'alves' ); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-2 text-center">
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/servico-ao-cliente.png" width="75px"/>
                            </div>
                            <div class="text">
                                <h3><?php _e( 'Serviços', 'alves' ); ?></h3>
                                <p><?php _e( 'A Alves Gestão e Segurança disponibiliza para seus clientes os serviços de gerenciamento de condomínio e Gestão de mão de obra.', 'alves' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/17493%20%5BConverted%5D-01.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-4">
                        <div class="services-2 text-center">
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/seguranca-do-lar.png" width="75px"/>
                            </div>
                            <div class="text">
                                <h3><?php _e( 'Segurança em primeiro lugar', 'alves' ); ?></h3>
                                <p><?php _e( 'Com Profissionais treinados periodicamente com foco técnico e rotinas de segurança, estamos preparados para lidar com os mais diversos tipos de situações.', 'alves' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-counter img" id="section-counter">
            <div class="container">
                <div class="row no-gutters d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="img d-flex align-self-stretch" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/20200909_150033.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center bottom;"></div>
                    </div>
                    <div class="col-md-6 p-3 pl-md-5 py-5 bg-primary">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section heading-section-white ftco-animate">
                                <h2 class="mb-4"><?php _e( 'Sempre focado na segurança', 'alves' ); ?></h2>
                                <p><?php _e( 'Com Profissionais treinados periodicamente com foco técnico e rotinas de segurança, estamos preparados para lidar com os mais diversos tipos de situações.', 'alves' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section services-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
                    <div class="col-md-6 heading-section text-center ftco-animate">
                        <h2 class="mb-4"><?php _e( 'Outros', 'alves' ); ?> <span><?php _e( 'serviços', 'alves' ); ?></span></h2>
                    </div>
                </div>
                <div class="row d-flex no-gutters">
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk001-limpar.png" width="75px"/>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3"><?php _e( 'Limpeza e conservação', 'alves' ); ?></h3>
                                <p> <?php _e( '203 Fake St. Mountain View, San Francisco, California, USA', 'alves' ); ?></p>
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk002-ferramentas-de-jardinagem.png" width="75px"/>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3"><?php _e( 'Jardinagem e manutenção', 'alves' ); ?></h3>
                                <p><?php _e( 'A small river named Duden flows by their place and supplies.', 'alves' ); ?></p>
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk003-piscina.png" width="75px"/>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3"><?php _e( 'Manutenção de Piscina', 'alves' ); ?></h3>
                                <p><?php _e( 'A small river named Duden flows by their place and supplies.', 'alves' ); ?></p>
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="line"></div>
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bk004-saida.png" width="75px"/>
                            </div>
                            <div class="media-body">
                                <h3 class="heading mb-3"><?php _e( 'Manutenção hidráulica e Eletrica', 'alves' ); ?></h3>
                                <p><?php _e( 'A small river named Duden flows by their place and supplies.', 'alves' ); ?></p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section bg-light ftco-faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-md-last">
                        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/about.jpg');">
</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-section mb-5 mt-5 mt-lg-0">
                            <h2 class="mb-3"><?php _e( 'Perguntas frequentes que', 'alves' ); ?></h2>
                        </div>
                        <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header p-0" id="headingOne">
                                    <h2 class="mb-0"> <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                            <p class="mb-0"><?php _e( 'Como funciona a Portaria Remota?', 'alves' ); ?></p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button> </h2>
                                </div>
                                <div class="collapse" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="card-body py-3 px-0">
                                        <ol style="margin-left: 20px; padding-right: 20px; text-align: justify;">
                                            <li>
                                                <?php _e( 'Far far away, behind the word mountains', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Consonantia, there live the blind texts', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'When she reached the first hills of the Italic Mountains', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Bookmarksgrove, the headline of Alphabet Village', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Separated they live in Bookmarksgrove right', 'alves' ); ?>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingTwo" role="tab">
                                    <h2 class="mb-0"> <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                            <p class="mb-0"><?php _e( 'Como funciona o Controle de Acesso?', 'alves' ); ?></p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button> </h2>
                                </div>
                                <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <ol style="margin-left: 20px; padding-right: 20px; text-align: justify;">
                                            <li>
                                                <?php _e( 'Far far away, behind the word mountains', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Consonantia, there live the blind texts', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'When she reached the first hills of the Italic Mountains', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Bookmarksgrove, the headline of Alphabet Village', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Separated they live in Bookmarksgrove right', 'alves' ); ?>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingThree" role="tab">
                                    <h2 class="mb-0"> <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                            <p class="mb-0"><?php _e( 'Como funciona o suporte técnico', 'alves' ); ?></p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button> </h2>
                                </div>
                                <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo" style="">
                                    <div class="card-body py-3 px-0">
                                        <ol style="margin-left: 20px; padding-right: 20px; text-align: justify;">
                                            <li>
                                                <?php _e( 'Far far away, behind the word mountains', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Consonantia, there live the blind texts', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'When she reached the first hills of the Italic Mountains', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Bookmarksgrove, the headline of Alphabet Village', 'alves' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Separated they live in Bookmarksgrove right', 'alves' ); ?>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingFour" role="tab">
                                    <h2 class="mb-0"> <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                            <p class="mb-0"><?php _e( 'Como solicitar um orçamento?', 'alves' ); ?></p>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button> </h2>
                                </div>
                                <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body py-3 px-0">
                                        <p style="margin-left: 20px; padding-right: 20px; text-align: justify;"><?php _e( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'alves' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2><?php _e( 'Conheça nosso Blog', 'alves' ); ?></h2>
                    </div>
                </div>
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
                </div>
            </div>
        </section>
        <section class="ftco-appointment ftco-section img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/telas.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 half ftco-animate">
                        <h2 class="mb-4"><br><?php _e( 'Solicite um orçamento agora', 'alves' ); ?></h2>
                        <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" class="appointment">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="fa fa-chevron-down"></span>
                                                </div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">
                                                        <?php _e( 'Services', 'alves' ); ?>
                                                    </option>
                                                    <option value="">
                                                        <?php _e( 'Web Development', 'alves' ); ?>
                                                    </option>
                                                    <option value="">
                                                        <?php _e( 'Database Analysis', 'alves' ); ?>
                                                    </option>
                                                    <option value="">
                                                        <?php _e( 'Server Security', 'alves' ); ?>
                                                    </option>
                                                    <option value="">
                                                        <?php _e( 'UX/UI Strategy', 'alves' ); ?>
                                                    </option>
                                                    <option value="">
                                                        <?php _e( 'Branding', 'alves' ); ?>
                                                    </option>
                                                    <option value="">
                                                        <?php _e( 'Applications', 'alves' ); ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="ftco-footer ftco-footer-2 ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bklogo%20completo.png" class="embed-responsive" style="margin-bottom: 20px;"/>
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
                            <h2 class="ftco-heading-2"><?php _e( 'Você tem alguma duvida?', 'alves' ); ?></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li>
                                        <span class="icon fa fa-map marker"></span>
                                        <span class="text"><?php _e( 'Rua Tiradentes, 42, Nossa&nbsp; Sra. de Nazaré, Natal/RN', 'alves' ); ?></span>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon fa fa-phone"></span><span class="text"><?php _e( '(84) 2226-4437 | (84) 99610-2293', 'alves' ); ?></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><?php _e( 'contato@alvesseg.com.br', 'alves' ); ?></span></a>
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