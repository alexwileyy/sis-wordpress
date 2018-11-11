<?php
/**
 * Template Name: Security And Vetting
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

<div class="security-and-vetting">

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
                <div class="col-md-7 col-sm-12 order-md-0 order-sm-1 order-1">
                    <h2 class="uppercase"><?php echo $section_one['title'];?></h2>
                    <p><?php echo $section_one['body'];?></p>
                </div>
                <!-- Feature Image -->
                <div class="col-md-4 col-sm-12 offset-md-1 align-self-center col-sm-12 order-md-1 order-sm-0 order-0">
                    <img src="<?php echo $section_one['image'];?>" class="service-feature__image">
                </div>
            </div>
        </div>
    </section>



    <section class="service-section--small">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>
                </div>
                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img src="<?php echo $section_two['image'];?>" class="service-feature__image">
                    <?php foreach ($section_two['stats'] as $stat) : ?>
                    <div class="side-stat">
                        <?php echo $stat['stat'];?>
                        <span><?php echo $stat['subtitle'];?></span>
                    </div>
                    <?php endforeach; ?>
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

    <div class="service-section--small specialized-solution">

        <div class="container-fluid">

            <div class="row">
                <img class="specialized-solution__image hide-medium" src="<?php echo $section_three['feature_image'];?>"/>
            </div>

            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_three['title'];?></h2>
                    <p><?php echo $section_three['body'];?></p>
                </div>
                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img src="<?php echo $section_three['image'];?>" class="service-feature__image section-image"/>
                </div>
            </div>

        </div>

    </div>

</div>

<?php get_footer();