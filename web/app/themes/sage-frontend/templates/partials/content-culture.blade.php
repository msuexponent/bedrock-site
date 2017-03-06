<!-- Culture section -->
<div class="row top10">
	@php($args = array('category_name'=>'Culture', 'posts_per_page'=>1, 'meta_query' => array(array('key' => '_thumbnail_id','compare' => 'EXISTS'))))
	@php($my_query = new WP_Query($args))
	@while ($my_query->have_posts()) @php($my_query->the_post())

		<div class="col-md-6 col-12">
			<a class="post-link" href="{!! get_permalink() !!}">
				<div class="img-container sub-sec-max-img-height">
					{!! the_post_thumbnail('large', array('class' => 'img-fluid')) !!}
				</div>
				<h1 class="top10 post-title">{!! the_title() !!}</h1>
				<p class="post-desc">{!! the_excerpt() !!}</p>
			</a>
		</div>
		@php($first_post = get_the_ID())
	@endwhile

	<div class="col-md-6 col-12">
		@php($inner_args = array('category_name'=>'Culture', 'posts_per_page'=>4, 'post__not_in'=>array($first_post)))
		@php($inner_my_query = new WP_Query($inner_args))
		@while($inner_my_query->have_posts()) @php($inner_my_query->the_post())
		<a class="post-link" href="{!! get_permalink() !!}">
			<div class="sub-post col-sm-12">
				<h3 class="post-title">{!! the_title() !!}</h3>
				<p class="bottom-no-marg post-author">- @php(the_author())</p>
			</div>
		</a>
		@endwhile
	</div>
</div>