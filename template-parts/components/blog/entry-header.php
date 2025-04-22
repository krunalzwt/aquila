<?php

/**
 * Template for post entry header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AQUILA
 */
$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
$heading_class = !empty($hide_title) && $hide_title == 'yes' ? 'hide' : '';
?>
<header class="entry-header">
    <?php
    if ($has_post_thumbnail) {
    ?>
        <div class="entry-image mb-3">
            <a href="<?php echo esc_url(get_permalink($the_post_id)); ?>">
                <?php the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width: 350px) 350px, 233px',
                        'class' => 'attachment-featured-large size-featured-image',
                    ]
                ); ?>
            </a>
        </div>
    <?php }

    if (is_page() || is_single()) {
        printf('<h1 class="page-title text-dark %1$s">%2$s</h1>', esc_attr($heading_class), wp_kses_post(get_the_title()));
    } else {
        printf('<h2 class="entry-title mb-3"><a href="%1$s" class="text-dark">%2$s</a></h2>', esc_url(get_the_permalink()), wp_kses_post(get_the_title()));
    }
    ?>
</header>