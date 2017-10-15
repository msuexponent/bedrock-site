<!-- Footer navigation -->
<div class="navbar">
	<nav class="row-fluid navbar-toggleable-sm background-blue content dropup">
		<div class="collapse navbar-collapse" id="nav-drop">
			<div id="nav-cont">
				@if (has_nav_menu('primary_navigation'))
					{!! wp_nav_menu(['container' => false, 'theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'left-nav nav']) !!}
				@endif
				@if (has_nav_menu('top_right_navigation'))
					{!! wp_nav_menu(['container' => false, 'theme_location' => 'top_right_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav right-nav']) !!}
				@endif
			</div>
		</div>
	</nav>
</div>
