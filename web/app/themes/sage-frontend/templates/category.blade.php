@extends('layouts.base')

	@section('content')

		<div class="content">
	  		<div class="col-12">
				<div class="row">
					@while(have_posts()) @php(the_post())
						@include ('partials.content-post')
					@endwhile
				</div>
			</div>
		</div>

		{!! get_the_posts_navigation() !!}
	@endsection