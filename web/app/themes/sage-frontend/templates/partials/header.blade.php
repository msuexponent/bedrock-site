<div class="content">
	<!-- Header -->
	<div class="page-header row-fluid">

		<div class="col-sm-4 offset-sm-0 col-8 offset-2 float-left col-lg-3">
			<a href="<?php echo get_home_url(); ?>">
				<img class="img-fluid" src="{!! get_template_directory() !!}/assets/images/exponent-logo.png"/>
			</a>
		</div>

		<div class="col-12 col-md-6 float-right">
			<div class="row">
				<div class="social col-12 offset-sm-0 col-sm-12">
					<a href="" class="float-right btn btn-social-icon">
						<span class="fa fa-twitter"></span>
					</a>
					<a href="" class="float-right btn btn-social-icon">
						<span class="fa fa-facebook"></span>
					</a>
					<a href="" class="float-right btn btn-social-icon">
						<span class="fa fa-youtube"></span>
					</a>
					<a href="" class="float-right btn btn-social-icon">
						<span class="fa fa-instagram"></span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-10 col-sm-11 col-md-9 ml-md-auto">
					<form>
						<input type="text" class="form-control front-search " placeholder="search" value="<?php the_search_query(); ?>" name="s" id="s">
						<input type="submit" class="hidden-sm-up hidden-xs-down">
					</form>
				</div>
				<div class="col-2 col-sm-1 hidden-md-up float-md-right">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-drop" aria-controls="nav-drop" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
				</div>
			</div>
		</div>

		<!-- Clearfix row -->
		<div class="row-fluid clearfix"></div>

	</div>
</div>


<!-- Top navigation -->
<div class="row-fluid collapse navbar-toggleable-sm navbar" id="nav-drop">
	<div class="content background-blue hidden-sm-down">
		<nav class="dropdown">
			@if (has_nav_menu('primary_navigation'))
  				{!! wp_nav_menu(['container' => false, 'theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav left-nav col-xs-6 col-md-7 float-left']) !!}
			@endif
			@if (has_nav_menu('top_right_navigation'))
				{!! wp_nav_menu(['container' => false, 'theme_location' => 'top_right_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav right-nav col-sm-6 float-right']) !!}
			@endif
		</nav>
	</div>
</div>