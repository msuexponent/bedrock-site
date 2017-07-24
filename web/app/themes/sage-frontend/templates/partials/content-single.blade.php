<div class="col-12">
	<div class="row">
		<div @php(post_class())>
			<div class="col-12">
				<h1 class="entry-title">{{ get_the_title() }}</h1>
				@include('partials/entry-meta')
			</div>

			<?php 
				$args = array(
					'post_parent' => $post->ID,
					'post_type'   => 'attachment', 
					'numberposts' => -1
				);
				$children = get_children( $args );
			?> 
			@if (!empty($children))
				
				<div class="col-12">
			        <div id="gallery-carousel" class="carousel slide top10 bottom40" data-ride="carousel">
			        	<ol class="carousel-indicators">
			        		@php($i = 0)
			        		@foreach( $children as $attachment_id => $attachment )
						    	<li data-target="#gallery-carousel" data-slide-to="{!! $i !!}" class="@if($i == 0) {!! 'active' !!} @endif"></li>
						    	@php($i++)
						    @endforeach
					  	</ol>
			        	<div class="carousel-inner" role="listbox">
			        		@php($j = 0)
				            @foreach( $children as $attachment_id => $attachment )
				                <div class="carousel-item @if($j == 0) {!! 'active' !!} @endif">
		    						 <img class="d-block img-fluid" src="{!! wp_get_attachment_url( $attachment_id, 'full' ) !!}" alt="First slide"/>
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

			<div class="col-12">
				@php(the_content())
			</div>

	    	<div class="col-12 top20">
	    		<div id="social-icons" class="bottom10">
	    			{!! do_shortcode('[ssba]') !!}
	    		</div>
	    		
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
					@php($tags_output = [])
					@foreach ($tags as $tag)
						@php($tags_output[] = '<span><a href="{!! get_tag_link($tag) !!}">' . $tag->name . '</a></span>')
					@endforeach
					{!! implode(", ", $tags_output) !!}
				@endif
			</div>

	    	<div class="col-12 top20">
	  			@php(comments_template('/templates/partials/comments.blade.php'))
	  		</div>
  		</div>
	</div>
</div>
