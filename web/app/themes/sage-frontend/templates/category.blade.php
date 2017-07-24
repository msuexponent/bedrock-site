@extends('layouts.base')

@section('content')

	<div class="content pad-top40 pad-bottom40">
  		<div class="col-12">
			<div class="row">
				@while(have_posts()) @php(the_post())
					@include ('partials.content-post')
				@endwhile
			</div>
		</div>

		<div class="col-12 pad-top40">
			<div class="row">
				<ul>
				@php($args = array('format' => 'page/%#%/'))
				{!! paginate_links($args) !!}
				</ul>
			</div>
		</div>
	</div>
	
@endsection