<?php
/**
 * Template Name: Corporate And Commercial Investigations
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
            <div class="col-md-7 col-sm-12 order-md-0 order-2">
                <h2 class="uppercase"><?php echo $section_one['title'];?></h2>
                <p><?php echo $section_one['body'];?></p>
            </div>
            <!-- Feature Image -->
            <div class="col-md-4 col-sm-12 offset-md-1 align-self-center col-sm-12 order-md-1 order-1" style="text-align: center"><img src="<?php echo $section_one['image'];?>" class="service-feature__image"></div>
        </div>
    </div>
</section>


<!-- Solution -->
<section class="tabbed-section service-section--small">
    <div class="container-fluid">
        <!-- Heading -->
        <div class="row">
            <div class="col-7">
                <div>
                    <h2 class="bold"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>
                </div>
            </div>
        </div>

        <!-- Pills -->
        <div class="row justify-content-sm-center align-items-center">

            <?php foreach ($section_two['pills'] as $pill) : ?>
            <div class="col-sm-10 offset-sm-1 offset-md-0 col-md-3">
                <div class="pill">
                    <p><?php echo $pill['text'];?></p>
                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</section>


<section class="service-section--small">
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                <h2 class="bold" style="text-transform: uppercase"><?php echo $section_three['title'];?></h2>
                <p><?php echo $section_three['body'];?></p>
            </div>
            <!-- Feature Image -->
            <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                <img src="<?php echo $section_three['image'];?>" class="service-feature__image section-image">
            </div>
        </div>
    </div>
</section>

<section class="service-section--small">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                <h2 class="bold"><?php echo $section_four['title'];?></h2>
                <p><?php echo $section_four['body'];?></p>
            </div>
            <!-- Feature Image -->
            <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                <img src="<?php echo $section_four['image'];?>" class="service-feature__image section-image">
            </div>
        </div>
    </div>
</section>



<?php get_footer();