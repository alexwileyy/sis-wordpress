<?php
/**
 * Template Name: Armoured Vehicles
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

<div class="armoured-vehicles">
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
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0"><img src="<?php echo $section_one['image'];?>" class="service-feature__image"></div>
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
                    <?php if($section_two['alert_box']['show_alert_box']) : ?>
                    <div class="info-box">
                        <div class="info-box__content">
                            <h4><?php echo $section_two['alert_box']['title'];?></h4>
                            <p><?php echo $section_two['alert_box']['body'];?></p>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img src="<?php echo $section_two['image'];?>" class="service-feature__image">
                    <?php foreach ($section_two['stats'] as $stat) : ?>
                    <div class="side-stat">
                        <?php echo $stat['stat'];?>
                        <span><?php echo $stat['subtitle'];?></span>
                    </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance -->
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
                </div>
                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <?php foreach ($section_three['images'] as $image) :?>
                        <img src="<?php echo $image['image'];?>" class="service-feature__image" style="margin-bottom: 35px;">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- Maintenance packages -->
    <section class="service-section--small">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1">
                    <h2 class="uppercase"><?php echo $section_four['title'];?></h2>
                    <p><?php echo $section_four['body'];?></p>
                </div>
                <!-- Feature Image -->
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0">
                    <img src="<?php echo $section_four['image'];?>" class="service-feature__image">
                </div>
            </div>
        </div>
    </section>


    <!-- Vehicle stock -->
    <div class="service-section--small vehicle-stock">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <h2>VEHICLE STOCK</h2>
                    <p>SIS provide a variety of armoured vehicles to suit your needs.</p>
                </div>

                <div class="col-md-12">
                    <div class="vehicle-stock__category">
                        <h4>4 x 4 Armoured Conversions</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3" *ngFor="let c of conversions">
                                    <div class="vehicle-stock__thumbnail" >
                                        <img src="{{c.image}}"/>
                                        <p>{{c.name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="vehicle-stock__category">
                        <h4>4 x 4 Armoured Conversions</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3" *ngFor="let c of conversions">
                                    <div class="vehicle-stock__thumbnail" >
                                        <img src="{{c.image}}"/>
                                        <p>{{c.name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="vehicle-stock__category">
                        <h4>4 x 4 Armoured Conversions</h4>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3" *ngFor="let c of conversions">
                                    <div class="vehicle-stock__thumbnail" >
                                        <img src="{{c.image}}"/>
                                        <p>{{c.name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <app-cta></app-cta>

</div>

<?php get_footer();