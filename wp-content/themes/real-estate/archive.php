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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h2>Archive page</h2>
			<?php
			$term_slug    = get_query_var( 'term' );
			$taxonomyName = get_query_var( 'taxonomy' );

			$the_query = new WP_Query( array(
				'post_type' => 'real_estates',
				'tax_query' => array(
					array(
						'taxonomy' => $taxonomyName,
						'field'    => 'slug',
						'terms'    => $term_slug,
					)
				),
			) );
			?>
            <ul>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <hr>
				<?php endwhile;
				wp_reset_query(); ?>
            </ul>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
