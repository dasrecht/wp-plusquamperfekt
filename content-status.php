<?php
/**
 * The template for displaying posts in the Status Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="eintrag">
			<div class='der-inhalt'>
			<h1 class="status-titel versteckt">Statusnachricht: <?php the_title(); ?></h1>
			<div class="status-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' )); ?></div>
			<div class="status-nachricht"><?php the_content(); ?></div>
			</div><!-- der inhalt -->
	<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( __( '<span class="leave-reply">Antworten...</span>', 'twentyeleven' ), __( '1', 'twentyeleven' ), __( '%', 'twentyeleven' ) ); ?>
			</div>
			<?php endif; ?>
			</div>

</article>
