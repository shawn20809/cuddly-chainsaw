<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uppercase
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Looks like that wasn't right</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
					<img class="404-img" src="<?php bloginfo('template_directory');?>/assets/images/empty-pockets.jpg" alt="">

					<p>Would you like to try searching fo something else?</p>
					<?php
					get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
