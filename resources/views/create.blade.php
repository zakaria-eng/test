@extends('master')
@section('content')

<h1>Post Create</h1>
<div class="row">
<div class="col-lg-8">
<form method="post" action="{{route('posts.store')}}">
@csrf
<div class="form-group">
<input type="text" class="form-control" name="titel" >
</div>

<div class="form-group">
<textarea class="form-control" rows="4" name="body" > 
</textarea>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Create"></div>
</form>
</div>
</div>
@endsection


