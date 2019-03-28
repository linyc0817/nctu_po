<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="top-navbar-lang-switch">
        <span class="btn-lang-switch lang-switch-ch">中文</span>
        <span class="btn-lang-switch lang-switch-en">English</span>
    </div>
	<div class="form-group">
    <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php echo __('Search...'); ?>" name="s" id="s">
	</div>
</form>

