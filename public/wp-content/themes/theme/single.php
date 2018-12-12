<?php get_header();
setup_postdata(the_post())

//$post = get_post();
?>

<main class="post">

    <!-- Header -->
    <header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
        <!-- Header content -->
        <div class="container">
            <div class="row post__title">
                <div class="col-10">
                    <h2><?php the_title();?></h2>
                    <p>By <?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');?> <span>|</span> On <?php echo the_date();?></p>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

</main>

<section class="post__content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post__content--feature-image">
                    <?php the_post_thumbnail('full');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo get_post()->post_content;?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
