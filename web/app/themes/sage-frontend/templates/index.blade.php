@extends('layouts.base')

	@section('content')

	  	@if (!have_posts())
			<div class="alert alert-warning">
		  		{{ __('Sorry, no results were found.', 'sage') }}
			</div>
			{!! get_search_form(false) !!}
	  	@endif

  		<div class="content">
  			<div class="col-12">
				<div class="row">
		  			@if (is_front_page())
						<div class="col-12 top40">
			  				<h2 class="sec-head">featured</h2>
						</div>
						<div class="clearfix"></div>

						<div class="col-12 top10">
			  				<div class="row">

								@include ('partials.content')

			  				</div>
						</div>

						<div class="row-fluid clearfix"></div>
						
						<div class="col-sm-6 col-12">
			 				<div class="row">
								<div class="col-12 top40">
				  					<h2 class="sec-head">news</h2>
								</div>

								<div class="clearfix"></div>
								<div class="col-12">
				 
				 	 				@include ('partials.content-news')

								</div>

							</div>
						</div>

						<div class="col-sm-6 col-12">
			  				<div class="row">

								<div class="col-12 top40">
			  						<h2 class="sec-head">opinion</h2>
								</div>

								<div class="clearfix"></div>
								<div class="col-12">
			 
			  						@include ('partials.content-opinion')

								</div>

							</div>
						</div>

						<div class="col-sm-6 col-12">
			  				<div class="row">

								<div class="col-12 top40">
			  						<h2 class="sec-head">sports</h2>
								</div>

								<div class="clearfix"></div>
								<div class="col-12">
			 
			  						@include ('partials.content-sports')

								</div>

							</div>
						</div>
		 			@endif
				</div>
			</div>
  		</div>
  	{!! get_the_posts_navigation() !!}
@endsection
