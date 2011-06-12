<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="eintrag">
			<div class='der-inhalt'>

			<h1 class="entry-title"><?php the_title(); ?></h1>


				<?php the_content(); ?>
			</div><!-- der inhalt -->
			<footer class="postmetadata versteckt">

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
			<?php edit_post_link('Edit this entry','','.'); ?>

			</footer>

			</div>


		</article>
		<div class="eintrag comments">
			<?php  comments_template(); ?>
		</div>
	<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
