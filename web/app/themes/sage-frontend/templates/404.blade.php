@extends('layouts.base')

@section('content')
  	<div class="content pad-top40 pad-bottom40">
  		<div class="col-12">
			@if (!have_posts())
				<div class="alert alert-warning">
  					{{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
				</div>
				{!! get_search_form(false) !!}
			@endif

			{!! get_the_posts_navigation() !!}
  		</div>
  	</div>
@endsection
