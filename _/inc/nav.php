<div class="navigation">
	<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>


<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

</div>

