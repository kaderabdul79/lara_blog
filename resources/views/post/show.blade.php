@extends('master')

@section('content')
{{-- <h2>{{ $post->id }}</h2>
<h2>{{ $post->name }}</h2>
<h2>{{ $post->slug }}</h2>
<h2>{{ $post->status }}</h2> --}}
<div class="col-md-12">
    <h2>posts</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">post Name</th>
      <th scope="col">Slug</th>
       <th scope="col">Status </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <th scope="col">{{ $post->id }}</th>
      <th scope="col">{{ $post->name }}</th>
      <th scope="col">{{ $post->slug }}</th>
       <th scope="col">{{ $post->status }}</th>
      <th>
          <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('posts.edit', $post->id ) }}">Edit</a></button>
          
      <div>
        <form action="{{ route('posts.delete', $post->id ) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-primary" class="text-dark">
            Delete</a>
          </button>
        </form>
      </div> 
      <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('posts.index') }}">Back To post</a></button>
      </th>
    </tr>
  </tbody>
</table>
</div>
@endsection