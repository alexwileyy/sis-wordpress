<?php get_header(); ?>

<?php
$header = get_field('header', get_option('page_for_posts'));
$featured = get_field('featured', get_option('page_for_posts'));
$post = get_field('short_description', get_option('page_for_posts'));
?>


    <main class="n-and-b">

        <!-- Header -->
        <header class="header--small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/shape-background.jpg')">
            <!-- Header content -->
            <div class="container">
                <div class="row">
                    <h2 class="col-10"><?php echo $header['title'];?></h2>
                </div>
            </div>
        </header>
        <!-- End Header -->


        <!-- Featured posts -->
        <?php
        $post_objects = get_field('featured', get_option('page_for_posts'))['featured_posts'];

        if( $post_objects ): ?>
            <section class="n-and-b__featured">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="n-and-b--title"><?php echo $featured['title'];?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach( $post_objects as $post_object): ?>
                            <?php
                            $post_object = $post_object["post"];
                            $desc = get_field('short_description', $post_object->ID);
                            $link = get_permalink($post_object->ID);
                            $category = get_the_category($post_object->ID)[0]->name;
                            $author_name = get_the_author_meta( 'display_name', $post_object->post_author );
                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post_object->ID), 'post')[0];
                            ?>
                            <div class="col-12 col-md-6">
                                <a href="<?php echo $link;?>">
                                    <div class="feature-post">
                                        <div class="feature-post__image" style="background-image: url(<?php echo $thumb;?>)"></div>
                                        <div class="feature-post__title">
                                            <h3><?php echo get_the_title($post_object->ID)?></h3>
                                        </div>
                                        <div class="feature-post__meta">
                                            <div>
                                                <img src="<?php echo get_template_directory_uri();?>/images/tag.svg"/>
                                                <p><?php echo $category;?></p>
                                            </div>
                                            <div>
                                                <p>.</p>
                                            </div>
                                            <div>
                                                <p>By <?php echo $author_name;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>

            </section>
        <?php endif;?>
        <!-- End featured posts -->

        <?php $sections = array('news' => 3, 'blog' => 4); ?>

        <?php foreach ($sections as $name => $section) : ?>

        <?php

        // WP_Query arguments
        $args = array(
            'post_type'              => array( 'post' ),
            'nopaging'               => false,
            'posts_per_page'         => '3',
            'order'                  => 'ASC',
            'orderby'                => 'date',
            'category'               => $section
        );

        // The Query
//        $posts = new WP_Query( $args );
        $posts = get_posts( $args );
        ?>

        <!-- News -->
        <section class="posts">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="n-and-b--title"><?php echo $name;?></h2>
                    </div>
                    <div class="col-12">
                        <?php foreach ($posts as $the_post) : ?>
                        <div class="post-preview">
                            <div class="post-preview__left">
                                <a href="<?php the_permalink($the_post->ID);?>">
                                    <img class="post-preview--thumbnail" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($the_post->ID), 'post')[0];?>"/>
                                </a>
                            </div>
                            <div class="post-preview__right">
                                <a href="<?php the_permalink($the_post->ID);?>">
                                    <h3><?php echo get_the_title($the_post->ID);?></h3>
                                </a>
                                <p><?php the_field('short_description', $the_post->ID) ;?></p>
                                <div class="post-preview__right-meta">
                                    <?php
                                    $source = get_field('source', $the_post->ID)['name'];
                                    ?>
                                    <?php if(get_field('source', $the_post->ID)) : ?>
                                        <p>By <?php echo get_the_author_meta( 'display_name', $the_post->post_author );?>   |   Source: <a target="_blank" href="<?php echo get_field('source', $the_post->ID)['source_url'];?>"><?php echo get_field('source', $the_post->ID)['name'];?></a></p>
                                    <? else: ?>
                                        <p>By <?php echo get_the_author_meta( 'display_name', $the_post->post_author );?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News -->

        <?php endforeach; ?>


    </main>


<?php get_footer();
