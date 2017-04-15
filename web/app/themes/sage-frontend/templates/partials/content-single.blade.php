<div class="col-12">
	<div class="row">
		<div @php(post_class())>
			<div class="col-12">
				<h1 class="entry-title">{{ get_the_title() }}</h1>
				@include('partials/entry-meta')
			</div>

			@if ($gallery = get_post_gallery( get_the_ID(), false ))
				
				<div class="col-12">
					<p>Gallery Test</p>
			        <div id="gallery-carousel" class="carousel slide top10 bottom40" data-ride="carousel">
			        	<ol class="carousel-indicators">
			        		@php($i = 0)
			        		@foreach( $gallery['src'] as $src )
						    	<li data-target="#gallery-carousel" data-slide-to="{!! $i !!}" class="@if($i == 0) {!! 'active' !!} @endif"></li>
						    	@php($i++)
						    @endforeach
					  	</ol>
			        	<div class="carousel-inner" role="listbox">
			        		@php($j = 0)
				            @foreach( $gallery['src'] as $src )
				                <div class="carousel-item @if($j == 1) {!! 'active' !!} @endif">
		    						 <img class="d-block img-fluid" src="{!! $src !!}" alt="First slide"/>
		    					</div>
		    					@php($j++)
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
					<h4>
					@foreach ($categories as $cat)
						<span class="badge badge-default"><a class="gray" href="{!! get_category_link($cat) !!}">
							{!! $cat->name !!}
						</a></span>
					@endforeach
					</h4>
				@endif

				@if (!empty( $tags))
					<span><strong>Tags</strong></span>
					@foreach ($tags as $tag)
						<span><a href="{!! get_tag_link($tag) !!}">
							{!!  $tag->name !!}
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
