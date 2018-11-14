<?php
/**
 * Template Name: Technical Surveillance
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
$section_four = get_field('section_four');
$section_five = get_field('section_five');
?>

<div class="tscm">
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
                    <img src="<?php echo $section_one['image'];?>" class="service-feature__image section-image">
                </div>
            </div>

            <div class="row">
                <div class="tscm__clients col-md-7 col-12">
                    <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>
                </div>
            </div>
        </div>
    </section>


    <section class="service-section--small container-fluid">
        <div class="row">
            <div class="col-md-7 col-12">
                <h2 class="uppercase"><?php echo $section_three['title'];?></h2>
                <p><?php echo $section_three['body'];?></p>
            </div>
        </div>
    </section>

    <section class="service-section--small container-fluid">
        <div class="row">
            <div class="col-md-7 col-12">
                <h2 class="uppercase"><?php echo $section_four['title'];?></h2>
                <p><?php echo $section_four['body'];?></p>
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

    <section class="service-section--small container-fluid">
        <div class="row">
            <div class="col-md-7 col-12">
                <h2 class="uppercase"><?php echo $section_five['title'];?></h2>
                <p><?php echo $section_five['body'];?></p>
            </div>
        </div>
    </section>

</div>

<?php get_footer();