<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="page clearfix">
		<div role="main" class="wrap">
			<div class="page-main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Страница не найдена.', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->
			</div>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>
