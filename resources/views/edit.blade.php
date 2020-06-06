@extends('master')
@section('content')

<h1>welcome to page edit</h1>
<div class="row">
<div class="col-lg-8">
<form method="post" action="{{route('posts.update',$post->post_id)}}">
@csrf
@method('PUT')

<div class="form-group">
<input type="text" class="form-control" name="titel" value="{{$post->titel}}">
</div>

<div class="form-group">
<textarea class="form-control" rows="4" name="body" >{{$post->body}} </textarea>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Update"></div>
</form>
</div>
</div>

@endsection


