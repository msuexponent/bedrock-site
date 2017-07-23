@extends('layouts.base')

@section('content')
  	<div class="content pad-top40 pad-bottom40">
		<div class="col-12">
		  	<div class="row">
				<div class="col-12">

					<h2 class="sec-head">@include('partials.page-header')</h2>
			  		@if (!have_posts())
						<div class="alert alert-warning">
				  			{{  __('Sorry, no results were found.', 'sage') }}
						</div>
						{!! get_search_form(false) !!}
			  		@endif
				</div>
				@while(have_posts()) @php(the_post())
	  				@include('partials.content-search')
				@endwhile
		  	</div>
	  	</div>
  		{!! get_the_posts_navigation() !!}
  	</div>
@endsection
