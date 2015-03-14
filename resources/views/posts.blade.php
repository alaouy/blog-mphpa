@extends('master')

@section('content')
	@foreach ($posts as $post)
		<div class="col-md-12">
			<h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
		</div>		
	@endforeach
@stop