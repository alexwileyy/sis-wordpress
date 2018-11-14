<?php
/**
 * Template Name: Training
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

<script>
    var trainingCourses = [];
</script>

<div class="training-division">
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

    <section class="service-section--small training-courses">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-md-6 col-sm-12 order-md-0 order-sm-1 training-courses-container">
                    <h2 class="uppercase"><?php echo $section_two['title'];?></h2>
                    <p><?php echo $section_two['body'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-12 training-division__courses">
                    <?php $i = 0;?>
                    <?php foreach ($section_two['courses'] as $course) : ?>
                        <script class="remove-script">
                            trainingCourses.push({name: "<?php echo $course['course_name'];?>", description: `<?php echo $course['course_description'];?>`});
                        </script>
                        <div class="accordion-tab" onclick="trainingSelectCourse(<?php echo $i;?>)">
                            <p><?php echo $course['course_name'];?></p>
                        </div>
                        <?php $i++;?>
                    <?php endforeach;?>
                </div>
                <script>
                    setTimeout(function(){trainingSelectCourse(0)}, 0);
                </script>
                <div class="col-md-4 offset-md-1 offset-0 col-12">
                    <div class="feature-box" id="standard-courses">
                        <h4 class="training-courses--box-title"></h4>
                        <div class="training-courses--box-desc"></div>

                    </div>
                    <a href="/contact">
                        <button class="button">Contact</button>
                    </a>
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

    <section class="service-section--small training-courses">
        <div class="container-fluid">
            <div class="row">
                <!-- Feature Text -->
                <div class="col-lg-7 col-md-12 col-12 order-lg-0 order-1 training-courses-container">
                    <h2 class="uppercase"><?php echo $section_three['title'];?></h2>
                    <p><?php echo $section_three['body'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-12">
                    <?php foreach ($section_three['courses'] as $course) :?>
                    <div class="accordion-tab">
                        <p><?php echo $course['course_name'];?></p>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-12 offset-md-0 col-sm-12 order-lg-1 order-0 hide-medium">
                    <img src="<?php echo $section_three['image'];?>" class="service-feature__image"/>
                </div>
            </div>
        </div>
    </section>

    <app-cta></app-cta>

</div>

<?php get_footer();