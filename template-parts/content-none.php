<?php

/**
 * The template for displaing a "No posts found" message.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AQUILA
 */

?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e('Nothing Found!!', 'aquila') ?>
        </h1>
        <div class="page-content">
            <?php
            if (is_home() && current_user_can('publish_posts')) {
            ?>
                <p>
                    <?php
                    printf(
                        wp_kses(
                            /* translators: %s: link to WP admin new post page. */
                            __('Ready to publish your first post? <a href="%s">Get started here</a>.', 'aquila'),
                            array(
                                'a' => array(
                                    'href' => array(),
                                ),
                            )
                        ),
                        esc_url(admin_url('post-new.php'))
                    );
                    ?>
                </p>
            <?php } elseif (is_search()) {
            ?>
                <p>
                    <?php
                    esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'aquila');
                    ?>
                </p>
            <?php
                get_search_form();
            } else { ?>
                <p>
                    <?php
                    esc_html_e('We cannot find what you are looking for!!', 'aquila');
                    ?>
                </p>
            <?php
                get_search_form();
            }
            ?>
        </div>


    </header>
</section>