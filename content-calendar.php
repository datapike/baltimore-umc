<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baltimore-umc
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content calendar-page">
		<?php
			the_content();

			
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->