<!-- Featured section -->
@php($args = array('category_name'=>'Featured', 'posts_per_page'=>1, 'meta_query' => array(array('key' => '_thumbnail_id','compare' => 'EXISTS'))))
@php($my_query = new WP_Query($args))
@while ($my_query->have_posts()) @php($my_query->the_post())
	<div class="col-lg-4 col-12">
		<h1><a class="featured-title" href="{!! get_permalink() !!}">@php(the_title())</a></h1>
		<p class="post-desc">@php(the_excerpt())</p>
		<p class="post-author hidden-md-down">- @php(the_author())</p>
	</div>

	<div class="col-12 col-lg-5 max-img-height">
		<div class="img-container">
			{!! the_post_thumbnail('large', array('class' => 'img-fluid')) !!}
		</div>
	</div>
	<div class="col-12 col-lg-0 top20 hidden-lg-up">
		

			<p class="post-author">- @php(the_author())</p>
	
	</div>
	@php($first_post = get_the_ID())
@endwhile

<div class="col-lg-3 col-12">
	<div class="row">
		@php($inner_args = array('category_name'=>'Featured', 'posts_per_page'=>3, 'post__not_in'=>array($first_post)))
		@php($inner_my_query = new WP_Query($inner_args))
		@while ($inner_my_query->have_posts()) @php($inner_my_query->the_post())
			<div class="col-12">
				<a class="post-link" href="{!! get_permalink() !!}">
					<div class="sub-post col-12">
						<h3 class="post-title">@php(the_title())</h3>
						<p class="bottom-no-marg post-author">- @php(the_author())</p>
					</div>
				</a>
			</div>
		@endwhile
	</div>
</div>



