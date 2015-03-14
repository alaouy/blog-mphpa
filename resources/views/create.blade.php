@extends('master')

@section('content')
<h2>Add new blog post</h2>
<form method="post" action="/post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
  </div>
  <div class="form-group">
  	<textarea class="form-control" name="body" rows="5" placeholder="Body"></textarea>
  </div>
  <button type="submit" class="btn btn-success" value="">Submit</button>
</form>
@stop