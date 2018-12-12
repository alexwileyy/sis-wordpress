<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function project_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('project');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'project_setup');

function hook_sig()
{
    ?>
    <!-- 
    Alex Wiley - 2018 
    -->
    <?php
}
add_action('wp_head', 'hook_sig', 0);

 function register_my_menus()
 {
     register_nav_menus(
         array(
             'nav-top' => __('Top Navigation'),
             'short-menu' => __('Mobile & Footer Menu')
         )
     );
 }
 add_action('init', 'register_my_menus');

/**
 * Enqueue scripts and styles.
 */
function project_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('project-style', get_stylesheet_uri());
    wp_enqueue_style('project-slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap-grid.min.css');

    // Font
    wp_enqueue_style('project-fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');

    // jQuery
    wp_enqueue_script('$', '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array(), '1.7.2', true);

    wp_enqueue_script('project-shiv', '//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '1.0.0', false);
    wp_enqueue_script('project-respond', '//oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.0.0', false);

    wp_enqueue_script('project-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0');

    wp_enqueue_script('project-global', get_theme_file_uri('main.min.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'project_scripts');

function remove_menus()
{
    // remove_menu_page( 'index.php' );                  //Dashboard
    //remove_menu_page('edit.php');                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    // remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page('edit-comments.php');          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    // remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
}
add_action('admin_menu', 'remove_menus');

function remove_acf_menu() {
    //remove_menu_page('edit.php?post_type=acf-field-group');
}
add_action( 'admin_menu', 'remove_acf_menu', 999);


function init_remove_editor(){
    remove_post_type_support( 'services', 'editor');
    remove_post_type_support( 'page', 'editor');
}
add_action('init', 'init_remove_editor',100);

function hide_editor() {
    if(isset($_REQUEST['post'])){
        $post_id = $_REQUEST['post'];
        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        if($template_file == 'page-home.php'){ // template name here
            remove_post_type_support('page', 'editor');
        }
    }
}
add_action( 'load-post.php', 'hide_editor' );


// Register Custom Post Type
function service_post_type() {

    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'sis' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'sis' ),
        'menu_name'             => __( 'Services', 'sis' ),
        'name_admin_bar'        => __( 'Services', 'sis' ),
        'archives'              => __( 'Services Archives', 'sis' ),
        'attributes'            => __( 'Services Attributes', 'sis' ),
        'parent_item_colon'     => __( 'Parent Item:', 'sis' ),
        'all_items'             => __( 'All Items', 'sis' ),
        'add_new_item'          => __( 'Add New Item', 'sis' ),
        'add_new'               => __( 'Add New', 'sis' ),
        'new_item'              => __( 'New Item', 'sis' ),
        'edit_item'             => __( 'Edit Item', 'sis' ),
        'update_item'           => __( 'Update Item', 'sis' ),
        'view_item'             => __( 'View Item', 'sis' ),
        'view_items'            => __( 'View Items', 'sis' ),
        'search_items'          => __( 'Search Item', 'sis' ),
        'not_found'             => __( 'Not found', 'sis' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'sis' ),
        'featured_image'        => __( 'Featured Image', 'sis' ),
        'set_featured_image'    => __( 'Set featured image', 'sis' ),
        'remove_featured_image' => __( 'Remove featured image', 'sis' ),
        'use_featured_image'    => __( 'Use as featured image', 'sis' ),
        'insert_into_item'      => __( 'Insert into item', 'sis' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'sis' ),
        'items_list'            => __( 'Items list', 'sis' ),
        'items_list_navigation' => __( 'Items list navigation', 'sis' ),
        'filter_items_list'     => __( 'Filter items list', 'sis' ),
    );
    $args = array(
        'label'                 => __( 'Service', 'sis' ),
        'description'           => __( 'Services offered by SIS', 'sis' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'page-attributes'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-screenoptions',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'service_type', $args );

}
add_action( 'init', 'service_post_type', 0 );

function blog_launcher(){
    add_submenu_page( 'edit.php', 'News Post', 'New News Post', 'read', 'add-news', 'wps_news_func');
}
add_action('admin_menu', 'blog_launcher');

function wps_news_func(){
    wp_redirect('/wp-admin/post-new.php');
//    echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
//        <h2>New News</h2></div>';
}