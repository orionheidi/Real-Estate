<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Estate
 */

get_header();
?>

    <br>

    <aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
    </div>

<?php

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php echo '<h2><a href="';
		the_permalink();
		echo '">';
		the_title();
		echo '</a></h2>';
		?>
        <hr>

        <img src="<?php the_field( 'image' ); ?>">
        <br>
        <p>subtitles:</p>
		<?php
		if ( get_field( 'subtitle' ) ) {
			?>
            <h3><?php the_field( 'subtitle' ); ?></h3><?php
		}//else{ 
		//	echo 'No subtitles';
		//}
		?>
        <p>locations - taxonomies:</p>
		<?php
		$terms = get_the_terms( $post->ID, 'locations' );
		if ( $terms && ! is_wp_error( $terms ) ) {
			foreach ( $terms as $term ) {
				$link = get_term_link( $term );
				echo '<a href="' . esc_url( $link ) . '">' . esc_attr( $term->name ) . '</a>, ';
			}
		} else {
			echo 'No taxonomy';
		}
		?>
        <p>types - taxonomies:</p>
		<?php
		$terms = get_the_terms( $post->ID, 'types' );
		if ( $terms && ! is_wp_error( $terms ) ) {
			foreach ( $terms as $term ) {
				$link = get_term_link( $term );
				echo '<a href="' . esc_url( $link ) . '">' . esc_attr( $term->name ) . '</a>, ';
			}
		} else {
			echo 'No taxonomy';
		}
		?>
        <div class="entry-content">
			<?php the_content(); ?>
        </div>
		<?php wp_reset_postdata(); ?>
	<?php endwhile; ?>
<?php endif; ?>
    </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();
