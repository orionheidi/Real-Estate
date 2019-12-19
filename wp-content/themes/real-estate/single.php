<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Real_Estate
 */

	get_header();

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	</div>
	<br>

	<button onclick="window.history.back()">Go Back</button>

		<h2><?php the_title(); ?></h2>	

<?php  the_content(); ?>
<?php
	get_sidebar();
	get_footer();
?>
