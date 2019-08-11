<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="container">
	<div class="wrap">

			<?php			get_template_part( 'loop', 'page' );			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
