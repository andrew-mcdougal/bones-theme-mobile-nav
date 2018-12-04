<?php
/*
Template Name: Standard Blog
*/

get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );} ?>

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

							<?php endwhile; endif; ?>

								<section class="entry-content cf" itemprop="articleBody">

									
									<?php
										
										// Display blog posts on any page @ https://m0n.co/l
										$temp = $wp_query; $wp_query= null;
										$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged . '&cat=-8');
										while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

										<h3><?php the_title(); ?></h3>
										

								<?php
								    if (has_post_thumbnail( $post->ID ) ):
								        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
								?>
								        <img src="<?php echo $image[0]; ?>">  
								<?php endif; ?>


								<?php the_content(); ?>
								<hr />

										<?php endwhile; ?>

										<?php if ($paged > 1) { ?>

										<nav id="nav-posts">
											<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
											<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
										</nav>

										<?php } else { ?>

										<nav id="nav-posts">
											<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
										</nav>

										<?php } ?>

										<?php wp_reset_postdata(); ?>


									




								</section> <?php // end article section ?>

								

							</article>

							

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
