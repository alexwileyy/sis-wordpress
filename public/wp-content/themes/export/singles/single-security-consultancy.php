<?php
/**
 * Template Name: Security Consultancy
 * Template Post Type: service_type
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

<?php
$header = get_field('header');
$section_one = get_field('section_one');
$section_two = get_field('section_two');
$section_three = get_field('section_three');
?>

<div class="wsc">
    <header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
        <!-- Header content -->
        <div class="container-fluid">
            <div class="row">
                <h2 class="col-10"><?php echo $header['title'];?></h2>
            </div>
        </div>
    </header>


    <section class="service-feature">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_one['title'];?></h2>
                    <p><?php echo $section_one['body'];?></p>
                </div>
                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img src="<?php echo $section_one['image'];?>" class="service-feature__image">
                </div>
            </div>
        </div>
    </section>

    <!-- Conference Feature -->
    <section class="service-section--small feature-image">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="feature-image__image">
                        <img src="<?php echo $section_two['image'];?>"/>
                        <div class="feature-image__image--overlay"></div>
                        <div class="feature-image__meta">
                            <div class="container-fluid">
                                <div class="row justify-content-between wsc__sc-content">
                                    <h3><?php echo $section_two['title'];?></h3>
                                    <div>
                                        <?php if ($section_two['button']['show_button']) : ?>
                                        <a href="<?php echo $section_two['button']['button_link'];?>">
                                            <button class="button"><?php echo $section_two['button']['button_text'];?></button>
                                        </a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wsc__consultancy justify-content-center">

                <?php foreach ($section_two['features'] as $feature) : ?>
                <div class="col-md-4 col-6">
                    <div class="pill">
                        <p><?php echo $feature['title'];?></p>
                    </div>
                </div>
                <?php endforeach;?>

            </div>


            <div class="row">

                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h4><?php echo $section_two['subtitle'];?></h4>
                    <p><?php echo $section_two['body'];?></p>
                </div>

                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img class="section-image" src="<?php echo $section_two['side_image'];?>"/>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <?php
    $cta_text = get_field('cta_title');
    $cta_link = get_field('cta_link');
    ?>
    <?php if(get_field('show_cta')) : ?>
        <?php include( locate_template( 'partials/app-cta.php', false, false ) );  ?>
    <?php endif; ?>

    <section class="service-section--small feature-image">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="feature-image__image">
                        <img src="<?php echo $section_three['image'];?>"/>
                        <div class="feature-image__image--overlay"></div>
                        <div class="feature-image__meta">
                            <div class="container-fluid">
                                <div class="row justify-content-between wsc__sc-content">
                                    <h3><?php echo $section_three['title'];?></h3>
                                    <div>
                                        <?php if($section_three['button']['show_button']) : ?>
                                        <a href="<?php echo $section_three['button']['button_link'];?>">
                                            <button class="button"><?php echo $section_three['button']['button_text'];?></button>
                                        </a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h4><?php echo $section_three['subtitle'];?></h4>
                    <p><?php echo $section_three['body'];?></p>
                </div>

                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img class="section-image" src="<?php echo $section_three['side_image'];?>"/>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <?php
    $cta_text = get_field('cta_title');
    $cta_link = get_field('cta_link');
    ?>
    <?php if(get_field('show_cta')) : ?>
        <?php include( locate_template( 'partials/app-cta.php', false, false ) );  ?>
    <?php endif; ?>

</div>


<?php get_footer();