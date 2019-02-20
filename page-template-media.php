<?php
/*
 Template Name: Page: Media
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

            <div id="content">

                <div id="inner-content" class="wrap cf">

                        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                <header class="article-header">

                                    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>

                                    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                                </header> <?php // end article header ?>

                                <section class="entry-content cf media-page" itemprop="articleBody">

                                    <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('media_content') ):

                                        // loop through the rows of data
                                        while ( have_rows('media_content') ) : the_row();

                                            // vars
                                            $title = get_sub_field('title');
                                            $content = get_sub_field('content');

                                            echo '<h4>' . $title . '</h4>';
                                            echo $content . '<hr />';

                                        endwhile;

                                    else :

                                        // no rows found

                                    endif;

                                    ?>

                                    <?php the_content(); ?>
                                </section>

                                <footer class="article-footer cf">

                                </footer>

                                <?php comments_template(); ?>

                            </article>

                            <?php endwhile; else : ?>

                                    <article id="post-not-found" class="hentry cf">
                                            <header class="article-header">
                                                <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                                        </header>
                                            <section class="entry-content">
                                                <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                                        </section>
                                        <footer class="article-footer">
                                                <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
                                        </footer>
                                    </article>

                            <?php endif; ?>

                        </main>

                        <?php get_sidebar(); ?>

                </div>

            </div>


<?php get_footer(); ?>
