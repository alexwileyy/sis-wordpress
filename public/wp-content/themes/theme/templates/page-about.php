<?php
/**
 * Template Name: About
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
?>

<main class="about">

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
                <div class="col-md-7 col-sm-12 order-md-0 order-sm-1">
                    <h2 class="uppercase"><?php echo $section_one['title'];?></h2>
                    <p><?php echo $section_one['body'];?></p>
                </div>
                <!-- Feature Image -->
                <div class="col-md-4 col-sm-12 offset-md-1 align-self-center col-sm-12 order-md-1 order-sm-0">
                    <img src="<?php echo $section_one['image'];?>" class="service-feature__image">
                    <?php foreach ($section_one['facts'] as $fact) : ?>
                    <div class="side-stat">
                        <?php echo $fact['fact'];?>
                        <span><?php echo $fact['subtitle'];?></span>
                    </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section--small about-team">
        <div class="container-fluid">
            <div class="row">
                <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
            </div>
            <div class="row about-team__list">

                <div class="container-fluid">
                    <div class="row about-team-member">
                        <?php foreach ($section_two['team_members'] as $person) : ?>
                        <div class="col-md-4 col-sm-6 offset-sm-0 col-10 offset-1">
                            <h2 class="about-team--name"><?php echo $person['name'];?></h2>
                            <h4 class="about-team--position"><?php echo $person['job_title'];?></h4>
                            <p><?php echo $person['description'];?></p>
                            <div class="about-team--cv">
                                <a href="<?php echo $person['cv'];?>" target="_blank">
                                    <img src="<?php echo get_template_directory_uri();?>/images/cv.svg"/>
                                    <p>Download CV</p>
                                </a>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>
        </div>
    </section>





</main>

<?php get_footer();
