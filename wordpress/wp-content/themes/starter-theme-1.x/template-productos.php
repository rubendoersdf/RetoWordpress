<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 * Template name: template-productos
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();

// $args = array(
//     // Get post type project
//     'post_type' => 'productos',
//     // Get all posts
//     'posts_per_page' => -1);
// $context['productos'] = Timber::get_posts( $args );

// $context['productos'] = new Timber\PostQuery();
// echo $context['productos'];
$context [ 'productos' ] = Timber :: get_posts ( 'post_type=producto' );
$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );



// $context = Timber::get_context();
// $args = array(
// // Get post type project
// 'post_type' => 'productos',
// // Get all posts
// 'posts_per_page' => -1,
// // Gest post by "graphic" category
// 'meta_query' => array(
//     array(
//         'compare' => 'LIKE'
//     )
// ),
// // Order by post date
// 'orderby' => array(
//     'date' => 'DESC'
// ));

// $context['prodcutos'] = Timber::get_posts( $args );
