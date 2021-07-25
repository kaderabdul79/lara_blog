@extends('master')

@section('content')
{{-- <h2>{{ $category->id }}</h2>
<h2>{{ $category->name }}</h2>
<h2>{{ $category->slug }}</h2>
<h2>{{ $category->status }}</h2> --}}
<div class="col-md-12">
    <h2>Categories</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Slug</th>
       <th scope="col">Status </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <th scope="col">{{ $category->id }}</th>
      <th scope="col">{{ $category->name }}</th>
      <th scope="col">{{ $category->slug }}</th>
       <th scope="col">{{ $category->status }}</th>
      <th>
          <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('categories.edit', $category->id ) }}">Edit</a></button>
          
      <div>
        <form action="{{ route('categories.delete', $category->id ) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-primary" class="text-dark">
            Delete</a>
          </button>
        </form>
      </div> 
      <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('categories.index') }}">Back To Category</a></button>
      </th>
    </tr>
  </tbody>
</table>
</div>
@endsection