<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<div class="eintrag">
		<h2>Search Results</h2>
		</div>

		<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>
		
		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
