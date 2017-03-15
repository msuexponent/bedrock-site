<article @php(post_class())>
  	<header>
		<h1 class="entry-title">{{ get_the_title() }}</h1>
		@include('partials/entry-meta')
  	</header>
  	<div class="entry-content">
		@php(the_content())

		@if (get_post_gallery())
        	@php($gallery = get_post_gallery( get_the_ID(), false ))
	        <div id="media-carousel" class="carousel slide top10 bottom40" data-ride="carousel">
	        	<div class="carousel-inner" role="listbox">
		            @foreach( $gallery['src'] as $src ) : ?>
		                <div class="carousel-item">
    						<img class="img-fluid" src="{!! $src !!}"/>
    					</div>
		            @endforeach
				  	<a class="left carousel-control" href="#media-carousel" role="button" data-slide="prev">
				    	<span class="icon-prev" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>
				  	<a class="right carousel-control" href="#media-carousel" role="button" data-slide="next">
				    	<span class="icon-next" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
    	@endif
  	</div>
  	<footer>
		{!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  	</footer>
  	@php(comments_template('/templates/partials/comments.blade.php'))
</article>
