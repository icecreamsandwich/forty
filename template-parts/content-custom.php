<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forty
 */

?>
<?php
//grab the custom field here and display it
$custom_group = get_field('fortysections');
$sec1_title = $custom_group['section1-title'];
$sec1_content = $custom_group['section1-desc'];
$sec3_title = $custom_group['section3-title'];
$sec3_content = $custom_group['section3-desc'];
$sec3_link = $custom_group['section3-link'];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <?php forty_post_thumbnail(); ?>

    <div class="entry-content">
        <!-- Wrapper -->
        <div id="wrapper">
            <?php
            the_content();
            ?>

            <!-- Main -->
            <div id="main">
                <!-- One -->
                <section id="one">
                    <div class="inner">
                        <header class="major">
                            <h2><?php echo $sec1_title; ?> </h2>
                        </header>
                        <p><?php echo $sec1_content; ?></p>
                    </div>
                </section>

                <!-- Two -->
                <section id="two" class="spotlights">
                    <?php

                    // Check rows exists.
                    if (have_rows('fortysection2repeater')) :
                        // Loop through rows.
                        while (have_rows('fortysection2repeater')) : the_row();
                            // Load sub field value.
                            $sec2title = get_sub_field('title');
                            $sec2desc = get_sub_field('description');
                            $sec2image = get_sub_field('image');
                            $sec2link = get_sub_field('link');
                            // Do something...
                    ?>
                            <section>
                                <a href="generic.html" class="image">
                                    <img src="<?php echo $sec2image; ?>" alt="" data-position="center center" />
                                </a>
                                <div class="content">
                                    <div class="inner">
                                        <header class="major">
                                            <h3><?php echo $sec2title;?></h3>
                                        </header>
                                        <p><?php echo $sec2desc; ?></p>
                                        <ul class="actions">
                                            <li><a href="<?php echo $sec2link; ?>" class="button">Learn more</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                    <?php
                        // End loop.
                        endwhile;

                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>
                    <!--  <section>
                        <a href="generic.html" class="image">
                            <img src="images/pic08.jpg" alt="" data-position="center center" />
                        </a>
                        <div class="content">
                            <div class="inner">
                                <header class="major">
                                    <h3>Orci maecenas</h3>
                                </header>
                                <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.</p>
                                <ul class="actions">
                                    <li><a href="generic.html" class="button">Learn more</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section>
                        <a href="generic.html" class="image">
                            <img src="images/pic09.jpg" alt="" data-position="top center" />
                        </a>
                        <div class="content">
                            <div class="inner">
                                <header class="major">
                                    <h3>Rhoncus magna</h3>
                                </header>
                                <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.</p>
                                <ul class="actions">
                                    <li><a href="generic.html" class="button">Learn more</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section>
                        <a href="generic.html" class="image">
                            <img src="images/pic10.jpg" alt="" data-position="25% 25%" />
                        </a>
                        <div class="content">
                            <div class="inner">
                                <header class="major">
                                    <h3>Sed nunc ligula</h3>
                                </header>
                                <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis magna sed nunc rhoncus condimentum sem. In efficitur ligula tate urna. Maecenas massa sed magna lacinia magna pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis tempus.</p>
                                <ul class="actions">
                                    <li><a href="generic.html" class="button">Learn more</a></li>
                                </ul>
                            </div>
                        </div>
                    </section> -->
                </section>

                <!-- Three -->
                <section id="three">
                    <div class="inner">
                        <header class="major">
                            <h2><?php echo $sec3_title; ?></h2>
                        </header>
                        <p><?php echo $sec3_content; ?></p>
                        <ul class="actions">
                            <li><a href="<?php echo $sec3_link; ?>" class="button next">Get Started</a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->