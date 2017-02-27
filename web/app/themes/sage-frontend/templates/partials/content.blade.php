<!-- Featured section -->
@php($my_query = new WP_Query( 'category_name=Featured&posts_per_page=1' ))
@while ($my_query->have_posts()) @php($my_query->the_post())
	<div class="col-md-4 col-sm-6">
		<h1><a class="featured-title" href="#">@php(the_title())</a></h1>
		<p class="post-desc">@php(the_excerpt())</p>
		<p class="post-author">- @php(the_author())</p>
	</div>

	<div class="col-5 max-img-height">
		<div class="img-container">
			<img class="img-fluid" alt="Responsive image" src="@php(the_post_thumbnail('large'))"/>
		</div>
	</div>
@endwhile

<div class="col-md-3 col-sm-12">
	<div class="row">
		@php($inner_my_query = new WP_Query( 'category_name=Featured&posts_per_page=3' ))
		@while ($inner_my_query->have_posts()) @php($inner_my_query->the_post())
			<div class="col-12">
				<a class="post-link" href="#">
					<div class="sub-post">
						<h3 class="post-title position-abs-top">@php(the_title())</h3>
						<p class="bottom-no-marg post-author position-abs-bottom">- @php(the_author())</p>
					</div>
				</a>
			</div>
		@endwhile
	</div>
</div>



