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

		  <div class="kommentarthingy"><?php comments_popup_link('0', '1 ', '%'); ?></div>

		  <div class='der-inhalt'>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
				<?php  the_content(); ?>
		  </div><!-- der inhalt -->

			<footer class="postmetadata versteckt">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
			</footer>
		</div> <!-- eintrag -->
		</article>
