<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme
 * @since Theme 2018
 */

get_header(); ?>

    <!-- Main container for landing page -->
    <div class="landing">

        <header class="header-slider">

            <div class="header-slider__wrapper">

                <?php $header_slides = get_field('slider');?>

                <?php if(count($header_slides) >= 1) : ?>

                    <?php foreach ($header_slides as $slide) : ?>
                        <div class="header-slider-item" style="background-image: url(<?php echo $slide['background']; ?>)">
                            <div class="header-slider--overlay"></div>
                            <div class="container-fluid">
                                <div class="col-md-8 col-12">
                                    <div class="header__content">
                                        <h1 class="heading--large"><?php echo $slide['title'];?></h1>
                                        <p class="body--large"><?php echo $slide['body'];?></p>
                                        <a href="{{slide.link}}">
                                            <app-button text="Services"></app-button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endforeach;?>

                <? endif; ?>

            </div>
        </header>

        <section class="container-fluid section landing__intro service-section">
            <?php
            $section_one = get_field('section_one');
            $button = $section_one['button'];
            ?>

            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <img src="<?php echo $section_one['image'];?>" class="service-feature__image">
                </div>

                <!-- Info right -->
                <div class="col-md-5 offset-md-1 col-12">
                    <h2 class="heading--small"><?php echo $section_one['title'] ;?></h2>
                    <p class="body--small"><?php echo $section_one['body'] ;?></p>
                    <!-- Button -->
                    <a href="<?php echo $button['link'];?>" class="landing__intro-button">
                        <button class="button"><p>Services</p></button>
                    </a>
                </div>
            </div>
        </section>

        <!-- End Info right -->


        <!-- Security is a global need -->
        <section class="section landing__about container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <img src="<?php echo get_template_directory_uri();?>/images/world-map.svg"/>
                </div>
            </div>

            <div class="row landing__about-content">
                <div class="col-md-5 offset-md-7">
                    <h2>WE OPERATE ON A GLOBAL SCALE</h2>
                    <p>Security and Intelligence Services (SIS) is a new and dynamic international security partnership with headquarters in the United Kingdom with offices in Europe, USA, South America and the Middle East.</p>
                    <a routerLink="/contact"><app-button text="enquire"></app-button></a>
                </div>
            </div>

        </section>

        <!-- CTA -->
        <?php
        $cta = get_field('cta');
        $cta_text = $cta['bar_text'];
        ?>
        <?php if($cta['show_cta']) : ?>
            <?php include( locate_template( 'partials/app-cta.php', false, false ) );  ?>
        <?php endif; ?>

        <?php
        // WP_Query arguments
        $args = array(
            'post_type'              => array( 'service_post_type' ),
        );

        // The Query
        $services = new WP_Query( $args );

        // The Loop
        if ( $services->have_posts() ) {
            while ( $services->have_posts() ) {
                $services->the_post();
                // do something
            }
        }
        // Restore original Post Data
        wp_reset_postdata();
        ?>
        <!-- Services -->
        <section class="section service-section--small landing__services" id="services">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">
                        <!-- Section heading + text -->
                        <div class="landing__services-heading">
                            <h2 class="heading--small">WHATEVER YOUR NEEDS, WE’VE GOT IT COVERED</h2>
                            <p class="body--small">With a first-class record of service to clients throughout the world including blue chip companies, hi-net worth clients, governments, law enforcement and the military SIS can provide all of your security requirements.</p>
                            <p class="body--small">Our Senior Management team together with our long-term partners bring professionalism, confidentiality and a ‘can do’ attitude to all our projects/SIS-The people to trust.</p>
                        </div>
                        <!-- End section heading + text -->
                    </div>

                </div>

                <div class="row justify-content-center">
                    <!-- Service box -->

                    <?php if($services->have_posts()) : ?>
                        <?php while($services->have_posts()) : $services -> the_post()?>
                            <?php
                            $service = get_field('general');
                            $feature_image = $service['feature_image'];
                            $title = $service['title'];
                            $desc = $service['short_description'];
                            $link = $service['link'];
                            ?>
                            <div class="services__box col-md-4 col-sm-6 col-10 offset-1 offset-sm-0">

                                <a href="<?php echo $link;?>">
                                    <div class="services__box-wrapper">
                                        <!-- Service header -->
                                        <div class="services__box-heading">
                                            <!--<img src="{{service.icon}}"/>-->
                                            <div class="services__box-heading-background" style="background-image: url(<?php echo $feature_image;?>)"></div>
                                        </div>

                                        <!-- Service body -->
                                        <div class="services__box-body">
                                            <h4><?php echo $title;?></h4>
                                            <p><?php echo $body;?></p>
                                            <a href="<?php echo $link;?>">View Product</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>

            </div>

        </section>


    </div>


<?php get_footer();
