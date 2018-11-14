<?php
/**
 * Template Name: Overt And Covert Technical Surveillance
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

<div class="overt-and-covert">
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
                    <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_one['body'];?></p>
                </div>

                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img src="<?php echo $section_one['image'];?>" class="service-feature__image section-image">
                </div>

            </div>

            <div class="row">

                <?php foreach ($section_one['features'] as $feature) : ;?>

                <div class="col-md-4 col-sm-6 col-12">
                    <div class="feature">
                        <div class="feature__content">
                            <h3><?php echo $feature['title'];?></h3>
                            <p><?php echo $feature['body'];?></p>
                        </div>
                    </div>
                </div>

                <?php endforeach;?>

            </div>


        </div>

    </section>

    <div class="tracking-systems service-section--small">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>
                    <p>Whatever your needs, <a routerLink="/contact">contact us</a>.</p>
                    <div class="container pills-container">
                        <div class="row">
                            <?php foreach ($section_two['features'] as $feature) : ?>
                            <div class="pill">
                                <p><?php echo $feature['title'];?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <?php foreach ($section_two['images'] as $image) : ?>
                    <img class="feature service-feature__image hide-medium" src="<?php echo $image['image'];?>"/>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
    </div>

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