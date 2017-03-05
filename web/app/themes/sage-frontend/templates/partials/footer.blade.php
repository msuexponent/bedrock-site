<!-- Top navigation -->
<div class="navbar">
	<nav class="row-fluid nav navbar-toggleable-sm background-blue content">
		<div class="collapse navbar-collapse" id="nav-drop">
			@if (has_nav_menu('primary_navigation'))
				{!! wp_nav_menu(['container' => false, 'theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav left-nav col-xs-6 col-md-7 float-left']) !!}
			@endif
			@if (has_nav_menu('top_right_navigation'))
				{!! wp_nav_menu(['container' => false, 'theme_location' => 'top_right_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav right-nav float-right col-4 col-xl-3']) !!}
			@endif
		</div>
	</nav>
</div>
