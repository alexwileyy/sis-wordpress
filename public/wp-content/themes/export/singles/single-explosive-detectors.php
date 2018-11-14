<?php
/**
 * Template Name: Explosive Detectors
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
$section_six = get_field('section_six');
?>

<div class="explosive-detectors">
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
        </div>
    </section>

    <section class="service-section--small">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>

                    <div class="row explosive-detectors__grid">

                        <?php foreach ($section_two['features'] as $feature) : ?>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="explosive-detectors__product">
                                <div class="pill">
                                    <p><?php echo $feature['text'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>

                    </div>

                </div>

                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($section_two['images'] as $image) : ?>
                            <div class="col-lg-12 col-6">
                                <img src="<?php echo $image['image'];?>"/>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="service-section--small">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_three['title'];?></h2>
                    <p><?php echo $section_three['body'];?></p>
                    <div class="inline-note">
                        <?php echo $section_three['note'];?>
                    </div>
                    <div class="explosive-detectors__enquire">
                        <a href="/contact">
                            <button class="button">Enquire</button>
                        </a>
                    </div>
                    <div class="explosive-detectors__screening-products-title">
                        <h3>Screening Products</h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <?php foreach ($section_three['products'] as $product) : ?>
                            <div class="col-sm-10 offset-sm-1 offset-md-0 col-md-3">
                                <div class="pill">
                                    <p><?php echo $product['text'];?></p>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($section_three['images'] as $image) : ;?>
                            <div class="col-lg-12 col-6">
                                <img src="<?php echo $image['image'];?>"/>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="service-section--small">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="feature-image__image drones-can-kill">
                        <img src="<?php echo $section_four['image'];?>"/>
                        <div class="feature-image__image--overlay"></div>
                        <div class="feature-image__meta feature-image__meta--padding">
                            <h3><?php echo $section_four['title'];?></h3>
                            <span><?php echo $section_four['subtitle'];?></span>
                        </div>
                    </div>
                </div>
                <!-- Feature Text -->
                <div class="col-12">
                    <div class="article">
                        <h2><?php echo $section_four['second_title'];?></h2>
                        <p><?php echo $section_four['body'];?></p>
                    </div>
                </div>
                <div class="col-12 article">
                    <div class="article">
                        <h2><?php echo $section_five['title'];?></h2>
                        <p><?php echo $section_five['body'];?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="service-section--small">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-12">
                    <h2 class="uppercase"><?php echo $section_six['title'];?></h2>
                    <p><strong>Product Overview</strong></p>
                    <p><?php echo $section_six['body'];?></p>
                    <?php if ($section_six['fact_box']['show_box']) : ?>
                    <div class="info-box">
                        <div class="info-box__content">
                            <h4><?php echo $section_six['fact_box']['box_title'];?></h4>
                            <p><?php echo $section_six['fact_box']['box_body'];?></p>
                        </div>
                    </div>
                    <?php endif;?>
                </div>

            </div>

            <div class="row">

                <div class="col-12">
                    <h4>Products</h4>
                </div>

                <?php foreach ($section_six['products'] as $product) : ?>
                <div class=" col-lg-6 col-md-12 col-12">
                    <img src="<?php echo $product['image'];?>"/>
                    <div class="feature-box">
                        <h4><?php echo $product['name'];?></h4>
                        <p><strong>Product Specification:</strong></p>
                        <?php echo $product['description'];?>
                    </div>
                </div>
                <?php endforeach; ?>

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