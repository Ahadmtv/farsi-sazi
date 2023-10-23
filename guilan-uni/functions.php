<?php

require get_theme_file_path('/inc/search-route.php');
function addData(){
    register_rest_field('post','ahad',array(
        'get_callback'=>function(){return get_the_author();}
    ));
}
add_action('rest_api_init','addData');
function banner($args=null)
{
    if (!$args['title']) {
        $args['title'] =get_the_title();
    }

    if (!$args['subtitle']) {
        $args['subtitle'] = get_field('banner_subtitle');
    }

    if (!$args['photo']) {
        if (get_field('banner_image')) {
            $args['photo'] = get_field('banner_image')['sizes']['pageBanner'];
        } else {
            $args['photo'] = get_theme_file_uri('/image/ocean.jpg');
        }
    }
?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'] ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">
                <?php echo $args['title']; ?>
            </h1>
            <div class="page-banner__intro">
                <p> <?php echo $args['subtitle'] ?></p>
            </div>
        </div>
    </div>
<?php
}
function load_css()
{
    wp_register_style('style1', get_stylesheet_uri());
    wp_register_style('fontawsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_style('style2', get_template_directory_uri() . "/build/index.css");
    wp_enqueue_style('fontawsome');
    wp_enqueue_style('style2');
    wp_enqueue_style('style1');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_register_script('mainjs', get_template_directory_uri() . "/build/index.js", null, false, true);
    wp_enqueue_script('mainjs');
    wp_localize_script('mainjs','uniData',array(
        'siteUrl'=> get_site_url()
    ));
}
add_action('wp_enqueue_scripts', 'load_js');

function add_features()
{
    register_nav_menu('topMenu', 'Top Menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('profesorSmall', 400, 260, true);
    add_image_size('profesorMedium', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'add_features');




?>