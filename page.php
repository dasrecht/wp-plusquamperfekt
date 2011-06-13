<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">
		  
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
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
