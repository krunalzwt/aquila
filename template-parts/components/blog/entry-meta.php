<?php

/**
 * Template for post entry meta.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AQUILA
 */

?>

<div class="entry-meta mb-3">
    <?php
    echo aquila_posted_on();
    echo aquila_posted_by();
    ?>
</div>