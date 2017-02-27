<!-- Opinion section -->
<div class="row top10">
	@php($my_query = new WP_Query( 'category_name=Opinion&posts_per_page=1' ))
	@while ($my_query->have_posts()) @php($my_query->the_post())

		<div class="col-md-6 col-12">
			<a class="post-link" href="#">
				<div class="img-container sub-sec-max-img-height">
					<img class="img-fluid" alt="Responsive image" src="images/ausha-cole.jpg"/>
				</div>
				<h1 class="top10 post-title">@php(the_title())</h1>
				<p class="post-desc">@php(the_excerpt())</p>
			</a>
		</div>
	@endwhile

	<div class="col-md-6 col-12">
		@php($inner_my_query = new WP_Query( 'category_name=Opinion&posts_per_page=3' ))
		@while($inner_my_query->have_posts()) @php($inner_my_query->the_post())
		<a class="post-link" href="#">
			<div class="sub-post col-sm-12">
				<h3 class="post-title">@php(the_title())</h3>
				<p class="bottom-no-marg post-author">- @php(the_author())</p>
			</div>
		</a>
		@endwhile
	</div>
</div>
