@extends('master')

@section('content')	
	<div class="col-md-12">
		<h2><a href="">{{ $post->title }}</a></h2>
	</div>
	<div class="col-md-12">
		<div class="panel panel-default">
  		<div class="panel-body">
				{{ $post->body }}
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="col-md-12">
		<h3>Comments : </h3>
	</div>
	<div class="col-md-12">
		@foreach ($post->comments as $comment)
			<div class="panel panel-default">
				<div class="panel-body">
					{{ $comment->content }}
				</div>
			</div>
		@endforeach
	</div>

	<div class="col-md-12">
		<div class="panel panel-default">
  		<div class="panel-body">
				<form method="post" action="{{ route('comment.store') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="post_id" value="{{ $post->id }}">
				  <div class="form-group">
				  	<textarea class="form-control" name="content" rows="2" placeholder="Your comment"></textarea>
				  </div>
				  <button type="submit" class="btn btn-success" value="">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop