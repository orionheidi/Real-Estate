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
<img src="<?php the_field( 'image' ) ?>" alt="">
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
<hr>

<h4>Edit Real Estate:</h4>
<form action="" id="primaryPostForm" method="POST">
	<?php
	wp_nonce_field( 'update_action' . $post->id, 'update_nonce_field' );
	?>
    <fieldset>
        <p><label for="post_title">Title</label>
            <input type="text" id="post_title" name="post_title" value="<?php echo $post->post_title; ?>"/></p>
        <p><label for="subtitle">Subtitle</label>
            <input type="text" id="subtitle" name="subtitle" value="<?php echo get_field( 'subtitle' ); ?>"/></p>
    </fieldset>
    <br>
    <input type="hidden" name="submit" id="submit" value="true"/>
    <input type="hidden" value="<?php echo $post->ID ?>" name="post_id">
    <button type="submit" onclick="return redirect()"><?php _e( 'Update Post', 'framework' ) ?></button>
</form>
<br>
</main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
?>
