<form  method="get" action="<?php echo esc_url(home_url('/')) ?>" class="searchForm">
	<div class="ruby-search">
		<span class="ruby-search-submit"><input type="submit" value="" /><i class="fa-rb fa-search"></i></span>
		<span class="ruby-search-input"><input type="text" class="field" placeholder="<?php esc_html_e('Czego szukasz?', 'look') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php esc_attr_e('Search for:', 'look') ?>"/></span>
	</div>
</form>
