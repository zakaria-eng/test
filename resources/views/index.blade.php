@extends('master')
@section('content')

<h1> All Post
<a href="{{route('posts.create')}}" class="btn btn-primary">Create New Post</a>
</h1>
<table class="table">
 <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">title</th>
      <th scope="col">continer</th>
      </tr>
</thead>
@if(isset($posts))
@foreach($posts as $post)
  <tbody>
    <tr>
    
      <td>{{$post->post_id }}</td>
      <td>{{$post->titel }}</td>
      <td>{{$post->body }}</td>
      <td><a href="{{route('posts.edit',$post->post_id)}}" class="btn btn-primary">Edit</a></td>
      <td>
      <form method="post" action="{{route('posts.destroy',$post->post_id)}}">
      @csrf
      @method('DELETE')
      <input type="submit" class="btn btn-danger" value="Delete">
      </form>
      
      </dt>
    </tr>
     </tbody>
     @endforeach
@endif

</table>
@endsection