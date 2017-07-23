<div class="col-6 col-sm-4 col-md-3 top40">
	<a class="post-link" href="{!! get_permalink() !!}">
		<div class="img-container sub-sec-max-img-height">
			{!! the_post_thumbnail('full', array('class' => 'img-fluid')) !!}
		</div>
		<h1 class="top10 post-title">{!! the_title() !!}</h1>
		<p class="post-desc">{!! the_excerpt() !!}</p>
	</a>
</div>
