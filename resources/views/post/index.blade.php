@extends('master')

@section('content')
<button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('posts.create') }}">Add Category</a></button>
<div class="col-md-12">
    <h2>Add posts</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      {{-- <th scope="col">User ID</th>
      <th scope="col">Category ID</th> --}}
      <th scope="col">Title</th>
      <th scope="col">Content</th>
       <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($posts as $post)
       <th>{{ $post->id }}</th>
      <th>{{ $post->title }}</th>
      <th>{{ $post->content }}</th>
      <th>{{ $post->status == 1 ? 'Active' : 'Inactive' }}</th>
      <th>{{ $post->slug }}</th>
      <th>
          <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('posts.show', $post->id ) }}">Detail</a></button>
      </th>
    </tr><br>
        @endforeach
  </tbody> 
  {!! $posts->links() !!}
</table>
</div>

@endsection