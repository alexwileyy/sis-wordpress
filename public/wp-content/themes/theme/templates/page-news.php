<?php
/**
 * Template Name: News
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
$featured = get_field('featured');
?>


<main class="n-and-b">

    <!-- Header -->
    <header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
        <!-- Header content -->
        <div class="container-fluid">
            <div class="row">
                <h2 class="col-10"><?php echo $header['title'];?></h2>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <section class="n-and-b__featured">

        <div class="container">
            <div class="row">
                <?php foreach ($featured['featured_posts'] as $f_post) : ?>
                <div class="col-12 col-md-6">
                    <?php var_dump($f_post);?>
                </div>
                <?php endforeach;?>
            </div>
        </div>

    </section>

</main>


<?php get_footer();
