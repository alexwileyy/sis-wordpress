<?php
/**
 * Template Name: Procurement China
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
    $section_two= get_field('section_two');
    $section_three= get_field('section_three');
 ?>

<header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
    <!-- Header content -->
    <div class="container-fluid">
        <div class="row">
            <h2 class="col-10"><?php echo $header['title'];?></h2>
        </div>
    </div>
</header>


<!-- Conference Feature -->
<section class="service-section--small feature-image">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="feature-image__image">
                    <img src="<?php echo $section_one['image'];?>"/>
                    <div class="feature-image__image--overlay"></div>
                    <div class="feature-image__meta feature-image__meta--padding">
                        <h3><?php echo $section_one['title'];?></h3>
                        <span><?php echo $section_one['subtitle'];?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pc__feature-content">
            <div class="col-md-7">
                <p><?php echo $section_one['body'];?></p>
            </div>
            <div class="col-md-4 offset-md-1 col-12">
                <div class="feature-box">
                    <h4>Stats</h4>
                    <ul>
                        <?php foreach($section_one['stats'] as $stat) : ?>
                        <li>
                            <img src="<?php echo $stat['icon'];?>"/>
                            <p><?php echo $stat['text'];?></p>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Allen Section -->
<section class="service-section--small">
    <div class="container-fluid">
        <!-- Heading -->
        <div class="row">
            <div class="col-md-7 col-12">
                <div>
                    <h2 class="bold"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>
                </div>
            </div>
            <!-- Feature Image -->
            <div class="col-md-4 col-sm-12 offset-md-1 align-self-center col-sm-12 order-md-1 order-sm-0"><img src="<?php echo $section_two['image'];?>" class="service-feature__image"></div>
        </div>
    </div>
</section>

<!-- Visiting China -->
<!-- Solution -->
<section class="tabbed-section service-section--small">
    <div class="container-fluid">
        <!-- Heading -->
        <div class="row">
            <div class="col-7">
                <div>
                    <h2 class="bold"><?php echo $section_three['title'];?></h2>
                    <p><?php echo $section_three['body'];?></p>
                </div>
            </div>
        </div>

        <!-- Pills -->
        <div class="row justify-content-sm-center">

            <?php foreach ($section_three['pills'] as $pill) : ?>
                <div class="col-sm-10 offset-sm-1 offset-md-0 col-md-3">
                    <div class="pill">
                        <p><?php echo $pill['text'];?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- CTA -->
<?php
$cta = get_field('call_to_action');
$cta_text = $cta['cta_title'];
?>
<?php if($cta['show_cta']) : ?>
    <?php include( locate_template( 'partials/app-cta.php', false, false ) );  ?>
<?php endif; ?>

<?php get_footer();