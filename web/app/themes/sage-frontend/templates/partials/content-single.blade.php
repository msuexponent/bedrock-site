<article @php(post_class())>
	<h1 class="entry-title">{{ get_the_title() }}</h1>
	@include('partials/entry-meta')
  	<div class="entry-content">
		@php(the_excerpt())

		@if (get_post_gallery())
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
	    						 <img class="d-block img-fluid" src="{!! $src !!}" alt="First slide" width="640" height="360"/>
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
  	</div>

  	@php(comments_template('/templates/partials/comments.blade.php'))
</article>
