@extends('layouts.base')

@section('content')
	<div class="content">
	  	<div class="col-12">
	  		<div class="row">
				@while(have_posts()) @php(the_post())
				    @include('partials.page-header')
				    @include('partials.content-page')
				@endwhile
			</div>
		</div>
	</div>
@endsection
