<?php
/**
 * Template Name: Close Protection Operations
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
?>

    <header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
        <!-- Header content -->
        <div class="container-fluid">
            <div class="row">
                <h2 class="col-10"><?php echo $header['title'];?></h2>
            </div>
        </div>
    </header>

    <!-- Feature Section -->
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
        </div>
    </section>



    <!-- Stats -->
    <section class="statistics service-section--small">
        <div class="container-fluid">
            <!-- Heading -->
            <div class="row">
                <div class="col-7">
                    <div class="statistics--heading">
                        <h2 class="bold"><?php echo $section_two['title'];?></h2>
                        <p><?php echo $section_two['body'];?></p>
                    </div>
                </div>
            </div>
            <!-- Stats -->
            <div class="row">
                <?php foreach ($section_two['statistics'] as $stat) : ?>
                <!-- Item 1 -->
                <div class="col-md-4 col-12">
                    <div class="statistics--center">
                        <h3 class="statistics--stat"><?php echo $stat['big_statistic'];?></h3>

                        <?php if(strlen($stat['subtitle_one']) >= 1) : ?>
                        <p><?php echo $stat['subtitle_one'];?></p>
                        <?php endif; ?>

                        <?php if(strlen($stat['subtitle_two']) >= 1) : ?>
                        <p><?php echo $stat['subtitle_two'];?></p>
                        <?php endif;?>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>


    <!-- Personal touch -->
    <section class="service-section--small">
        <div class="container-fluid">

            <!-- Heading -->
            <div class="row">

                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <div class="statistics--heading">
                        <h2 class="bold"><?php echo $section_three['title'];?></h2>
                        <p><?php echo $section_three['body'];?></p>
                    </div>
                </div>

                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img class="section-image service-feature__image" src="<?php echo $section_three['image'];?>">
                </div>

            </div>

        </div>
    </section>


    <!-- Solution -->
    <section class="tabbed-section service-section--small">
        <div class="container-fluid">
            <!-- Heading -->
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <div>
                        <h2 class="bold"><?php echo $section_four['title'];?></h2>
                        <p><?php echo $section_four['body']?></p>
                        <br>
                        <p>We can assist with:</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img class="section-image" src="<?php echo $section_four['image'] ;?>"/>
                </div>
            </div>

            <!-- Pills -->
            <div class="row justify-content-sm-center">

                <?php foreach ($section_four['solutions'] as $solution) : ?>
                <div class="col-sm-10 offset-sm-1 offset-md-0 col-md-3">
                    <div class="pill">
                        <p><?php echo $solution['title'];?></p>
                    </div>
                </div>
                <?php endforeach; ?>

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

<?php get_footer();