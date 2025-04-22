<?php  

/*
 * Content Template.
 *
 * This is the most generic template file in a WordPress theme and one of
 * the two required files for a theme (the other being style.css).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AQUILA
 */

?>

<article id="post-<?php the_ID();?>" <?php post_class("mb-5"); ?>>
    <?php 
    get_template_part('template-parts/components/blog/entry-header');
    get_template_part('template-parts/components/blog/entry-meta');
    get_template_part('template-parts/components/blog/entry-content');
    get_template_part('template-parts/components/blog/entry-footer');
    ?>

</article>


