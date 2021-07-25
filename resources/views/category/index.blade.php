@extends('master')

@section('content')
<button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('categories.create') }}">Add Category</a></button>
<div class="col-md-12">
    <h2>Categories</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
       <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($categories as $categorie)
       <th>{{ $categorie->id }}</th>
      <th>{{ $categorie->name }}</th>
      <th>{{ $categorie->status == 1 ? 'Active' : 'Inactive' }}</th>
      <th>{{ $categorie->slug }}</th>
      <th>
          <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('categories.show', $categorie->id ) }}">Detail</a></button>
      </th>
    </tr><br>
        @endforeach
  </tbody> 
  {!! $categories->links() !!}
</table>
</div>

@endsection