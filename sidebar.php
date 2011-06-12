<div class="eintrag">
	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
</div>

<div id="sidebar">
<div class="inhalt">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
<div class="dp50">
	<div class="dp50">
		<h4>Suche</h4>
		<form method="get" id="searchform" action="<?php echo get_option('home'); ?>/">
			<input value="Suche" name="s" id="s" onblur="if (this.value == '')
			{this.value = 'Suche';}" onfocus="if (this.value == 'Suche')
			{this.value = '';}" type="text">
			<input id="searchsubmit" type="hidden">
		</form>

		<h4>Pages</h4>
		<ul>
		<?php wp_list_pages('title_li='); ?>
		</ul>

	</div>
	<div class="dp50">
		<h4>Kategorien</h4>
		<ul>
		<ul><?php wp_list_categories('hide_empty=1&use_desc_for_title=1&exclude=1&title_li='); ?></ul>
		</ul>
	</div>
</div>

<div class="dp50">
	<div class="dp50">
		<h4>Archives</h4>
		<ul>
		<?php wp_get_archives('type=monthly&limit=12'); ?>
		</ul>
	</div>
	<div class="dp50">
		<h4>Blogroll</h4>
		<ul>
		<?php get_links('-1', '<li>', '</li>', '', FALSE, 'name',FALSE);?>
		</ul>

		<h4>RSS Feeds</h4>
		<ul>
		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
		</ul>
	</div>
</div>
<?php endif; ?>
<div class="" style="clear:both;"></div>
