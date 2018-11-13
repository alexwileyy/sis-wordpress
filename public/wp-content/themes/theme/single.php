<?php get_header(); ?>

<main class="post">

    <!-- Header -->
    <header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
        <!-- Header content -->
        <div class="container-fluid">
            <div class="row">
                <h2 class="col-10"><?php the_title();?></h2>
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
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
