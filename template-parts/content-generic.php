<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forty
 */



//grab the custom field values here
$generic_fields = get_field('fortygeneric');
$title = $generic_fields['title'];
$content = $generic_fields['description'];
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php  the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <!-- Main -->
    <div id="main" class="alt">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1><?php echo $title; ?></h1>
                </header>
                <span class="image main"><?php the_post_thumbnail(); ?></span>
                <?php echo $content; ?>
            </div>
        </section>

    </div>

</article><!-- #post-<?php the_ID(); ?> -->