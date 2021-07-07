<?php
/**
 * Template part for displaying content of Canvas [Fullwidth] page template without no spacing.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Maximo
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="maximo-entry-content maximo-fullwidth-entry-content">
        <?php the_content(); ?>
    </div>
</article>