<div class="col-12">
	<div class="row">
		<div @php(post_class())>
			<div class="col-12">
				<h1 class="entry-title">{{ get_the_title() }}</h1>
				@include('partials/entry-meta')
			</div>

	  		<div class="col-12">
				@php(the_content())
				{!! do_shortcode('[ssba]') !!}
			</div>

			@if (get_post_gallery())
				<p>Gallery Test</p>
				<div class="col-12">
		        	@php($gallery = get_post_gallery( get_the_ID(), false ))
			        <div id="gallery-carousel" class="carousel slide top10 bottom40" data-ride="carousel">
			        	<ol class="carousel-indicators">
			        		@php($i = 0)
			        		@foreach( $gallery['src'] as $src )
						    	<li data-target="#media-carousel" data-slide-to="@php($i++)" class="active"></li>
						    @endforeach
					  	</ol>
			        	<div class="carousel-inner active" role="listbox">
				            @foreach( $gallery['src'] as $src )
				                <div class="carousel-item active">
		    						 <img class="d-block img-fluid" src="{!! $src !!}" alt="First slide"/>
		    					</div>
				            @endforeach
				        </div>
					  	<a class="left carousel-control" href="#gallery-carousel" role="button" data-slide="prev">
					    	<span class="icon-prev" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="right carousel-control" href="#gallery-carousel" role="button" data-slide="next">
					    	<span class="icon-next" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			@endif

	    	<div class="col-12 top20">
		    	@php($categories = get_the_category())
		 		@php($tags = get_the_tags())

				@if (!empty( $categories))
						@foreach ($categories as $cat)
						<span><h4><span class="badge badge-default"><a class="gray" href="@php(get_category_link($categories))">
							{!! $cat->name !!}
						</a></span></h4></span>
					@endforeach
				@endif

				@if (!empty( $tags))
						<span>Tags</span>
						@foreach ($tags as $tag)
						<span><a href="@php(get_category_link($categories))">
							{!!  $tag->name !!},
						</a></span>
					@endforeach
				@endif
			</div>

	    	<div class="col-12 top20">
	  			@php(comments_template('/templates/partials/comments.blade.php'))
	  		</div>
  		</div>
	</div>
</div>
